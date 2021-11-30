
function validateForm(enteredEmail) {
  var fname = document.getElementById("fname").value;
  var lname = document.getElementById("lname").value;
  var pass = document.getElementById("pass").value;

  var email = /^w+([.-]?w+)*@w+([.-]?w+)*(.w{2,3})+$/;
  if (fname.length <=4 || lname.length <=4) {
    document.getElementById("message").innerHTML ="Name must be 5 character long";
    return false;
  }
  if(document.getElementById("Programmer").checked== false)
  {
  document.getElementById("message").innerHTML ="Radio must be filled out";
     return false;
  }

  if (enteredEmail.value.match(email) ) {
    document.getElementById("emailmeg").innerHTML ="email  is good length";
    return false;
  }

  if (pass.length <=7 ) {
    document.getElementById("emailmeg").innerHTML ="password must be 8 character long";
    return false;
  }

  if(this.form.checkbox.checked==false)
  {
  document.getElementById("message").innerHTML ="please select at least one checkbox";
     return false;
  }

  return true;
}
