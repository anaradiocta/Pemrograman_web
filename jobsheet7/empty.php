<?php
$myArray = array(); // Array kosong
if(empty($myArray)){
    echo "Array tidak terdefinisi atau kosong.";
}else{
    echo "Array terdefinisi atau tidak kosong.";
}

if (empty($nonExistentVar)){
    echo "Variabel tidak terdefinisi atau kosong.";
} else{
    echo "Variabel terdefinisi atau tidak kosong.";
}
?>