<?php

$connection = mysqli_connect("localhost", "root", "", "e-commerce");

if (!$connection) {
    die('Could Not Connect: ' . mysqli_connect_error());
} else {
    echo "DataBase Connection Successful";
    echo nl2br("\n");
}



// use placeholder
$sql = "INSERT INTO customers(customer_id, first_name, last_name, email, address)
VALUES
 (?,
?,
?,
?,
?)";

//prepare statement

$statement = mysqli_prepare($connection, $sql);

mysqli_stmt_bind_param($statement, "sssss", $_POST['c_id'], $_POST['f_name'], $_POST['l_name'], $_POST['mail'], $_POST['add']);

// Execute prepared statement before created
if (!mysqli_stmt_execute($statement)) {
    die('Error: ' . mysqli_error($connection));
} else {
    echo "Data Added successfully...";
}


// Close prepared statement and  database connection
mysqli_stmt_close($statement);
mysqli_close($connection);

?>