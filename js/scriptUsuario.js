const body = document.querySelector("body");
const bodydic = body.querySelector(".body");
const sidebar = body.querySelector(".sidebar");
const toggle = body.querySelector(".toggle");

toggle.addEventListener("click",()=>{
    console.log(bodydic);
    sidebar.classList.toggle("close");
    bodydic.classList.toggle("close");
});

