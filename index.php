<?php
    $rate =7;
 error_reporting(0);
$principle = $_POST['principle'];
$rate = $_POST['rate'];
$time = $_POST['time'];



                            

 if ($_POST['clear'])
{
$principle = "";
$rate = "";
$time = "";
$display_results = "";
}
 if ($_POST['compute']) 
 {
$interest =($principle*$rate*$time)/100;
$display_results = round($interest,2);

echo $principle;
echo $rate;
echo $time;
echo $display_results

 }
?>