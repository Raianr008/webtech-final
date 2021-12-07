<?php
include('../model/db.php');

$pname=$pdesc= $pcate=$pprice=$pid="";
 if(isset($_POST["search"]))
 {

    $pid=$_POST["pid"];

 $connection = new db();
 $conobj=$connection->OpenCon();

 $userQuery=$connection->SearchProduct($conobj,"employee",$pid);

 if ($userQuery->num_rows > 0) {

     // output data of each row
     while($row = $userQuery->fetch_assoc()) {
       $pname=$row["Name"];
       $pdesc=$row["Department"];
       $pcate=$row["JoiningDate"];
       $pprice=$row["Salary"];
       $pid=$row["ID"];


   }
 }
   else {
     echo "0 results";
   }

   $connection->CloseCon($conobj);
}


 if(isset($_POST["update"]))
 {

    $connection = new db();
    $conobj=$connection->OpenCon();
    if($connection->UpdateProduct($conobj,"employee",$_POST["pid"],$_POST["pname"],$_POST["pdesc"],$_POST["pcate"],$_POST["pprice"]))
    {
      echo "Update successful";
    }
    else
    {
      echo "Error in updating";
    }
    $connection->CloseCon($conobj);
 }








?>
