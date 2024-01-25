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
    <main class="form_wrapper">
        <form action="./contact.php" method="POST">
            <div class="forms">


                <div class="name_form"> 
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name">
                </div>
                <div class="email_form"> 
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="$email" required>
                </div>
                <div class="message_form">
                     <label for="message">Message:</label>
                    <textarea id="message" name="message" rows="7"></textarea>
                </div>


            </div>


            <button input type="submit">Submit</button>

            </div>
        </form>



    </main>
    <?php include('./components/footer.php'); ?>
</body>

</html>