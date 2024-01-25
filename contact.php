<?php include('./components/header.php'); ?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    echo $name . " " . $email . "," . $message;
}
?>

<body>


    <?php include('./components/nav.php'); ?>
    <main>
        <form action="./contact.php" method="POST">
            <div class="form_wrapper">


                <div class="name_form">
                    <label for="name">
                        <h2>Name</h2>
                    </label>
                    <input type="text" id="name" name="name">
                </div>
                <div class="email_form">
                    <label for="email">
                        <h2>Email Address</h2></label>
                    <input type="email" id="email" name="$email" required>
                </div>
                <div class="message_form">
                    <label for="message">
                        <h2>Message:</h2></label>
                    <textarea id="message" name="message" rows="7"></textarea>
                </div>





                <button input type="submit" class="submit_buuton"><h2>Submit</h2></button>
            </div>

            </div>
        </form>



    </main>
    <?php include('./components/footer.php'); ?>
</body>

</html>