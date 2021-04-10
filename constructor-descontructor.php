<?php

class User2
{
    public $name;
    public $age;
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
    //the descontructor clean memory and close conections
    public function __destruct()
    {
    }

    public function __toString()
    {
        return "Name: " . $this->name;
    }

    public function sayHi()
    {
        echo "hello" . $this->name;
    }
}

$user = new User2("starlin", 25);

echo $user->name . $user->age;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>