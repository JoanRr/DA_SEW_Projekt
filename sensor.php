<?php
$servername = "localhost"; #
$username = "root";
$password = "smartvehicle";
$dbname = "temp_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT ID_t, temperature, humidity FROM tempLog ORDER BY ID_t desc";
$sql2 = "DELETE FROM tempLog WHERE ID_t NOT IN ( SELECT ID_t FROM ( SELECT ID_t FROM tempLog ORDER BY ID_t DESC LIMIT 3 ) o )";
$result = $conn->query($sql);
$result2 = $conn->query($sql2);


if ($result->num_rows > 0) {
    // output data of each row
    if($row = $result->fetch_assoc()) {
        echo "ID ist: " . $row["ID_t"]. "- Temperature: " . $row["temperature"]. " - Humidity: " . $row["humidity"]."<br>";
	#$last_id = $sql->lastInsertedId();
        #echo $last_id;

    }
} else {
    echo "0 results";
}
$conn->close();
?>
