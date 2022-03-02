$(".burger").click(function () {
  // If the clicked element has the active class, remove the active class from EVERY .nav-link>.state element
  if ($(".pop-menu").hasClass("active")) {
    $(".pop-menu").removeClass("active");
  }
  // Else, the element doesn't have the active class, so we remove it from every element before applying it to the element that was clicked
  else {
    $(".pop-menu").removeClass("active");
    $(".pop-menu").addClass("active");
  }
});


$(".cross").click(function () {
  // If the clicked element has the active class, remove the active class from EVERY .nav-link>.state element
  if ($(".pop-menu").hasClass("active")) {
    $(".pop-menu").removeClass("active");
  }
  
});

