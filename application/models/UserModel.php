<?php

class UserModel extends CI_Model {

    //check for the register user
    function register($User_data){
        $query =  $this->db->insert('User',$User_data);
        return $query;
    }
    //check for the login user
    function login($User_data){
        $query =  $this->db->get_where('User',$User_data);
        foreach ($query->result() as $row)
        {
            return $row;
        }
    }

    // view user details
    function viewUser(){
        $user = $this->db->get('User');
        return $user->result_array();
    }

    // for retriving the User
    function getUser(){
        $user = $this->db->get('User');
        return $user->result_array();
    }

    // getting perticular user data
    function getUserData($user_id)
    {
        $this->db->where('user_id',$user_id);
        $this->db->from('User');
        $user = $this->db->get();
        return $user->result_array();
    }

    //getting users logs
    function getLogs($user_id)
    {
        $this->db->where('user_id',$user_id);
        $this->db->from('logs');
        $this->db->join('Books','Books.book_id = logs.book_id');
        $this->db->order_by("id", "desc");
        $user = $this->db->get();
        return $user->result_array();
    }

    //getting users logs
    function getLogsTotal()
    {
        $this->db->order_by("id", "desc");
        $query = $this->db->get('logs');
        $data = array();        
        foreach ($query->result() as $row)
        {
            $this->db->where('user_id',$row->user_id);
            $this->db->from('User');
            $user = $this->db->get();
            $result_user = $user->result_array();
            $this->db->where('book_id',$row->book_id);
            $this->db->from('Books');
            $book = $this->db->get();
            $result_book = $book->result_array();
            array_push($data,array("id"=>$row->id,"idate"=>$row->idate,"rdate"=>$row->rdate,"fullname"=>$result_user[0]['firstname']." ".$result_user[0]['lastname'],"book_title"=>$result_book[0]['book_title'],"book_author"=>$result_book[0]['book_author'],"bstatus"=>$row->bstatus));
        }
        return $data;
    }

    // for updating the User
    function update($user)
    {
        $data = array(
            'firstname' => $user['firstname'],
            'lastname' => $user['lastname'],
            'mobile' => $user['mobile'],
            'email' => $user['email']
        );
        $id = $user['user_id'];
        $this->db->where('user_id',$id);
        $result = $this->db->update('User',$data);
        return $result;
    }

    //change status
    function changeStatus($user){
        echo $user['status'];
        if($user['status'] == 'Active')
        {
            $data = array(
                'status' => '1',
            );
        }else{
            $data = array(
                'status' => '0',
            );
        }
        $id = $user['user_id'];
        $this->db->where('user_id',$id);
        $result = $this->db->update('User',$data);
        return $result;
    }

    //change status
    function deleteUser($user){
        $id = $user['user_id'];
        $this->db->where('user_id',$id);
        $result = $this->db->delete('User');
        return $result;
    }
}
