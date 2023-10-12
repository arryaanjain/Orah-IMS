<?php
    require 'partials/head.php';
    require 'partials/navbar.php';
?>
<form method = "post">
    <h3>Enter the name of the product</h3>
    <br>
    <input type="text" name="title" id="title" required>
    <br><br>

    <h3>Enter selling type of product</h3>
    <br>
    <input type="text" name="sell" id="sell" required>
    <br><br>

    <h3>Enter the number of packaging units that come under the selling type</h3>
    <br>
    <input type="number" name="number" id="number" required>
    <br><br>

    <h3>Enter packaging type of product</h3>
    <br>
    <input type="text" name="title" id="title" required>
    <br><br>

    <input type="submit" class="btn btn-success" name="submit">
    <a href="../index.php" class = "btn btn-info">Back</a>
</form>
<?php require 'partials/footer.php';?>
