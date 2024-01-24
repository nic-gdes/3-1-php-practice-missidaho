<?php include('./components/header.php'); ?>

<?php
if ($_SERVER("REQUEST_METHOD") == "POST") {
    $name = htmlspecialchars($_POST ['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    echo $name . "I" . $email . ", " . $message;
}
?>

<body>


    <?php include('./components/nav.php'); ?>
    <main>
        

    
        <?php include('./components/footer.php'); ?>
    </main>
</body>

</html>