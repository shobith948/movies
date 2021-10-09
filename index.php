<?php
$server = "localhost:3307";
$username = "root";
$password = "";
$database = "movie";

$connect = mysqli_connect($server, $username, $password, $database);
if(!$connect){

    die("Error".mysqli_connect_error());
}

$sql = "SELECT * FROM `movies`";
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie</title>
</head>
<body>
    <table border="2px">
        <thead>
            <tr>
                <th>Movie Name</th>
                <th>Actor</th>
                <th>Actress</th>
                <th>Year of release</th>
                <th>Director Name</th>
            </tr>
        </thead>
        <tbody>
            <?php 
              $sql = "SELECT * FROM `movies`";
              $result = mysqli_query($connect, $sql);
              while($row = mysqli_fetch_assoc($result)){
                echo "<tr>
                <td>". $row['movie_name'] . "</td>
                <td>". $row['actor'] . "</td>
                <td>". $row['actress'] . "</td>
                <td>". $row['year_of_release'] . "</td>
                <td>". $row['director_name'] . "</td>
              </tr>";
            } 
         ?>
           </tbody>
        </table>
</body>
</html>