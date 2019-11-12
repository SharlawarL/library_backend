<?php
require('../../vendor/autoload.php');

use PHPUnit\Framework\TestCase;

class User_test extends TestCase
{
    protected $client;
    protected function setUp()
    {
        $this->client = new GuzzleHttp\Client([
            'base_uri' => 'http://localhost/library/index.php/UserApi/'
        ]);
    }
    //test case for RegisterUser
	public function testAddUser()
	{
        //send post request to the login API
        $response = $this->client->post('addUser',
        [
            'form_params' => [
                'firstname' =>'lalit',
                'lastname' => 'sharlawar',
                'mobile' => '9657256675',
                'email' => 'clickytl@gmail.com',
                'password' => '123123123',
                'passwordcc' => '123123123'
            ]
        ]);
        $data = json_decode($response->getBody(), true);
        // response success message will be check
        print_r($data);
        $this->assertEquals(true, $data['success']);
    }
}