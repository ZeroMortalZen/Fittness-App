/* Menu */
$(function(){
  $('.burger').click(function(){
      $('.mobile').toggleClass('active');
      $('.burger').toggleClass('active');
  });
});


/* Play Sound when Start button clicked */
var audio = new Audio("../sounds/jumping-jacks-sound.m4a");
var startBTN = document.getElementsByClassName("start-btn");

console.log(audio);

$(function(){
  $('.start-btn').click(function(){
      audio.play();
  });
});



