const textarea= document.querySelector("textarea");
textarea.addEventListener("keyup", e =>{
textarea.style.height="80vh";
let taHeight = e.target.scrollHeight;
textarea.style.height =`${taHeight}px`;
});

const content = document.getElementsByClassName(".content");
content.addEventListener("keyup", e=>{
    textarea.style.height="auto"
let coHeight = e.target.scrollHeight;
textarea.style.height=`${coHeight}px`;
});
document.getElementsByClassName('content').addEventListener('click', function (e) {
    e.preventDefault();
    doSomething();
})