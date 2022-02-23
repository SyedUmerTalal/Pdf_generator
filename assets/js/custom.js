$(document).ready(function() {
    $('.select2').select2({
    closeOnSelect: false
    });
});
$(document).ready(function () {

var current_fs, next_fs, previous_fs; //fieldsets
var opacity;
var current = 1;
var steps = $("fieldset").length;

setProgressBar(current);

$(".next").click(function () {

    current_fs = $(this).parent();
    next_fs = $(this).parent().next();

    //Add Class Active
    $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

    //show the next fieldset
    next_fs.show();
    //hide the current fieldset with style
    current_fs.animate({ opacity: 0 }, {
    step: function (now) {
        // for making fielset appear animation
        opacity = 1 - now;

        current_fs.css({
        'display': 'none',
        'position': 'relative' });

        next_fs.css({ 'opacity': opacity });
    },
    duration: 500 });

    setProgressBar(++current);
});

$(".previous").click(function () {

    current_fs = $(this).parent();
    previous_fs = $(this).parent().prev();

    //Remove class active
    $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

    //show the previous fieldset
    previous_fs.show();

    //hide the current fieldset with style
    current_fs.animate({ opacity: 0 }, {
    step: function (now) {
        // for making fielset appear animation
        opacity = 1 - now;

        current_fs.css({
        'display': 'none',
        'position': 'relative' });

        previous_fs.css({ 'opacity': opacity });
    },
    duration: 500 });

    setProgressBar(--current);
});

function setProgressBar(curStep) {
    var percent = parseFloat(100 / steps) * curStep;
    percent = percent.toFixed();
    $(".progress-bar").
    css("width", percent + "%");
}

$(".submit").click(function () {
    return false;
});

});

// Form Validation  
$(".submit").click(function(){
    //start header section
    var upload_file = $('#upload_file').val();
    var position_header = $('#position_header').val();
    var font_header = $('#font_header').val();
    var text_header = $('#text_header').val();
    var url_header = $('#url_header').val();
    var font_size_header = $('#font_size_header').val();
    //Start footer section
    var position_footer = $('#position_footer').val();
    var font_footer = $('#font_footer').val();
    var text_footer = $('#text_footer').val();
    var url_footer = $('#url_footer').val();
    var opacity_footer = $('#opacity_footer').val();
    var font_size_footer = $('#font_size_footer').val();
    // Start watermrk
    var padding_top_botom = $('#padding_top_botom').val();
    var padding_left_right = $('#padding_left_right').val();
    var opacity_watermark = $('#opacity_watermark').val();
     
    
    var inputVal = new Array(upload_file, position_header, font_header, text_header, url_header,
                             font_size_header, position_footer, font_footer, text_footer, url_footer,
                             opacity_footer, font_size_footer, padding_top_botom, padding_left_right,
                             opacity_watermark);

    var inputMessage = new Array("upload file", "position header", "font header", "text header", "url header",
                                   "font size header", "position footer", "font footer", "text footer", "url footer",
                                   "opacity footer", "font size footer", "padding top botom", "padding left right",
                                    "opacity watermark");

    $('.error').hide();

       if(inputVal[0] == ""){
             $('#upload_file').after('<span class="error"> Please enter your ' + inputMessage[0] + '</span>');
       }

       if(inputVal[1] == ""){
             $('#position_header').after('<span class="error"> Please enter your ' + inputMessage[1] + '</span>');
       }

       if(inputVal[2] == ""){
             $('#font_header').after('<span class="error"> Please enter your ' + inputMessage[2] + '</span>');
       } 

       if(inputVal[3] == ""){
             $('#text_header').after('<span class="error"> Please enter your ' + inputMessage[3] + '</span>');
       } 

       if(inputVal[4] == ""){
             $('#url_header').after('<span class="error"> Please enter your ' + inputMessage[4] + '</span>');
       }
       
       if(inputVal[5] == ""){
             $('#font_size_header').after('<span class="error"> Please enter your ' + inputMessage[5] + '</span>');
       }

       if(inputVal[6] == ""){
             $('#position_footer').after('<span class="error"> Please enter your ' + inputMessage[6] + '</span>');
       }

       if(inputVal[7] == ""){
             $('#font_footer').after('<span class="error"> Please enter your ' + inputMessage[7] + '</span>');
       }

       if(inputVal[8] == ""){
             $('#text_footer').after('<span class="error"> Please enter your ' + inputMessage[8] + '</span>');
       }

       if(inputVal[9] == ""){
             $('#url_footer').after('<span class="error"> Please enter your ' + inputMessage[9] + '</span>');
       }

       if(inputVal[10] == ""){
             $('#opacity_footer').after('<span class="error"> Please enter your ' + inputMessage[10] + '</span>');
       }

       if(inputVal[11] == ""){
             $('#font_size_footer').after('<span class="error"> Please enter your ' + inputMessage[11] + '</span>');
       }

       if(inputVal[12] == ""){
             $('#padding_top_botom').after('<span class="error"> Please enter your ' + inputMessage[12] + '</span>');
       }

       if(inputVal[13] == ""){
             $('#padding_left_right').after('<span class="error"> Please enter your ' + inputMessage[13] + '</span>');
       }

       if(inputVal[14] == ""){
             $('#opacity_watermark').after('<span class="error"> Please enter your ' + inputMessage[14] + '</span>');
       }
 });

 /* ---- particles.js config ---- */

      window.addEventListener('DOMContentLoaded', (event) => {
            particlesJS("particles-js", {
            "particles": {
            "number": {
                  "value": 380,
                  "density": {
                  "enable": true,
                  "value_area": 800
                  }
            },
            "color": {
                  "value": "#ffffff"
            },
            "shape": {
                  "type": "circle",
                  "stroke": {
                  "width": 0,
                  "color": "#000000"
                  },
                  "polygon": {
                  "nb_sides": 5
                  },
                  "image": {
                  "src": "img/github.svg",
                  "width": 100,
                  "height": 100
                  }
            },
            "opacity": {
                  "value": 0.5,
                  "random": false,
                  "anim": {
                  "enable": false,
                  "speed": 1,
                  "opacity_min": 0.1,
                  "sync": false
                  }
            },
            "size": {
                  "value": 3,
                  "random": true,
                  "anim": {
                  "enable": false,
                  "speed": 40,
                  "size_min": 0.1,
                  "sync": false
                  }
            },
            "line_linked": {
                  "enable": true,
                  "distance": 150,
                  "color": "#ffffff",
                  "opacity": 0.4,
                  "width": 1
            },
            "move": {
                  "enable": true,
                  "speed": 6,
                  "direction": "none",
                  "random": false,
                  "straight": false,
                  "out_mode": "out",
                  "bounce": false,
                  "attract": {
                  "enable": false,
                  "rotateX": 600,
                  "rotateY": 1200
                  }
            }
            },
            "interactivity": {
            "detect_on": "canvas",
            "events": {
                  "onhover": {
                  "enable": true,
                  "mode": "grab"
                  },
                  "onclick": {
                  "enable": true,
                  "mode": "push"
                  },
                  "resize": true
            },
            "modes": {
                  "grab": {
                  "distance": 140,
                  "line_linked": {
                  "opacity": 1
                  }
                  },
                  "bubble": {
                  "distance": 400,
                  "size": 40,
                  "duration": 2,
                  "opacity": 8,
                  "speed": 3
                  },
                  "repulse": {
                  "distance": 200,
                  "duration": 0.4
                  },
                  "push": {
                  "particles_nb": 4
                  },
                  "remove": {
                  "particles_nb": 2
                  }
            }
            },
            "retina_detect": true
            });
      });
//# sourceURL=pen.js