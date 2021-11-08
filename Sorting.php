<?php
    function sorting(array $name, $count){
        for($i = 0; $i < $count; $i++){
            for($j = $i + 1; $j < $count; $j++){
                if($name[$j] < $name[$i]){
                    $temp = $name[$j];
                    $name[$j] = $name[$i];
                    $name[$i] = $temp;
                }
            }
        }
        return $name;
    }

    $list_nama = ["larine", "aduh", "qifuat", "toda", "anevi", "samid", "kifuat", "amel", "berkah", "deni"] ;
    $total_data = count($list_nama);

    $list_acak = $list_nama;
    $list_urut = sorting($list_nama, $total_data);

    echo "Data Nama Sebelum Diurutkan : <br>";
    for ($i = 0; $i < $total_data; $i++) { 
        if($i == $total_data - 1){
            echo "$list_acak[$i]";
        }
        else{
            echo "$list_acak[$i], ";
        }
    }

    echo "<br><br>";

    echo "<br> Data Nama Setelah Diurutkan : <br>";
    for ($i = 0; $i < $total_data; $i++) { 
        if($i == $total_data - 1){
            echo "$list_urut[$i]";
        }
        else{
            echo "$list_urut[$i], ";
        }
    }    
?>