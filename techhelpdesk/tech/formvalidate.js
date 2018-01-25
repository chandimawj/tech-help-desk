function formValidation()  
{  
	var name = document.regform.name;  
	var password = document.regform.password;  
	var email = document.regform.email;  
	var phone = document.regform.phone;  
	var field = document.regform.field;  
	
	if(allLetter(name))   
	{  
		if(pass_validation(password,4,10))  
		{  
			if(validateEmail(email))  
			{  
				if(allnumeric(phone)) 
				{  
					if(checkRadio(field)) 
					{
						return true;
					}
				}  			 
			}   
		}  		  
	}  
	  
	return false;  
  
} 
function pass_validation(pass,mx,my)  
{  
	var pass_len = pass.value.length;  
	if (pass_len == 0 ||pass_len >= my || pass_len < mx)  
	{  
		alert("Password should not be empty / length be between "+mx+" to "+my);  
		pass.focus();  
		return false;  
	}  
	return true;  
}  
function allLetter(name)  
{   
	var letters = /^[A-Za-z]+$/;  
	if(name.value.match(letters))  
	{  
		return true;  
	}  
	else  
	{  
		alert('Username must have alphabet characters only');  
		name.focus();  
		return false;  
	}  
}  
function allnumeric(phone)  
{   
	var numbers = /^[0-9]+$/;  
	if(phone.value.match(numbers))  
	{  
		return true;  
	}  
	else  
	{  
		alert('Phone number must have numeric characters only');  
		phone.focus();  
		return false;  
	}  
}  
function validateEmail(email)  
{  
	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
	if(email.value.match(mailformat))  
	{  
		return true;  
	}  
	else  
	{  
		alert("You have entered an invalid email address!");  
		email.focus();  
		return false;  
	}  
} 
function checkRadio(field)
{
  for(var i=0; i < field.length; i++) {
    if(field[i].checked) return true;
  }
  alert("You have to select a field");
  return false;
}