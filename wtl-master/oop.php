<!DOCTYPE html>
<html>
    <head>
        <title>Object Oriented PHP</title>
    </head>
    <body>
       <?php 
           class User{
               public $name,$city,$email,$phoneno;
               
               function __construct($name=null,$city=null,$email=null,$phoneno=null){
                   $this->name=$name;
                   $this->city=$city;
                   $this->email=$email;
                   $this->phoneno=$phoneno;
               }        
               function setDetails($a,$b,$c=null,$d=null){
                   $this->name=$a;
                   $this->city=$b;
                   if($c!=null)
                    $this->email=$c;
                   if($d!=null)
                    $this->phoneno=$d;
               }
               function printDetails(){
                   echo "<br>Name is $this->name";
                   echo "<br>City is $this->city";
                   echo "<br>Email is $this->email";
                   echo "<br>Phone No. is $this->phoneno";
                   echo "<br>----------------------------<br>";
               }
           }
           $user1=new User('John Smith','London');
           $user2=new User('John Doe','Paris','johndoe@example.com','990999000');
           echo "\$user1 object<br>";
           $user1->printDetails();
           echo "\$user2 object<br>";
           $user2->printDetails();
           $user1->setDetails('John Nash', 'New York','john@example.com','999999999');
           echo "\$user1 after calling setDetails()<br>";
           $user1->printDetails();
           ?>
    </body>
</html>

