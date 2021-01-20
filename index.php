<?php
require_once('functions.php');
?>
 
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$employees[0]['salary'] = 1000; 
$employees[0]['type'] = 'student';
$employees[1]['salary'] = 2000; 
$employees[1]['type'] = 'student';
$employees[2]['salary'] = 3000; 
$employees[2]['type'] = 'student';
$employees[3]['salary'] = 4000; 
$employees[3]['type'] = 'student';
$employees[4]['salary'] = 5000; 
$employees[4]['type'] = 'student';
$employees[5]['salary'] = 6000; 
$employees[5]['type'] = 'student';
$employees[6]['salary'] = 7000; 
$employees[6]['type'] = 'Corona';
$employees[7]['salary'] = 8000; 
$employees[7]['type'] = 'corona';
$employees[8]['salary'] = 9000; 
$employees[8]['type'] = 'corona';
$employees[9]['salary'] = 10000; 
$employees[9]['type'] = 'corona';

?>

<h1>SALARY</h1><hr>
<br>


<?php for ($i=0; $i < 10; $i++) { ?>

<p>Hrubá mzda: <?= $employees[$i]['salary'] ?> <p>

<p>Čistá mzda normal: <?= cleanSalaryComplex($employees[$i]['salary']);?> </p>

<p>Čistá mzda student: <?= cleanSalaryComplex($employees[$i]['salary'], 'student');?> </p>

<p>Čistá mzda normal během corony: <?= cleanSalaryComplex($employees[$i]['salary'], 'corona');?> </p>

<?php } ?>

</body>
</html>