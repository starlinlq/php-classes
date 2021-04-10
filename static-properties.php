
<?php
class User
{
    //public static properties only exists once for class
    private static $nextId = 0;
    private $myId;

    public static function printId()
    {
        return "User id is: " . self::$nextId;
    }
}


/* $user = new User();
$user->myId = 10; */
/* echo $user->myId; */
// with the :: we access a property without creating an instance;
echo User::printId();

?>
