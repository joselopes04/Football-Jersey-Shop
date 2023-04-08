document.addEventListener("DOMContentLoaded", () => {
  const loginForm = document.getElementById("loginForm");
  if (loginForm) {
    loginForm.addEventListener("submit", (e) => {
      e.preventDefault();
      validateLoginInputs();
    });
  }
  
  const registrationForm = document.getElementById("registrationForm");
  if (registrationForm) {
    registrationForm.addEventListener("submit", (e) => {
      e.preventDefault();
      validateRegisterInputs();
    });
  }
  
  
    const setError = (element, message) => {
      const errorDisplay = element.querySelector('.error');
      const inputField = element.querySelector('.p-2');
      inputField.classList.remove('border-2', 'border-green-800');
      inputField.classList.add('border-2', 'border-red-800');
      errorDisplay.innerText = message;
    }
    
    const unsetError = (element) => {
      const errorDisplay = element.querySelector('.error');
      const inputField = element.querySelector('.p-2');
      inputField.classList.remove('border-2', 'border-red-800');
      errorDisplay.innerText = "";
    }

    const setSuccess = (element) => {
      const errorDisplay = element.querySelector('.error');
      errorDisplay.innerText = "";
      const inputField = element.querySelector('.p-2');
      inputField.classList.remove('border-2', 'border-red-800');
      inputField.classList.add('border-2', 'border-green-800');
    }

    const validateLoginInputs = () => {
      const email = document.getElementById("loginEmail");
      const password = document.getElementById("passwordLogin");
      console.log("Password: ",password);
      const emailValue = email.value.trim();
      const passwordValue = password.value.trim();
      const emailDiv =  document.getElementById("loginEmailDiv");
      const passwordDiv =  document.getElementById("loginPassowrdDiv");

      if (emailValue === "") {
        setError(emailDiv, "The email is required");
      }else{
        unsetError(emailDiv);
      }
      if (passwordValue === "") {
        setError(passwordDiv, "The password is required");
      }else{
        unsetError(passwordDiv)
      }

    }

    const validateRegisterInputs = () => {
      //textboxes
      const rfirstName = document.getElementById("registrationFirstName");
      const rSurname = document.getElementById("registrationSurname");
      const rEmail = document.getElementById("registrationEmail");
      const rPhone = document.getElementById("registrationPhone");
      const rPassword = document.getElementById("resgistrationPassword");  
      //Values
      const firstNameValue = rfirstName.value.trim();
      const surnameValue = rSurname.value.trim();
      const emailValue = rEmail.value.trim();
      const phoneValue = rPhone.value.trim();
      const passwordValue = rPassword.value.trim();
      //Error Divs
      const firstNameDiv =  document.getElementById("firstNameDiv");
      const surnameDiv =  document.getElementById("surnameDiv");
      const emailDiv =  document.getElementById("emailDiv");
      const phoneDiv =  document.getElementById("phoneDiv");
      const passwordDiv =  document.getElementById("passwordDiv");
      //Patterns
      const emailPattern = /[a-z0-9]+@[a-z]+\.[a-z]{2,3}/;
      const phonePattern =/(9[1236][0-9]) ?([0-9]{3}) ?([0-9]{3})/;
      const passwordPattern =/^(?=.*[a-z])(?=.*\d)[a-zA-Z\d\w\W]{8,30}$/;
  
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
    };
  });

function togglePasswordVisibility() {
    let passwordField = document.getElementById('resgistrationPassword');
    if(!passwordField){
      passwordField = document.getElementById('passwordLogin');
    }
    const toggleBtn = document.getElementById('tooglePassword');
    const toggleBtnVisible = document.getElementById('tooglePasswordVisible');

    passwordField.type = passwordField.type === 'password' ? 'text' : 'password';
    toggleBtn.classList.toggle('hidden');
    toggleBtnVisible.classList.toggle('hidden');
}

function hamburguerClicked(){
    var mobileMenu= document.getElementById("mobileMenu");
    mobileMenu.classList.toggle("hidden");
    mobileMenu.classList.toggle("block");
}