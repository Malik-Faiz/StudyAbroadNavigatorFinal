$(document).ready(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 50) {
            $(".dark-navbar").toggleClass("scrolled", $(this).scrollTop() > 50);
            $(".dark-navbar").removeClass("container-lg");
            $(".brandImg").attr("src", "./assets/images/logo/Logo-dark.png");
        } else {
            $(".dark-navbar").addClass("container-lg");
            $(".dark-navbar").toggleClass("scrolled", $(this).scrollTop() > 50);
            $(".brandImg").attr("src", "./assets/images/logo/Logo-light.png");
        }
    });
    $(window).resize(function () {
        if ($(window).width() < 768) {
            $(".dark-navbar").addClass("scrolled");
            $(".brandImg").attr("src", "./assets/images/logo/Logo-dark.png");
        } else {
            $(".dark-navbar").removeClass("scrolled");
            $(".brandImg").attr("src", "./assets/images/logo/Logo-light.png");
        }
    });
    if ($(window).width() < 768) {
        $(".dark-navbar").addClass("scrolled");
        $(".brandImg").attr("src", "./assets/images/logo/Logo-dark.png");
    } else {
        $(".dark-navbar").removeClass("scrolled");
        $(".brandImg").attr("src", "./assets/images/logo/Logo-light.png");
    }

    $("#file-input").on("change", function () {
        var files = $(this).get(0).files;
        for (var i = 0; i < files.length; i++) {
            var image = $("<img>").addClass("uploaded-image").attr("src", URL.createObjectURL(files[i]));
            var div = $("<div>").addClass("upload-property-image").append('<div class="del-icon"><img src="./assets/images/icons/delete.png" alt=""></div>');
            var main = div.append(image);
            // append(image)
            $(".-conimagetainer").append(main);
        }
        $(this).val("");
    });

    //  delete icon

    $(".del-icon").click(function () {
        $(this).parent().remove();
    });
    //   change color on select of checkbox
    $(".amanities-checks").change(function () {
        if ($(this).is(":checked")) {
            $(this).siblings(".form-check-label").css("color", "#f30a11");
        } else {
            $(this).siblings(".form-check-label").css("color", "");
        }
    });
});

function min_max_price() {
    var min = $(".min-price").val();
    var max = $(".max-price").val();
 
    if (min == '') {
        min = 0;
    }
    if (max == '') {
        max = 0;
        }

    if (min > max) {
        var swap = min;
        min = max;
        max = swap;
        $(".min-price").val(min);
        $(".max-price").val(max);
    }


    if (min >= 1000000) {
        min = (min / 1000000).toFixed(1) + "M";
    } else if (min >= 1000) {
        min = (min / 1000).toFixed(1) + "K";
    }
    if (max >= 1000000) {
        max = (max / 1000000).toFixed(1) + "M";
    } else if (max >= 1000) {
        max = (max / 1000).toFixed(1) + "K";
    }
    var min_max = min + " - " + max;
    $(".min-max-combine").val(min_max);
    $(".min-max-combine").dropdown("hide");
}
function resetFields() {
    $(".min-price").val("");
    $(".max-price").val("");
    $(".min-max-combine").val("");
}
$('.rent-paid-for').click(function(){
    $('.rent-paid-for').prop('checked', false);
    $(this).prop('checked', true);

});
$(document).ready(function () {
    $(".expand-button-features").on("click", function () {
        $(".hidden-items").slideToggle();

        if ($(".expand-button-features").text() === "Show More") {
            $(this).text("Show Less");
            $(this).removeClass("arow-down");
            $(this).addClass("arow-up");
        } else {
            $(this).text("Show More");
            $(this).removeClass("arow-up");
            $(this).addClass("arow-down");
        }
    });
});
 

// $(document).ready(function () {
//     const totalSlides = $(".caruselSlides").find(".carousel-item").length;
//     $(".caruselSlides").on("slid.bs.carousel", function () {
//         const currentIndex = $("div.carousel-item.active").index() + 1;
//         $(this).find(".slide-num").text(currentIndex + "/" + totalSlides);
//     });
// });
 
$(document).ready(function() {

    $('.caruselSlides').on('slid.bs.carousel', function() {
        const totalSlides =$(this).find('.property-images').length;
      const currentIndex = $('div.carousel-item.active', this).index() + 1;
      $('.slide-num', this).text(currentIndex + '/' + totalSlides);
    });
  });
 
// IMG SLDER OF SUITE JAVASCRIPT
// var slideIndex = 1;
// showSlides(slideIndex);
// // Next/previous controls
// function plusSlides(n) {
//     showSlides((slideIndex += n));
// }
// // // Thumbnail image controls
// function currentSlide(n) {
//     showSlides((slideIndex = n));
// }
// function showSlides(n) {
//     var i;
//     var slides = document.getElementsByClassName("mySlides");
//     var dots = document.getElementsByClassName("demo");
//     var captionText = document.getElementById("caption");
//     if (n > slides.length) {
//         slideIndex = 1;
//     }
//     if (n < 1) {
//         slideIndex = slides.length;
//     }
//     for (i = 0; i < slides.length; i++) {
//         slides[i].style.display = "none";
//     }
//     for (i = 0; i < dots.length; i++) {
//         dots[i].className = dots[i].className.replace(" active", "");
//     }
//     slides[slideIndex - 1].setAttribute("style", "display:block;");
//     slides[slideIndex - 1].style.display = "block";
//     dots[slideIndex - 1].className += " active";
// }
// let currentSlideIndex = 1;
// function nextSlide() {
//     currentSlideIndex++;
//     if (currentSlideIndex > document.querySelectorAll(".demo").length) {
//         currentSlideIndex = 1;
//     }
//     currentSlide(currentSlideIndex);
//     window.scrollBy({
//         top: 0,
//         left: window.innerWidth,
//         behavior: "smooth", // Replace with your valid behavior value
//     });
// }


  $(document).ready(function() {

    $('.apply-fiter-btn').click(function(){
        var min_area = $('.min-area').val(); 
        var max_area = $('.max-area').val(); 
        if(max_area < min_area){
            var swap = min_area;
            $('.min-area').val(max_area); 
            $('.max-area').val(swap);
        }
    });
  

    var totalSlides = $('.mySlides').length;
    var currentSlide = 1;

    function showSlide(n) {
      $('.mySlides').hide();
      $('.mySlides:nth-child(' + n + ')').show();
      $('.slide-num-details').text(n + ' / ' + totalSlides);
    }

    function plusSlides(n) {
      currentSlide += n;
      if (currentSlide > totalSlides) {
        currentSlide = 1;
      } else if (currentSlide < 1) {
        currentSlide = totalSlides;
      }
      showSlide(currentSlide);
    }

    function currentSlide(n) {
      if (n < 1) {
        n = totalSlides;
      } else if (n > totalSlides) {
        n = 1;
      }
      currentSlide = n;
      showSlide(currentSlide);
    }

    $('.prev').click(function() {
      plusSlides(-1);
    });

    $('.next').click(function() {
      plusSlides(1);
    });

    $('.image-thumbnail').click(function() {
        
        var slideIndex = $(this).data('slide-index');
        currentSlide = parseInt(slideIndex);
        showSlide(parseInt(slideIndex));
        
    });

    showSlide(currentSlide);



  });

 
 