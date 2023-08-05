//auto height increase
const textarea= document.querySelector("textarea");
textarea.addEventListener("keyup", e =>{
textarea.style.height="70vh";
let taHeight = e.target.scrollHeight;
textarea.style.height =`${taHeight}px`;
});

//time
 const options = {
    weekday:'long',
    year:'numeric',
    month:'numeric',
    day:'numeric'
 };
 setInterval(()=>{
   let time;
   let date;
   let d=new Date();
   let hrs= d.getHours();
   let min=d.getMinutes();
   let session="AM";
   if(hrs===0){
      hrs=12;
   }
   if (hrs>12){
      hrs=hrs-12;
      session="PM";
   }
   min=(min<10)?"0"+min:min;
   date=d.toLocaleDateString(undefined,options);
   time= hrs+":"+min+" "+session;
   document.getElementById('date').innerText=date;
   document.getElementById('time').innerText=time;
 });


//openmenu
// let Submenu = document.getElementById("submenu");

// function togglemenu(){
//    Submenu.classList.toggle("openmenu");
// }
// toggleMenu(()=>{
//    submenu.classList.toggle('open-menu');
// });