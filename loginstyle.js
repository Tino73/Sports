function login() {	
	var username = document.getElementById("username").value;
	var password = document.getElementById("password").value;
	if (username == "") {
		alert("Please enter the username.");
		return false;
	}
	if (password == "") {
		alert("Please enter the password.");
		return false;
	}
	alert('Login successful');
            
} 

function register() {	
	var email = document.getElementById("email").value;
	var username = document.getElementById("username").value;
	var password = document.getElementById("password").value;
	if (email == "") {
		alert("Please enter the email.")
		return false;
	}
	if (username == "") {
		alert("Please enter the username.");
		return false;
	}
	if (password == "") {
		alert("Please enter the password.");
		return false;
	}
	alert('Register successful');
            
} 