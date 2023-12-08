
// const form = document.getElementById("form");

// form.addEventListener("submit", (e) => {
//   e.preventDefault();
//   console.log(e);
//   let name = e.target.nom.value
//   let lastname = e.target.lastNom.value
//   let email = e.target.subject.value
//   let password = e.target.password.value
//   let passwordConfirm = e.target.passwordConfirm.value

  
//   console.log(name);
 

  
//   const emailError = document.querySelector("#email-error");
//   const nameError = document.querySelector("#name-error");
//   const lastNomError = document.querySelector("#lastNomError");
//   const passwordError = document.querySelector("#password-error");
//   const confirmError = document.querySelector("#confirm-error");
  

  
//   const emailRegex = /^[a-z0-9]+@[a-z]+\.[a-z]{2,3}$/;
//   const nameRegex = /^[A-Za-zs]+$/;
//   const lastnameRegex = /^[A-Za-zs]+$/;
//   const passwordRegex = /^[A-Za-zs]+$/;
//   const confirmRegex = /^[A-Za-zs]+$/;
  
  
//   if(!nameRegex.test(name)){
  
//      nameError.classList.toggle("hidden")
    
//   }
//   if(!lastnameRegex.test(lastname)){
  
//      lastNomError.classList.toggle("hidden")
    
//   }
//   if(!passwordRegex.test(password)){
  
//      passwordError.classList.toggle("hidden")
    
//   }
//   if(!confirmRegex.test(passwordConfirm)){
  
//     confirmError.classList.toggle("hidden")
    
//   }
//   if(!emailRegex.test(email)){
 
    
//     emailError.classList.toggle("hidden")
//   }
 
 
 
// })

const form = document.getElementById("form");
const submit = document.getElementById("submit");
const fname = document.getElementById("first_name");
const lname = document.getElementById("last_name");
const email = document.getElementById("email");
const phone = document.getElementById("phone");

const validateFirstName = () => {
  const fnameError = document.getElementById("fname-error");
  if (fname.value.trim() === "") {
    handleError(fname, fnameError, "Your first name is required");
    return false;
  } else if (!fname.value.match(/^[A-Za-z]+\s{1}[A-Za-z]+$/)) {
    handleError(fname, fnameError, "Invalid Name");
    return false;
  } else {
    handleValid(fname, fnameError, "Valid");
    return true;
  }
};
const validateLastName = () => {
  const lnameError = document.getElementById("lname-error");
  if (lname.value.trim() === "") {
    handleError(lname, lnameError, "Your last name is required");
    return false;
  } else if (!lname.value.match(/^[A-Za-z]+\s{1}[A-Za-z]+$/)) {
    handleError(lname, lnameError, "Invalid Name");
    return false;
  } else {
    handleValid(lname, lnameError, "Valid");
    return true;
  }
};
const validateEmail = () => {
  const emailError = document.getElementById("email-error");
  if (email.value.trim() === "") {
    handleError(email, emailError, "Email is required");
    return false;
  } else if (
    !email.value.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/g)
  ) {
    handleError(email, emailError, "Invalid email");
    return false;
  } else {
    handleValid(email, emailError);
    return true;
  }
};

const validatePhone = () => {
  const phoneError = document.getElementById("phone-error");
  if (phone.value.trim() === "") {
    handleError(phone, phoneError, "Phone is required");
    return false;
  } else if (!phone.value.match(/^\+212[6-7]\d{8}$/)) {
    handleError(phone, phoneError, "Invalid phone");
    return false;
  } else {
    handleValid(phone, phoneError);
    return true;
  }
};

const validateForm = () => {
  const isFirstNameValid = validateFirstName();
  const isLastNameValid = validateLastName();
  const isEmailValid = validateEmail();
  const isPhoneValid = validatePhone();

  if (isFirstNameValid && isLastNameValid && isEmailValid && isPhoneValid) {
    // Form submission logic, e.g., form.submit();
    alert("Form submitted successfully!");
  } else {
    alert("Form validation failed. Please check the errors.");
  }
};

submit.addEventListener("click", validateForm);