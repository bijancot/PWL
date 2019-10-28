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
            foreach ($data as $key) {
                $header = array_keys(get_object_vars($key));
            }

            $this->table->set_heading($header);

            foreach ($dati as $koy) {
                $this->table->add_row(array($koy->id,$koy->username,$koy->pass,$koy->nama));
            }

        echo $this->table->generate();
        ?>
    </body>
</html>