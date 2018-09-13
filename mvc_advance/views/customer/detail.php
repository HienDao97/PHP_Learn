 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Form</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
		<h3 align="center">CUSTOMERS DETAIL</h3>
		<p>Ma khach hang: <?=$customer['MaKH']  ?></p>
        <p>Ten khach hang: <?=$customer['TenKH']  ?></p>
        <p>SDT khach hang: <?=$customer['SDT']  ?></p>
        <p>Email khach hang: <?=$customer['Email']  ?></p>
        <p>Dia chi khach hang: <?=$customer['DiaChi']  ?></p>

    </div>
</body>
</html>