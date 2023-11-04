<?php

$connect = mysqli_connect(
    'db', # service name
    'root', # username
    'root', # password
    'php_docker' # db table
);
/*
$table_name = "php_docker_table";

$query = "SELECT * FROM $table_name";

$response = mysqli_query($connect, $query);

echo "<strong>$table_name: </strong>";
while($i = mysqli_fetch_assoc($response))
{
    echo "<p>".$i['title']."</p>";
    echo "<p>".$i['body']."</p>";
    echo "<p>".$i['date_created']."</p>";
    echo "<hr>";
}

*/
/*
$table_name = "admins";

$query = "SELECT * FROM $table_name";

$response = mysqli_query($connect, $query);

echo "<strong>$table_name: </strong>";
while($i = mysqli_fetch_assoc($response))
{
    echo "<p>".$i['id']."</p>";
    echo "<p>".$i['name']."</p>";
    echo "<p>".$i['username']."</p>";
    echo "<p>".$i['password']."</p>";
    echo "<p>".$i['mobileno']."</p>";
    echo "<p>".$i['position']."</p>";
    echo "<hr>";
}
*/

echo "Helloo"