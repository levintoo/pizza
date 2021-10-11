<?php
$start = microtime(true);
$data = file_get_contents("local_data.json");
$data = json_decode($data, true);
$x =0;
 while($data['batters']['batter'][$x]['id'] != 1002)
{
    $x = $x+1;
}
echo "Batter #",$data['batters']['batter'][$x]['id'];
echo "type is:", $data['batters']['batter'][$x]['type'];
$y =0;
 while($data['topping'][$y]['id'] != 5004)
{
    $y = $y+1;
}
echo "Topping #",$data['topping'][$y]['id'];
echo "type is:",$data['topping'][$y]['type'];

    $end = microtime(true);
    $total = $end-$start;
    echo "Batter Count is:",$x;
    echo "Toppings Count is:",$y;
    echo "Time taken is:", $new = number_format($total,4), "ms";

?>
