function formValidation(){ 
 
    
	var fname =  document.getElementById('fname');
	var lname =  document.getElementById('lname');
	var address =  document.getElementById('address');    
	var email =  document.getElementById('email');  
    var nic =  document.getElementById('nic'); 
    var tel =  document.getElementById('tel');
	
	var psw = document.getElementById('psw');
    
     if(fname.value.length == 0){
	 document.getElementById('head').innerText = "* All fields are mandatory *";
	     
	 fname.focus();        
	 return false;     
	 }         
	     
	 if(inputAlphabet(fname, "* For your first name please use alphabets only *")){  
	 if(inputAlphabet(lname, "* For your last name please use alphabets only *")){ 
	 if(emailValidation(email, "* Please enter a valid email address *")){ 
	 
		          
	 if(textAlphanumeric(address, "* For Address please use numbers and letters *")){         
	 if(textNumeric(tel, "* For Telephone num please use numbers *")){  
	 	 
	 if(textAlphanumeric(nic, "* Please enter a valid nic*")){
		 if(psw.value.length == 0){
			document.getElementById('p12').innerText = "* Password is compulsory *";
	     
				psw.focus();        
				return false;     
				}         
		 
		return true;                         
	 
	 }                
	 }             
	 }       
	 }     
	 }
	 }	
	 }
	 }

	 return false;    



	
	 
 
}
 
function textNumeric(inputtext, alertMsg){  
   var numericExpression = /^[0-9]+$/;  
   if(inputtext.value.match(numericExpression)){     
   return true;   
   }else
   {
   document.getElementById('p7').innerText = alertMsg; 
  
   
      
   inputtext.focus();      
   return false;    
   } 
}


   function inputAlphabet(inputtext, alertMsg){
	   var alphaExp = /^[a-zA-Z]+$/;   
	   if(inputtext.value.match(alphaExp)){  
       return true;   
	   }else{  
       document.getElementById('p1').innerText = alertMsg; 
		 
	       
	   inputtext.focus();    
	   return false;     } } 
 
 

 
function textAlphanumeric(inputtext, alertMsg){  
   var alphaExp = /^[0-9a-zA-Z]+$/;     
   if(inputtext.value.match(alphaExp)){ 
   return true;   
   }else{     
   document.getElementById('p5').innerText = alertMsg; 
     
   inputtext.focus();       
   return false;     } } 
 
 
 
   function inputAlphabet(inputtext, alertMsg){
	   var alphaExp = /^[a-zA-Z]+$/;   
	   if(inputtext.value.match(alphaExp)){  
       return true;   
	   }else{  
       document.getElementById('p2').innerText = alertMsg; 
		 
	       
	   inputtext.focus();    
	   return false;     }  
 
 
function emailValidation(inputtext, alertMsg){  
   var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/; 
   if(inputtext.value.match(emailExp)){   
   return true;   
   }else{      
   document.getElementById('p6').innerText = alertMsg;
        
   inputtext.focus();    
   return false;     } 
   } 