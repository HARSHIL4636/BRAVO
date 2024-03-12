// For Profile shows 
    let profile=document.getElementById("PROFILE");
// console.log(profile);
let UserInfo=document.getElementById("USER_INFO");
profile.addEventListener("click",()=>{
console.dir();
if (profile.children[1].classList[4]=="d-none")
{
profile.children[1].classList.remove("d-none");
UserInfo.classList.remove("d-none");
// animation: name duration timing-function delay iteration-count direction fill-mode;
UserInfo.style.animation="U_I_S 1s normal forwards ease-in";
}
else
{
profile.children[1].className +=" d-none "; 
UserInfo.style.animation="U_I_N 1s normal forwards ease-in";
// UserInfo.style.className+=" d-none ";
// UserInfo.className+=" d-none "; 

}


}
);

// for audio 
let waterDrop=new Audio("sounds/water drop.mp3");

// waterDrop.play();
// let aa=waterDrop.audio;
// let flag=0;
let MenuBar=document.getElementsByClassName('cta');
for(i=0;i<MenuBar.length;i++)
{
MenuBar[i].addEventListener("mouseover",()=>{
   waterDrop.play();
});
}



