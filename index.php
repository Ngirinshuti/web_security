<!DOCTYPE html>
<html>
    
<head>
  <title>Login form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=devive-width,initial-scale=1.0">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}

.icon {
  padding: 10px;
  background: dodgerblue;
  color: white;
  min-width: 50px;
  text-align: center;
}

.input-field {
  width: 70%;
  padding: 10px;
  outline: none;
}

.input-field:focus {
  border: 2px solid dodgerblue;
}

/* Set a style for the submit button */

  </style>
</head>
<body style="margin-top: 0cm;margin-left: 0cm;">
  <div class="container h-100">
    <div class="d-flex justify-content-center h-100" >
      <div class="user_card">
        <div class="d-flex justify-content-center form_container">
          <form method="post" action="login.php">
            <h1><center>LOGIN FORM</center></h1>
            <section></section>
           <div class="input-group mb-3">
             
            <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="username or email" name="usern" required="" value="<?php if(isset($_COOKIE['name'])){echo $_COOKIE['name'];} ?>">
  </div>
  
  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Password" name="pass" required="" value="<?php if(isset($_COOKIE['password'])){ echo $_COOKIE['password'];} ?>">
  </div>
            <div class="form-group">
              <!--<div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="customControlInline">
                <label class="custom-control-label" for="customControlInline">Remember me</label>
              </div>-->
              <input type="checkbox" value="lsRememberMe" id="rememberMe" name="remember" <?php if(isset($_COOKIE['check'])){echo 'checked';} ?>> <label for="rememberMe">Remember me</label><br>
            </div><br><br>
              <div class="d-flex justify-content-center mt-3 login_container">

          <input type="submit" name="sub" value="Login" class="btn" >
          <a href="createaccount.php">Signup</a>
           </div>
          </form>
        </div>
    <br>
        
  <!--<input type="submit" value="Login" onclick="lsRememberMe()">-->
      </div>
    </div>
  </div>
</body>
</html>

