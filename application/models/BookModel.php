<?php
class BookModel extends CI_Model {

    //check for the register user
    function addBook($User_data){
        $query =  $this->db->insert('Books',$User_data);
        return $query;
    }

    // for retriving the notes
    function getBook(){
        $bookQuery = $this->db->get('Books');
        //print_r($bookQuery->result());
        $bookData = array();        
        foreach ($bookQuery->result() as $row)
        {
            $logsQuery = $this->db->query("SELECT `book_id`,COUNT(*) FROM `logs` where `book_id`='".$row->book_id."'");
            $logs = $logsQuery->result();
            $logsData = json_decode(json_encode($logs),true);
            array_push($bookData,array("book_id"=>$row->book_id,"book_title"=>$row->book_title,"book_author"=>$row->book_author,"book_publication"=>$row->book_publication,"publication_year"=>$row->publication_year,"quntity"=>$row->quntity,"issue"=>$logsData[0]['COUNT(*)']));
        }
        return $bookData;
    }

    // for updating the Book
    function updateBook($Notes_data)
    {
        $data = array(
            'book_title' => $Notes_data['book_title'],
            'book_author' => $Notes_data['book_author'],
            'book_publication' => $Notes_data['book_publication'],
            'publication_year' => $Notes_data['publication_year'],
            'quntity' => $Notes_data['quntity']
        );
        $id = $Notes_data['book_id'];
        $this->db->where('book_id',$id);
        $result = $this->db->update('Books',$data);
        return $result;
    }

    //check for the issue book
    function issueBook($logsData){
        date_default_timezone_set('Asia/Kolkata');
        $current_date = date("m/d/Y, H:i");
        $logsData['idate']=$current_date;
        $logsData['bstatus']=0;
        $query =  $this->db->insert('logs',$logsData);
        return $query;
    }
    //check for the return book
    function returnBook($logsData){
        date_default_timezone_set('Asia/Kolkata');
        $current_date = date("m/d/Y, H:i");
        $data = array(
            'rdate' => $current_date,
            'bstatus'=>1
        );
        $id = $logsData['id'];
        $this->db->where('id',$id);
        $query =  $this->db->update('logs',$data);
        return $query;
    }

}