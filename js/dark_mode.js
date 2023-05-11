const bdark = document.querySelector('#mode_button');
const body = document.querySelector('body');
const circle = document.querySelector('.circle');
var login  = document.querySelector('.user_login');

const anchor = document.querySelector('a');
const anchors = document.querySelectorAll('a');

var user = document.getElementById('user');
var bag = document.getElementById('bag');
var lupa = document.getElementById('lupa');
var sun = document.getElementById('sun');


var initialUserImage = "media/index/user_black.png";
var alternateUserImage = "media/index/user_white.png";

var initialBagImage = "media/bag_black.png";
var alternateBagImage = "media/bag_white.png";

var initialLupaImage = "media/lupa_black.png";
var alternateLupaImage = "media/lupa_white.png";

var initialSunImage = "media/index/sun_black.png";
var alternateSunImage = "media/index/sun_white.png";

var imageSwitch = false;


bdark.addEventListener('click', e=>{
   
   body.classList.toggle('darkmode');
   login.classList.toggle('darkmode');

   console.log(circle);


   anchors.forEach(anchor => {
      anchor.classList.toggle('color_white');
    });

   if (imageSwitch) {
      user.src = initialUserImage;
      bag.src = initialBagImage;
      lupa.src = initialLupaImage;
      sun.src = initialSunImage;
      circle.style.opacity = '1';
      imageSwitch = false;
    } else {
      user.src = alternateUserImage;
      bag.src = alternateBagImage;
      lupa.src = alternateLupaImage;
      sun.src = alternateSunImage;
      circle.style.opacity = '0.1';
      imageSwitch = true;
    }
});


