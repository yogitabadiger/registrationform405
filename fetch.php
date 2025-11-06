<?php
include 'db.php';

$result = $conn->query("SELECT * FROM students ORDER BY id DESC");

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
            <td>{$row['rollno']}</td>
            <td>{$row['fname']} {$row['lname']}</td>
            <td>{$row['gender']}</td>
            <td>{$row['email']}</td>
            <td>{$row['phone']}</td>
            <td>{$row['department']}</td>
            <td>{$row['year']}</td>
            <td>{$row['city']}</td>
            <td>{$row['dateTime']}</td>
            <td>
                <a href='edit.php?id={$row['id']}'>✏️ Edit</a> |
                <a href='delete.php?id={$row['id']}' onclick=\"return confirm('Delete this record?')\">🗑️ Delete</a>
            </td>
        </tr>";
    }
} else {
    echo "<tr><td colspan='10' style='text-align:center;'>No students registered yet.</td></tr>";
}

$conn->close();
?>
