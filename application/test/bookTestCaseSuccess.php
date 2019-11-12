<?php
require('../../vendor/autoload.php');

use PHPUnit\Framework\TestCase;

class BookTestCaseSuccess extends TestCase
{
    protected $client;
    protected function setUp()
    {
        $this->client = new GuzzleHttp\Client([
            'base_uri' => 'http://localhost/library/index.php/BookApi/'
        ]);
    }
    //test case for RegisterUser
	public function testAddBook()
	{
        //send post request to the login API
        $response = $this->client->post('addBook',
        [
            'form_params' => [
                'book_title' =>'Ajax',
                'book_author' => 'Sagar',
                'book_publication' => 'Bridgelabz',
                'publication_year' => '2015',
                'quntity' => '75'
            ]
        ]);
        $data = json_decode($response->getBody(), true);
        // response success message will be check
        print_r($data);
        $this->assertEquals(true, $data['success']);
    }

    //test case for Login user
	public function testGetBooks()
	{
        //send post request to the login API
        $response = $this->client->post('getBook');
        $data = json_decode($response->getBody(), true);
        // response success message will be check
        print_r($data[3]['book_id']);
        $this->assertEquals(4, $data['3']['book_id']);
    }
}