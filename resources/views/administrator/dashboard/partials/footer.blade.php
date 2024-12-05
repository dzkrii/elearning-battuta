
<footer class="main-footer">
  <div class="float-right d-none d-sm-block">
    <b>Version</b> 2.0
  </div>
  <strong>&copy; {{ now()->year }} <a href="#">Universitas Battuta</a>.</strong> All rights reserved.
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="/template-adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/template-adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/template-adminlte/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
{{-- <script src="/template-adminlte/dist/js/demo.js"></script> --}}
<!-- bs-custom-file-input -->
<script src="/template-adminlte/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>

{{-- Toastr JS --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
  @if(session()->has('success'))
      toastr.success('{{ session('success') }}', 'SUKSES!')
  @endif

  @if ($errors->any())
    toastr.error('{{ session('error') }} Terjadi kesalahan, mohon periksa kembali.', 'GAGAL!')
  @endif
</script>

<!-- DataTables  & Plugins -->
<script src="/template-adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/template-adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/template-adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="/template-adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="/template-adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="/template-adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="/template-adminlte/plugins/jszip/jszip.min.js"></script>
<script src="/template-adminlte/plugins/pdfmake/pdfmake.min.js"></script>
<script src="/template-adminlte/plugins/pdfmake/vfs_fonts.js"></script>
<script src="/template-adminlte/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="/template-adminlte/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="/template-adminlte/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<!-- Summernote -->
<script src="/template-adminlte/plugins/summernote/summernote-bs4.min.js"></script>

<script>
  // file browse
  $(function () {
    bsCustomFileInput.init();
  });

  // wysiwyg
  $(function () {
     $('#summernote').summernote({
      fontNames: ['Roboto', 'sans-serif'],
      fontNamesIgnoreCheck: ['Roboto']
     });
  });

  $(function () { 
    $('.summernote-edit').summernote({
      fontNames: ['Roboto', 'sans-serif'],
      fontNamesIgnoreCheck: ['Roboto']
    });
  });
 </script>

<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      "buttons": ["copy", "csv", "excel", "pdf", "print"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    // $('#example2').DataTable({
    //   "paging": true,
    //   "lengthChange": false,
    //   "searching": false,
    //   "ordering": true,
    //   "info": true,
    //   "autoWidth": false,
    //   "responsive": true,
    // });
  });
</script>

</body>
</html>