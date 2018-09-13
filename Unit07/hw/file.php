<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Huong dan su dung thu vien js</title>


	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

	<!-- datatables js -->
	<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>


	
	<!-- css toast -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body>
	<!-- <button type="button" class="btn btn-info">button</button> -->

	<!-- <a href="add.php">Them moi</a> -->

	<a href="delete.php?MaSP=abc" class="btn btn-warning delete">Xoa</a>

	<table class="table table-hover" id="table">
		<thead>
			<tr>
				<th>#</th>
				<th>Ten</th>
				<th>Ngay sinh</th>
				<th>Que quan</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>1</td>
				<td>Tran Van C</td>
				<td>6/2/1997</td>
				<td>Ha Noi</td>
				
			</tr>
			<tr>
				<td>2</td>
				<td>Tran Van A</td>
				<td>6/2/1997</td>
				<td>Ha Noi</td>
			</tr>
			<tr>
				<td>3</td>
				<td>Tran Van B</td>
				<td>6/2/1997</td>
				<td>Ha Noi</td>
			</tr>
		</tbody>
	</table>

	<form method="post" action="" enctype="multipart/form-data">
        <input type="file" name="avatar"/>
        <input type="submit" name="uploadclick" value="Upload"/>
    </form>
</body>

	
	<script type="text/javascript">
		$(document).ready( function () {
    		$('#table').DataTable();
		} );
		
	</script>
	
	

	<!-- //jquery js -->
	<!--  -->
	<!-- js toast -->
	<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script> -->


	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<!-- <?php if(isset($_COOKIE)){?>
	<script type="text/javascript">
		toastr.info('Them moi thanh cong')
	</script>
<?php	} ?> -->
	<script>
				$('.delete').click(function(e){
					e.preventDefault();
					var url = $(this).attr('href');
					console.log(url);

					swal({
					  title: "Ban co chac chan muon xoa?",
					  text: "chon ok de xoa, cancel de huy",
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
					    swal("Ban chon khong xoa!");
					  }
					});

				});
		
	</script>
	


</html>