//Set input errors
const setError = (element, message) => {
  const errorDisplay = element.querySelector('.error');
  const inputField = element.querySelector('.p-2');
  if (inputField.classList.contains('border')) {
    inputField.classList.remove('border-2', 'border-green-800', 'dark:border-green-800', 'dark:border-gray-600');
    inputField.classList.add('border-2', 'border-red-800', 'dark:border-red-800');

  }
  errorDisplay.innerText = message;
}

//Remove input errors
const unsetError = (element) => {
  const errorDisplay = element.querySelector('.error');
  const inputField = element.querySelector('.p-2');
  if (inputField.classList.contains('border')) {
    inputField.classList.remove('border-2', 'border-red-800', 'dark:border-red-800');
  }
  errorDisplay.innerText = "";
}

//Set input success
const setSuccess = (element) => {
  const errorDisplay = element.querySelector('.error');
  errorDisplay.innerText = "";
  const inputField = element.querySelector('.p-2');
  if (inputField.classList.contains('border')) {
    inputField.classList.remove('border-2', 'border-red-800', 'dark:border-red-800', 'dark:border-gray-600');
    inputField.classList.add('border-2', 'border-green-800', 'dark:border-green-800');
  }
}

//Validate Login
function validateLoginInputs() {

  if (!validateEmailLogin() || !validatePasswordLogin()) {
    return false;
  } else {
    return true;
  }
}

function validateEmailLogin() {
  const emailDiv = document.getElementById("loginEmailDiv");
  const email = document.getElementById("loginEmail");
  const emailValue = email.value.trim();
  if (emailValue === "") {
    setError(emailDiv, "The email is required");
    return false;
  } else {
    unsetError(emailDiv);
    return true;
  }
}

function validatePasswordLogin() {
  const password = document.getElementById("passwordLogin");
  const passwordValue = password.value.trim();
  const passwordDiv = document.getElementById("loginPassowrdDiv");

  if (passwordValue === "") {
    setError(passwordDiv, "The password is required");
    return false;
  } else {
    unsetError(passwordDiv);
    return true;
  }
}

//Validate Register
function validateRegisterInputs() {
  if (!validateFirstName() || !validateSurname() || !validateEmail() || !validateAddress() || !validatePhone() || !validatePassword() || !validateCheckbox()) {
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

function validatePhone() {
  const phonePattern = /(9[1236][0-9]) ?([0-9]{3}) ?([0-9]{3})/;
  const rPhone = document.getElementById("registrationPhone");
  const phoneValue = rPhone.value.trim();
  const phoneDiv = document.getElementById("phoneDiv");

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

function validatePassword() {
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

function validateCheckbox() {
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

//Edit profile
function editProfile() {
  console.log("editar");
  //Inputs
  let inputFirstName = document.getElementById("registrationFirstName");
  let inputSurname = document.getElementById("registrationSurname");
  let inputEmail = document.getElementById("registrationEmail");
  let inputAddress = document.getElementById("registrationAddress");
  let inputPhone = document.getElementById("registrationPhone");

  //Buttons
  let editButton = document.getElementById("editButton");
  let saveButton = document.getElementById("saveButton");
  let deleteButon = document.getElementById("deleteButon");
  let cancelButon = document.getElementById("cancelButon");
  let logoutButon = document.getElementById("logoutButon");

  editButton.classList.add("hidden");
  deleteButon.classList.remove("hidden");
  saveButton.classList.remove("hidden");
  cancelButon.classList.remove("hidden");
  logoutButon.classList.add("hidden");

  inputFirstName.removeAttribute("disabled");
  inputSurname.removeAttribute("disabled");
  inputEmail.removeAttribute("disabled");
  inputAddress.removeAttribute("disabled");
  inputPhone.removeAttribute("disabled");
}

function cancelEditProfile(event) {
  console.log("cancelar");
  event.preventDefault();
  //Inputs
  let inputFirstName = document.getElementById("registrationFirstName");
  let inputSurname = document.getElementById("registrationSurname");
  let inputEmail = document.getElementById("registrationEmail");
  let inputAddress = document.getElementById("registrationAddress");
  let inputPhone = document.getElementById("registrationPhone");

  //Buttons
  let editButton = document.getElementById("editButton");
  let saveButton = document.getElementById("saveButton");
  let deleteButon = document.getElementById("deleteButon");
  let cancelButon = document.getElementById("cancelButon");
  let logoutButon = document.getElementById("logoutButon");

  editButton.classList.remove("hidden");
  deleteButon.classList.add("hidden");
  saveButton.classList.add("hidden");
  cancelButon.classList.add("hidden");
  logoutButon.classList.remove("hidden");

  inputFirstName.setAttribute("disabled", true);
  inputSurname.setAttribute("disabled", true);
  inputEmail.setAttribute("disabled", true);
  inputAddress.setAttribute("disabled", true);
  inputPhone.setAttribute("disabled", true);
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
  let mobileMenu = document.getElementById("mobileMenu");
  mobileMenu.classList.toggle("hidden");
  mobileMenu.classList.toggle("block");
}

function dropdwonClicked() {
  let dropdownList = document.getElementById("dropdownList");
  let dropdownList2 = document.getElementById("dropdownList2");
  dropdownList.classList.toggle("hidden");
  dropdownList2.classList.toggle("hidden");
}

// DARK MODE
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

//Product View Images
let mainImg = document.getElementById("mainImg");
let smallImgs = document.getElementsByClassName("smallImg");

let smallImgsArray = Array.from(smallImgs);


function smallImg0() {
  mainImg.src = smallImgs[0].src;
  smallImgsArray.forEach(smallImg => {
    smallImg.classList.remove("border-4", "border-blue-800");
  });
  smallImgs[0].classList.add("border-4", "border-blue-800");
}
function smallImg1() {
  mainImg.src = smallImgs[1].src;
  smallImgsArray.forEach(smallImg => {
    smallImg.classList.remove("border-4", "border-blue-800");
  });
  smallImgs[1].classList.add("border-4", "border-blue-800");
}
function smallImg2() {
  mainImg.src = smallImgs[2].src;
  smallImgsArray.forEach(smallImg => {
    smallImg.classList.remove("border-4", "border-blue-800");
  });
  smallImgs[2].classList.add("border-4", "border-blue-800");
}
function smallImg3() {
  mainImg.src = smallImgs[3].src;
  smallImgsArray.forEach(smallImg => {
    smallImg.classList.remove("border-4", "border-blue-800");
  });
  smallImgs[3].classList.add("border-4", "border-blue-800");
}
function smallImg4() {
  mainImg.src = smallImgs[4].src;
  smallImgsArray.forEach(smallImg => {
    smallImg.classList.remove("border-4", "border-blue-800");
  });
  smallImgs[4].classList.add("border-4", "border-blue-800");
}

const output = document.querySelector("#imagesPreview")
const input = document.querySelector("#imagesInput")
let imagesArray = []

input.addEventListener("change", () => {
  const files = input.files
  for (let i = 0; i < files.length; i++) {
    imagesArray.push(files[i])
  }
  displayImages()
})

function displayImages() {
  let images = ""
  imagesArray.forEach((image, index) => {
    images += `<div class="image">
                <img src="${URL.createObjectURL(image)}" alt="image">
                <span onclick="deleteImage(${index})">&times;</span>
              </div>`
  })
  output.innerHTML = images
}

function deleteImage(index) {
  imagesArray.splice(index, 1)
  displayImages()
}