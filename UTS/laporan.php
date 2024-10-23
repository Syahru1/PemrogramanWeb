<?php
session_start();

if (!isset($_SESSION['submissions'])) {
    $_SESSION['submissions'] = [];
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $programming_language = $_POST['programmingLanguage'];
    $status = $_POST['status'];
    $rating = $_POST['rating'];

    $submission = [
        'username' => $username,
        'programming_language' => $programming_language,
        'status' => $status,
        'rating' => $rating,
    ];

    $_SESSION['submissions'][] = $submission;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Track Record</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="report-form-section">
        <h2>Track Record Progres Bahasa Pemrograman</h2>
        <form id="reportForm" method="POST" action="">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" placeholder="Masukkan username anda" required>
            
            <label for="programmingLanguage">Bahasa Pemrograman:</label>
            <input type="text" name="programmingLanguage" id="programmingLanguage" placeholder="Enter programming language" required>
            
            <label for="status">Status:</label>
            <select name="status" id="status" required>
                <option value="finished">Selesai</option>
                <option value="not_finished">Belum Selesai</option>
            </select>
            
            <label for="rating">Rating Materi (1-5):</label>
            <input type="number" name="rating" id="rating" min="1" max="5" required>
            
            <button type="submit">Submit</button>
        </form>

        <h3>Submitted Reports</h3>
        <table border="1">
            <tr>
                <th>Username</th>
                <th>Bahasa Pemrograman</th>
                <th>Status</th>
                <th>Rating</th>
            </tr>
            <?php
            foreach ($_SESSION['submissions'] as $submission) {
                echo "<tr>";
                echo "<td>{$submission['username']}</td>";
                echo "<td>{$submission['programming_language']}</td>";
                echo "<td>{$submission['status']}</td>";
                echo "<td>{$submission['rating']}</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </section>
</body>
</html>