/* Menu */
$(function(){
  $('.burger').click(function(){
      $('.mobile').toggleClass('active');
      $('.burger').toggleClass('active');
  });
});


/* Play Sound when Start button clicked */
var audio = new Audio("../sounds/audio-abs-section.wav");


function playAudio() {
  audio.play();
}




// TIMER
