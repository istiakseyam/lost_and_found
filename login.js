function lform(){  
    var email=document.login.email.value;  
    var password=document.login.password.value;  
      
    if (email==null || email==""){  
      alert("Email can't be blank");  
      return false;  
    }else if(password.length<6){  
      alert("Password can't be blank.");  
      return false;  
      }  
    }  