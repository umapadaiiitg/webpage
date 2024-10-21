<?php
include 'config.php';

$sql = "SELECT * FROM notes";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<h2>" . $row["title"]. "</h2>";
        echo "<p>" . $row["content"]. "</p>";
    }
} else {
    echo "No notes found.";
}
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Display Notes</title>
</head>
<body>
    <h1>Display Notes</h1>
    <a href="index.php">Home</a> | <a href="edu.php">Education</a> | <a href="notes.php">Add Note</a>
    <a href="display_notes.php">Display Notes</a>
</body>
</html>