<?php
session_start();
include ("../control/updateproductcontrol.php");

?>


<!DOCTYPE html>
<html>
<body>
<h2>Update product</h2>

<form action="" method="post" >

Search Product
<input type="text" name="pid">
<input type="submit" name="search" value="Search">


</form>

<br>
<br>
<br>

Update Product
<form method="post" action="" onsubmit="return validateform()">
Name<input type="text" id="pname" name="pname" value="<?php echo $pname; ?>">
<h2 id="message_pname"></h2>
department<input type="text" id="pdesc" name="pdesc" value="<?php echo $pdesc; ?>">
<h2 id="message_pdesc"></h2>
joinning date <input type="text" id="pcate" name="pcate" value="<?php echo $pcate; ?>">
<h2 id="message_pcate"></h2>
salary <input type="text" id="pprice" name="pprice" value="<?php echo $pprice;?> ">
<h2 id="message_sal"></h2>
<input type="hidden" id="pid" name="pid" value="<?php echo $pid; ?>">
<input type="submit" name="update" value="Update">
</form>

<script src="../control/js.js" charset="utf-8"></script>

</body>
</html>
