<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="<?= BASE_URL('assets/css/login_style.css');?>">
    <title>LOGIN</title>
</head>
<body>

    <div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="<?= BASE_URL('assets/img/Haha.jpeg'); ?>" id="icon" alt="User Icon" />
    </div>

    <?php
    if($this->session->flashdata('error') <> '')
    {
    ?>
       <div class="alert alert-danger">
       <?php echo $this->session->flashdata('error');?>
       </div>
    <?php    
    }
    ?>

    <!-- Login Form -->
    <form method="post" action="<?= BASE_URL('index.php?/Login/loginn') ;?>">
      <input type="text" id="login" class="fadeIn second" name="username" placeholder="login">
      <input type="text" id="password" class="fadeIn third" name="password" placeholder="password">
      <input type="submit" class="fadeIn fourth" value="Log In">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Lupa Password?</a>
    </div>

  </div>
</div>

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>