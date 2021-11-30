

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

<p id="message"></p>
<p id="emailmeg"></p>
<p id="passmeg"></p>

  <form action=""  onsubmit="return validateForm()" method="POST">
  First  Name : <input type="text" id ="fname" name="fname" value=""><br><br>
  Last  Name : <input type="text" id ="lname" name="lname" value=""><br><br>
  age : <input type="number" name="age" value=""><br><br>

  Designation : <input type="radio" id="Programmer" name="Programmer" value="Junior">
  <label for="Programmer">junior</label>
  <input type="radio" id="Programmer" name="Programmer" value="senior">
  <label for="Programmer">senior</label>
  <input type="radio" id="Programmer" name="Programmer" value="Lead">
  <label for="Programmer">lead</label> <br>


  <input type="checkbox" id="lang1" name="lang1" value="check">
  <label for="lang1">java</label><br>
  <input type="checkbox" id="lang2" name="lang2" value="check">
  <label for="lang2">php</label><br>
  <input type="checkbox" id="lang3" name="lang3" value="check">
  <label for="lang3">C++</label><br>

  Email : <input type="text" id= "email" name="email" value="" required><br><br>
  password : <input type="password" id="pass" name="pass" value="" required ><br><br>
Choose a file : <input type="file" value="file "> <br><br>
    <input type="submit" value="Submit">
    <input type="submit" value="Reset">
  </form>

    <script src="../js/validation.js"></script>

</body>
</html>
