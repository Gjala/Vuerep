$(function(){
    $('.parent-container').magnificPopup({
        delegate: 'a', // child items selector, by clicking on it popup will open
        type: 'image',
        // other options
        gallery: {
            enabled:true,
            navigateByImageclick:true,
            preload:[0,1]
        }
      });
});