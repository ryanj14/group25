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
		
		function testName(id){
			var testNamePattern = /^([a-zA-Z]{1,15})$/;
			var nameValue = $(id).value;
			if (testNamePattern.test(nameValue))
				return true;
		}
		
		//Warning for invalid name format
		function warnTestName(id){
		       if (!testName(id)) {
			    $('fname').className='error';
				$('nameposition').innerHTML="You can only use letters for names,up to 15 characters";
		        return false;
				} else {
				$('fname').className='';
				$('nameposition').innerHTML="";
				return true;
		}
		}
		function warnTestLastName(id){
		       if (!testName(id)) {
			    $('lname').className='error';
				$('Lnameposition').innerHTML="You can only use letters for names,up to 15 characters";
		        return false;
				} else {
				$('lname').className='';
				$('Lnameposition').innerHTML="";
				return true;
		}
		}
		
		function testPassword(id){
			var testPassPattern = /^([a-z0-9]{6,15})$/;
			var passValue = $(id).value;
			if (testPassPattern.test(passValue))
				return true;
		}
		
		//Warning for invalid name format
		function warnPassword(id){
		       if (!testPassword(id)) {
			    $('password').className='error';
				$('passposition').innerHTML="start with a lower letter and combine with numbers,up to 15 characters";
		        return false;
				} else {
				$('password').className='';
				$('passposition').innerHTML="";
				return true;
		}
		}
		
		
		
		
		
		function formValidate(){
	
         if(warnTestName('fname') & warnPassword('password')&warnTestLastName('lname'))
		 {
		 return true;
		 } else {
		 return false;
        }
         }
        
	
        		 