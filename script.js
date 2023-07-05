const usernameValidate = () =>{
  console.log("Working");
  const username = document.getElementById("username").value;
  // re = /^(?=[a-zA-Z0-9._]{8,20}$)(?!.*[_.]{2})[^_.].*[^_.]$/;
  re =  /^[a-zA-Z0-9]+([._]?[a-zA-Z0-9]+)*$/;
  if(!re.test(username)){
    document.getElementById("user-error").textContent = 
    "Pleas enter a valid username(a-zA-z0-9 , _ , .)";
    return false;
  }
  else{
    document.getElementById("user-error").textContent = "";
    return true;
  }
};
const emailValidate = () => {
    console.log("working");
    const email = document.getElementById("email").value;
    re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!re.test(email)) {
      document.getElementById("email-error").textContent =
        "Please enter valid email with @ & .";
      return false;
    } else {
      document.getElementById("email-error").textContent = "";
      return true;
    }
  };
  
  const passwordValidate = () => {
    console.log("working");
    const pass = document.getElementById("password").value;
   // const cpass = document.getElementById("cpass").value;
  
    re = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/;
    if (!re.test(pass)) {
      document.getElementById("pass-error").textContent =
        "Minimum eight characters, at least one letter, one number and one special character";
      return false;
    } else {
      document.getElementById("pass-error").textContent = "";
    //   if (cpass !== pass) {
    //     document.getElementById("cpass-error").textContent =
    //       "Passwords must be same";
    //     return false;
    //   } else {
    //     document.getElementById("cpass-error").textContent = "";
    //   }
  
      return true;
    }
  };
  
  const formValidate = () => {
    if (emailValidate() && passwordValidate()) {
      return true;
    }
    return false;
  };
  
  