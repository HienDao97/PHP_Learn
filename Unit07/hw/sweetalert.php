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
	
	<div class="container">
		<a  href="#" class="btn btn-warning delete">Xoa</a>
	</div>
	

	


</body>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
	$('.delete').click(function(e){
		swal({
			title: "Are you sure?",
			text: "Once deleted, you will not be able to recover this imaginary file!",
			icon: "warning",
			buttons: true,
			dangerMode: true,
		})
		.then((willDelete) => {
			if (willDelete) {
				swal("Poof! Your imaginary file has been deleted!", {
					icon: "success",
				});
			} else {
				swal("Your imaginary file is safe!");
			}
		});

	});

</script>



</html>