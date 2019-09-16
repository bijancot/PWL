<?php
    echo "list anda";
    $i=0;
    foreach($data as $dato){
        if($dato['Kelas']!=$hoo){
            continue;
        }else{
            echo "<ul>
        <li>".$dato['NRP']."</li>
        <li>".$dato['Nama']."</li>
        <li>".$dato['Kode_MK']."</li>
        <li>".$dato['Kelas']."</li>
        </ul>";
        }
    }
?>