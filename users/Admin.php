<?php
require_once 'User.php';
class Admin extends User implements IUser
{
    private string $role;
    private string $permissions;

    public function __construct($username, $Phone, $Address, $role, $permissions, $Email, $image)
    {
        parent::__construct($username, $Phone, $Address, $Email, $image);
        $this->role = $role;
        $this->permissions = $permissions;
    }

    public function __toString()
    {
        return "Admin: [Role: $this->role, Permissions: $this->permissions]";
    }
}