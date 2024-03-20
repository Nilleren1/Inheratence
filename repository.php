<?php
require_once 'users/Admin.php';
require_once 'users/Teacher.php';


$users = [
    new User('Jane', '1224547890', '123 Main St.', 'jane@hotmail.com', 'https://picsum.photos/200'),
    new User('John', '8234567890', '43 Second St.', 'john@gmail.com', 'https://picsum.photos/201'),
    new User('Balthazar', '1234567890', '3 Main St.', 'balth@yahoo.com', 'https://picsum.photos/202'),
];

$admins = [
    new Admin('Buzz', '1234567890', '58 Avenue Plaza', 'Super Admin', 'All Access', 'buzz@bu.com', 'https://picsum.photos/203'),
    new Admin('Elton', '1234364890', '297 Doghnut Street', 'Admin', 'Limited Access', 'Elton@el.com', 'https://picsum.photos/204'),
    new Admin('Henreich', '3384567890', '22 Street st.', 'Customer', 'Limited Access', 'Heinrich@hein.com', 'https://picsum.photos/205'),
];

$teachers = [
    new Teacher('Violet', '1234567890', '89 Main St.', 'Math', 'violet@vio.com', 'https://picsum.photos/197', 5),
    new Teacher('Kumar', '1234567890', '42 Second St.', 'Science', 'kumar@kum.com', 'https://picsum.photos/198', 10),
    new Teacher('Mikkel', '1234567898', '23 Main St.', 'English', 'Mikkel@mik.com', 'https://picsum.photos/199', 15),
];
