<?php
$servername = "localhost";
$username = "HABIBUL";
$password = "Habibul@812922112";
$dbname = "exam_papers_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<?php
include 'db_connection.php';

// Your code to interact with the database
?>
<?php
include 'db_connect.php';

$university = $_POST['university'] ?? 'ALL';
$course = $_POST['course'] ?? 'ALL';
$subject = $_POST['subject'] ?? 'ALL';
$paper = $_POST['paper'] ?? 'ALL';
$searchTerm = $_POST['searchTerm'] ?? '';

$sql = "SELECT * FROM papers WHERE 1=1";

if ($university !== 'ALL') {
    $sql .= " AND university = '$university'";
}
if ($course !== 'ALL') {
    $sql .= " AND course = '$course'";
}
if ($subject !== 'ALL') {
    $sql .= " AND subject = '$subject'";
}
if ($paper !== 'ALL') {
    $sql .= " AND paper = '$paper'";
}
if (!empty($searchTerm)) {
    $sql .= " AND (university LIKE '%$searchTerm%' OR course LIKE '%$searchTerm%' OR subject LIKE '%$searchTerm%' OR paper LIKE '%$searchTerm%')";
}

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>
            <td>{$row['updated_on']}</td>
            <td>{$row['university']}</td>
            <td>{$row['exam_type']}</td>
            <td>{$row['year']}</td>
            <td>{$row['month']}</td>
            <td>{$row['course']}</td>
            <td>{$row['subject']}</td>
            <td><a href='{$row['link']}'>{$row['paper']}</a></td>
            <td>{$row['code']}</td>
        </tr>";
    }
} else {
    echo "<tr><td colspan='9'>No results found</td></tr>";
}

$conn->close();
?>
