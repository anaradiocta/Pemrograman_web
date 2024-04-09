<!DOCTYPE html>
<html>
<head>
    <title>Form Input dengan Validasi</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Form Input dengan Validasi</h1>
    <form id="myForm" method="post" action="">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error" style="color: red;"></span><br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <span id="email-error" style="color: red;"></span><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <span id="password-error" style="color: red;"></span><br>

        <input type="submit" value="Submit">
    </form>

    <script>
        $(document).ready(function(){
            $("#myForm").submit(function(event){
                event.preventDefault();

                var nama = $("#nama").val();
                var email = $("#email").val();
                var password = $("#password").val();

                $.ajax({
                    type: "POST",
                    url: "",
                    data: {
                        nama: nama,
                        email: email,
                        password: password
                    },
                    success: function(response){
                        $("#nama-error").text("");
                        $("#email-error").text("");
                        $("#password-error").text("");

                        var result = JSON.parse(response);

                        if (result.nama_error){
                            $("#nama-error").text(result.nama_error);
                        }

                        if (result.email_error){
                            $("#email-error").text(result.email_error);
                        }

                        if (result.password_error){
                            $("#password-error").text(result.password_error);
                        }

                        if (!result.nama_error && !result.email_error && !result.password_error){
                            $("#myForm").unbind('submit').submit();
                        }
                    }
                });
            });
        });
    </script>

    <?php
    $nama_error = '';
    $email_error = '';
    $password_error = '';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST['nama'])) {
            $nama_error = "Nama harus diisi.";
        }

        if (empty($_POST['email'])) {
            $email_error = "Email harus diisi.";
        }

        if (empty($_POST['password'])) {
            $password_error = "Password harus diisi.";
        } elseif (strlen($_POST['password']) < 8) {
            $password_error = "Password minimal harus 8 karakter.";
        }

        echo json_encode(array('nama_error' => $nama_error, 'email_error' => $email_error, 'password_error' => $password_error));
    }
    ?>
</body>
</html>
