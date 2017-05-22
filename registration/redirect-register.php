<html>

<head>
	<title> Thank you for trusting our site </title>
	<link rel="stylesheet" type="text/css" href="logindesign.css">
</head>

<body>
  </br>
  </br>
  </br>
  </br>
  </br>
  <center>
    <h1>Thank you for trusting our site <?php echo $_COOKIE['name'];?></h1>
	Making you go back to the login page, hang on.
  </center>
	
  <script>
    function validation() {
      var yeS = document.myForm1.Lyes.value;
      if (yeS == "") {
        alert(" ");
      } else {
        document.getElementById("pYes").value = yes;
        document.myForm3.submit();
      }
      //else if(no == "no")
      //{
      //	document.getElementById("passNo").value = no;
      //	document.myForm2.submit();
      //}
    }
    function validation1() {
      var nO = document.myForm.Lno.value;
      if (nO == "") {
        alert(" ");
      } else {
        document.getElementById("pNo").value = nO;
        document.myForm2.submit();
      }
    }
  </script>
</body>

</html>
<?php
	header("Refresh: 3; url=/IS310A/login/login.php");
?>