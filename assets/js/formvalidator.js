function validate() 
{
	
	if (document.myForm.Email.value=="")
	 {
	 	alert("Please provide your Email first !!");
	 	document.myForm.Email.focus();
	 	return false;
	 }
	
	
	if (document.myForm.Password.value=="") 
	{
		alert("Please provide your Password first !!");
		documnet.myForm.Password.focus();
		return false;
	}

	if (document.myForm.Activation_code.value=="") 
	{
		alert("Please provide an Activation code sent to your email !!");
		documnet.myForm.Activation_code.focus();
		return false;
	}

		
	 return true;
}

