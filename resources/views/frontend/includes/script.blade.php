<!-- jQuery -->
<script src="{{asset('frontend/assets/js/jquery-3.3.1.min.js')}}"></script>
<!-- Bootstrap Plugins -->
<script src="{{asset('frontend/assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/jquery-latest.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/jquery.easing.js')}}"></script>
<script src="{{asset('frontend/assets/js/wow.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/slick.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/magnific-popup.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/jquery.scrollUp.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/owl.carousel.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<!-- PDF File Generate -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
<!-- Fency Box JS -->
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
<!-- Isotop JS -->
<script src="{{asset('frontend/assets/js/isotope.min.js')}}"></script>
<!-- Main js -->
<script src="{{asset('frontend/assets/js/main.js')}}"></script>
<script src="{{asset('frontend/assets/js/landing.js')}}"></script>


<script type="text/javascript">
  $("body").on("click", "#btnExport", function () {
      html2canvas($('#tblstudents')[0], {
          onrendered: function (canvas) {
              var data = canvas.toDataURL();
              var docDefinition = {
                  content: [{
                      image: data,
                      width: 500
                  }]
              };
              pdfMake.createPdf(docDefinition).download("cutomer-details.pdf");
          }
      });
  });
</script>


<!-- Toastr JS -->
<script type="text/javascript">
    toastr.options = {
      "closeButton": true,
      "debug": false,
      "newestOnTop": true,
      "progressBar": true,
      "positionClass": "toast-top-right",
      "preventDuplicates": false,
      "onclick": null,
      "showDuration": "500",
      "hideDuration": "1000",
      "timeOut": "7000",
      "extendedTimeOut": "1000",
      "showEasing": "swing",
      "hideEasing": "linear",
      "showMethod": "fadeIn",
      "hideMethod": "fadeOut"
    }
</script>

<script>
      </script>

<!--Start of Tawk.to Script-->
{{-- <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/5f2bd33ded9d9d262708a29f/default';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
</script> --}}
<!--End of Tawk.to Script--> 