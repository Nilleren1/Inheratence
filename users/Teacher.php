<?php
require_once 'User.php';
class Teacher extends User implements IUser
{
    private $subject;
    private $salary;
    private $experience;

    public function __construct($username, $Phone, $Address, $subject, $Email, $image, $experience)
    {
        parent::__construct($username, $Phone, $Address, $Email, $image);
        $this->subject = $subject;
        $this->experience = $experience;
        $this->calculateSalary();
    }

    private function calculateSalary()
    {
        // Example calculation based on experience
        $baseSalary = 30000; // Base salary
        $salaryPerYear = 2000; // Additional salary per year of experience
        $this->salary = $baseSalary + ($this->experience * $salaryPerYear);
    }

    public function __toString()
    {
        return "Teacher: [Subject: $this->subject, Salary: $this->salary $ per Year]";
    }
}
