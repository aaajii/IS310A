<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Home - 4Bytes</title>
	<style>
	  body {
	         background-color: white;
	         color: blue ;
	         font: normal 15px "Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;
           }

      p {
	      line-height: 20px;
	      margin-bottom: 20px;
        }

      h1 {
	       font-family: 'Crete Round', serif;
	       font-weight: bold;
	       color: blue;
	       font-size: 65px;
	      
         }

      h2 {
	       font-weight: 300;
	       color: white;
	       font-size: 55px;
	       text-transform: uppercase;
	       text-align: center;
	       margin-bottom: 20px;
         }

      h3 {
	       font-size: 30px;
	       color: blue;
	       font-weight: bold;
	       
	       text-align: center;
	       margin-bottom: 20px;
         }

      h4 {
	       font-size: 24px;
	       color: blue;
	       font-weight: bold;
	       text-transform: uppercase;
	       margin-bottom: 20px;
         }

      h5 {
	       font-size: 15px;
	       color: blue;
	       font-weight: bold;
	       
         }

      a {
	      text-decoration: none;
	      color: blue;
        }

      a:hover {
	            color: blue;
              }

      strong {
	           font-weight: bold;
             }

      small {
	          font-size: 13px;
	          color: blue;
	          font-style: italic;
            }

      .clear {
	           clear: both;
             }    

      .wrapper {
                	margin: 0 auto;
                	padding: 0 10px;
                	width: 940px;
               }
	  
	  header {
	height: 100px;
	
}

header h1 {
	float: left;
	margin-top: 1px;
	margin-left: 50px;
}



header nav {
	float: right;
}

header nav ul li {
	float: left;
	display: inline-block;
	margin-top: 50px;
}


#hero-image {
	height: 580px;
	padding-top: 1px;
	background: #e8eced url('prog.jpg') no-repeat center;
	opacity: 0.6;
}

#hero-image h2 {
	margin: 180px 0 40px 0;
}

.button-1 {
	display: block;
	text-align: center;
	background: #444;
	border-radius: 3px;
	color: blue;
	width: 180px;
	height: 50px;
	font-size: 20px;
	line-height: 50px;
	margin: 0 auto;
}

.button-1:hover {
	background-color: #02b8dd;
	color: blue;
}
#features ul {
	margin: 80px 0;
}

#features ul li {
	width: 250px;
	padding-top: 140px;
	float: left;
	margin-right: 10px;
	text-align: center;
}


#primary-content {
	background-color: #f8fafa;
	padding: 60px 0;
	text-align: center;
}

#primary-content h3 {
	display: block;
	margin: 0 auto 20px auto;
	width: 400px;
	border-bottom: 1px solid #02b8dd;
	padding: 0 0 20px 0;
}

#primary-content a img {
	margin: 20px 0;
}

#left {float:left}

#right {float:right}

#clear {clear:both}

#secondary-content article {
	width: 460px;
	height: 270px;
	float: left;
	background-color: #f5f5f5;
}

#secondary-content article:first-child {
	margin-right: 20px;
}

#secondary-content article .overlay {
	background: rgba(255, 255, 255, .95);
	height: 230px;
	width: 190px;
	padding: 20px;
}

article h4 {
	border-bottom: 1px solid #02b8dd;
	padding-bottom: 20px;
}

.more-link {
	border: 1px solid #02b8dd;
	color: blue;
	padding: 6px 20px;
	border-radius: 3px;
}

.more-link:hover {
	background-color: #02b8dd;
	color: #fff;
}
 
footer {
	padding: 10px 0;
	background-color: #f8fafa;
}

#footer-info {
	width: 380px;
	float: left;
	margin-top: 7px;
}

#footer-links {
	width: 400px;
	float: right;
	
}


img
{
	border-radius: 75px;
	border: 5px ;
}

ul {
	  list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: white;
    float: left;
}

li {
	  list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: white;
    float: left;
}

li a {
    display: block;
    color: black;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: white;
	color : yellow;
}
li a2 {
	    border: 0.05px solid black;
	width: auto;
    -webkit-transition-duration: 0.4s;
    transition-duration: 0.4s;
}

li a:hover{
    background-color: black; 
    color: white;
}

li a:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
#bottom
{
	color: blue;
}
.btn-group .button {
    background-color: white;
    border: none;
    color: blue;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    cursor: pointer;
    float: right;
	margin-top: 40px;
}

.btn-group .button:hover {
    background-color: lightblue;
}
.img-circle{border-radius: 50%}
	</style>
	<link rel="shortcut icon" href="bytes-icon.ico" />
	<link href='http://fonts.googleapis.com/css?family=Crete+Round' rel='stylesheet' type='text/css'>
</head>
 
<body>
    <header>
	  <div class="wrapper">
		<h1>4Bytes<span class="color"></span></h1>
		
		<div class="btn-group">
		  <button class="button" onclick="newDoc()"><a href="/IS310A/login/newLogin.php">Log out</a></button>
		  <button class="button"><a href="/IS310A/selling/sellform.php">Sell</a></button>
          <button class="button"><a href="/IS310A/products/products.php">Buy</a></button>         
		  <button class="button"><a href="/IS310A/home%20page%204bytes/hp.html">Home</a></button>
          
         
          
        </div>
	  </div>
	</header>
	
	
	
	<div id="hero-image">
	  <div class="wrapper">
		<h2><strong>Hello User!</strong><br/>
		Checkout our Website</h2>
		
	  </div>
	</div>
	
	<div id="features">
	  <div class="wrapper">
		<ul style="list-style: none;">
			<li class="feature-1">
			  <h4>Look</h4>
				 <p>For any item that you want to buy. We've almost got it all for you.</p>
			</li>
			<li class="feature-2">
			   <h4>Purchase</h4>
				  <p>Conveniently and with affordable price.</p>
			</li>
			<li class="feature-3">
			   <h4>Sell</h4>
			     <p>Items that you don't use but should still be functionable.</p>	
			</li>
			<div class="clear"></div>
		</ul>
	  </div>
	</div>
	
	<div id="primary-content">
	  <div class="wrapper">
		<article>
		  <h3>Featured Content</h3>
			<p align = "center">Something here! </p>
			<p align = "center"> <img src = "SALE.jpg" style = "width:900px;height:400px;"  align = "center"></p>
		</article>
	  </div>
	</div>
	
	<table border = "0"> <!-- 1st 2 pics-->
	<tr>
	<td>
	<div id="left">
	  <div class="wrapper">
		<img src = "laptop.jpg" style = "width:300px;height:200px;">
		 <div class="overlay">
				<h4>Secondary Content</h4>
				<p><small>Something here!</small></p>
				<a href="#" class="more-link"><b>View more!</b></a>
		 </div>
		 </td>
			<br>
			<td>
		<div id="right">
		<div class="left clear"></div>
		<div class="right"></div>
		<img class="img-circle" src = "Jim.jpg" style = "width:200px;height:200px;">				
		  <div class="overlay">
				<h4>Admins</h4>
				<p><small>Something here!</small></p>
				<a href="#" class="more-link"><b>View more!</b></a>
		  </div>
		  </td>
		  </tr>
		  </table>
		  <br>
		<table border = "0"> <!-- 2nd 2 pics-->  
		<tr>  
		<td>  
		<div id="left">
		<div class="wrapper">
		<img src = "phone.jpg" style = "width:300px;height:200px;">
		 <div class="overlay">
				<h4>Secondary Content</h4>
				<p><small>Something here!</small></p>
				<a href="#" class="more-link"><b>View more!</b></a>
		 </div>
		 </td>
			<br>
			<td>
		<div id="right">
		<div class="left clear"></div>
		<div class="right"></div>
		<img class="img-circle" src = "Ben.jpg" style = "width:200px;height:200px;">				
		  <div class="overlay">
				<h4>Admins</h4>
				<p><small>Something here!</small></p>
				<a href="#" class="more-link"><b>View more!</b></a>
		  </div>
		  </td>
		  </tr>
		  </table>
		  
		  <table border = "0"> <!-- 1st 2 pics-->
	<tr>
	<td>
	<div id="left">
	  <div class="wrapper">
		<img src = "watch.jpg" style = "width:300px;height:200px;">
		 <div class="overlay">
				<h4>Secondary Content</h4>
				<p><small>Something here!</small></p>
				<a href="#" class="more-link"><b>View more!</b></a>
		 </div>
		 </td>
			<br>
			<td>
		<div id="right">
		<div class="left clear"></div>
		<div class="right"></div>
		<img class="img-circle" src = "elton.jpg" style = "width:200px;height:200px;">				
		  <div class="overlay">
				<h4>Admins</h4>
				<p><small>Something here!</small></p>
				<a href="#" class="more-link"><b>View more!</b></a>
		  </div>
		  </td>
		  </tr>
		  </table>
		  <br>
		<table border = "0"> <!-- 2nd 2 pics-->  
		<tr>  
		<td>  
		<div id="left">
		<div class="wrapper">
		<img src = "tablet.jpg" style = "width:300px;height:200px;">
		 <div class="overlay">
				<h4>Secondary Content</h4>
				<p><small>Something here!</small></p>
				<a href="#" class="more-link"><b>View more!</b></a>
		 </div>
		 </td>
			<br>
			<td>
		<div id="right">
		<div class="left clear"></div>
		<div class="right"></div>
		<img class="img-circle" src = "Andrew.jpg" style = "width:200px;height:200px;" style = "border-radius: 50px;">				
		  <div class="overlay">
				<h4>Admins</h4>
				<p><small>Something here!</small></p>
				<a href="#" class="more-link"><b>View more!</b></a>
		  </div>
		  </td>
		  </tr>
		  </table>
		  
		
		<div class="clear"></div>
	  </div>
	</div>
	</td>
	</tr>
	</table>
	
	<br>
	<div> 
	  <h3>So, what are you waiting for...</h3>
	 
	
	<br><br>
<!--	<marquee scrollamount = "25"> <!-- speed siya sa pics
<center><img src = "phone.jpg" width = "22%"/> <!-- picture niya and size niya--
<img src = "tablet.jpg" width = "22%"/> <!-- picture niya and size niya--
<img src = "laptop.jpg" width = "22%"/> <!-- picture niya and size niya--
<img src = "watch.jpg" width = "22%"/></center></marquee> <!-- picture niya and size niya--

<br><br>

<marquee scrollamount = "25" direction = "right"> <!-- speed siya sa pics and mag start siya sa right side--
<center><img src = "watch.jpg" width = "22%"/> <!-- picture niya and size niya--
<img src = "laptop.jpg" width = "22%"/> <!-- picture niya and size niya--
<img src = "tablet.jpg" width = "22%"/> <!-- picture niya and size niya--
<img src = "phone.jpg" width = "22%"/></center></marquee> <!-- picture niya and size niya--> 
	
	<footer>
	  <div class="wrapper">
		<div id="footer-info">
		  <p>Copyright 2017 4Bytes. All rights reserved.</p>
		  <p><a href="#">Terms of Service</a> I <a href="#">Privacy</a></p>
		  <p><a href="#">Terms of Service</a> I <a href="#">Privacy</a></p>
		</div>
		<div id="footer-links">
			
			  <table>
			    <tr>
				<td><a href="#" style = "color: blue;">About Us &nbsp;&nbsp;</a></td>
				<td><a href="#" style = "color: blue;">Meet The Team &nbsp;&nbsp;</a></td>
				<td><a href="#" style = "color: blue;">What We Do &nbsp;&nbsp;</a></td>
				<td><a href="#" style = "color: blue;">Careers &nbsp;&nbsp;</a></td>
			    </tr>
			  </table>
			
		</div>
		<div class="clear"></div>
	  </div>
	</footer>
	<script src="/IS310A/extras/bootstrap-3.3.7-dist/jquery.min.js"></script>
    <script> 
		function newDoc() {
			window.location.assign("logout-trick.php?id=1")
		}
	</script>
</body>
</html>