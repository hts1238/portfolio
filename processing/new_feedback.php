<?php
    echo "<p>name = " . $_POST["name"] . "</p>";
    echo "<p>feedback = " . $_POST["feedback"] . "</p>";
    echo "<p>email = " . $_POST["email"] . "</p>";

    header("Location: ../feedback");
?>