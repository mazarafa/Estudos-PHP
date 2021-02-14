<!DOCTYPE html>
<html>
<style>
    input[type=text],
    select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type=submit] {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }

    .info {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
        width: 22%;
        margin-left: 50px;
        margin-top: 15px;
    }

    div {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
        width: 22%;
        margin-left: 440px;
        margin-top: -238px;

    }
</style>

<body>

    <div class="info">
        <form method="post">
            <h1>Tabuada</h1>
            <label for="fname">informe um numero</label>
            <input type="text" id="NumberTabuada" name="NumberTabuada" placeholder="valor">



            <input type="submit" value="Submit">
        </form>
    </div>

    <div class="result">
        
        <?php
       

        $tab = 0;
        if (isset($_POST["NumberTabuada"])) {
            $tab = $_POST["NumberTabuada"];
            if (!is_numeric($tab)) {
                echo "<br>O valor informado não é um número.<br>";
            } else {


                $num = 0;
                while ($num <= 10) {
                    echo $num . " x " . $tab . " = " . ($num * $tab) . "<br>";


                    // echo $num . " x " . $tab . " = " . ($num * $tab) . "<br>";
                    $num++;
                }
            }
        }

        ?>
    </div>

</body>
</html>