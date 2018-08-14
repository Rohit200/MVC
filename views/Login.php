<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login and Registration page</title>
    </head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js">
    </script>
    <script type="text/javascript">
    function login()
    {
        debugger;
       var username =document.getElementById("username").value;
       var password =document.getElementById("password").value;
        debugger;
       $.ajax({
        type : 'post',
        url : 'http://localhost/codeigniter/index.php/Main',
        data:{username : username, password : password, action : 'index'},
        success: function (response) {
            debugger;
       alert(response);
        },
        error: function (xhr, status, error) {
            alert("something wrong");
        }
      });

	
}
</script>
    <style>
        input {
            width :94%;
            padding : 04px 08px;
            margin: 8px 0;
            border: 2px solid black;
            
        }
        button{
            width :100%;
            padding : 04px 08px;
            margin: 8px 0;
            background-color:green;
            color :white;

        }
        body {
    background-color: lightblue;
}
.container{
    width:25%;
    height:60%;
    margin : 180Px 400Px;
    background-color:floralwhite;
    padding :2px;
    float: center;
}

    </style>
    <body>
        <form >
           <div class="container">
            <h1>Login:</h1>
        <label>Username</label><br>
        <input type ="text" id="username" placeholder="Enter the user name" required><br>
        <label>Password</label><br>
        <input type ="password" id="password" placeholder="Enter the password" required><br>
        <button type="button" onclick="login()">Submit</button>
    </div> 
        </form>
        </body>
</html>