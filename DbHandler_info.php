<?php

include 'DbHandler.php';

$crud = new DbHandler('localhost', 'mydbpdo', 'root', '');

// Create
$sql = "INSERT INTO `mydbpdo`.`users` (`user_id`, `first_name`, `last_name`, `user_city`) VALUES (NULL, 'Firstname', 'Lastname', 'UserCity');";
echo $crud->createData($sql);
//Read
$sql = "SELECT * FROM `users` LIMIT 0, 30";
$res = $crud->readData($sql);
foreach ($res as $row) {
    foreach ($row as $key => $val) {
        echo "key = $key, val = $val\n";
        echo "<br />";
    }
}

//Update
echo   "<form action='' method='POST'>"
     . "Table name<input type='text' name='table'><br>"
     . "SET<input type='text' name='set'>=<input type='text' name='valueSet'><br>"
     . "WHERE<input type='text' name='where'>=<input type='text' name='valueWhere'><br>"
     . "<input type='submit' name='submit' value='submit'><br>";

$table = $_POST["table"];
$set = $_POST["set"];
$valueSet = $_POST["valueSet"];
$where = $_POST["where"];
$valueWhere = $_POST["valueWhere"];


$sql = "UPDATE `mydbpdo`.`".$table."` SET ".$set." = '" . $valueSet . "' WHERE `".$table."`.`".$where."` = '" . $valueWhere ."';";
echo $crud->updateData($sql);

//Delete
$sql = "DELETE FROM `mydbpdo`.`users` WHERE `users`.`user_id` = 1";
echo $crud->deleteData($sql);
echo "<br />";
//Read in table
$sql = "SELECT * FROM `users` LIMIT 0, 30";
$res = $crud->readData($sql);
echo "<table border='1'>";
foreach ($res as $row) {
    foreach ($row as $key => $val) {
        echo "<th>" . $key . "</th>";
    }
    break;
}
echo "<tr>";
foreach ($res as $row) {
    foreach ($row as $key => $val) {
        echo "<td> $val</td>";
    }
    echo "<tr>";
}
