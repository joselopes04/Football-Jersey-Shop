//On click login form
document.addEventListener("DOMContentLoaded", () => {

  const loginForm = document.getElementById("loginForm");
  if (loginForm) {
    loginForm.addEventListener("submit", (e) => {
      e.preventDefault();
      validateLoginInsputs();
    });
  }

  //On click registration form
  const registrationForm = document.getElementById("registrationForm");
  if (registrationForm) {
    registrationForm.addEventListener("submit", (e) => {
      e.preventDefault();
      validateRegisterInputs();
    });
  }

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

  //Validate Login
  const validateLoginInputs = () => {
    //textboxes
    const email = document.getElementById("loginEmail");
    const password = document.getElementById("passwordLogin");
    //values
    const emailValue = email.value.trim();
    const passwordValue = password.value.trim();
    //Error divs
    const emailDiv = document.getElementById("loginEmailDiv");
    const passwordDiv = document.getElementById("loginPassowrdDiv");

    if (emailValue === "") {
      setError(emailDiv, "The email is required");
    } else {
      unsetError(emailDiv);
    }
    if (passwordValue === "") {
      setError(passwordDiv, "The password is required");
    } else {
      unsetError(passwordDiv)
    }
  }

  //Validate Register
  const validateRegisterInputs = () => {
    //textboxes
    const rfirstName = document.getElementById("registrationFirstName");
    const rSurname = document.getElementById("registrationSurname");
    const rEmail = document.getElementById("registrationEmail");
    const rPhone = document.getElementById("registrationPhone");
    const rAddress = document.getElementById("registrationAddress");
    const rPassword = document.getElementById("resgistrationPassword");
    const rCheckbox = document.getElementById("termsCheckbox");
    //Values
    const firstNameValue = rfirstName.value.trim();
    const surnameValue = rSurname.value.trim();
    const emailValue = rEmail.value.trim();
    const addressValue = rAddress.value.trim();
    const phoneValue = rPhone.value.trim();
    const passwordValue = rPassword.value.trim();

    //Error Divs
    const firstNameDiv = document.getElementById("firstNameDiv");
    const surnameDiv = document.getElementById("surnameDiv");
    const emailDiv = document.getElementById("emailDiv");
    const addressDiv = document.getElementById("addressDiv");
    const phoneDiv = document.getElementById("phoneDiv");
    const passwordDiv = document.getElementById("passwordDiv");
    const checkboxDiv = document.getElementById("checkboxDiv");

    //Patterns
    const emailPattern = /[a-z0-9]+@[a-z]+\.[a-z]{2,3}/;
    const phonePattern = /(9[1236][0-9]) ?([0-9]{3}) ?([0-9]{3})/;
    const addressPattern = /^[a-zA-Z0-9]{10,50}$/;
    const passwordPattern = /^(?=.*[a-z])(?=.*\d)[a-zA-Z\d\w\W]{8,30}$/;

    if (firstNameValue === "") {
      setError(firstNameDiv, "The first name is required");
    } else if (firstNameValue.length < 2) {
      setError(firstNameDiv, "The first name must have two characters");
    } else {
      setSuccess(firstNameDiv);
    }

    if (surnameValue === "") {
      setError(surnameDiv, "The surname is required");
    } else if (surnameValue.length < 2) {
      setError(surnameDiv, "The surname must have two characters");
    } else {
      setSuccess(surnameDiv);
    }

    if (emailValue === "") {
      setError(emailDiv, "The email is required");
    } else if (!emailPattern.test(emailValue)) {
      setError(emailDiv, "Please check if the email address is valid");
    } else {
      setSuccess(emailDiv);
    }

    if (addressValue === "") {
      setError(addressDiv, "The address is required");
    } else if (!addressPattern.test(addressValue)) {
      setError(addressDiv, "Please check if the address is valid");
    } else {
      setSuccess(addressDiv);
    }

    if (phoneValue === "") {
      setError(phoneDiv, "The phone is required");
    } else if (!phonePattern.test(phoneValue)) {
      setError(phoneDiv, "The phone number has to be Portuguese");
    } else {
      setSuccess(phoneDiv);
    }

    if (passwordValue === "") {
      setError(passwordDiv, "The password is required");
    } else if (!passwordPattern.test(passwordValue)) {
      setError(passwordDiv, "The password must contain letters and numbers and 8-35 characteres");
    } else {
      setSuccess(passwordDiv);
    }

    if (!rCheckbox.checked) {
      setError(checkboxDiv, "You have to accept the terms and conditions");
    } else {
      setSuccess(checkboxDiv);
    }

  };
});

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

window.onload = function() {
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
