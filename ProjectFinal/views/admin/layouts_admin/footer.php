 </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="public/source_admin/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="public/source_admin/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="public/source_admin/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="public/source_admin/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="public/source_admin/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="public/source_admin/vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="public/source_admin/dist/js/sb-admin-2.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="public/source/assets/dest/js/nhanvien.js"></script>
     <script src="public/source/assets/dest/js/khachhang.js"></script>
      <script src="public/source/assets/dest/js/sanpham.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

    <script>
                $('.delete').click(function(e){
                    e.preventDefault();
                    var url = $(this).attr('href');
                    console.log(url);

                    swal({
                      title: "Bạn có chắc chắn muốn xóa?",
                      text: "chọn ok để xóa, cancel để hủy",
                      icon: "warning",
                      buttons: true,
                      dangerMode: true,
                    })
                    .then((willDelete) => {
                      if (willDelete) {
                        // dong y Xoa
                        window.location.href=url;
                        
                      } else {
                        // khong xoa
                        swal("Bạn chọn không xóa!");
                      }
                    });

                });
        
    </script>

</body>

</html>