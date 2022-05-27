
$(window).on("load resize ", function() {

  var scrollWidth = $('.tbl-content-cont').width() - $('.tbl-content-cont table').width();
  $('.tbl-header-cont').css({'padding-right':scrollWidth});
}).resize();

 console.log("Im my books js file")