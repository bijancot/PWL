<html> 
    <head>
        <title>
            Test Input
        </title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap-3.3.7-dist/css/bootstrap.css')?>"/>
    </head>
    <body>
    <?php echo validation_errors(); 
    ?>
        <form method="POST" action="<?php echo base_url('index.php/pertemuan7')?>">
            Username : <br/>
            <input type="text" name="username" placeholder="username anda"><br/>
            Password : <br/>
            <input type="password" name="password" placeholder="password anda"><br/>
            Email : <br/>
            <input type="text" name="email" placeholder="email anda"><br/><br/>
            <input type="submit" name="masukkan" value="masukkan data">
        </form>
    </body>
</html>