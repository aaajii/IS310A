<!DOCTYPE html>
<html>
<head>
	<!-- sources https://www.youtube.com/watch?v=K1CzktZMXhY -->
	<title>Form validation in Javascript</title>
	<link rel="stylesheet" type="text/css" href="newLogin-style.css">
</head>
<body>
<div id="wrapper">
	<form method="POST" action="newRediretingRegistration.php" onsubmit="return Validate()" name="vForm">
		<div>
			Username:<input type="text" name="username" class="textInput" placeholder="Username" >
			<div id="name_error" class="val_error"></div>
		</div>
		<div>
			First Name:<input type = "text" name = "firstname" class = "textInput" placeholder = "First Name" >
			<div id="firstname_error" class="val_error"></div>
		</div>
		<div>
			Last Name:<input type = "text" name = "lastname" class = "textInput" placeholder = "Last Name" >
			<div id="lastname_error" class="val_error"></div>
		</div>
		<div>
			Password:<input type="password" name="password" class="textInput" placeholder="Password">
			<div id="password_error1" class="val_error"></div>
		</div>
		<div>
			Confirm Password:<input type="password" name="password_confirmation" class="textInput" placeholder="Confirm Password">
			<div id="password_error2" class="val_error"></div>
		</div>
		<div>
			Contact Number:<input type = "text" name = "contactnumber" class ="textInput" placeholder = "09XX-XXX-XXXX"  onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
			<div id ="contactnumber_error" class = "val_error"></div>
		</div>
		<!--<div>
			<input type="radio" name="gender" value="Male">Male
			<input type="radio" name="gender" value="Female">Female
			<div id = "gender_error" class = "val_error"></div>
		</div>-->
		<div>
			<input type="submit" class="btn" name="register" value="Register">
		</div>
		Already Have an Account?<a href = "newLogin.php"></br>Login Here</a>
	</form>
</div>
</body>
</html>
<!-- add javascript here -->
<script type="text/javascript">
	// GETTING ALL INPUT TEXT FIELDS
	var username = document.forms["vForm"]["username"];
	var first_name = document.forms["vForm"]["firstname"];
	var last_name = document.forms["vForm"]["lastname"];	
	var password = document.forms["vForm"]["password"];
	var password_confirmation = document.forms["vForm"]["password_confirmation"]; 
	var contact_number = document.forms["vForm"]["contactnumber"];	
		//var gender = document.["vForm"]["gender"];
	//	var genderx = radioChecker(gender);
	// GETTING ALL ERROR OBJECTS
	var name_error = document.getElementById("name_error");
	var firstname_error = document.getElementById("firstname_error");
	var lastname_error = document.getElementById("lastname_error");
	var password_error1 = document.getElementById("password_error1"); 
	var password_error2 = document.getElementById("password_error2"); 
	var contactnumber_error = document.getElementById("contactnumber_error"); 
	var gender_error = document.getElementById("gender_error"); 
	// SETTING ALL EVENT LISTENERS
	username.addEventListener("blur", nameVerifyLength, true);
	firstname.addEventListener("blur",firstnameVerify,true);
	lastname.addEventListener("blur",lastnameVerify,true);
	contactnumber.addEventListener("blur",contactnumberVerify,true);
	 gender.addEventListener("blur",genderVerify,true);
	password.addEventListener("blur",passwordVerify,true);
	function Validate()
	{
		// VALIDATE USERNAME
			if(username.value.toString().length < 8)
			{
					name_error.textContent = "Username is required and should be at least 8 characters and above";
					username.style.border = "1px solid red";
					username.focus();
			return false;
			}
		else
		{
			// VALIDATE FIRST NAME
		if(first_name.value === "")
		{
			firstname_error.textContent = "Your first name is required";
			first_name.style.border = "1px solid red";
			first_name.focus();
			return false;
		}
		else
		{
		// VALIDATE LAST NAME
		if(last_name.value === "")
		{
			lastname_error.textContent = "Last Name is required";
			last_name.style.border = "1px solid red";
			last_name.focus();
			return false;
		}
			else
			{
								// PASSWORD REQUIRED
		if(password.value.toString().length < 5)
		{
			password_error1.textContent = "Password should be at least 6 characters above";
			password.style.border = "1px solid red";	
			password.focus();
		 	return false;
		}
			else
			{
				// CONFIRMATION PASSWORD Required
				if(password_confirmation.value === "")
		{
			password_error2.textContent = "Password Confirmation Required";
			password_confirmation.style.border = "1px solid red";
			password.focus();
			return false;
		}
		else
			{
							// VALIDATE PASSWORD
		if (password.value !== password_confirmation.value)
			{
			password_error2.textContent = "The two passwords do not match";
			password.style.border = "1px solid red";
			password_confirmation.style.border = "1px solid red";
			password.focus();
			return false;	
		}
			else
			{
				// VALIDATE CONTACT NUMBER
		if(contact_number.value.toString().length < 11 || contact_number.value.toString().length > 11)
		{
			contactnumber_error.textContent = "Contact Number is required and must be exactly 11 digits";
			contact_number.style.border = "1px solid red";
			contact_number.focus();
			return false;
		}
		else
		{
			/*if(genderx.value == "")
			{
				gender_error.textContent = "Gender Required";
				gender.style.border = "1px solid red";
				gender.focus();
				return false;
			}*/
				
}
}
}
}
}
	}
		}
}
	// ADD EVENT LISTENERS
	function nameVerifyLength()
	{
		if ( username.value.toString().length > 7)
		{
			name_error.innerHTML = "";
			username.style.border = "1px solid #110E0F";
			return true;
		}
	}
	function firstnameVerify()
	{
		if(first_name.value !== "")
		{
			firstname_error.innerHTML = "";
			first_name.style.border = "1px solid #110E0F";
			return true;
		}
	}
	function lastnameVerify()
	{
		if(last_name.value !== "")
		{
			lastname_error.innerHTML = "";
			last_name.style.border = "1px solid #110E0F";
			return true;
		}
	}
	function contactnumberVerify()
	{
		if(contact_number.value.toString().length == 11)
		{
			contactnumber_error.innerHTML = "";
			contact_number.style.border = "1px solid #110E0F";
			return true;
		}
	}
	function genderVerify()
	{
		if(rad.value !== "")
		{
			gender_error.innerHTML = "";
			gender.style.border = "1px solid #110E0F";
			return true;
		}
	}
	function passwordVerify()
	{
		if(password.value.toString().length >= 6)
		{
			password_error.innerHTML = "";
			password.style.border = "1px solid #110E0F";
			return true;
		}
	}
		/*function radioChecker(gender)
		{
			var i;
			for(i=0;i<gender.length;i++)
			{
				if(gender[i].checked)
				{
					return gender[i].value;
				}
				
			}
		}
		function genderVerify()
		{
			if(gender.value != "")
			{
				gender_error.innerHTML = "";
				gender.style.border =  "1px solid #110E0F";
			}
		}
	/*function confirmationpasswordVerify()
	{
			if(password_confirmation.value != "")
			{
				password_error.innerHTMl = "";
				password_confirmation.style.border = "1px solid #110E0F";
				return true;
			}
	}
	}
	*/
</script>