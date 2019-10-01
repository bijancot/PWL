<?php
echo lang('ID');
    echo heading('Welcome!, Simple Timezone Selector', 1);
    echo heading('for more information about zone, take a look at https://timezonedb.com/',5);
    echo heading('format that used http://localhost:8734/index.php/pertemuansepi/selectReg/(Region[Asia, etc])/(City[Jakarta, etc])',5);
    $this->output->parse_exec_vars = TRUE;
    echo br(1);
    echo "now, time refer to timezone ".get_cookie('simpan')." is <br/><strong>".$time."</strong>";
     echo br(5);
     echo "time elapsed for generate this page is : ".$eta." second";
     echo br(2);
     echo "amount of usage memory to run this page is : ".$memo;
?>