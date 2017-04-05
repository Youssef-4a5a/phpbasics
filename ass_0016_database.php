<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "myDBPDO";
$result;

try {
    $conn = new PDO("mysql:host=$server", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $result = "Connected successfully";
} catch (PDOException $e) {
    $result = "Connection failed: " . $e->getMessage();
}

$conn = null;

try {
    $conn = new PDO("mysql:host=$server", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE DATABASE myDBPDO";
    // use exec() because no results are returned
    $conn->exec($sql);
    $result = "Shit just works<br>";
} catch (PDOException $e) {
    $result = $sql . "<br>" . $e->getMessage();
}

$conn = null;

try {
    $conn = new PDO("mysql:host=$server;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // sql to create table
    $sql = "CREATE TABLE MyGuests (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP
    )";

    // use exec() because no results are returned
    $conn->exec($sql);
    $result = "Table shit created and shit";
} catch (PDOException $e) {
    $result = $sql . "<br>" . $e->getMessage();
}



$conn = null;

try {
    $conn = new PDO("mysql:host=$server;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO MyGuests (firstname, lastname, email)
    VALUES ('John', 'Doe', 'john@example.com')";
    // use exec() because no results are returned
    $conn->exec($sql);
    $result = "New user created and shit";
} catch (PDOException $e) {
    $result = $sql . "<br>" . $e->getMessage();
}


$conn = null;

try {
    $conn = new PDO("mysql:host=$server;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email)
    VALUES (:firstname, :lastname, :email)");
    $stmt->bindParam(':firstname', $firstname);
    $stmt->bindParam(':lastname', $lastname);
    $stmt->bindParam(':email', $email);

    // insert a row
    $firstname = "John";
    $lastname = "Doe";
    $email = "john@example.com";
    $stmt->execute();

    // insert another row
    $firstname = "Mary";
    $lastname = "Moe";
    $email = "mary@example.com";
    $stmt->execute();

    // insert another row
    $firstname = "Julie";
    $lastname = "Dooley";
    $email = "julie@example.com";
    $stmt->execute();

    $result = "New records created successfully and shit";
} catch (PDOException $e) {
    $result = "Error: " . $e->getMessage();
}

$conn = null;


try {
    $conn = new PDO("mysql:host=$server;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT id, firstname, lastname FROM MyGuests");
    $stmt->execute();

    // set the resulting array to associative
    $row = $stmt->fetchAll();
    $resultdump = $stmt->setFetchMode(PDO::FETCH_ASSOC);
//    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
//        echo $v;
//    }
    var_dump($row);
}
catch(PDOException $e) {
    $result = "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";

try {
    $conn = new PDO("mysql:host=$server;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=4";

    // Prepare statement
    $stmt = $conn->prepare($sql);

    // execute the query
    $stmt->execute();

    // echo a message to say the UPDATE succeeded
    $return = $stmt->rowCount() . " records UPDATED successfully";
    }
catch(PDOException $e)
    {
    $return = $sql . "<br>" . $e->getMessage();
    }

$conn = null;

echo $result;


