<?php
//getter and setter
class User4
{
    private $name;
    private $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    //Magic method for setter and getter //
    //__get
    public function __get($property)
    {
        //property_exists takes the class and the argument name in this case $property
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }
    //set
    public function __set($property, $value)
    {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }
        return $this;
    }
}
$user = new User("Dary", 25);
$user->__set('name', 'Jhon');
echo $user->__get('name');

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