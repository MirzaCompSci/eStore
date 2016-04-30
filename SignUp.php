<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
<meta charset="UTF-8">
<title>Sign up Form</title>
<link rel="StyleSheet" href="css/bootstrap.css" />

<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>function run() {
$("#loginForm").hide();
}</script>
<style>
.glyphicon.glyphicon-shopping-cart{
font-size: 20px;
margin:  15px;
}
#cart{
float: right;

}
#form{
    max-width: 500px;
    margin: auto;
}



</style>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top " role="navigation">
<div class="container">
<div class="collapse navbar-collapse collapse-buttons">
<div id="cart">

<div id="cart" class="dropdown glyphicon glyphicon-shopping-cart">
    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
        Your Account
        <span class="caret"></span>
    </button>

    <div id="loginForm" class="dropdown-menu" style = "padding: 15px;">
        <form action="frontcontroller.php" method="post" accept-charset="UTF-8">
            <input style="margin-bottom: 15px;" type="text" name="user" size="30" />
            <input style="margin-bottom: 15px;" type="password" name="password" size="30" />

            <input class="btn btn-primary" style="clear: left; width: 100%; height: 32px; font-size: 13px;" type="submit" name="commit" value="Login" />
        </form>

    </div>

</div>

</nav>
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-top: 60px;">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Logo</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a class="active" href="#">Home</a></li>
                <li><a href="SignUp.php">Sign Up</a></li>
            </ul>
        </div>
    </div><!-- /.container-fluid -->
</nav>

    <div id="form">
        <form action="frontcontroller.php" method="POST">
  <fieldset class="form-group">
    <label for="exampleInputuser">Username</label>
    <input type="text" name="username" class="form-control" id="exampleInputuser" placeholder="Enter User">
    
  </fieldset>
  <fieldset class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </fieldset>
   <fieldset class="form-group">
    <label for="first">First Name</label>
    <input type="text" name="FirstName" class="form-control" id="first" placeholder="Enter First Name">
   
  </fieldset>
         <fieldset class="form-group">
    <label for="last">Last Name</label>
    <input type="text" name="LastName" class="form-control" id="last" placeholder="Enter Last Name">
   
  </fieldset>
         <fieldset class="form-group">
    <label for="email">Email</label>
    <input type="text" name="Email" class="form-control" id="email" placeholder="Enter Email">
   <small class="text-muted">We'll never share your email with anyone else.</small>
  </fieldset>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</body>
</html>
