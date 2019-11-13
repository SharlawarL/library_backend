<?php
// src/Books.php

use Doctrine\ORM\Mapping as ORM;
/**
 * Notes
 * @ORM\Entity
 * @ORM\Table(name="Books")
 */
class Books
{
    /** 
     * @ORM\Id
     * @ORM\Column(name = "book_id", type="integer")
     * @ORM\GeneratedValue
     */
    protected $book_id;
    /**
     * @ORM\Column(name = "book_title")
     * @ORM\GeneratedValue
     */
    protected $book_title;
    /** 
     * @ORM\Column(name = "book_author") 
     */
    protected $book_author;
    /** 
     * @ORM\Column(name = "book_publication") 
     */
    protected $book_publication;
    /** 
     * @ORM\Column(name = "publication_year") 
     */
    protected $publication_year;
    /** 
     * @ORM\Column(name = "quntity") 
     */
    protected $quntity;
    
     /**
     * Set user_id
     *
     * @param string $book_id
     */
    public function setBookId($book_id)
    {
        $this->book_id = $book_id;
    }
     /**
     * Get Note id
     *
     * @return integer $book_id
     */
    public function getBookId()
    {
        return $this->book_id;
    }

     /**
     * Set user_id
     *
     * @param string $book_title
     */
    public function setBookTitle($book_title)
    {
        $this->book_title = $book_title;
    }

     /**
     * Get User id
     *
     * @return integer $user_id
     */
    public function getBookTitle()
    {
        return $this->book_title;
    }

     /**
     * Set book_author
     *
     * @param string $book_author
     */
    public function setBookAuthor($book_author)
    {
        $this->book_author = $book_author;
    }

     /**
     * Get book_author
     *
     * @return integer $book_author
     */
    public function getBookAuthor()
    {
        return $this->book_author;
    }

     /**
     * Set book_publication
     *
     * @param string $book_publication
     */
    public function setBookPublication($book_publication)
    {
        $this->book_publication = $book_publication;
    }

     /**
     * Get book_publication
     *
     * @return integer $book_publication
     */
    public function getBookPublication()
    {
        return $this->book_publication;
    }

     /**
     * Set publication_year
     *
     * @param string $publication_year
     */
    public function setPublicationYear($publication_year)
    {
        $this->publication_year = $publication_year;
    }

     /**
     * Get publication_year
     *
     * @return integer $publication_year
     */
    public function getPublicationYear()
    {
        return $this->publication_year;
    }

     /**
     * Set quntity
     *
     * @param string $quntity
     */
    public function setQuntity($quntity)
    {
        $this->quntity = $quntity;
    }

     /**
     * Get quntity
     *
     * @return integer $quntity
     */
    public function getQuntity()
    {
        return $this->quntity;
    }
}