<?php

require("db/db.php");

$sql = "INSERT INTO color (title, code) VALUES ('green', '#00FF00');";

$result = mysqli_query($connection, $sql);

var_dump($result);

mysqli_close($connection);