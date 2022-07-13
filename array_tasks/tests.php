<?php
//class User {
//    public $firstName;
//    public $lastName;
//
//    public function hello(){
//        return "hello";
//    }
//}
//
//$user1 = new User();
//$user1->firstName = "John";
//$user1->lastName = "Doe";
//
//$hello = $user1->hello();
//
//$user2 = new User();
//$user2->firstName = "Jane";
//$user2->lastName = " Doe";
//
//echo $hello . " " . $user1->firstName . " " .$user1->lastName .   " "  . '<br>' ."and " . '<br>' . $user2->firstName . " " . $user2->lastName;


//
//class User{
//    public $firstName  = "pe6o";
//    public $lastName = "mimi";
//
//    public function hello(){
//        return "hello, " . $this->firstName . " " . $this->lastName;
//    }
//}
//$user1 = new User();
//
//$user1->firstName = "Jonnie";
//$user1->lastName = "Roe";
//echo $user1->hello();





//class User {
//    public $firstName;
//    public $lastName;
//    public $text  = " ";
//
//    public function hello(){
//        $this->text .= "hello, " . $this->firstName;
//        return $this;
//    }
//    public function register(){
//        $this->text .= ">>registered";
//        return $this;
//    }
//    public function email(){
//        $this->text .= ">>email sent";
//        return $this;
//
//    }
//}
//$user1 = new User();
//$user1->firstName = "Jane";
//$a =$user1->hello();
//var_dump($a);
//
//$user1->hello()->register()->email();
//
//echo $user1->text;





//class User {
//    private $firstName;
//
//    public function setFirstName($str){
//        $this->firstName = $str;
//    }
//    public function getFirstName(){
//        return $this->firstName;
//    }
//}
//
//$user1 = new User();
//$user1 ->setFirstName("Joe");
//echo $user1->getFirstName();
//


// Parent class
//abstract class Car {
//    public $name;
//    public function __construct($name) {
//        $this->name = $name;
//    }
//    abstract public function intro() : string;
//}

// Child classes
//class Audi extends Car {
//    public function intro() : string {
//        return "Choose German quality! I'm an $this->name!";
//    }
//}
//
//class Volvo extends Car {
//    public function intro() : string {
//        return "Proud to be Swedish! I'm a $this->name!";
//    }
//}
//
//class Citroen extends Car {
//    public function intro() : string {
//        return "French extravagance! I'm a $this->name!";
//    }
//}
//
//// Create objects from the child classes
//$audi = new audi("Audi");
//echo $audi->intro();
//echo "<br>";
//
//$volvo = new volvo("Volvo");
//echo $volvo->intro();
//echo "<br>";
//
//$citroen = new citroen("Citroen");
//echo $citroen->intro();



//class User {
//    private $firstName;
//    private $lastName;
//
//    public function __construct($firstName, $lastName){
//        $this->firstName = $firstName;
//        $this->lastName = $lastName;
//
//    }
//    public function getFullName(){
//        return $this->firstName . " " . $this->lastName;
//    }
//}
//
//$user1 = new User("John", "Doe");
//echo $user1 -> getFullName();

//
//class User{
//    public $firstName;
//    public $lastName;
//
//    public function hello(){
//        return "hello";
//    }
//}
//$user1 = new User();
//$user1->firstName = "John";
//$user1->lastName ="Doe";
//
//echo $user1->firstName . " " . $user1->lastName;
//
//
//class User{
//    public $firstName;
//    public $lastName;
//
//    public function hello(){
//        return "hello, " . $this -> firstName . " " .$this->lastName;
//    }
//}
//$user1 = new User();
//$user1->firstName = "Johnie";
//$user1->lastName = "Roe";
//
//echo $user1 -> hello();







//
//class User {
//     public $firstName;
//
//     public function hello(){
//    echo "hello, " . $this->firstName;
//    return $this;
//}
//     public function register(){
//    echo ">>register";
//         return $this;
//     }
//     public function email(){
//    echo ">>email sent";
//}
// }
// $user1 = new User();
// $user1 -> firstName = "Jane";
// $user1 -> hello()->register()->email();




//class User{
//private $firstName;
//
//public function setFirstName($str){
//    return $this->firstName = $str;
//}
//public function getFirstName(){
//    return $this ->firstName;
//}
//}
//$user1 = new User();
//$user1->setFirstName("Yuliyan The King");
//echo $user1->getFirstName();








//
//
//class User {
//    private $firstName;
//    private $lastName;
//
//    public function __construct($firstName, $lastName){
//        $this->firstName = $firstName;
//        $this-> lastName= $lastName;
//    }
//    public function getFullName(){
//        return $this->firstName . " " . $this-> lastName;
//    }
//}
//$user1 = new User("YULIYAN DIMITROV IS THE BEST", "FOOTBALL PLAYER EVER PLAYED THIS GAME . FUCK MESSI AND RONALDO");
// echo $user1->getFullName();








//class User {
//
//    protected $username;
//
//    public function setUsername($name)
//    {
//        $this -> username = $name;
//    }
//}
//
//
//class Admin extends User {
//    public function expressYourRole()
//    {
//        return strtolower(__CLASS__);
//    }
//
//    public function sayHello()
//    {
//        return "Hello admin, " . $this -> username;
//    }
//}
//
//
//$admin1 = new Admin();
//$admin1 -> setUsername("Balthazar");
//echo $admin1 -> sayHello();




//class User{
//    private $username;
//
//    public function setUsername($name){
//        $this->username = $name;
//    }
//    public function getUsername(){
//        return $this->username;
//    }
//}
//class Admin extends User{
//    public function expressYourRole(){
//        return strtolower(__CLASS__);
//    }
//    public function sayHello(){
//        return "hello admin, " . $this->getUsername();
//    }
//}
//
//$admin1 = new Admin();
//$admin1 -> setUsername("YULIAN");
//echo $admin1-> sayHello();





?>