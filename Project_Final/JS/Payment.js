function validation()
{
	var student_name = document.forms['form']['student_name'];
	var teacher_name = document.forms['form']['teacher_name'];
	var course_name = document.forms['form']['course_name'];
	var payment = document.forms['form']['payment'];
	var bkash_num = document.forms['form']['bkash_num'];
	


	let retval = 1;
	
	if(student_name.value === "" ){
		retval = 0;
		document.getElementById("show0").textContent = "*Student Name cannot be empty*";
		document.getElementById("show0").style.color = "red";
	}

	if(teacher_name.value === "" ){
		retval = 0;
		document.getElementById("show9").textContent = "*Teacher Name cannot be empty*";
		document.getElementById("show9").style.color = "red";
	}

	if(course_name.value === "" ){
		retval = 0;
		document.getElementById("show8").textContent = "*Course Name cannot be empty*";
		document.getElementById("show8").style.color = "red";
	}

	if(payment.value === "" ){
		retval = 0;
		document.getElementById("show11").textContent = "*Payment cannot be empty*";
		document.getElementById("show11").style.color = "red";
	}


	if(bkash_num.value === "" ){
		retval = 0;
		document.getElementById("show7").textContent = "*Bkash Number cannot be empty*";
		document.getElementById("show7").style.color = "red";
	}
		

	if(retval == 0) return false;
	return true;
}