<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <body>
        <?php
            echo "Favorite Color Is : " . $_SESSION["favcolor"] . ". <br>";
            echo "Favorite Animal Is : " . $_SESSION["favanimal"] . "";
        ?>
    </body>
</html>
