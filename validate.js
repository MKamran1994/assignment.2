 function validateForm() {
      
         if( document.myForm.email.value == "" ) {
            alert( "Please provide your Email!" );
            document.myForm.email.focus() ;
            return false;
         }
         if( document.myForm.pass.value == "" ) {
            alert( "Please provide your Password!" );
            document.myForm.pass.focus() ;
            return false;
         }
        
         return( true );
    

    var emailID = document.myForm.email.value;
         atpos = emailID.indexOf("@");
         dotpos = emailID.lastIndexOf(".");
         
         if (atpos < 1 || ( dotpos - atpos < 2 )) {
            alert("Please enter correct email ID")
            document.myForm.email.focus() ;
            return false;
         }
         return( true );
     }