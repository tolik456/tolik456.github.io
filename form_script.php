<?PHP

$name=$_POST['name'];
$age=$_POST['age'];
$country=$_POST['country'];
$city=$_POST['city'];
$number=$_POST['number'];
$email=$_POST['email'];
$data= $name . "," . $age . "," . $country . "," . $city . "," . $number . "," . $email; 
$file= "file.csv";
file_put_contents($file, $data . PHP_EOL, FILE_APPEND);






?>
