// navbar pop up script
$(document).ready(function () {

  // Toggle visibility of content when the button is clicked
  $('#toggleSideBar').click(function () {

    $('#sidebarContent').toggle("fast");

  });

});


// Script for gallery Lightbox Modal
function openLightbox(button) {

  let image = $(button).siblings('.gallery-item');

  let imageUrl = image.attr('src');

  let imageAlt = image.attr('alt');


  $('#galleryLightboxImage').attr('src', imageUrl);

  $('#galleryLightboxImage').attr('alt', imageAlt);

  $('#galleryLightboxModal .modal-title').text(imageAlt);


  $('#galleryLightboxModal').modal('show');

}


// work process step filter script
$(".add_course").hide();


function work_process_filter(btn) {

  let clkBtn = $(btn);

  let clkBtnClass = clkBtn.attr('data-target-filter');

  switch (clkBtnClass) {

    case "add_program":

      clkBtn.siblings().removeClass("active");

      clkBtn.addClass("active");

      $(".add_program").show('slow');

      $(".add_course").hide('slow');

      break;


    case "add_course":

      clkBtn.siblings().removeClass("active");

      clkBtn.addClass("active");

      $(".add_course").show('slow');

      $(".add_program").hide('slow');

      break;

    
    default:

    $(".add_program").show('slow');

    $(".add_course").hide('slow');

      break;

  }


}

// work process step add course filter script
$(".add-course-step-1").show();

$(".add-course-step-2").hide();

$(".add-course-step-3").hide();

$(".add-course-step-4").hide();

$(".add-course-step-5").hide();

$(".add-course-step-6").hide();

$(".add-course-step-7").hide();


function work_add_course_filter(btn) {

  let clkBtn = $(btn);

  let clkBtnClass = clkBtn.attr('data-target-filter');

  switch (clkBtnClass) {

    case "add-course-step-1":

      clkBtn.siblings().removeClass("active");

      clkBtn.addClass("active");

      $(".add-course-step-1").show();

      $(".add-course-step-2").hide();

      $(".add-course-step-3").hide();

      $(".add-course-step-4").hide();

      $(".add-course-step-5").hide();

      $(".add-course-step-6").hide();

      $(".add-course-step-7").hide();

      break;


    case "add-course-step-2":

      clkBtn.siblings().removeClass("active");

      clkBtn.addClass("active");

      $(".add-course-step-1").hide();

      $(".add-course-step-2").show();

      $(".add-course-step-3").hide();

      $(".add-course-step-4").hide();

      $(".add-course-step-5").hide();

      $(".add-course-step-6").hide();

      $(".add-course-step-7").hide();

      break;

    case "add-course-step-3":

      clkBtn.siblings().removeClass("active");

      clkBtn.addClass("active");
      
      $(".add-course-step-1").hide();

      $(".add-course-step-2").hide();

      $(".add-course-step-3").show();

      $(".add-course-step-4").hide();

      $(".add-course-step-5").hide();

      $(".add-course-step-6").hide();

      $(".add-course-step-7").hide();

      break;

    
    case "add-course-step-4":

      clkBtn.siblings().removeClass("active");

      clkBtn.addClass("active");
      
      $(".add-course-step-1").hide();
      
      $(".add-course-step-2").hide();
      
      $(".add-course-step-3").hide();
      
      $(".add-course-step-4").show();
      
      $(".add-course-step-5").hide();
      
      $(".add-course-step-6").hide();

      $(".add-course-step-7").hide();

      break;


    case "add-course-step-5":

      clkBtn.siblings().removeClass("active");

      clkBtn.addClass("active");
      
      $(".add-course-step-1").hide();
      
      $(".add-course-step-2").hide();
      
      $(".add-course-step-3").hide();
      
      $(".add-course-step-4").hide();
      
      $(".add-course-step-5").show();
      
      $(".add-course-step-6").hide();

      $(".add-course-step-7").hide();

      break;


    case "add-course-step-6":

      clkBtn.siblings().removeClass("active");

      clkBtn.addClass("active");
      
      $(".add-course-step-1").hide();
      
      $(".add-course-step-2").hide();
      
      $(".add-course-step-3").hide();
      
      $(".add-course-step-4").hide();
      
      $(".add-course-step-5").hide();
      
      $(".add-course-step-6").show();
      
      $(".add-course-step-7").hide();

      break;


    case "add-course-step-7":

      clkBtn.siblings().removeClass("active");

      clkBtn.addClass("active");
      
      $(".add-course-step-1").hide();
      
      $(".add-course-step-2").hide();
      
      $(".add-course-step-3").hide();
      
      $(".add-course-step-4").hide();
      
      $(".add-course-step-5").hide();
      
      $(".add-course-step-6").hide();
      
      $(".add-course-step-7").show();

      break;

    default: 

      $(".add-course-step-1").show();

      $(".add-course-step-2").hide();

      $(".add-course-step-3").hide();

      $(".add-course-step-4").hide();

      $(".add-course-step-5").hide();

      $(".add-course-step-6").hide();

      $(".add-course-step-7").hide();

      break;

  }
  
}


// work process step add program filter script
$(".add-prog-step-1").show();

$(".add-prog-step-2").hide();

$(".add-prog-step-3").hide();

$(".add-prog-step-4").hide();

$(".add-prog-step-5").hide();

$(".add-prog-step-6").hide();

$(".add-prog-step-7").hide();


function work_add_prog_filter(btn) {

  let clkBtn = $(btn);

  let clkBtnClass = clkBtn.attr('data-target-filter');

  switch (clkBtnClass) {

    case "add-prog-step-1":

      clkBtn.siblings().removeClass("active");

      clkBtn.addClass("active");

      $(".add-prog-step-1").show();

      $(".add-prog-step-2").hide();

      $(".add-prog-step-3").hide();

      $(".add-prog-step-4").hide();

      $(".add-prog-step-5").hide();

      $(".add-prog-step-6").hide();

      $(".add-prog-step-7").hide();

      break;


    case "add-prog-step-2":

      clkBtn.siblings().removeClass("active");

      clkBtn.addClass("active");

      $(".add-prog-step-1").hide();

      $(".add-prog-step-2").show();

      $(".add-prog-step-3").hide();

      $(".add-prog-step-4").hide();

      $(".add-prog-step-5").hide();

      $(".add-prog-step-6").hide();

      $(".add-prog-step-7").hide();

      break;

    case "add-prog-step-3":

      clkBtn.siblings().removeClass("active");

      clkBtn.addClass("active");
      
      $(".add-prog-step-1").hide();

      $(".add-prog-step-2").hide();

      $(".add-prog-step-3").show();

      $(".add-prog-step-4").hide();

      $(".add-prog-step-5").hide();

      $(".add-prog-step-6").hide();

      $(".add-prog-step-7").hide();

      break;

    
    case "add-prog-step-4":

      clkBtn.siblings().removeClass("active");

      clkBtn.addClass("active");
      
      $(".add-prog-step-1").hide();
      
      $(".add-prog-step-2").hide();
      
      $(".add-prog-step-3").hide();
      
      $(".add-prog-step-4").show();
      
      $(".add-prog-step-5").hide();
      
      $(".add-prog-step-6").hide();

      $(".add-prog-step-7").hide();

      break;


    case "add-prog-step-5":

      clkBtn.siblings().removeClass("active");

      clkBtn.addClass("active");
      
      $(".add-prog-step-1").hide();
      
      $(".add-prog-step-2").hide();
      
      $(".add-prog-step-3").hide();
      
      $(".add-prog-step-4").hide();
      
      $(".add-prog-step-5").show();
      
      $(".add-prog-step-6").hide();

      $(".add-prog-step-7").hide();

      break;


    case "add-prog-step-6":

      clkBtn.siblings().removeClass("active");

      clkBtn.addClass("active");
      
      $(".add-prog-step-1").hide();
      
      $(".add-prog-step-2").hide();
      
      $(".add-prog-step-3").hide();
      
      $(".add-prog-step-4").hide();
      
      $(".add-prog-step-5").hide();
      
      $(".add-prog-step-6").show();
      
      $(".add-prog-step-7").hide();

      break;


    case "add-prog-step-7":

      clkBtn.siblings().removeClass("active");

      clkBtn.addClass("active");
      
      $(".add-prog-step-1").hide();
      
      $(".add-prog-step-2").hide();
      
      $(".add-prog-step-3").hide();
      
      $(".add-prog-step-4").hide();
      
      $(".add-prog-step-5").hide();
      
      $(".add-prog-step-6").hide();
      
      $(".add-prog-step-7").show();

      break;

    default: 

      $(".add-prog-step-1").show();

      $(".add-prog-step-2").hide();

      $(".add-prog-step-3").hide();

      $(".add-prog-step-4").hide();

      $(".add-prog-step-5").hide();

      $(".add-prog-step-6").hide();

      $(".add-prog-step-7").hide();

      break;

  }
  
}



// gallery image filter
function gallery_filter(btn) {

  let clkBtn = $(btn);

  let clkBtnClass = clkBtn.attr('data-target-filter');

  switch (clkBtnClass) {

    case "show_all":

      clkBtn.siblings().removeClass("active");

      clkBtn.addClass("active");

      $(".events").show("slow");

      $(".labs").show("slow");

      $(".classroom").show("slow");

      break;


    case "events":

      clkBtn.siblings().removeClass("active");

      clkBtn.addClass("active");

      $(".events").show("slow");

      $(".labs").hide("slow");

      $(".classroom").hide("slow");

      break;


    case "labs":

      clkBtn.siblings().removeClass("active");

      clkBtn.addClass("active");

      $(".events").hide("slow");

      $(".labs").show("slow");

      $(".classroom").hide("slow");

      break;


    case "classroom":

      clkBtn.siblings().removeClass("active");

      clkBtn.addClass("active");

      $(".events").hide("slow");

      $(".labs").hide("slow");

      $(".classroom").show("slow");

      break;


    default:

      $(".events").show("slow");

      $(".labs").show("slow");

      $(".classroom").show("slow");

      break;

  }

}


//------------- animation js --------------------//

// scroll effect 
window.addEventListener("scroll", function() {
  let scrollShow = document.querySelectorAll(".scrollShow");
  for (let i = 0; i <= scrollShow.length - 1; i++) {
      let windowHeigth = window.innerHeight;
      let
          sectionHeigth = scrollShow[i].getBoundingClientRect().top;
      let scrollHeight = 150;
      if (sectionHeigth < windowHeigth - scrollHeight) {
          scrollShow[i].classList.add("active");
      } 
      // else {
      //     scrollShow[i].classList.remove("active");
      // }
  }
});