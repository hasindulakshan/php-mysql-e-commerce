<?php


$connection = mysqli_connect("localhost", "root", "", "e-commerce");

if ($connection->connect_error) {
  die("nor connected: " . $connection->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
  $search_cid = $_GET["search_customer_id"];

  $sql = "SELECT * FROM customers WHERE customer_id = '$search_cid'";
  $result = $connection->query($sql);

  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Customer ID: " . $row["customer_id"] . "<br>";
        echo "First Name: " . $row["first_name"] . "<br>";
        echo "Last Name: " . $row["last_name"] . "<br>";
        echo "Email: " . $row["email"] . "<br>";
        echo "Address: " . $row["address"] . "<br>";
        echo "<br>";
    }
} else {
    echo "User Not Found under this ID";
}
}

mysqli_close($connection);

?>