<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<?php
$fname  = $lname = $email =$pass =$age="";
$L1=$L2=$L3="";
$validatecheckbox = "";


if (empty($_REQUEST["fname"]) || (strlen($_REQUEST["fname"])<5))
{
  echo "enter first name <br> ";// code...
} else if (!preg_match("/^[a-zA-Z-' ]*$/",$fname)) {
  echo "Only letters and white space allowed <br>";
} else
 {
   echo "<br>";
  echo "your first name is :" . $_REQUEST ["fname"];
}




if (empty($_REQUEST["lname"]) || (strlen($_REQUEST["lname"])<5)) {
  echo "enter last name <br>";// code...
} else if (!preg_match("/^[a-zA-Z-' ]*$/",$lname)) {
  echo "Only letters and white space allowed <br>";
}else
 {
   echo "<br>";
  echo "your last name is :" .$_REQUEST ["lname"];
}


$email = $_POST['email'];;
   // Validate email
   if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo("$email is a valid email address");
   }
   else{
      echo("$email is not a valid email address");
   }

if (empty($_REQUEST["age"])) {
  echo "enter last name <br>";// code...
}
else
 {
   echo "<br>";
  echo "your age name is :" .$_REQUEST ["age"]."<br>";
}

//&& !preg_match("/(?=.*[@#$%^&+=]).*$/", $pass
$pass = $_POST['pass'];
if (!preg_match("#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$#", $pass)) {
 echo "Password must be at least 8 characters in length and must contain at least one number, one upper case letter, one lower case letter and one special character.";
}
 else {
  echo $_REQUEST["pass"];
}
// if(isset($_POST['pass'])) {
//   $password = $_POST['pass'];
//   $number = preg_match('@[0-9]@', $pass);
//   $uppercase = preg_match('@[A-Z]@', $pass);
//   $lowercase = preg_match('@[a-z]@', $pass);
//   $specialChars = preg_match('@[^\w]@', $pass);
//
//   if(strlen($pass) < 8 || !$number || !$uppercase || !$lowercase || !$specialChars) {
//     echo "Password must be at least 8 characters in length and must contain at least one number, one upper case letter, one lower case letter and one special character.";
//   } else {
//     echo  $_REQUEST["pass"];
//     }
// }



if(!isset($_REQUEST["lang1"]) && !isset($_REQUEST["lang2"]) && !isset($_REQUEST["lang3"]))
{
    echo "please select at least one checkbox ||";

}
else{
   if(isset($_REQUEST["lang1"]))
   {
     echo "<br>";
       echo $_REQUEST["lang1"];
   }
   if(isset($_REQUEST["lang2"]))
   {
     echo "<br>";
       echo $_REQUEST["lang2"];
   }
   if(isset($_REQUEST["lang3"]))
   {
     echo "<br>";
    echo $_REQUEST["lang3"];
   }
}
if(isset($_REQUEST["Programmer"]))
{

    echo "<br> Your a :" .$_REQUEST["Programmer"];
}
else{
    echo  "please select at least one radio ||";
}



?>


  </body>
</html>
