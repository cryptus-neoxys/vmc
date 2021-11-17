const loginEmail = document.querySelector("input#login-email");
const loginPassword = document.querySelector("input#login-password");
const signupAadhar = document.querySelector("input#signup-aadhar");
const signupPhone = document.querySelector("input#signup-phone");
const signupEmail = document.querySelector("input#signup-email");
const signupPassword = document.querySelector("input#signup-password");

const login = () => {
  let errs = [];

  if (
    loginEmail.value === "" ||
    !/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(
      loginEmail.value.trim()
    )
  ) {
    errs.push("Invalid login email id\n");
  }
  if (
    loginPassword.value === "" ||
    !/^(((?=.*[a-z])(?=.*[A-Z]))|((?=.*[a-z])(?=.*[0-9]))|((?=.*[A-Z])(?=.*[0-9])))(?=.{6,})/.test(
      loginPassword.value.trim()
    )
  ) {
    errs.push("Invalid login password\n");
  }

  if (errs.length !== 0) {
    let errMsg = errs.reduce((a, e) => {
      return `${e}` + a;
    });
    alert(`invalid details:\n${errMsg} - Dev Sharma 19BCE0171`);
  } else {
    location.href = location.href.replace("login", "step2");
    loginPassword.value = "";
    signupAadhar.value = "";
  }
};

const signup = () => {
  let errs = [];

  if (
    signupAadhar.value === "" ||
    !/^[0-9]{16}$/.test(signupAadhar.value.trim())
  ) {
    errs.push("Invalid signup aadhar no.\n");
  }
  if (
    signupPhone.value === "" ||
    !/^(\+91)?[0-9]{10}$/.test(signupPhone.value.trim())
  ) {
    errs.push("Invalid signup phone no.\n");
  }
  if (
    signupEmail.value === "" ||
    !/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(
      signupEmail.value.trim()
    )
  ) {
    errs.push("Invalid signup email id\n");
  }
  if (
    signupPassword.value === "" ||
    !/^(((?=.*[a-z])(?=.*[A-Z]))|((?=.*[a-z])(?=.*[0-9]))|((?=.*[A-Z])(?=.*[0-9])))(?=.{6,})/.test(
      signupPassword.value.trim()
    )
  ) {
    errs.push("Invalid signup password\n");
  }

  if (errs.length !== 0) {
    let errMsg = errs.reduce((a, e) => {
      return `${e}` + a;
    });
    alert(`invalid details:\n${errMsg} - Dev Sharma 19BCE0171`);
  } else {
    aniLogin();
    signupAadhar.value = "";
    signupPhone.value = "";
    signupEmail.value = "";
    signupPassword.value = "";
    setTimeout(function () {
      document.getElementById("login-signup").style.display = "none";
      $(".signup").toggleClass("invis");
      $(".login").removeClass("invis");
    }, 1000);
  }
};
