<!-- Footer -->
<!-- Footer END -->
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
<script src="<?= base_url('assets/js/popper.min.js') ?>"></script>
<script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
<!-- Appear JavaScript -->
<script src="<?= base_url('assets/js/jquery.appear.js') ?>"></script>
<!-- Countdown JavaScript -->
<script src="<?= base_url('assets/js/countdown.min.js') ?>"></script>
<!-- Counterup JavaScript -->
<script src="<?= base_url('assets/js/waypoints.min.js') ?>"></script>
<script src="<?= base_url('assets/js/jquery.counterup.min.js') ?>"></script>
<!-- Wow JavaScript -->
<script src="<?= base_url('assets/js/wow.min.js') ?>"></script>
<!-- Apexcharts JavaScript -->
<script src="<?= base_url('assets/js/apexcharts.js') ?>"></script>
<!-- Slick JavaScript -->
<script src="<?= base_url('assets/js/slick.min.js') ?>"></script>
<!-- Select2 JavaScript -->
<script src="<?= base_url('assets/js/select2.min.js') ?>"></script>
<!-- Owl Carousel JavaScript -->
<script src="<?= base_url('assets/js/owl.carousel.min.js') ?>"></script>
<!-- Magnific Popup JavaScript -->
<script src="<?= base_url('assets/js/jquery.magnific-popup.min.js') ?>"></script>
<!-- Smooth Scrollbar JavaScript -->
<script src="<?= base_url('assets/js/smooth-scrollbar.js') ?>"></script>
<!-- lottie JavaScript -->
<script src="<?= base_url('assets/js/lottie.js') ?>"></script>
<!-- am core JavaScript -->
<script src="<?= base_url('assets/js/core.js') ?>"></script>
<!-- am charts JavaScript -->
<script src="<?= base_url('assets/js/charts.js') ?>"></script>
<!-- am animated JavaScript -->
<script src="<?= base_url('assets/js/animated.js') ?>"></script>
<!-- am kelly JavaScript -->
<script src="<?= base_url('assets/js/kelly.js') ?>"></script>
<!-- am maps JavaScript -->
<script src="<?= base_url('assets/js/maps.js') ?>"></script>
<!-- am worldLow JavaScript -->
<script src="<?= base_url('assets/js/worldLow.js') ?>"></script>
<!-- Raphael-min JavaScript -->
<script src="<?= base_url('assets/js/raphael-min.js') ?>"></script>
<!-- Morris JavaScript -->
<script src="<?= base_url('assets/js/morris.js') ?>"></script>
<!-- Morris min JavaScript -->
<script src="<?= base_url('assets/js/morris.min.js') ?>"></script>
<!-- Flatpicker Js -->
<script src="<?= base_url('assets/js/flatpickr.js') ?>"></script>
<!-- Style Customizer -->
<script src="<?= base_url('assets/js/style-customizer.js') ?>"></script>
<!-- Chart Custom JavaScript -->
<script src="<?= base_url('assets/js/chart-custom.js') ?>"></script>
<!-- Custom JavaScript -->
<script src="<?= base_url('assets/js/custom.js') ?>"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script>
   $(document).ready(function() {
      $('#data').DataTable();
   })
   $('#data tbody').on('click', '.mdEdit', function() {
      const id = $(this).data('id')
      const image = $(this).data('image')
      const title = $(this).data('title')
      const category = $(this).data('category')
      const author = $(this).data('author')
      const description = $(this).data('description')
      const subs = $(this).data('subs')
      const file = $(this).data('file')
      $('#mdEdit #mdID').val(id)
      $("#mdEdit input[name='title']").val(title)
      $("#mdEdit input[name='category']").val(category)
      $("#mdEdit input[name='author']").val(author)
      $("#mdEdit .image").attr('href', image)
      $("#mdEdit .file").attr('href', file)
      if (subs == 0) {
         $("#mdEdit #customRadio-1").prop("checked", true);
      } else {
         $("#mdEdit #customRadio-2").prop("checked", true);
      }
      $("#mdEdit textarea[name='description']").val(description)
   })
   $('#data tbody').on('click', '.mdDelete', function() {
      const id = $(this).data('id')
      const image = $(this).data('image')
      const title = $(this).data('title')
   
      $('#mdDelete #mdID').val(id)
      $("#mdDelete .image").attr('src', image)
      $("#mdDelete .title").text(title)
   })
</script>
</body>

</html>