<?php
    if($_SERVER['REQUEST_METHOD'] === 'GET'){

        if(isset($_GET['email'])) {

        $email = $_GET['email'];

        echo $email;
        }

    }
?>

<form action="" method="get">
    <input type="email" name="email" id="email">

    <!-- <input type="submit" value="Save"> -->
    <button type="submit">Save</button>
</form>