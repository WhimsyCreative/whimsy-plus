jQuery(document).ready(function() {
    
  jQuery('.vibrant-frame img').one("load", function() {
      
    var frame = jQuery(this).parent();
      
    var caption = jQuery(frame).find('.caption');
      
    var vibrant = new Vibrant(this);
      
    var frameShade = jQuery(frame).data('vibrant');
      
    var frameStyle = jQuery(frame).data('frame');
      
    var captionShade = jQuery(caption).data('vibrant');
      
    var frameColor = vibrant.swatches()[frameShade].getHex();
      
    var captionColor = vibrant.swatches()[captionShade].getHex();
      
    jQuery(frame).css( "background-color", frameColor );
      
    jQuery(caption).css( "color", captionColor );
      
    if ( frameStyle.toLowerCase() === 'shadow' ) {
      /* jQuery(frame).css( "box-shadow", '2px 2px 2px 1px ' + frameColor ); */
    }
      
  }).each(function(){
    
    if (this.complete) {
      jQuery(this).load(); 
    }
      
  });
    
});