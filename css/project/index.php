<?php

    if (array_key_exists('username', $_POST) AND array_key_exists('email', $_POST)AND array_key_exists('password', $_POST)AND array_key_exists('password2', $_POST)) {
        
        $link = mysqli_connect("localhost", "root", "", "gyanbhandaar");

            if (mysqli_connect_error()) {
        
                die ("There was an error connecting to the database");
        
            } 
        
        
        if ($_POST['email'] == '') {
            
            echo "<h1>Email address is required.</h1>";
            
        } else if ($_POST['password'] == '') {
            
            echo "<h1>Password is required.</h1>";
            
        } else if ($_POST['password2'] == '') {
            
            echo "<h1>Retype Password is required.</h1>";
        }else if ($_POST['username'] == '') {
            
            echo "<h1>Username is required.</h1>";
        }
            else {
            
            $query = "SELECT `id` FROM `usersignup` WHERE email = '".mysqli_real_escape_string($link, $_POST['email'])."'";
            
            $result = mysqli_query($link, $query);
            
            if (mysqli_num_rows($result) > 0) {
                
                echo "<h1>That email address has already been taken.</h1>";
                
            } else {
                
                $query = "INSERT INTO `usersignup` (`email`, `password`, `password2`, `username`) VALUES ('".mysqli_real_escape_string($link, $_POST['email'])."', '".mysqli_real_escape_string($link, $_POST['password'])."', '".mysqli_real_escape_string($link, $_POST['password2'])."', '".mysqli_real_escape_string($link, $_POST['username'])."')";
                
                if (mysqli_query($link, $query)) {
                    
                    echo "<h1>You have been signed up!</h1>";
                    
                } else {
                    
                    echo "<h1>There was a problem signing you up - please try again later.</h1>";
                    
                }
                
            }
            
        }
        
        
    }

    


?>
<!--<html>
<head>

 <link rel="stylesheet" href="signup.css">
</head>	


<div class="login">
    <h1>Hi , Guest !</h1>
  
    <form method="post">
  <table>
    <tr>
      <th>
	  <input type="email" name="u" placeholder="Your email" id="email" required="required"/ >
      
      </th> <th > <input type="password" name="p" placeholder="Password" required="required" /> </th> 
    </tr>
    <tr>

    </tr>
      </table>
            <button type="submit" class="btn btn-primary btn-block btn-large" > 
      SIGN UP </button>    
    </form>
</div>

</html>-->


<!doctype html>
      <html lang="en">
        <head>
          <!-- Required meta tags -->
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      
          <!-- Bootstrap CSS -->
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
      
          <title>SIGNUP_PAGE</title>
 <!--<script type="text/javascript" src="jquery.min.js"></script>-->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>        
 <link href="signup_css.css" rel="stylesheet" type="text/css" />
          <style type="text/css">
            #errorMessage {
                
                color: red;
                font-size: 90% !important;
                
            }
            
            #successMessage {
                
                color: green;
                font-size: 90% !important;
                display:none;
                margin-bottom:20px;
                
            }
          
          a{
           text-decoration: none;
           
          }
          </style>
        </head>
        <body>
         
         <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
      
              <a class="navbar-brand" href="#"><img src="images/logo.jpg" width="150" height="100" class="d-inline-block align-top" alt="" loading="lazy"><p style="color:black;font-size: 30px;text-align: left;font-weight: bold">Old Books Sharing</p></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="aboutus.html">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="catalogs.html">Catalogs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">FAQs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.html">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="signup.html">Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" tabindex="-1" aria-disabled="false">Disabled</a>
            </li>
          </ul>
         
        </div>
      
            </nav>
          </div>
      
   
        <div id="login-box">
          <div id="successMessage">You've done it! Congratulations.</div>
            
          <div id="errorMessage"></div>
        
            <div class="left">
              <h1>Sign up</h1>
              
              <input type="text" name="username" id="username" placeholder="Username" />
              <input type="text" name="email"  id="email" placeholder="E-mail" />
              <input type="password" name="password" id="password" placeholder="Password" />
              <input type="password" name="password2"  id="passwordConfirm" placeholder="Retype password" />
              
              <input type="submit" name="signup_submit" id="submitButton" value="Sign me up" />
            </div>
            
            <div class="right">
              <span class="loginwith">Sign in with<br />social network</span>
              
              <button class="social-signin facebook"><a href="https://www.facebook.com" style="color: white;">Log in with facebook</a></button>
              <button class="social-signin twitter"><a href="https://www.twitter.com" style="color: white;">Log in with Twitter</a></button>
              <button class="social-signin google"><a href="https://www.google.com" style="color: white;">Log in with Google+</a></button>
            </div>
            <div class="or">OR</div>
          </div>
          <script type="text/javascript">
            
            function isEmail(email) {
  
                var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  
                return regex.test(email);
                
            }
            $("#submitButton").click(function() {
                
                var errorMessage = "";
                var fieldsMissing = "";
                
                if ($("#email").val() == "") {
                    
                    fieldsMissing += "<br>Email";
                    
                }
                if ($("#username").val() == "") {
                    
                    fieldsMissing += "<br>Username";
                    
                }
              
                
                if ($("#password").val() == "") {
                    
                    fieldsMissing += "<br>Password";
                    
                }
                
                if ($("#passwordConfirm").val() == "") {
                    
                    fieldsMissing += "<br>Confirm Password";
                    
                }
                
                if (fieldsMissing != "") {
                    
                    errorMessage += "<p>The following field(s) are missing:" + fieldsMissing;
                    
                }
                
                if (isEmail($("#email").val()) == false) {
                    
                    errorMessage += "<p>Your email address is not valid</p>";
                    
                }
               
                if ($("#password").val() != $("#passwordConfirm").val()) {
                    
                    errorMessage += "<p>Your passwords don't match</p>";
                    
                }
                
                if (errorMessage != "") {
                    
                    $("#errorMessage").html(errorMessage);
                    
                } else {
                    
                    $("#successMessage").show();
                    $("#errorMessage").hide();
                    
                }
                
            });
            
            
        </script>
          <br>
          <br>
          <div class="jumbotron jumbotron-fluid" style="background-color: rgb(15, 15, 83)">
            <div class="container">
              <!--<h1 class="display-4">Fluid jumbotron</h1>
              <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>-->
              <thead>
                <tr>
                  <th><font color="white">CONTACT INFO</font></th>
                  <th><font color="white">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MODULES</font></th>
                  <th><font color="white">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PROJECT LINK</font></th>
                 <!-- <th><font color="white">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ABOUT PROJECT</font></th>-->
                </tr>
              </thead>
              <tbody>
                <tr>
                  <br>
                  <br>
                 <td><font color="white">AddressNo.******</font></td>
                   <td><font color="white">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Trainer Module</font></td>
                   <td><font color="white">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Home</font></td>
                  <!--<td><font color="white">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></td>-->
                </tr>
                <tr>
                  <br>
                  <td><font color="white">Dehradun,India</font></td>
                   <td><font color="white">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;User Module</font></td>
                   <td><font color="white">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;About Us</font></td>
           
                </tr>
                <tr>
                  <br>
                  <td><font color="white">Mobile:(123)456-7890</font></td>
                   <td><font color="white">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Login Module</font></td>
                   <td><font color="white">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contact</font></td>
           
                </tr>
                <tr>
                  <br>
                  <td><font color="white">Email:sonaverma553@gmail.com</font></td>
                   <td><font color="white">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Catalogue Module</font></td>
                   <td><font color="white">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Login</font></td>
           
                </tr>
              </tbody>
              <div class="container">
                <br>
                <br>
                <h2><font color="white">Sharing education , sharing a book.......that's what changes the world !</font></h2>
              </div>
            </div>
          </div>
          
          
          
              <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
              <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
              <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
           
              </body>
              </html>
              
              
              </code>