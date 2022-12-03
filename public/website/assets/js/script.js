// this is header in landing page
let btnBar = document.querySelector('.navbar-toggler');
let header = document.querySelector('.header');
let header2 = document.querySelector('.header-bg');


if(header){
    btnBar.addEventListener('click',function(){
        header.classList.toggle('hideinfo')
      });
    
    
};


if(header2){
    btnBar.addEventListener('click',function(){
        header2.classList.toggle('hideinfo')
      });
    
    
};


// owl 
$(document).ready(function(){
    $(".owl-carousel").owlCarousel();
  });

$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:5,
            nav:true,
            loop:false
        }
    }
});

// this is header in comming soon page

// counter function


let dateCounter = new Date("2022,12,06").getTime();
let counter = setInterval(() => {

  let dateNow = new Date().getTime();
  let difference = dateCounter - dateNow;
  let days = Math.floor (difference / ( 1000 * 60 * 60 * 24 ));
  let hours = Math.floor (difference % ( 1000 * 60 * 60 * 24 ) / ( 1000 * 60 * 60 ));
  let minutes = Math.floor(difference % ( 1000 * 60 * 60 ) / ( 1000 * 60 ));
  let seconds = Math.floor(difference % ( 1000 * 60 ) / ( 1000));

let cutDay1 = days.toString().slice(0,1);
let cutDay2 = days.toString().slice(1);

let cuthours1 = hours.toString().slice(0,1);
let cuthours2 = hours.toString().slice(1);

let cutMin1 = minutes.toString().slice(0,1);
let cutMin2 = minutes.toString().slice(1);

let cutsec1 = seconds.toString().slice(0,1);
let cutsec2 = seconds.toString().slice(1);


  if(difference < 0 ){
    clearInterval(counter);
  };

  if ( days < 10){
    $('.day1').html(`0`);
    $('.day2').html(`${days}`);
  } else {
    $('.day1').html(`${cutDay1}`);
    $('.day2').html(`${cutDay2}`);
  };

  if ( hours < 10){
    $('.hour1').html(`0`);
    $('.hour2').html(`${hours}`);
  } else {
    $('.hour1').html(`${cuthours1}`);
    $('.hour2').html(`${cuthours2}`);
  };

  if ( seconds < 10){
    $('.min1').html(`0`);
    $('.min2').html(`${seconds}`);
  } else {
    $('.sec1').html(`${cutsec1}`);
    $('.sec2').html(`${cutsec2}`);
  };

  if ( minutes < 10){
    $('.min1').html(`0`);
    $('.min2').html(`${minutes}`);
  } else {
    $('.min1').html(`${cutMin1}`);
    $('.min2').html(`${cutMin2}`);
  };


},1000);


// thisi is login page 

$('.login-form').click(function(){
   $(".span-form").css({"display" :"block" , "background-color": "var(--yellow)" , "width" : "0.8rem" , "height" : "3.6rem" });
   $(".span-form2").css("display", "none");
});

$('.login-form2').click(function(){
  $(".span-form2").css({"display" :"block" , "background-color": "var(--yellow)" , "width" : "0.8rem" , "height" : "3.6rem" , "position" : "absolute" });
  $(".span-form").css("display", "none");
});