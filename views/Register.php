<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js">
</script>
<script type="text/javascript">
function registeration()
{
    debugger;
    var username=document.getElementById("username").value;
    var password=document.getElementById("psw").value;
    var password1=document.getElementById("psw-repeat").value;
    debugger;
    $.ajax({
        type :'post',
        url :'Login_and_registeration.php',
        data :{username : username, password :password, password1 : password1,action :'create'},
        success:function(response)
        {
            debugger;
            alert(response);
        },
        error: function(xhr,status,error)
        {
            alert("something wrong");
        }
    });
}
</script>
<style>
  body {
    background-color: lightblue;
    font-family: Aerial;
}

/* Add padding to containers */
.container {
    width:30%;
    height:60%;
    margin : 180Px 400Px;
    float: center;
    background-color: white;
    padding : 2px;
}

/* Full-width input fields */
input[type=text], input[type=password] {
    width :95%;
    padding: 10px;
    margin: 5px 0 0 0;
    border: none;
    background: #f1f1f1;
}



/* Set a style for the submit button */
button{
    width : 100%;
    padding :10px;
    background-color :green;
    color :ghostwhite;
}
/* Add a blue text color to links */
a {
    color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
    background-color: #f1f1f1;
    text-align: left;
    padding :5px;
}
</style>
</head>
<body>

<form >
  <div class="container">
    <h1>Registeration</h1>
    <p>Please enter the details.</p>
    <label><b>Username</b></label><br>
    <input type="text" placeholder="Enter the User name" id="username" required><br>

    <label><b>Password</b></label><br>
    <input type="password" placeholder="Enter Password" id="psw" required><br>

    <label for="psw-repeat"><b>Re-enter Password</b></label><br>
    <input type="password" placeholder="Re-enter the Password" id="psw-repeat" required><br>
    <button type="submit" class="registerbtn" onclick="registeration()">Register</button><br>

  
  <div class="signin">
    <p>Already have an account? <a href="login">Sign in</a>.</p>
  </div>
</div>
</form>

</body>
</html>