<?php
require_once 'IUsers.php';
class User implements IUser
{
    // Class properties and methods go here
    protected $username;
    protected $password;
    protected $email;
    protected $phone;
    protected $address;
    protected $imageSrc;

    public function __construct($username, $Phone, $Address, $Email, $image)
    {
        $this->email = $Email;
        $this->username = $username;
        $this->phone = $Phone;
        $this->address = $Address;
        $this->imageSrc = $image;
    }

    public function __toString()
    {
        return "User: [Username: $this->username, Email: $this->email, Phone: $this->phone, Address: $this->address]";
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getImageSrc()
    {
        return $this->imageSrc;
    }
}
