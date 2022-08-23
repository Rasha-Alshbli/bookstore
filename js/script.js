
const currentLocation = location.href;
const menuItem = document.querySelectorAll(".header-2 .navbar a");
const menuLength = menuItem.length;

for(let i = 0; i < menuLength; i++){
    if(menuItem[i].href === currentLocation){
        menuItem[i].className = "active";
    }
}



let userBox = document.querySelector('.header .header-2 .user-box');

document.querySelector('#user-btn').onclick = () =>{
    userBox.classList.toggle('active');
    navbar.classList.remove('active');
}

let navbar = document.querySelector('.header .header-2 .navbar');

document.querySelector('#menu-btn').onclick = () =>{
    navbar.classList.toggle('active');
    userBox.classList.remove('active');
}

window.onscroll = () =>{
    userBox.classList.remove('active');
    navbar.classList.remove('active');
    
    if(window.scrollY > 60){
    document.querySelector('.header .header-2').classList.add('active');
    }else{
    document.querySelector('.header .header-2').classList.remove('active');
    }
}