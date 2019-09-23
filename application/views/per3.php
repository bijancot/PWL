<html>
    <head>
        <title>Test</title>
    </head>
    <body>
        <?php
            //helper
            $this->load->helper('form');
            $this->load->helper('html');

            //data 
            $data = array(
                'name'          => 'username',
                'id'            => 'username',
                'value'         => '',
                'placeholder'   => 'username',
                'maxlength'     => '100',
                'size'          => '50',
                'style'         => 'width:20%'
        );
            //output
            echo heading('Panji Iman Baskoro','1');
            echo form_open('email/isend');
            echo form_input($data);
            echo form_close();
        ?>
    </body>
</html>
