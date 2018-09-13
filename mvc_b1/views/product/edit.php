<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.min.js"></script>

    
</head>
<body>

    <div class="container">
        <h3>THEM SAN PHAM</h3>
        <form action="?mod=product&act=update" method="POST" role="form" id="form-register">
            
        
            <div class="form-group">
                <label for="">Ma San Pham</label>
                <input type="text" class="form-control" id="" name="MaSP" value="<?=$product['MaSP']?>" placeholder="" required>
            </div>
            <div class="form-group">
                <label for="">Ten San Pham</label>
                <input type="text" class="form-control" id="" name="TenSP" value="<?=$product['TenSP']?>" placeholder="" required>
            </div>
            <div class="form-group">
                <label for="">So Luong</label>
                <input type="text" class="form-control" id="" name="SoLuong" value="<?=$product['SoLuong']?>"  placeholder="" required>
            </div>
            <div class="form-group">
                <label for="">Don Gia</label>
                <input type="text" class="form-control" id="" name= "DonGia" value="<?=$product['DonGia']?>"   placeholder="" required>
            </div>
            
            
        
            <button type="submit" class="btn btn-primary" name="Update">UPDATE</button>
        </form>
    </div>

   
    

    
</body>
</html>