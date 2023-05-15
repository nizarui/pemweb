<html lang=en>

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<style type="text/css">
  #section1 {
    padding: 25px;
  }
  #body {
    padding-left: 300px;
    padding-right: 300px;
    background-color: #F9C8FF;
  }
  #satusatu {
    background-color: white;
  }
</style>

<body id="body">
  <div id="section1" class="text-center">
    <h2>Login</h2>
  </div>
  <div id="satusatu" class="border border-secondary" >
    <form action="login.php" method="POST" style="margin: 50px;">
      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" name="email" class="form-control" placeholder="Enter email">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" name="password" class="form-control" placeholder="Password">
      </div>
      <a href="formregister.php">Belum Punya Akun? Register disini</a>
      <br>
      <br>
      <a href="formpesertadidik.php">
        <button type="submit" name="login" class="btn btn-primary">Login</button>
      </a>
    </form>
  </div>
  <div id="section1">
    
  </div>
</body>

</html>