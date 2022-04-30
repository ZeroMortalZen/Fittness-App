/* Menu */
$(function(){
  $('.burger').click(function(){
      $('.mobile').toggleClass('active');
      $('.burger').toggleClass('active');
  });
});


/* Play Sound when Start button clicked */
var absAudio = new Audio("../sounds/audio-abs-section.wav");
var chestAudio = new Audio("../sounds/audio-chest-section.wav");
var armsAudio = new Audio("../sounds/audio-arms-section.wav");
var legsAudio = new Audio("../sounds/audio-legs-section.wav");

// Function to play the Chest Sound
function playAbsAudio() {
  absAudio.play();
}
// Function to play the Chest Sound
function playChestAudio() {
  chestAudio.play();
}
// Function to play the Arms Sound
function playArmsAudio() {
  armsAudio.play();
}
// Function to play the Legs Sound
function playLegsAudio() {
  legsAudio.play();
}




// TIMER
