const slideContent =  document.querySelector('.slider_content');
const images =slideContent.querySelectorAll('img');

let index = 1;

setInterval(function(){
    let percentage = index * -100;
    slideContent.style.transform = "translateX(" + percentage + "%)";
    index++;
    if(index > images.length -1){
        index = 0;
    }
}, 5000);