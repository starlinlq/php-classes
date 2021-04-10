<?php
//define class
// acces modifiers = Public, Private, Protected //
class User3
{
    //properties
    public $name;
    private $lastName;
    public $email;

    //methods
    private function hey()
    {
        echo "hello";
    }
    public function sayHello()
    {
        return "hello" . $this->name;
    }
    public function setName()
    {
    }
    public function welcome()
    {
        echo "hello $this->name";
    }
}
$user = new User();
$user->name = "starlin";
$user->email = "javier leon";



class Manager extends User
{
    public $lastName = "leon";
}

class Admin extends User
{
}

$myManager = new Manager();
echo "this is " . $myManager->name . $myManager->lastName . "<br/>";

//instantiate user object from "User class"




//   ///

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>s

</body>

</html>