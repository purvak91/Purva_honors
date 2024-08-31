<?php
require 'favfood.view.php';
$name = $_POST['name'];
$fav_food = $_POST['fav_food'];

$time  = date("H");
if($time>=2 && $time<=11) {
    $greet =  "Good Morning";
}
else if($time>=11 && $time<=16) {
    $greet =  "Good Afteroon";
}
else if($time>=16 && $time<=21) {
    $greet = "Good Evening";
}
else {
    $greet =  "Good Night";
}
?>
<div>
<strong>
<?= "$greet $name. Your favorite food is $fav_food";?>
</strong>
</div> 



