<?php
//$data = new Array()
//$data =  Array()


/* Indexed */
/*$data[0] = 10;
$data[1] = 11;
$data[2] = 12;
$data[3] = 13;*/

/* Associative */

/*$data['name'] = 'Tarek';
$data['city'] = 'Mirpur';
$data['country'] = 'Bangladesh';

echo $data['city'];
echo '<br>';

$data = [11, 13, "Tarek"];

echo $data['2'];
echo '<br>';*/

/*$data = [
    'name' => 'Rakib',
    'city' => 'Dhaka',
    'country' => 'Bangladesh',
    'phone' => '0151********'
];

echo $data['phone'];
echo "<br>";

echo "<pre>";
print_r($data);

foreach ($data as $x => $y){
    echo "key =" .$x . " value=" .$y;
    echo "<br>";
}*/
/*$data =[];

$data[0][0] = 10;
$data[0][1] = 10;
$data[0][2] = 10;

$data[1][0] = 10;
$data[1][1] = 11;
$data[1][2] = 10;

$data[2][0] = 10;
$data[2][1] = 12;
$data[2][2] = 10;

foreach ($data as $val){
    echo $val[0]." ".$val[1].' '.$val[2].'<br>';
}*/
$students =[
    "0" => [
        'name' => "Rahim",
        'city' => "Dhaka",
        'country' => "Bangledesh"
    ],
    "1" => [
        'name' => "Korim",
        'city' => "Noakhali",
        'country' => "Bangledesh"
    ],
    "2" => [
        'name' => "Sagor",
        'city' => "Comilla",
        'country' => "Bangledesh"
    ]
];

/*foreach ($students as $student){
    echo $student['name']." ".$student['city'];
}*/
?>

    <table border="1" width="500">
        <tr align="center">
            <th>Name</th>
            <th>City</th>
            <th>Country</th>
        </tr>
        <?php foreach ($students as $student){?>
        <tr align="center">
            <td><?php echo $student['name'];?></td>
            <td><?php echo $student['city'];?></td>
            <td><?php echo $student['country'];?></td>
        </tr>
        <?php }?>

    </table>
