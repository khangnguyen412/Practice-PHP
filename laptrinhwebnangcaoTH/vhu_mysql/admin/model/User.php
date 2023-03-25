<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author DELL
 */
class User {

    //put your code here
    private $username;
    private $email;
    private $password;
    private $sex;
    private $prefer;
    private $role;
    private $avatar;

    public function __construct($uname,$email,$pass,$sex,$prefer,$avatar,$role) {
        $this->username = $uname;
        $this->email = $email;
        $this->password = $pass;
        $this->sex = $sex;
        $this->prefer = $prefer;
        $this->avatar = $avatar;
        $this->role = $role;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getSex() {
        return $this->sex;
    }

    public function getPrefer() {
        return $this->prefer;
    }

    public function getRole() {
        return $this->role;
    }

    public function getAvatar() {
        return $this->avatar;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function setSex($sex) {
        $this->sex = $sex;
    }

    public function setPrefer($prefer) {
        $this->prefer = $prefer;
    }

    public function setRole($role) {
        $this->role = $role;
    }

    public function setAvatar($avatar) {
        $this->avatar = $avatar;
    }

}
