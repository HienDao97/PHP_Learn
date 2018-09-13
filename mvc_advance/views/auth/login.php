<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
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
        
        
        <form action="?mod=login&act=postLogin" method="POST" role="form" id="form-register">
            
            <legend>FORM LOGIN</legend>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" id="" name="Email" placeholder="Nhap email" value="<?php if(isset($_COOKIE['oldmail'])){echo $_COOKIE['oldmail'];}?>"  required>
            </div>
            <div class="form-group">
                <label for="">Mat khau</label>
                <input type="text" class="form-control" id="" name="MatKhau" placeholder="nhap mat khau"  required>
            </div>
            
            
        
            <button type="submit" class="btn btn-primary" name="login">Login</button>
        </form>
    </div>

   
    

    
</body>
</html>