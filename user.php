<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of user
 *
 * @author Ŧคђค๔๓เгzค
 */
class user {
    private $userName;
    private $password;
    private $FirstName;
    private $lastName;
    private $email;
    
    
    
    //getters
    public function getUserName(){
        return $userName;
    }
    public function getPassword(){
        return $password;
    }
    public function getFirstName(){
        return $FirstName;
    }
    public function getLastName(){
        return $lastName;
    }
    public function getEmail(){
        return $email;
    }
    
    //setters
    public function setUserName($userN){
        $this->userName = $userN;
    }
    public function setPassword($pass){
        $this->password = $pass;
    }
    
    public function setFirstName($first){
        $this->FirstName = $first;
    }
    public  function setLastName($last){
    $this->lastName = $last;
    
    }
    public function setEmail($email){
        $this->email = $email;
    }
    
}
