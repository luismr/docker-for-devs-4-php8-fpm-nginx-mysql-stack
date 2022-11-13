<?php
$user = "username";
$pass = "password";
$host = "db";
$dbdb = "mydb";

$conn = mysqli_connect($host, $user, $pass, $dbdb);

if (!$conn || $conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected <br/><br/>";
}

$sql = "SELECT id, code, name FROM countries";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    ?>
    <table>
        <tr>
            <td>ID</td>
            <td>Code</td>
            <td>Name</td>
        </tr>
        <?php
        while($row = $result->fetch_assoc()) {
            ?>
            <tr>
                <td><?=$row['id']?></td>
                <td><?=$row['code']?></td>
                <td><?=$row['name']?></td>
            </tr>
            <?php
        }
        ?>
    </table>
    <?php
} else {
    echo "0 results";
}

$conn->close();

?>
