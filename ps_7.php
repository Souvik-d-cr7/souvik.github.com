<?php
$math = $_POST['math'];
$phy = $_POST['phy'];
$chem = $_POST['chem'];
$eng = $_POST['eng'];
$be = $_POST['be'];


if($math > $phy and $math > $chem and $math > $eng and $math > $be){
    echo "Highest marks among the all five subject is in Mathematics = ". $math;
}
elseif($phy > $math and $phy > $chem and $phy > $eng and $phy > $be){
    echo "Highest marks among the all five subject is in physics = ". $phy;
}
elseif($chem > $math and $chem > $phy and $chem > $eng and $chem > $eng){
    echo "Highest marks among the all five subject is in Chemistry = ". $chem;
}
elseif($eng > $math and $eng > $phy and $eng > $chem and $eng > $be){
    echo "Highest marks among the all five subject is in English = ". $eng;
}
else{
    echo "Highest marks among the all five subject is in Basic Electrical = ". $be;
}

?>