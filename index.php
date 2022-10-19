<?php
//Connection to the database
include_once "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>How to create a select box with a search option</title>
</head>
<body>

<form action="#" method="post">
    <input list="usernames" placeholder="Select username">
    <datalist id="usernames">
<?php
    $sql = "SELECT * FROM table_name ORDER BY username ASC";
    $results = mysqli_query($connection, $sql);

    while($rows = mysqli_fetch_assoc($results)) {
        $username = $rows['username'];
        $email = $rows['email'];

        echo '
        <option value="'.$username.'">'.$username.' || '.$email.'</option>
        ';
    }

?>
    </datalist>
</form>

</body>
</html>
