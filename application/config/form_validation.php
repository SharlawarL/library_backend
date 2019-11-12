<?php

$config = array(
    'login' => array(
        array(
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'required|valid_email'
        ),
        array(
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required'
        )
    ),
    'ragister' => array(
        array(
                'field' => 'firstname',
                'label' => 'Firstname',
                'rules' => 'required|min_length[3]|alpha'
        ),
        array(
                'field' => 'lastname',
                'label' => 'Lastname',
                'rules' => 'required|min_length[3]|alpha'
        ),
        array(
                'field' => 'mobile',
                'label' => 'Mobile number',
                'rules' => 'required|min_length[10]|max_length[10]'
        ),
        array(
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'required|valid_email'
        ),
        array(
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required|min_length[8]|alpha_numeric'
        ),
        array(
                'field' => 'passwordcc',
                'label' => 'Conform Password',
                'rules' => 'required|matches[password]'
        )
        ),
        'forgot' => array(
                array(
                    'field' => 'email',
                    'label' => 'Email',
                    'rules' => 'required|valid_email'
                )
        ),
        'Reset' => array(
                array(
                        'field' => 'password',
                        'label' => 'Password',
                        'rules' => 'required|min_length[8]|alpha_numeric'
                ),
                array(
                        'field' => 'passwordcc',
                        'label' => 'Conform Password',
                        'rules' => 'required|matches[password]'
                )
        ),
        'issueBook' => array(
                array(
                        'field' => 'user_id',
                        'label' => 'User Id',
                        'rules' => 'required'
                ),
                array(
                        'field' => 'book_id',
                        'label' => 'Book Id',
                        'rules' => 'required'
                )
        ),
        'addBook' => array(
                array(
                        'field' => 'book_title',
                        'label' => 'Title',
                        'rules' => 'required'
                ),
                array(
                        'field' => 'book_author',
                        'label' => 'Author',
                        'rules' => 'required'
                )
                ,
                array(
                        'field' => 'book_publication',
                        'label' => 'Publication',
                        'rules' => 'required'
                )
                ,
                array(
                        'field' => 'publication_year',
                        'label' => 'Publicayion Year',
                        'rules' => 'required'
                )
                ,
                array(
                        'field' => 'quntity',
                        'label' => 'Quntity',
                        'rules' => 'required'
                )
        ),
);