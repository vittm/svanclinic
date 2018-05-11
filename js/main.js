$(document).ready(function () {
    // // Read the cookie and if it's defined scroll to id
    var get_id = sessionStorage.getItem('pg_id');
    if( get_id){
        scrollToID( get_id, 500);
        sessionStorage.removeItem('pg_id');
    }
    $.urlParam = function(name){
      var results = new RegExp('[\?|\?&]' + name + '=([^&#]*)').exec(window.location.href);
        if (results==null){
          return null;
        }
        else{
          return decodeURI(results[1]) || 0;
        }
    }
    
    $(document).ready(function () {
      $(".btn-customer").click(function (e) {
          e.preventDefault();
          var url= $(location).attr('origin'); 
          var form = $(this);
          var name = $('#username-customer').val(),
              phone = $('#phone-customer').val(),
              title = $('.title-posts').text(),
              typepost = $('.type-posts').text(),
              source = $.urlParam('utm_source'),
              medium= $.urlParam('utm_medium'),
              campaign= $.urlParam('utm_campaign');
              if(title == ""){
                title = 'null';
              }
              if(typepost == ""){
                typepost = 'null'; 
              }
          $.ajax({
              url: url+"/sv/get-customer"+'-'+name+'-'+title+'-'+typepost+'-'+phone+'-'+source+'-'+medium+'-'+campaign,
              type: 'get',
              dataType: 'html',
              data: {'name':name,'title':title,'phone':phone,'typepost':typepost,'utm_source':source,'utm_medium':medium,'utm_campaign':campaign,"_token": "{{ csrf_token() }}"},
              processData: false,
              contentType: false,
              success: function (d) {
                $('#modal-19').modal('hide');
                $('#modal-20').modal('show');
              },
  
              error: function () {
                  $(form).unbind("submit").submit();
              }
          });
      });
  });
    $('a').click(function (e){
      e.preventDefault();
      var a = $(this).attr("class");
      if(a !=null){
        switch(a) {
          case "home-link":{
            var href = $(this).attr('href');
            window.location.href = href;
            break;
          }
          case "logo-link":{
            var href = $(this).attr('href');
            window.location.href = href;
            break;
          }
          case "btn-fancy":{
            break;
          }
          case "panel-btn":{
            break;
          }
          case "btn-fancy":{
            break;
          }
          default:{
            if(a.search("social-icon") > -1){
              var href = $(this).attr('href');
              window.open(href,'_blank');
              break;
            }else{
              var id = '.wrapper';
              var href = $(this).attr('href');
              sessionStorage.setItem('pg_id', id);
              window.location.href = href;
            }
            
          }
        }
      }else{
        var id = '.wrapper';
        var href = $(this).attr('href');
        sessionStorage.setItem('pg_id', id);
        window.location.href = href;
      }
    });

});

function scrollToID(id, speed) {
    var offSet = -60;
    var obj = $(id);
    if(obj.length){
      var offs = obj.offset();
      var targetOffset = offs.top - offSet;
    }
}

$(document).ready(function() {
  
  $('.panel-price').on('show.bs.collapse', function () {
   $(this).addClass('active');
 });

  $('.panel-price').on('hide.bs.collapse', function () {
   $(this).removeClass('active');
 });
});


$(document).ready(function() {
    $('.menu-wrapper > ul > li.hassub').hover(function() {
       $(this).addClass('active');
       var submenu = $(this).find('.submenu');
       if(submenu != null){
          submenu.addClass('active');
          $("#svanslider .overlay").addClass('active');
       }
    }, function() {
      $(this).removeClass('active');
      $(this).find('.submenu').removeClass('active');
      $("#svanslider .overlay").removeClass('active');
    });

    $('.submenu > ul > li').hover(function() {
       $(this).addClass('active');
    }, function() {
      $(this).removeClass('active');
    });

});

$(document).ready(function() {
  $(function () {
      $('#price-list-tab').on('shown.bs.collapse', function (e) {
          var offset = $(this).find('.collapse.in').prev('.panel-heading');
          if(offset) {
              $('html,body').animate({
                  scrollTop: $(offset).offset().top -20
              }, 500); 
          }
      }); 
  });
});

// $(document).ready(function() {
//   var minWidth = 1024;
//   var deviceWidth = $(window).width() - 17;
//     if (deviceWidth < minWidth) {
//         deviceWidth = minWidth;
//     }
//    var scale = deviceWidth / 1280;
//    var img = $('.text-content').find('img');
//    var img_width = img.width();
//    img.width(img_width *scale);
// });


$(window).on('load resize', function () {

  $(function() {
    var minWidth = 1024;
    var deviceWidth = $(window).width() - 17;
      if (deviceWidth < minWidth) {
          deviceWidth = minWidth;
      }
     var scale = deviceWidth / 1280;
      $(function() {
        $(".text-content img").map(function () {
          img_width = $(this).width();
          $(this).css({
            width: img_width *scale,
            height: 'auto'
          });
        });
      })
  })
});

$(document).ready(function() {
  new WOW().init();
});

$(document).ready(function() {
  autoPlayYouTubeModal();
  function autoPlayYouTubeModal() {
    var trigger = $('.video-btn');
    trigger.click(function() {
      var theModal = $(this).data("target"),
      videoID = $(this).attr("data-theVideo"),
      videoSRC = "http://www.youtube.com/embed/" + videoID;
      videoSRCauto = videoSRC + "?autoplay=1";
      $(theModal + ' iframe').attr('src', videoSRCauto);

      $(theModal + ' button.close').click(function() {
        $(theModal + ' iframe').attr('src', videoSRC);
      });
      $(theModal).on('hidden.bs.modal', function () {
        $(theModal + ' iframe').attr('src', videoSRC);
      })
    });
  }
});
$('#svanslider').carousel({
  interval: 5000
})

$(".service-slider").not('.slick-initialized').slick({
	slidesToShow: 3,
  infinite:true,
  dots: false,
  centerMode: false,
  autoplay: false,
  swipeToSlide:true,
  autoplaySpeed:3000,
  responsive: [
    {
     breakpoint: 660,
     settings: "unslick"
    }
  ]
});	

$(".intro-partner-slider").not('.slick-initialized').slick({
    slidesToShow: 5,
    infinite:true,
    dots: false,
    centerMode: false,
    autoplay: false,
    swipeToSlide:true,
    autoplaySpeed:3000,
}); 

$('.feedback-img-slider').not('.slick-initialized').slick({
  slidesToShow: 4,
  slidesToScroll: 1,
  asNavFor: '.feedback-content-slider',
  dots: false,
  arrows: false,
  centerMode: true,
  focusOnSelect: true,
  infinite:true,
  variableWidth: true,
  autoplay: true,
  autoplaySpeed:3000,
});
$('.feedback-content-slider').not('.slick-initialized').slick({
  slidesToShow: 1,
  arrows: false,
  dots:false,
  fade: true,
  swipe:false,
  swipeToSlide:false,
  touchMove:false,
  asNavFor: '.feedback-img-slider'
});


$('.other-promotion-list').not('.slick-initialized').slick({
  slidesToShow: 1,
  infinite:true,
  dots: false,
  centerMode: false,
  autoplay: true,
  swipeToSlide:true,
  autoplaySpeed:5000,
  appendArrows: $('.other-promotion-nav')
});



$('.effective-image-slider').not('.slick-initialized').slick({
  slidesToShow: 1,
  infinite:true,
  dots: false,
  centerMode: false,
  autoplay: true,
  swipeToSlide:true,
  autoplaySpeed:5000,
});

$('.other-news-slider').not('.slick-initialized').slick({
  slidesToShow: 1,
  infinite:true,
  dots: false,
  centerMode: false,
  autoplay: true,
  swipeToSlide:true,
  autoplaySpeed:5000,
  appendArrows: $('.other-news-nav .nav-center')
});

$(".album-slider").not('.slick-initialized').slick({
  slidesToShow: 3,
  infinite:true,
  dots: false,
  centerMode: false,
  autoplay: true,
  swipeToSlide:true,
  autoplaySpeed:3000,
}); 

$(".other-album").not('.slick-initialized').slick({
  slidesToShow: 3,
  infinite:true,
  dots: false,
  centerMode: false,
  autoplay: true,
  swipeToSlide:true,
  autoplaySpeed:3000,
}); 

$(".video-slider").not('.slick-initialized').slick({
  slidesToShow: 3,
  infinite:true,
  dots: false,
  centerMode: false,
  autoplay: true,
  swipeToSlide:true,
  autoplaySpeed:3000,
}); 



function scrollMenu(){
  var self= this;
  $menu = $('.menu');
  $height = $menu.height();
  $offset = $height + 50;
  $width = $menu.width();
  $left = (-$width - 40);
  $overlay = $("#overlay");
  $btn = $('#btn-menu');
  $scrollMenu = $("#scroll-menu");
  $trigger = $("#btn-menu .trigger");
  this.init= function(){
    self.jquery();
    self.open_nav_menu();   
  };
  
  this.jquery = function(){
     $(window).scroll(function () {
        if ($(this).scrollTop() > $offset) {
          $btn.addClass('active');
          $('.btn-subscribe').addClass('active');
        } else {
          $btn.removeClass('active');
          $('.btn-subscribe').removeClass('active');
          $('.btn-subscribe .form').removeClass('active');
        }
    });

  }

  this.open_nav_menu = function(){
    $btn.click(function(){
      var $this = $(this);
      $scrollMenu.toggleClass('active');
       if($scrollMenu.hasClass('active')){
          $trigger.addClass('active');
          $('body').css('overflow', 'hidden');
          
       }else{
          $trigger.removeClass('active');
          $('body').css('overflow-y', 'scroll');
       }
    });
    $('html,body').on('click',function(e){ 
      if ($(e.target).is('#btn-menu,.menu-container,#btn-menu *, .menu-container *')) { 
        return;
      }else{
        $scrollMenu.removeClass('active');
         $trigger.removeClass('active');
         $('body').css('overflow-y', 'scroll');
      }
    });
    
  }
}
scrollMenu = new scrollMenu();
$(function(){
  scrollMenu.init();
});

$(document).ready(function() {
  $message = 'Design by Web4gSolutions.com';
  console.info($message);

});

$(".custom-form").on("show", function () {
  $("body").addClass("modal-open");
}).on("hidden", function () {
  $("body").removeClass("modal-open")
});

//Check to see if the window is top if not then display button
  $(window).scroll(function(){
    if ($(this).scrollTop() > 100) {
      $('.totop').addClass('totop-show');
    } else {
      $('.totop').removeClass('totop-show');
    }
  });
  