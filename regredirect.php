<html>

<head>
	<link rel="stylesheet" type="text/css" href="logindesign.css">
</head>

<body>
  </br>
  </br>
  </br>
  </br>
  </br>
  <center>
    <h1>Thank you for trusting our site <?php echo $_COOKIE['name'];?></h1></center>
  <table align="center">
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    <tr>
      <center>
        <p>Would you like to log out?</p>
      </center>
      <form name="myForm1">
        <center>
          <input type="hidden" value="yes" id="Lyes" name="Lyes">
          <input type="button" value="Yes" name="yes" id="yes" onClick="validation()">
        </center>
      </form>

      <form name="myForm">
        <center>
          <input type="hidden" value="no" id="no" name="no">
          <input type="button" value="No" name="Lno" id="Lno" onClick="validation1()">
        </center>
      </form>
      < <form name="myForm2" action="home.php" method="post">
        <input type="hidden" value="no" name="pNo" id="pNo">
        </form>
        <form name="myForm3" action="login.php" method="post">
          <input type="hidden" value="" name="pYes" id="pYes">
        </form>
    </tr>
  </table>
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
	include ('config.php');
	if(isset($_POST['pYes']))
	{
		$a = $_POST['pYes'];
		setcookie('name',$a,time()-1800,'/');
		header("Location:login.php");
	}
	?>
  <?php
	if(isset($_POST['pNo']))
	{
		$a = $_POST['pNo'];
		setcookie('name',$a,time()+1800,'/');
		header("Location:home.php");
	}
?>