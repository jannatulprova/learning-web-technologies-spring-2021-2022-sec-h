function validation()
{
	var myname = document.forms['form']['myname'];
	var myemail = document.forms['form']['myemail'];
	var myemployid = document.forms['form']['myemployid'];
	var myusername = document.forms['form']['myusername'];
	var password = document.forms['form']['password'];
	var confirmpassword = document.forms['form']['confirmpassword'];


	let retval = 1;
	
	if(myname.value === ""){
		//myname.value = "**Field cannot be left empty**";
		//myname.style.color = "red";
		retval = 0;
		document.getElementById("show").textContent = "*Name cannot be empty*";
		document.getElementById("show").style.color = "red";
	}
	if(myemail.value === ""){
		//email.value = "**Field cannot be left empty**";
		//email.style.color = "red";
		retval = 0;
		document.getElementById("show3").textContent = "*Email cannot be empty*";
		document.getElementById("show3").style.color = "red";
	}
	if(myemployid.value === ""){
		//email.value = "**Field cannot be left empty**";
		//email.style.color = "red";
		retval = 0;
		document.getElementById("show6").textContent = "*Employ ID cannot be empty*";
		document.getElementById("show6").style.color = "red";
	}
	if(myusername.value === "" || myusername.value.length <= 3 ){
		retval = 0;
		if(myusername.value === ""){
		document.getElementById("show1").textContent = "*Username cannot be empty*";}
		else{
			document.getElementById("show1").textContent = "*Username must have to be at least 3 characters*";
		}
		    document.getElementById("show1").style.color = "red";
	}

	
	if(password.value != confirmpassword.value || password.value === ""){
		if(password.value === "") {
			document.getElementById("show5").textContent = "*password and confirm password cannot be empty*";
			document.getElementById("show4").textContent = "*password and confirm password cannot be empty*";
		}
		else{
			document.getElementById("show5").textContent = "*password and confirm password does not match*";
			document.getElementById("show4").textContent = "*password and confirm password does not match*";
		}
		document.getElementById("show5").style.color = "red";
		document.getElementById("show4").style.color = "red";
		retval = 0;
	}
	if(password.value.length < 5)
	{
		document.getElementById("show5").textContent = "*password must have to be at least be 5 characters*";
		document.getElementById("show4").textContent = "*password must have to be at least be 5 characters*";
		document.getElementById("show5").style.color = "red";
		document.getElementById("show4").style.color = "red";
		retval = 0;
	}

	if(retval == 0) return false;
	return true;
}