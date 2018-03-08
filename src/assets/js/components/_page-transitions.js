/*-----------------------------------------
Page Transitions
@todo: refactor all of this
------------------------------------------*/
(function($) {

  var pageTrans = {

    init: function(){
      // Target internal links
      var siteURL = "http://" + top.location.host.toString();
      var transLinks = $("a[href^='"+siteURL+"'], a[href^='/'], a[href^='./'], a[href^='../']");
      var noTransLinks = transLinks.not(".no-trans");
      //  We manually add a 'is-loading' class via php
      //  @see inc/functions/dynamic-classes
      //  On timeout, remove is-loading and add is-loaded
      setTimeout(function(){
        $("body").removeClass("is-loading").addClass("is-loaded");
      },2000);

      noTransLinks.on("click", function(e){
        e.preventDefault();
        
        if (e.metaKey || e.ctrlKey) return;
        if (e.metaKey || e.shiftKey) return;
        

        var linkLocation = this.href;
         function redirectPage() {
          window.location = linkLocation;
        }
        // Is Exiting
        $("body").addClass("is-exiting");

       //Out animation 
       $(".site-menu").animate({
          //right: "-=2500",
          opacity: "1"}, {
          duration: 600,
          complete: function() { $("body").fadeOut(900, redirectPage); }
        });  

        return false; 
      });

      // Fix back button
      $(window).unload(function() {
        $(window).unbind("unload");
      });
    
    // iOS Safari
    $(window).bind("pageshow", function(e) {
      if (e.originalEvent.persisted) {
        window.location.reload();
      }
    });
    },
  };
  pageTrans.init();
})(jQuery);
