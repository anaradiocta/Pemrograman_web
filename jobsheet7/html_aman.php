<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['input'])) {
        $input = $_POST['input'];
        $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
        echo "Input yang telah dibersihkan: " . $input . "<br>";
    } else {
        echo "Input tidak tersedia.<br>";
    }

    if (isset($_POST['email'])) {
        $email = $_POST['email'];
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Email yang dimasukkan: " . $email . " adalah valid.<br>";
            // Lanjutkan dengan pengolahan email yang aman
        } else {
            echo "Email yang dimasukkan: " . $email . " tidak valid.<br>";
            // Tangani input yang tidak valid
        }
    } else {
        echo "Email tidak tersedia.<br>";
    }
}
?>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="input">Masukkan Input:</label><br>
    <input type="text" id="input" name="input"><br><br>

    <label for="email">Masukkan Email:</label><br>
    <input type="text" id="email" name="email"><br><br>

    <input type="submit" value="Submit">
</form>
