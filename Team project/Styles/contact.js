function $(id) {
		   var element = document.getElementById(id);
		   if(element == null)
		      alert('Programmer error: ' + id + ' does not exist.')
			  return element;
		}
		function testUserName(id){
			var testNamePattern = /^([a-zA-Z]{1,15})$/;
			var nameValue = $(id).value;
			if (testNamePattern.test(nameValue))
				return true;
		}
		//Warning for selection value
		function warnUserName(id){
		if (!testUserName(id))
          document.getElementById("usernamewarn").innerHTML = "Please enter a valid username";
		else
		   document.getElementById("usernamewarn").innerHTML = " ";
        }
		function testEmail(id){
			var testEmailPattern = /(.com|.ca|.org)$/;
			var emailValue = $(id).value;
			if (testEmailPattern.test(emailValue))
				return true;
		}
		
		//Warning for invalid email format
		function warnEmail(id){
			if(!testEmail(id))
              document.getElementById("emailwarn").innerHTML = "Please enter a valid email";
		else
		   document.getElementById("emailwarn").innerHTML = " ";
		}