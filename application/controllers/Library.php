<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once(APPPATH.'models/entities/Books.php');
require_once(APPPATH.'models/entities/Logs.php');
require_once(APPPATH.'models/entities/User.php');
class Library extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->database();
        $this->load->library('Doctrine');
	}
	
	public function index()
	{
		$config = new \Doctrine\DBAL\Configuration();
		//..
		$connectionParams = array(
			'dbname' => 'library',
			'user' => 'root',
			'password' => '',
			'host' => 'localhost',
			'driver' => 'mysqli',
		);
		$conn = \Doctrine\DBAL\DriverManager::getConnection($connectionParams, $config);

		$queryBuilder = $conn->createQueryBuilder();

		// $sql = "SELECT * FROM `Books`";
		// $stmt = $conn->query($sql);
		// while ($row = $stmt->fetch()) {
		// 	echo $row['book_title']."<br>";
		// }
		//$this->load->view('library_details');
		//echo $this->doctrineBook();
		// echo $this->doctrineLogs();
		// echo $this->doctrineUser();
		
	}

	public function doctrineBook()
	{
		echo "<h1>Testing Book Doctrine</h1>";
		$entityManager = $this->doctrine->em;

		// insert the data
		// $booksAdd = new Books();
		// $booksAdd->setBookTitle("Titledemo");
		// $booksAdd->setBookAuthor("Authordemo");
		// $booksAdd->setBookPublication("Publication");
		// $booksAdd->setPublicationYear("2019");
		// $booksAdd->setQuntity("100");
		// $entityManager->persist($booksAdd);
		// $entityManager->flush();

		echo "<table>
		<tr>
			<th> Sr No</th>
			<th>Book Title</th>
			<th>Book Author</th>
			<th>Book Publication</th>
			<th>Publication Year</th>
			<th>Quntity</th>
		</tr>
				";
		
		try {
            // do Doctrine stuff
			$booksRepository = $entityManager->getRepository('Books');
			$booksRemove = $booksRepository->findBy(array('book_id' => '7'));
			$entityManager->remove($booksRemove);
			$entityManager->flush();
			//$books = $booksRepository->findAll();
			
            // foreach ($books as $book):
            //     echo sprintf("<tr style='text-align: center'>
			// 	<td style='border:1px solid silver;width: 100px;'> %s </td>
			// 	<td style='border:1px solid silver;width: 200px;'> %s </td>
			// 	<td style='border:1px solid silver;width: 200px;'> %s </td>
			// 	<td style='border:1px solid silver;width: 200px;'> %s </td>
			// 	<td style='border:1px solid silver;width: 200px;'> %s </td>
			// 	<td style='border:1px solid silver;width: 100px;'> %s </td>
			// 	</tr>", $book->getBookId(),$book->getBookTitle(),$book->getBookAuthor(),$book->getBookPublication(),$book->getPublicationYear(),$book->getQuntity());
            // endforeach;
        }
        catch(Exception $err){
             
            die($err->getMessage());
		}
		echo "</table>";
		return true; 
		
	}
	public function doctrineLogs()
	{
		echo "<h1>Testing Logs Doctrine</h1>";
		$entityManager = $this->doctrine->em;
		echo "<table>
		<tr>
			<th> Sr No</th>
			<th>User Id</th>
			<th>Book Id</th>
			<th>Issue Date</th>
			<th>Return Date</th>
			<th>Status</th>
		</tr>";
		
		try {
            // do Doctrine stuff
			$logsRepository = $entityManager->getRepository('logs');
			$logs = $logsRepository->findAll();
            //$logs = $logsRepository->findBy(array('status' => '0'));
            foreach ($logs as $log):
				echo sprintf("<tr style='text-align: center'>
				<td style='border:1px solid silver;width: 100px;'> %s </td>
				<td style='border:1px solid silver;width: 100px;'> %s </td>
				<td style='border:1px solid silver;width: 100px;'> %s </td>
				<td style='border:1px solid silver;width: 200px;'> %s </td>
				<td style='border:1px solid silver;width: 200px;'> %s </td>
				<td style='border:1px solid silver;width: 100px;'> %s </td>
				</tr>", $log->getId(),$log->getUserId(),$log->getBookId(),$log->getIssueDate(),$log->getReturnDate(),$log->getStatus());
            endforeach;
        }
        catch(Exception $err){
             
            die($err->getMessage());
		}
		echo "</table>";
		return true; 
		
	}

	public function doctrineUser()
	{
		echo "<h1>Testing User Doctrine</h1>";
		$entityManager = $this->doctrine->em;
		echo "<table>
		<tr>
			<th> Sr No</th>
			<th>Firstname</th>
			<th>Lastname</th>
			<th>Mobile</th>
			<th>Email</th>
			<th>Password</th>
			<th>Passwordcc</th>
			<th>Status</th>
		</tr>";
		
		try {
            // do Doctrine stuff
            $logsRepository = $entityManager->getRepository('User');
            $logs = $logsRepository->findAll();
            foreach ($logs as $log):
				echo sprintf("<tr style='text-align: center'>
				<td style='border:1px solid silver;width: 100px;'> %s </td>
				<td style='border:1px solid silver;width: 100px;'> %s </td>
				<td style='border:1px solid silver;width: 100px;'> %s </td>
				<td style='border:1px solid silver;width: 200px;'> %s </td>
				<td style='border:1px solid silver;width: 200px;'> %s </td>
				<td style='border:1px solid silver;width: 200px;'> %s </td>
				<td style='border:1px solid silver;width: 200px;'> %s </td>
				<td style='border:1px solid silver;width: 100px;'> %s </td>
				</tr>", $log->getUserId(),$log->getFirstname(),$log->getLastname(),$log->getMobile(),$log->getEmail(),$log->getPassword(),$log->getPasswordCC(),$log->getStatus());
            endforeach;
        }
        catch(Exception $err){
             
            die($err->getMessage());
		}
		echo "</table>";
		return true; 
		
	}
}
