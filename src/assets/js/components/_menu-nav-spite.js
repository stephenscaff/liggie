/*----------------------------------------------   
 -Offcanvas Menu Nav
 -----------------------------------------------  */
// (function($) {
//   var s,
//   menuNav = {
//     settings: {
//       body: $('body'),
//       menuToggle: $(".js-menu-toggle"),
//     },
//     init: function() {
//       s = this.settings;
//       this.bindEvents();
//     },
//     bindEvents: function(){
//       s.menuToggle.click(function(e) {
//           e.preventDefault();
//           menuNav.toggleMenu();
//         });
//       $(document).keyup(function(e) {
//         if ($("body").hasClass("js-menu--is-open") && e.which === 27) {
//           menuNav.toggleMenu();
//         }
//       });
//     },
//     toggleMenu: function(){
//       s.body.toggleClass("js-menu--is-open");
//     },
//     closeMenu: function(){
//       $(".js-menu--is-open").removeClass("js-menu--is-open");
//     },
//   };
//   menuNav.init();
// })(jQuery);




(function($) {
  var s,
  menuNav = {
    settings: {
      body: $('body'),
      main: $('main'),
      menuToggle: $('.js-menu-toggle'),
      siteMenu: $('.site-menu'),
      bgLayer:  $('.js-site-menu__bg'),
      bgBackground: $('.js-site-menu__bg').children(),
      frames:  $('.js-site-menu__bg').data('frame'),
      frameProportion: 1.78,
      siteMenuActive: 'js-menu--is-open',
      siteMenu_isClosing: 'js-menu--is-closing',
      siteMenu_isOpening: 'js-menu--is-opening',
      resize: false,
    },
    init: function() {
      s = this.settings;
      this.bindEvents();
    },
    bindEvents: function(){
      s.menuToggle.click(function(e) {
        e.preventDefault();
        menuNav.toggleMenu();
        s.menuToggle.focus()
        menuNav.setLayerDimensions();
      });
        
      $(document).keyup(function(e) {
        if (s.body.hasClass(s.siteMenuActive) && e.which === 27) {
          menuNav.toggleMenu();
        }
        if ($('input, textarea').is(':focus')) {
          return;
        }
        if (e.which === 77) {
          menuNav.toggleMenu();
        }
      });
    },

    toggleMenu: function(){
      if (s.body.hasClass(s.siteMenuActive)){
        s.body.addClass(s.siteMenu_isClosing);
        s.body.toggleClass(s.siteMenuActive);
        s.siteMenu.attr('aria-hidden', 'true');
            s.main.attr('aria-hidden', 'false');
          setTimeout(function(){
            s.body.removeClass(s.siteMenu_isClosing);
        }, 1000);
      } else {
        s.body.addClass(s.siteMenu_isOpening);
        setTimeout(function(){
          s.body.toggleClass(s.siteMenuActive).removeClass(s.siteMenu_isOpening);
          s.siteMenu.attr('aria-hidden', 'false');
          s.main.attr('aria-hidden', 'true');
        }, 1000);
        //s.body.toggleClass(s.siteMenuActive);
        // s.siteMenu.attr('aria-hidden', 'false');
        // s.main.attr('aria-hidden', 'true');
      }
    },

    setLayerDimensions: function(){
      var windowWidth = $(window).width(),
      windowHeight = $(window).height(),
      layerHeight, layerWidth;

      if( windowWidth/windowHeight > s.frameProportion ) {
        layerWidth = windowWidth;
        layerHeight = layerWidth/s.frameProportion;
      } else {
        layerHeight = windowHeight*1.2;
        layerWidth = layerHeight*s.frameProportion;
      }

      s.bgBackground.css({
        'width': layerWidth*s.frames+'px',
        'height': layerHeight+'px',
      });

      s.resize = false;
    }
  };
  $(window).on('resize', function(){
    if( !s.resize ) {
      s.resize = true;
      (!window.requestAnimationFrame) ? setTimeout(menuNav.setLayerDimensions, 300) : window.requestAnimationFrame(menuNav.setLayerDimensions);
    }
  });
  menuNav.init();
})(jQuery);







// jQuery(document).ready(function($){
//   //cache some jQuery objects
//   var modalTrigger = $('.js-menu-toggle'),
//     transitionLayer = $('.js-transition-layer'),
//     transitionBackground = transitionLayer.children();


//   var frameProportion = 1.78, //png frame aspect ratio
//     frames = transitionLayer.data('frame'), //number of png frames
//     resize = false;

//   //set transitionBackground dimentions
//   setLayerDimensions();




//   function setLayerDimensions() {
//     var windowWidth = $(window).width(),
//       windowHeight = $(window).height(),
//       layerHeight, layerWidth;

//     if( windowWidth/windowHeight > frameProportion ) {
//       layerWidth = windowWidth;
//       layerHeight = layerWidth/frameProportion;
//     } else {
//       layerHeight = windowHeight*1.2;
//       layerWidth = layerHeight*frameProportion;
//     }

//     transitionBackground.css({
//       'width': layerWidth*frames+'px',
//       'height': layerHeight+'px',
//     });

//     resize = false;
//   }
// });
