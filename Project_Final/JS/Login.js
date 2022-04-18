function validation()
{
	var myusername = document.forms['form']['myusername'];
	var password = document.forms['form']['password'];


	let retval = 1;
	
	if(myusername.value === "" ){
		retval = 0;
		document.getElementById("show1").textContent = "*Username cannot be empty*";
		document.getElementById("show1").style.color = "red";
	}

	
	
	if(password.value === "") {
		retval = 0;
			document.getElementById("show4").textContent = "*password cannot be empty*";
			document.getElementById("show4").style.color = "red";
		}
		

	if(retval == 0) return false;
	return true;
}