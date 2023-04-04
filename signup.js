function sform() {
  var name = document.signup.name.value;
  var email = document.signup.email.value;
  var phone = document.signup.phone.value;
  var nid = document.signup.nid.value;
  var fpassword = document.signup.password.value;
  var spassword = document.signup.password2.value;

  // Name cannot be empty
  if (name == null || name == "") {
    alert("Name can't be blank");
    return false;
  }

  //email
  if (email == null || email == "") {
    alert("Email can't be blank");
    return false;
  } else if (
    !/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(signup.email.value)
  ) {
    return false;
  }

  //phone
  if (phone == null || phone == "") {
    alert("Contact no. can't be blank");
    return false;
  } else if (!/^[0-9]+$/.test(signup.phone.value)) {
    alert("Enter numeric character only");
    return false;
  }

  //nid
  if (nid == null || nid == "") {
    alert("NID no. can't be blank");
    return false;
  } else if (!/^[0-9]+$/.test(signup.nid.value)) {
    alert("Enter numeric character only");
    return false;
  }

  // Password length is between 8-32 chars
  if (fpassword == null || fpassword == "") {
    alert("Password no. can't be blank");
    return false;
  } else if (fpassword.length < 6) {
    alert("Password length must be more than 6 chars");
    return false;
  }

  // Retype password
  if (spassword == null || spassword == "") {
    alert("Retype password");
    return false;
  } else if(fpassword != spassword) {
    alert("Retype password correctly");
    return false;
  } 
}
