<html>
    <head>
        <title>Koneksi Database Mysql</title>
    </head>
    <body>
        <h1>Demo Koneksi Database Mysql</h1>
        <?php
        $con = mysqli_connect("localhost","root","","");
        
        // Check Connection
        if (mysqli_connect_errno()) {
	    echo "Failed to connect to MySQL : " . mysqli_connect_error ()
	        ;
	        exit ();
        }
        ?>
    </body>
</html>