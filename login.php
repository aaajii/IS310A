<!DOCTYPE html>
<html>

<head>
  <title>4Bytes</title>
  <style>
         
				h1{
				    font-family: 'Crete Round', serif;
	                font-weight: bold;
	                color: blue;
	                font-size: 65px;
	                margin-left: 200px;
					float: left;
	                margin-top: 10px;
					
				  }
				header {
	                     height: 120px;
                        }
				
				header h1 {
	float: left;
	margin-top: 1px;
	margin-left: 50px;
}


header h1 .color {
	color: #02b8dd;
}

header nav {
	float: right;
}

header nav ul li {
	float: left;
	display: inline-block;
	margin-top: 30px;
	
}

header nav ul li a {
	color: blue;
	
	
	display: block;
	margin-right: 20px;
	margin: 0 0 3px 0;
	
}
input[type=submit]
{
	width:100%;
	background-color:blue;
	color:white;
	border:2px solid #06F;
	padding:10px;
	font-size:20px;
	cursor:pointer;
	border-radius:5px;
	margin-bottom:15px;
}
			    body{
					 font-family: "Segoe UI";
					 font-weight: lighter;
                    }
				 p {
	      
        }
				
 .wrapper {
                	margin: 0 auto;
                	padding: 0 10px;
                	width: 940px;
               }
			    #features ul {
	margin: 50px 0;
}
#features ul li {
	width: 275px;
	padding-top: 20px;
	float: left;
	margin-right: 15px;
	text-align: center;
}


footer {
	padding: 10px 0;
	background-color: #f8fafa;
}

#footer-info {
	width: 380px;
	float: left;
	margin-top: 5px;
}


				
  </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="shortcut icon" href="bytes-icon.ico" />
	<link href='http://fonts.googleapis.com/css?family=Crete+Round' rel='stylesheet' type='text/css'>
</head>

<?php 
if(!isset($_COOKIE['username']))
{
?>
<body>

 <header>
      <div class="wrapper">
	  <h1>4Bytes<span class="color"></span></h1> 
	     <nav>
	  
	     <ul>
				
				<div class="login.css">
				<li><a href="http://localhost:8080/IS310A/login/newLogin.php"><input type = "submit" value = "Log In" onClick = "MagisLoginValidation()"></a></li>
				
				
				
		  </ul>
	  </nav>
      </div>
	  
	</header>
	
	<div style="height:550px; background-color:lightblue;">
      <br>
	  
      <br>
         <div id="features">
		   <div class="wrapper">
             <ul style="list-style: none;">
			 
			 <li>
			 <img src="find.jpg" alt="search" style="width:200px;height:200px;">
			 <h3>Look</h3>
                <p>for any item that you want to buy</p>
				<p>we've almost got it all for you</p>
                
             </li>
			 
             <li>
			 <img src="purchase.jpg" alt="search" style="width:200px;height:200px;">
             <h3>Purchase</h3>
                <p>conveniently and with affordable price</p>
                
            </li>
			
  			<li>
			 <img src="sell.jpg" alt="search" style="width:200px;height:200px;">
	         <h3>Sell</h3>
                <p>items that you don't use but should still be functionable</p>
               
            </li>
            </ul>
          </div>			
		</div>
	</div>

	 <footer>
	  <div class="wrapper">
		<div id="footer-info">
		  <p>Copyright 2017 4Bytes. All rights reserved.</p>
		  <p><a href="#">Terms of Service</a> I <a href="#">Privacy</a></p>
		</div>
		
		<div class="clear"></div>
	  </div>
	</footer>
	  <br>
	  <br>
	  
<?php
include ("config.php");
include ('loginserver.php');
}else{header("Refresh:0;url=/IS310A/tempHome/home.php");}
?>
	  
</body>

</html>