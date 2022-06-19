 // function to input image
 $('.error-msg-1').css('visibility', 'hidden');
 function readURL(input) {
    if (input.files && input.files[0]) {

       var reader = new FileReader();

       reader.onload = function (e) {
          $('.image-upload-wrap').hide();

          $('.file-upload-image').attr('src', e.target.result);
          $('#summary-img').attr('src', e.target.result);
          $('.file-upload-content').show();
          $('.image-upload-wrap').css('border', 'none');
          $('.error-msg-1').css('visibility', 'hidden');


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



 // Toast function


 window.addEventListener("DOMContentLoaded", () => {
   showSuccessToast();
});
function showSuccessToast() {
   toast({
   
      message: "Congratulations! Your account has been successfully verified.",
      type: "success",
      duration: 10000
   });
}

function showErrorToast() {
   toast({
      title: "Thất bại!",
      message: "Có lỗi xảy ra, vui lòng liên hệ quản trị viên.",
      type: "error",
      duration: 5000
   });
}


function toast({ title = "", message = "", type = "info", duration = 3000 }) {
   const main = document.getElementById("toast");
   if (main) {
     const toast = document.createElement("div");
 
     // Auto remove toast
     const autoRemoveId = setTimeout(function () {
       main.removeChild(toast);
     }, duration + 1000);
 
     // Remove toast when clicked
     toast.onclick = function (e) {
       if (e.target.closest(".toast__close")) {
         main.removeChild(toast);
         clearTimeout(autoRemoveId);
       }
     };
 
     const icons = {
       success: "fas fa-check-circle",
       info: "fas fa-info-circle",
       warning: "fas fa-exclamation-circle",
       error: "fas fa-exclamation-circle"
     };
     const icon = icons[type];
     const delay = (duration / 1000).toFixed(2);
 
     toast.classList.add("toast", `toast--${type}`);
     toast.style.animation = `slideInLeft ease .3s, fadeOut linear 1s ${delay}s forwards`;
 
     toast.innerHTML = `
                     <div class="toast__icon">
                         <i class="${icon}"></i>
                     </div>
                     <div class="toast__body">
                         <h3 class="toast__title">${title}</h3>
                         <p class="toast__msg">${message}</p>
                     </div>
                     <div class="toast__close">
                         <i class="fas fa-times"></i>
                     </div>
                 `;
     main.appendChild(toast);
   }
 }
 