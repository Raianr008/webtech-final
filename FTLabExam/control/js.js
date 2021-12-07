
function user (inputtxt){
    var letters = /^[A-Za-z-0-9]+$/;
    if(letters.test(inputtxt))
    {
        return true;
    }
    else
    {
        return false;
    }

}
function allLetter(inputtxt)
{
    var letters = /^[A-Za-z]+$/;
    if(letters.test(inputtxt))
    {
        return true;
    }
    else
    {
        return false;
    }
}

function matchpcate(inputtext)
{
    var patt = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/;
    if(patt.test(inputtext))
    {
        return true;
    }
    else
    {
        return false;
    }
}

function allnumber(inputnum)
{
    if(isNaN(inputnum)==false)
    {
        return true;
    }
    else
    {
        return false;
    }
}

function validateform()
{


    var pname=document.getElementById("pname").value;
    var pdesc=document.getElementById("pdesc").value;

    var pcate=document.getElementById("pcate").value;
    var pprice=document.getElementById("pprice").value;



    if(pname=="")
    {
        document.getElementById("message_pname").innerHTML="First name must not be empty";
        return false;
    }
    else if(pname.length<7)
    {
        document.getElementById("message_pname").innerHTML="Atleast 5 alphabet required";
        return false;
    }
    else
    {
        if(allLetter(pname)==false)
        {
            document.getElementById("message_pname").innerHTML="Only alphabet required";
            return false;
        }
        else
        {
            document.getElementById("message_pname").innerHTML="";
        }
    }


    if(pdesc=="")
    {
        document.getElementById("message_pdesc").innerHTML="Last name must not be empty";
        return false;
    }
    else if(pdesc.length<5)
    {
        document.getElementById("message_pdesc").innerHTML="Atleast 5 alphabet required";
        return false;
    }
    else
    {
        if(allLetter(pdesc)==false)
        {
            document.getElementById("message_pdesc").innerHTML="Only alphabet required";
            return false;
        }
        else
        {
            document.getElementById("message_pdesc").innerHTML="";
        }
    }






    if(pcate=="")
    {
        document.getElementById("message_pcate").innerHTML="pcate must not be empty";
        return false;
    }
    else
    {
        if(matchpcate(pcate)==false)
        {
            document.getElementById("message_pcate").innerHTML="Enter a valid pcate";
            return false;
        }
        else
        {
            document.getElementById("message_pcate").innerHTML="";
        }
    }

    if(pprice=="")
    {
        document.getElementById("message_sal").innerHTML="Age must not be empty";
        return false;
    }
    else
    {
        if(allnumber(pprice)==false)
        {
            document.getElementById("message_sal").innerHTML="Age must be integer";
            return false;
        }
        else
        {
            document.getElementById("message_sal").innerHTML="";
        }
    }

    return false;
}
