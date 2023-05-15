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
        <h2>Register</h2>
    </div>
    <div id="satusatu" class="border border-secondary">
        <form action="register.php" method="POST" style="margin: 50px;">
            <div class="form-group">
                <label for="exampleInputNama1">Nama Lengkap</label>
                <input type="text" name="namalengkap" class="form-control" placeholder="Nama Anda">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="text" name="email" class="form-control" placeholder="Email Anda">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password Anda">
            </div>
            <a href="formlogin.php">
                <button type="submit" name="register" class="btn btn-primary">Register</button>
            </a>
        </form>
    </div>
    <div id="section1">
        <a class="btn btn-secondary" href="formlogin.php" role="button">Kembali untuk Login</a>
    </div>
</body>

</html>
<!-- -->