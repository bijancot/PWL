<?php echo doctype('html5');?>

<html>
    <head>
        <title></title>
    </head>    
        <style>
            .main{
                border:1px solid black;
                /* background:grey; */
                border-radius:1em;
                padding:2.5%;
            }
            .unittest{
                border:1px solid black;
                /* background:#e3dac9; */
                border-radius:1em;
                padding:2.5%;
                padding-top:1.5%;
            }
            .timebox{
                border:1px solid blue;
                display: flex;
                flex-direction: column;
                max-width: 28%;
                padding:2.5%;
                background:#b3cde0;
                color:#011f4b;
            }
        </style>
    <body>
    <div class="main">
            <?php
            echo heading('Welcome!, Simple Timezone Selector', 1);
            echo heading('for more information about zone, take a look at https://timezonedb.com/',5);
            echo heading('format that used http://localhost:8734/index.php/pertemuansepi/selectReg/(Region[Asia, etc])/(City[Jakarta, etc])',4);
            $this->output->parse_exec_vars = TRUE;
            echo br(1);
            echo "<div class=\"timebox\">now, time refer to timezone ".$def." is <br/><strong>".$time."</strong></div>";
            ?>
    </div>
    <?php echo br(2);?>
    <div class="unittest">
        <?php
        echo heading('Testing with unit test, memory usage & time rendering', 3);
        // $new_array[] = array_keys($unitTest[0]);
        // $this->table->set_heading($new_array[0]);
        // foreach($unitTest as $key){
        //     $this->table->add_row($key['Test Name'],$key['Test Datatype'],$key['Expected Datatype'],$key['Result'],$key['File Name'],$key['Line Number'],$key['Notes']);
        // } 
        // echo $this->table->generate();
        //$this->unit->set_test_items(array('test_name', 'result',));
            // var_dump($unitTest[0]['Test Name']);
            // var_dump($unitTest[0]['Result']);
            // var_dump($unitTest[0]['File Name']);
            // var_dump($unitTest[0]['Notes']);
        echo $this->unit->report();
        echo br(2);
        echo "time elapsed for generate this page is : ".$eta." second";
        echo br(1);
        echo "amount of usage memory to run this page is : ".$memo;
        echo br(2);
        echo "Each test data stored to db, for posibble development, this project can integrate with date helper for mapping test result ";
        echo br(2);
        echo "&copy; 2019<a href=\"https://panjibaskoro.web.id/\">Panji Baskoro</a>";
        ?>
    </div>
    <?php  
    $data = array(
        3  => 'http://example.com/news/article/2006/06/03/',
        7  => 'http://example.com/news/article/2006/06/07/',
        13 => 'http://example.com/news/article/2006/06/13/',
        26 => 'http://example.com/news/article/2006/06/26/'
    );
    echo $this->calendar->generate(2006, 6, $data);
    ?>
    </body>
</html>
