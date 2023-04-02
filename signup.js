function sform() {
  var name = document.signup.name.value;
  var email = document.signup.email.value
  var phone = document.signup.phone.value;
  var nid = document.signup.nid.value
  var password = document.signup.password.value;
  var cpassword = document.signup.cpassword.value;


  //name
  if (name == null || name == "") {
    alert("Name can't be blank");
    return false;
  }

  //email
  if (email==null || email==""){  
    alert("Email can't be blank");  
    return false; 
  }else if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(signup.email.value)) {
    return (true)
  }

  //phone
  if (phone==null || phone==""){  
    alert("Contact no. can't be blank");  
    return false; 
  }else if (!/^[0-9]+$/.test(signup.phone.value)) {
    alert("Enter numeric character only")
  }

  //nid
  if (nid==null || nid==""){  
    alert("NID no. can't be blank");  
    return false; 
  }else if (!/^[0-9]+$/.test(signup.phone.value)) {
    alert("Enter numeric character only")
  }

  //password
  if (password==null || password==""){  
    alert("NID no. can't be blank");  
    return false; 
  }else if (!/^[0-9]+$/.test(signup.phone.value)) {
    alert("Enter numeric character only")
  }
 

}
