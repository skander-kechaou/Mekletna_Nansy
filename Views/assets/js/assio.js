const form = document.getElementById('form');
const name = document.getElementById('name_assio');
const mail = document.getElementById('mail');
const phone = document.getElementById('phone');
const pres = document.getElementById('president');

form.addEventListener('submit', (e) => {
  e.preventDefault();
  checkInputs();
});

function checkInputs() {
  const nameValue = name.value.trim();
  const mailValue = mail.value.trim();
  const phoneValue = phone.value.trim();
  const presValue = pres.value.trim();
  console.log("inputs");

  if (nameValue === "") {
    setErrorFor(name_assio, "First Name cannot be blank");
  } else if (!isNaN(nameValue)) {
    setErrorFor(name_assio, "Only characters are allowed");
  } else {
    setSuccessFor(name_assio);
  }

  if (mailValue === "") {
    setErrorFor(mail, "Email cannot be blank");
  } else if (!isEmail(mailValue)) {
    setErrorFor(mail, "Not a valid email");
  } else {
    setSuccessFor(mail);
  }

  if (phoneValue === "") {
    setErrorFor(phone, "Phone Number cannot be blank");
  } else if (isNaN(phoneValue)) {
    setErrorFor(phone, "Only numbers are allowed");
  } else {
    setSuccessFor(phone);
  }

  if (presValue === "") {
    setErrorFor(pres, "Client ID cannot be blank");
  } else if (isNaN(presValue)) {
    setErrorFor(pres, "Only numbers are allowed");
  } else {
    setSuccessFor(pres);
  }
}

function setErrorFor(input, message) {
  const formControl = input.parentElement;
  const small = formControl.querySelector("small");
  formControl.className = "form-control error";
  small.innerText = message;
}

function setSuccessFor(input) {
  const formControl = input.parentElement;
  formControl.className = "form-control success";
}

function isEmail(email) {
  return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(
    email
  );
}
