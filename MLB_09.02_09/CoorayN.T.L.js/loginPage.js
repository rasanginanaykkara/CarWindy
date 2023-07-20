const signInBtn = document.getElementById("signIn");
const signUpBtn = document.getElementById("signUp");
// const fistForm = document.getElementById("form1");
// const secondForm = document.getElementById("form2");
const container = document.querySelector(".container");
var signin = document.getElementsByClassName(
  "container__form container--signin"
);

signInBtn.addEventListener("click", () => {
  signin[0].style.display = "block";
  container.classList.remove("right-Form");
});

signUpBtn.addEventListener("click", (f) => {
  container.classList.add("right-Form");
  signin[0].style.display = "none";
});

//fistForm.addEventListener("submit", (e) => e.preventDefault());
//secondForm.addEventListener("submit", (e) => e.preventDefault())

function PSWFunction() {
  var i = document.getElementById("PSWInput");
  if (i.type === "password") {
    i.type = "text";
  } else {
    i.type = "password";
  }
}

function RecheckPassword() {
  if (
    document.getElementById("PSW").value !=
    document.getElementById("REPSW").value
  ) {
    alert("Re-Enter password incorrrect!");

    return false;
  } else {
    alert("Success!");
  }
}

function Enabalebutton() {
  if (document.getElementById("checkBox").checked) {
    document.getElementById("SignUp").disabled = false;
  } else {
    document.getElementById("SignUp").disabled = ture;
  }
}
