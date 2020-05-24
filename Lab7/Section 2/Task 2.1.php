<?php
$array_1 = ["Astana", "Almaty","Shymkent","San Francisco"]; // assotiative array
echo "PHP array:" . "<br>";
foreach ($array_1 as $key => $value) {
    echo $value . "<br>";
}
echo "JSON array:" . "<br>";
$array_1_JSON = json_encode($array_1);
echo $array_1_JSON . "<br>";

$students = array (
    array("Janel",20,1902),
    array("Zaure",19,1902),
    array("Daniya",18,1902),
    array("Lyazzat",20,1902)
);
echo $students[0][0].": Age: ".$students[0][1].", Group: ".$students[0][2].".<br>";
echo $students[1][0].": Age: ".$students[1][1].", Group: ".$students[1][2].".<br>";
echo $students[2][0].": Age: ".$students[2][1].", Group: ".$students[2][2].".<br>";
echo $students[3][0].": Age: ".$students[3][1].", Group: ".$students[3][2].".<br>";

echo "JSON array:" . "<br>";
$array_1_JSON = json_encode($students);
echo $array_1_JSON . "<br>";
?>