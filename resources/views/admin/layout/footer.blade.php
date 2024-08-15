  <!-- Footer -->
  <footer class="sticky-footer bg-white">
    <div class="container my-auto">
      <div class="copyright text-center my-auto">
        <span>copyright &copy; <span id="year"></span> - developed by
          <b><a href="https://www.rupsanetworkpvtltd.com/" target="_blank">Rupsa Network Pvt. Ltd</a></b>
        </span>
      </div>
    </div>
  </footer>
  <!-- Footer -->
</div>
</div>

<!-- Scroll to top -->
<a class="scroll-to-top rounded" href="#page-top">
<i class="fas fa-angle-up"></i>
</a>

<script src="{{url('admin-asset/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{url('admin-asset/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{url('admin-asset/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
<script src="{{url('js/ruang-admin.min.js')}}"></script>
<script src="{{url('admin-asset/vendor/chart.js/Chart.min.js')}}"></script>
<script src="{{url('admin-asset/js/demo/chart-area-demo.js')}}"></script> 
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}


<!-- Latest CK editor -->

<script src="https://cdn.ckeditor.com/ckeditor5/41.2.1/classic/ckeditor.js"></script>
<script>
ClassicEditor
    .create( document.querySelector( '#editor' ) )
    .catch( error => {
        console.error( error );
    } );
</script>

<!-- For ck editor 4 -->

<!-- <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
<script>
CKEDITOR.replace('editor');
</script> -->

<script>

var currentDate = new Date();


var currentYear = currentDate.getFullYear();

document.querySelector('#year').innerHTML=currentYear;

</script>
<script>
// Initialize tooltips
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
return new bootstrap.Tooltip(tooltipTriggerEl)
})


</script>
<script>
function printPage() {
window.print();
}
</script>

</body>

</html>