<?php
// src/Logs.php

use Doctrine\ORM\Mapping as ORM;
/**
 * Notes
 * @ORM\Entity
 * @ORM\Table(name="logs")
 */
class logs
{
    /** 
     * @ORM\Id
     * @ORM\Column(name = "id", type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;
    /**
     * @ORM\Column(name = "user_id")
     * @ORM\GeneratedValue
     */
    protected $user_id;
    /** 
     * @ORM\Column(name = "book_id") 
     */
    protected $book_id;
    /** 
     * @ORM\Column(name = "idate") 
     */
    protected $idate;
    /** 
     * @ORM\Column(name = "rdate") 
     */
    protected $rdate;
    /** 
     * @ORM\Column(name = "bstatus") 
     */
    protected $status;
    

    /**
     * Set id
     *
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }
     /**
     * Get id
     *
     * @return integer $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set user_id
     *
     * @param string $user_id
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
    }
     /**
     * Get Note id
     *
     * @return integer $book_id
     */
    public function getUserId()
    {
        return $this->user_id;
    }

     /**
     * Set book_id
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
     * Set idate
     *
     * @param string $book_title
     */
    public function setIssueDate($idate)
    {
        $this->idate = $idate;
    }

     /**
     * Get idate id
     *
     * @return integer $idate
     */
    public function getIssueDate()
    {
        return $this->idate;
    }

     /**
     * Set rdate
     *
     * @param string $rdate
     */
    public function setReturnDate($rdate)
    {
        $this->rdate = $rdate;
    }

     /**
     * Get rdate
     *
     * @return integer $rdate
     */
    public function getReturnDate()
    {
        return $this->rdate;
    }

     /**
     * Set status
     *
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

     /**
     * Get status
     *
     * @return integer $status
     */
    public function getStatus()
    {
        return $this->status;
    }
}