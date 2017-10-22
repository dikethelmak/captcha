<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="captcha.css">    
    <title>Captcha</title>
</head>
<body>

  <div class="container">    

    <?php if(!empty($error)) echo '<div class="error">'.$error.'</div>'; ?>
    <?php if(!empty($accept)) echo '<div class="accept">'.$accept.'</div>'; ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
        <p><input type="text" placeholder="Name" name="name" class="input"></p>
        <p><input type="text" placeholder="Email" name="email" class="input"></p>
        <img src="captcha.php">
        <p><input type="text" name="code" class="input" /></p>
        <p><input type="reset" name="submit" value="Send" class="btn" /></p>
    </form>
  </div>

</body>
</html>