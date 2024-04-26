<?php

$connect = mysqli_connect(
    'db', # service name
    'php_docker', # username
    'password', # password
    'php_docker' # db table
);

$table_name = "student";

$query = "SELECT * FROM $table_name";

$response = mysqli_query($connect, $query);

echo "<strong>$table_name: </strong>";
while($i = mysqli_fetch_assoc($response))
{
    echo "<p>".$i['std_id']."</p>";
    echo "<p>".$i['std_f_name']."</p>";
    echo "<p>".$i['std_s_name']."</p>";
    echo "<p>".$i['std_cgpa']."</p>";
    echo "<hr>";
}