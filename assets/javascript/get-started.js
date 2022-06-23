 // function to input image

 function readURL(input) {
    if (input.files && input.files[0]) {

       var reader = new FileReader();

       reader.onload = function (e) {
          $('.image-upload-wrap').hide();

          $('.file-upload-image').attr('src', e.target.result);
          $('#summary-img').attr('src', e.target.result);
          $('.file-upload-content').show();
          $('.image-upload-wrap').css('border', 'none');
  

          $('.image-title').html(input.files[0].name);

       };


       reader.readAsDataURL(input.files[0]);

    } else {
       removeUpload();
    }
 }
 var ds = ''
 function removeUpload() {
    $('.file-upload-image').attr('src', ds);
    $('.file-upload-input').replaceWith($('.file-upload-input').clone());
    $('.file-upload-content').hide();
    $('.image-upload-wrap').show();
    $('.image-upload-wrap').css('border', '3px dashed #9E9EA7');

 }
 $('.image-upload-wrap').bind('dragover', function () {
    $('.image-upload-wrap').addClass('image-dropping');
 });
 $('.image-upload-wrap').bind('dragleave', function () {
    $('.image-upload-wrap').removeClass('image-dropping');
 });






