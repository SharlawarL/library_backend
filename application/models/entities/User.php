<?php
// src/User.php

use Doctrine\ORM\Mapping as ORM;
/**
 * Notes
 * @ORM\Entity
 * @ORM\Table(name="User")
 */
class User
{
    /** 
     * @ORM\Id
     * @ORM\Column(name = "user_id", type="integer")
     * @ORM\GeneratedValue
     */
    protected $user_id;
    /**
     * @ORM\Column(name = "firstname")
     * @ORM\GeneratedValue
     */
    protected $firstname;
    /** 
     * @ORM\Column(name = "lastname") 
     */
    protected $lastname;
    /** 
     * @ORM\Column(name = "mobile") 
     */
    protected $mobile;
    /** 
     * @ORM\Column(name = "email") 
     */
    protected $email;
    /** 
     * @ORM\Column(name = "password") 
     */
    protected $password;
    /** 
     * @ORM\Column(name = "passwordcc") 
     */
    protected $passwordcc;
    /** 
     * @ORM\Column(name = "status") 
     */
    protected $status;
    
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
     * Set firstname
     *
     * @param string $firstname
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }
     /**
     * Get firstname
     *
     * @return integer $firstname
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

     /**
     * Set lastname
     *
     * @param string $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

     /**
     * Get lastname
     *
     * @return integer $lastname
     */
    public function getLastname()
    {
        return $this->lastname;
    }

     /**
     * Set mobile
     *
     * @param string $mobile
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
    }

     /**
     * Get mobile
     *
     * @return integer $mobile
     */
    public function getMobile()
    {
        return $this->mobile;
    }

     /**
     * Set email
     *
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

     /**
     * Get email
     *
     * @return integer $email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set password
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

     /**
     * Get password
     *
     * @return integer $password
     */
    public function getPassword()
    {
        return $this->password;
    }
    /**
     * Set passwordcc
     *
     * @param string $passwordcc
     */
    public function setPasswordCC($passwordcc)
    {
        $this->passwordcc = $passwordcc;
    }

     /**
     * Get passwordcc
     *
     * @return integer $passwordcc
     */
    public function getPasswordCC()
    {
        return $this->passwordcc;
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