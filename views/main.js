//On click login form

//Set input errors
const setError = (element, message) => {
  const errorDisplay = element.querySelector('.error');
  const inputField = element.querySelector('.p-2');
  if (inputField.classList.contains('border')) {
    inputField.classList.remove('border-2', 'border-green-800');
    inputField.classList.add('border-2', 'border-red-800');
  }
  errorDisplay.innerText = message;
}

//Remove input errors
const unsetError = (element) => {
  const errorDisplay = element.querySelector('.error');
  const inputField = element.querySelector('.p-2');
  if (inputField.classList.contains('border')) {
    inputField.classList.remove('border-2', 'border-red-800');
  }
  errorDisplay.innerText = "";
}

//Set input success
const setSuccess = (element) => {
  const errorDisplay = element.querySelector('.error');
  errorDisplay.innerText = "";
  const inputField = element.querySelector('.p-2');
  if (inputField.classList.contains('border')) {
    inputField.classList.remove('border-2', 'border-red-800');
    inputField.classList.add('border-2', 'border-green-800');
  }
}

// document.addEventListener("DOMContentLoaded", () => {

//   const loginForm = document.getElementById("loginForm");
//   if (loginForm) {
//     loginForm.addEventListener("submit", (e) => {

//       validateLoginInsputs();
//     });
//   }

//   //On click registration form
//   const registrationForm = document.getElementById("registrationForm");
//   // if (registrationForm) {
//   //   registrationForm.addEventListener("submit", (e) => {
//   //     e.preventDefault();
//   //     validateRegisterInputs();
//   //   });
//   // }



//   //Validate Login
//   const validateLoginInputs = () => {
//     //textboxes
//     const email = document.getElementById("loginEmail");
//     const password = document.getElementById("passwordLogin");
//     //values
//     const emailValue = email.value.trim();
//     const passwordValue = password.value.trim();
//     //Error divs
//     const emailDiv = document.getElementById("loginEmailDiv");
//     const passwordDiv = document.getElementById("loginPassowrdDiv");

//     if (emailValue === "") {
//       setError(emailDiv, "The email is required");
//     } else {
//       unsetError(emailDiv);
//     }
//     if (passwordValue === "") {
//       setError(passwordDiv, "The password is required");
//     } else {
//       unsetError(passwordDiv)
//     }
//   }
// });

//Validate Register
function validateRegisterInputs() {
  if (!validateFirstName() || !validateSurname() || !validateEmail() || !validateAddress() || !validatePhone() || !validatePassword()  || !validateCheckbox()) {
    return false;
  } else {
    return true;
  }
};

function validateFirstName() {
  const rfirstName = document.getElementById("registrationFirstName");
  const firstNameValue = rfirstName.value.trim();
  const firstNameDiv = document.getElementById("firstNameDiv");
  if (firstNameValue === "") {
    setError(firstNameDiv, "The first name is required");
    return false;
  } else if (firstNameValue.length < 2) {
    setError(firstNameDiv, "The first name must have two characters");
    return false;
  } else {
    setSuccess(firstNameDiv);
    return true;
  }
}

function validateSurname() {
  const surnameDiv = document.getElementById("surnameDiv");
  const rSurname = document.getElementById("registrationSurname");
  const surnameValue = rSurname.value.trim();
  if (surnameValue === "") {
    setError(surnameDiv, "The surname is required");
    return false;
  } else if (surnameValue.length < 2) {
    setError(surnameDiv, "The surname must have two characters");
    return false;
  } else {
    setSuccess(surnameDiv);
    return true;
  }
}

function validateEmail() {
  const rEmail = document.getElementById("registrationEmail");
  const emailValue = rEmail.value.trim();
  const emailDiv = document.getElementById("emailDiv");
  const emailPattern = /[a-z0-9]+@[a-z]+\.[a-z]{2,3}/;
  if (emailValue === "") {
    setError(emailDiv, "The email is required");
    return false;
  } else if (!emailPattern.test(emailValue)) {
    setError(emailDiv, "Please check if the email address is valid");
    return false;
  } else {
    setSuccess(emailDiv);
    return true;
  }
}

function validateAddress() {
  const addressPattern = /^[a-zA-Z0-9 ]{10,50}$/;
  const rAddress = document.getElementById("registrationAddress");
  const addressDiv = document.getElementById("addressDiv");
  const addressValue = rAddress.value.trim();
  if (addressValue === "") {
    setError(addressDiv, "The address is required");
    return false;
  } else if (!addressPattern.test(addressValue)) {
    setError(addressDiv, "Please check if the address is valid");
    return false;
  } else {
    setSuccess(addressDiv);
    return true;
  }
}

function validatePhone(){
  const phonePattern = /(9[1236][0-9]) ?([0-9]{3}) ?([0-9]{3})/;
  const rPhone = document.getElementById("registrationPhone");
  const phoneValue = rPhone.value.trim();
  const phoneDiv = document.getElementById("phoneDiv");
  console.log("JOsé");

  if (phoneValue === "") {
    setError(phoneDiv, "The phone is required");
    return false;
  } else if (!phonePattern.test(phoneValue)) {
    setError(phoneDiv, "The phone number has to be Portuguese");
    return false;
  } else {
    setSuccess(phoneDiv);
    return true;
  }
}

function validatePassword(){
  const rPassword = document.getElementById("resgistrationPassword");
  const passwordValue = rPassword.value.trim();
  const passwordDiv = document.getElementById("passwordDiv");
  const passwordPattern = /^(?=.*[a-z])(?=.*\d)[a-zA-Z\d\w\W]{8,30}$/;

  if (passwordValue === "") {
    setError(passwordDiv, "The password is required");
    return false;
  } else if (!passwordPattern.test(passwordValue)) {
    setError(passwordDiv, "The password must contain letters and numbers and 8-35 characteres");
    return false;
  } else {
    setSuccess(passwordDiv);
    return true;
  }
}

function validateCheckbox(){
  const rCheckbox = document.getElementById("termsCheckbox");
  const checkboxDiv = document.getElementById("checkboxDiv");

  if (!rCheckbox.checked) {
    setError(checkboxDiv, "You have to accept the terms and conditions");
    return false;
  } else {
    setSuccess(checkboxDiv);
    return true;
  }
}

//Change password Visibility
function togglePasswordVisibility() {
  let passwordField = document.getElementById('resgistrationPassword');
  if (!passwordField) {
    passwordField = document.getElementById('passwordLogin');
  }
  const toggleBtn = document.getElementById('tooglePassword');
  const toggleBtnVisible = document.getElementById('tooglePasswordVisible');

  passwordField.type = passwordField.type === 'password' ? 'text' : 'password';
  toggleBtn.classList.toggle('hidden');
  toggleBtnVisible.classList.toggle('hidden');
}

//Hamburguer menu
function hamburguerClicked() {
  var mobileMenu = document.getElementById("mobileMenu");
  mobileMenu.classList.toggle("hidden");
  mobileMenu.classList.toggle("block");
}

// Theme Vars
const userTheme = localStorage.getItem("theme");
const systemTheme = window.matchMedia("(prefers-color-scheme: dark)").matches;

let moonIcon, sunIcon;

window.onload = function () {
  moonIcon = document.querySelector('#moon');
  sunIcon = document.querySelector('#sun');
  themeCheck();
}

const themeCheck = () => {
  if (userTheme == 'dark' || (!userTheme && systemTheme)) {
    document.documentElement.classList.add('dark');
    moonIcon.classList.add("hidden");
    return;
  }
  sunIcon.classList.add("hidden");
}

// Manual Theme Switch
const themeSwitch = () => {
  if (document.documentElement.classList.contains('dark')) {
    document.documentElement.classList.remove("dark");
    localStorage.setItem("theme", "light");
  } else {
    document.documentElement.classList.add("dark");
    localStorage.setItem("theme", "dark");
  }
  iconToogle();
}

// Icon Toggling
const iconToogle = () => {
  sunIcon.classList.toggle("hidden");
  moonIcon.classList.toggle("hidden")
}

//Toogle button
document.addEventListener('DOMContentLoaded', function () {
  const darkToogle = document.querySelector('.toogle-dark');
  darkToogle.addEventListener('click', (e) => {
    themeSwitch();
  });
});
