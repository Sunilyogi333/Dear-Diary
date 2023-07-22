const textarea= document.querySelector("textarea");
textarea.addEventListener("keyup", e =>{
textarea.style.height="80vh";
let taHeight = e.target.scrollHeight;
textarea.style.height =`${taHeight}px`;
});

