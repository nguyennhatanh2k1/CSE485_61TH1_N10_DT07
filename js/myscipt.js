// isbool = true;
// function showHidden() {
//     if(isbool){
//         document.getElementById(creatpassw).setAttribute("type","text");
//         isbool=false;
//     }else{
//         document.getElementById(creatpassw).setAttribute("type","password");
//         isbool=true;
//     }
// }
// function password_show_hide() {
//     var x = document.getElementById("password");
//     var show_eye = document.getElementById("show_eye");
//     var hide_eye = document.getElementById("hide_eye");
//     hide_eye.classList.remove("d-none");
//     if (x.type === "password") {
//       x.type = "text";
//       show_eye.style.display = "none";
//       hide_eye.style.display = "block";
//     } else {
//       x.type = "password";
//       show_eye.style.display = "block";
//       hide_eye.style.display = "none";
//     }
//   }
const togglePassword = document.querySelector("#togglePassword");
const password = document.querySelector("#password");

togglePassword.addEventListener("click", function () {
   
// toggle the type attribute
const type = password.getAttribute("type") === "password" ? "text" : "password";
password.setAttribute("type", type);

// toggle the eye icon
this.classList.toggle('fa-eye');
});