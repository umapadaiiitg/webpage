<?php
include 'config.php';

$sql = "SELECT * FROM education";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<h2>" . $row["title"]. "</h2>";
        echo "<p>" . $row["description"]. "</p>";
    }
} else {
    echo "No educational details found.";
}
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Education</title>
</head>
<body>
    <h1>Education</h1>
    <a href="index.php">Home</a> | <a href="notes.php">Notes</a>
</body>
</html>