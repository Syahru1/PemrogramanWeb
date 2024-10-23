<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input = $_POST['input'];
    $input = trim($input);
    $input = trim($input);
    $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');

    if (empty($input)) {
        echo "Input tidak boleh kosong.";
    } else {
        echo "Input yang valid: " . $input;
    }
} else {
    echo "Silahkan submit form.";
}
?>
