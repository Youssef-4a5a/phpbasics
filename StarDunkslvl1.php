<?php
include 'StarDunkslvl1_class.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

$crud = new DbHandler('localhost', 'StarDunks', 'root', '');
?>

<form class="form" action="" method="POST">
    Product type code:
    <input type="number" name="product_type_code">
    <br>
    Supplier ID:
    <input type="number" name="supplier_id">
    <br>
    Product name:
    <input type="text" name="product_name">
    <br>
    Product price:
    <input type="text" name="product_price">
    <br>
    Other details:
    <textarea name="other_product_details"></textarea>
    <input type="submit" name="submitInsert" value="submit">
</form>

<?php
$product_type_code = $_POST["product_type_code"];
$supplier_id = $_POST["supplier_id"];
$product_name = $_POST["product_name"];
$product_price = $_POST["product_price"];
$other_product_details = $_POST["other_product_details"];


// Create
if (isset($_POST["submitInsert"])) {
    $sql = "INSERT INTO `StarDunks`.`products` (`product_id`, `product_type_code`, `supplier_id`, `product_name`, `product_price`, `other_product_details`) VALUES (NULL, " . $product_type_code . ", " . $supplier_id . ", '" . $product_name . "', '" . $product_price . "', '" . $other_product_details . "');";
    echo $crud->createData($sql);
}

//Read
$sql = "SELECT * FROM `products` LIMIT 0, 30";
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

//
////Update
//echo   "<form action='' method='POST'>"
//     . "Table name<input type='text' name='table'><br>"
//     . "SET<input type='text' name='set'>=<input type='text' name='valueSet'><br>"
//     . "WHERE<input type='text' name='where'>=<input type='text' name='valueWhere'><br>"
//     . "<input type='submit' name='submit' value='submit'><br>";
//
//$table = $_POST["table"];
//$set = $_POST["set"];
//$valueSet = $_POST["valueSet"];
//$where = $_POST["where"];
//$valueWhere = $_POST["valueWhere"];
//
//
//$sql = "UPDATE `StarDunks`.`".$table."` SET ".$set." = '" . $valueSet . "' WHERE `".$table."`.`".$where."` = '" . $valueWhere ."';";
//echo $crud->updateData($sql);
//
////Delete
//$sql = "DELETE FROM `StarDunks`.`users` WHERE `users`.`user_id` = 1";
//echo $crud->deleteData($sql);
//echo "<br />";
////Read in table
//$sql = "SELECT * FROM `users` LIMIT 0, 30";
//$res = $crud->readData($sql);
//echo "<table border='1'>";
//foreach ($res as $row) {
//    foreach ($row as $key => $val) {
//        echo "<th>" . $key . "</th>";
//    }
//    break;
//}
//echo "<tr>";
//foreach ($res as $row) {
//    foreach ($row as $key => $val) {
//        echo "<td> $val</td>";
//    }
//    echo "<tr>";
//}
?>