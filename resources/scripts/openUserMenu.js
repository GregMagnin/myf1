let userInfo = document.getElementById("userInfo");
let userInfoMenu = document.getElementById("userInfoMenu");


window.onload = (event) => {
    userInfoMenu.classList.remove("open"); 
}


userInfo.addEventListener('click', (event) => {
    userInfoMenu.classList.toggle("open");
})