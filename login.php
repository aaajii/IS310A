<!DOCTYPE html>
<html>

<head>
  <!--Bootstrap-->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- -->

  <title>
    Welcome to Fourbytes!
  </title>

  <!--Css link -->
  <link rel="stylesheet" type="text/css" href="logindesign.css">
</head>

<body style="background-image: url('images/skyline-buildings-new-york-skyscrapers.jpg');background-repeat: no-repeat;background-attachment: fixed;">

  <?php 
include ('config.php');
if(!isset($_COOKIE['email']))
{
?>

  <div class="header">
    <h1 class="headertext">Welcome to </br>4BYTES!</h1>
  </div>

  <div class="container" id="forms">

    <form name="Form1" id="firstForm">

      <!-- input type text consist of the username and password -->
      <table align="center">
        <!-- Using Space to get the input into the center screen.-->
        <tr>
          <td>
            <p>Email:</p>
          </td>
          <td><input class="txt-css" type="text" id="userName" value=""></td>
        </tr>

        <tr>
          <td>
            <p>Password:</p>
          </td>
          <td><input class="txt-css" type="password" id="passWord" value=""></td>
        </tr>

        <tr>
          <td colspan="2">
            </br>
            </br>
            <center>
              <input class="button-css" type="button" name="" value="Log in" onClick="validation()">
            </center>
          </td>
        </tr>
      </table>
      <center>
        </br>Don't have an account yet? <a href="register.php"> Sign up here! </a></center>
      </br>
    </form>

    <form name="Form2" action="redirect-login.php" method="post">
      <input type="hidden" value="" id="passUsername" name="passUsername">
      <input type="hidden" value="" id="passPassword" name="passPassword">
    </form>
  </div>

  <?php
}else{header("Refresh:0;url=home.php");}
?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="bootstrap-3.3.7-dist/jquery.min.js"></script>
    <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <!-- -->
    <script>
      function validation() {
        var username = document.Form1.userName.value;
        var password = document.Form1.passWord.value;
        if (username == "" || password == "") {
          alert("Please input your username or password!");
        } else {
          document.getElementById("passUsername").value = username;
          document.getElementById("passPassword").value = password;
          document.Form2.submit();
        }
      }
    </script>

</body>

</html>