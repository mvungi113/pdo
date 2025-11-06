<?php
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        var_dump($_POST['address']);

        $email = $_POST['address'];

        echo $email;


    }
?>

<form action="./demo.php" method="post">
    <input type="email" name="address" id="email">

    <!-- <input type="submit" value="Save"> -->
    <button type="submit">Save</button>
</form>