<html>
    <head>
        <title>Kolo</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap-3.3.7-dist/css/bootstrap.css')?>"/>
    </head>
    <style>
        *{
            margin:10px 20px 10px 20px;
        }
    </style>
    <body>
        <?php
        echo heading('dataaa', 1);
            $this->table->set_heading(array("id","usernmae","password","email","opsi"));

            foreach ($dati as $koy) {
                $id =$koy->id;
                $username = $koy->username;
                $link = "<a href=\"".base_url()."/index.php/pertemuan7/hapusData/".$id."/".$username."\">Delete</a>";
                $this->table->add_row(array($koy->id,$koy->username,$koy->pass,$koy->nama,$link));
            }

        echo $this->table->generate();
        ?>
    </body>
</html>