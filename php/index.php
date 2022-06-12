<!-- ./php/index.php -->

<html>
    <head>
        <title>Test Hello World</title>
    </head>

    <body>
<?php
$servername = "db";
$username = "test";
$password = "test";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully\r\n";

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS  myDB";
if ($conn->query($sql) === TRUE) {
    /* echo "Database created successfully";*/
} else {
    echo "Error creating database: " . $conn->error;
}
// Create Table
// sql to create table
$sql = "CREATE TABLE IF NOT EXISTS myDB.MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
    /* echo "Table MyGuests created successfully";*/
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
echo "\r\n\n";
$sql = "INSERT INTO myDB.MyGuests (firstname, lastname, email)
VALUES ('Saran', 'Babu', 'saran@example.com')";
if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;
    echo "New record created successfully. Last inserted ID is: " . $last_id . "\r\n";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "SELECT id, firstname, lastname FROM myDB.MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "\r\nid: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();

?>
    </body>
</html>
