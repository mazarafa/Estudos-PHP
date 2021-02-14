<!DOCTYPE html>
<html>

<body>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Name: <input type="text" name="name" id="Confirm"><br>
        E-mail: <input type="text" name="email" id="Confirm"><br>
        <input type="submit" id="Confirm">
    </form>

    <?php
    
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<br>";
        echo "Welcome,", $_POST["name"], "!";
        echo "<br>";
        echo "Your email address is:";
        echo  $_POST["email"];
    }

    ?>


</body>

</html>