jQuery(window).scroll(function() {
if (jQuery(this).scrollTop() > 1){  
    jQuery('#site-navigation').addClass("sticky-menu");
  }
  else{
    jQuery('#site-navigation').removeClass("sticky-menu");
  }
});