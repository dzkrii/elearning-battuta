<!-- jQuery -->
<script src="/template-adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/template-adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/template-adminlte/dist/js/adminlte.min.js"></script>

{{-- Toastr JS --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
  @if(session()->has('error'))
    toastr.error('{{ session('error') }}', 'GAGAL!')
  @endif
</script>

</body>
</html>