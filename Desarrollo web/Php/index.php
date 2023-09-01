<?php

// Recoge valores desde el formulario
$email = isset($_POST['email']) ?$_POST['email'] : '';
$message = isset($_POST['message']) ?$_POST['message'] : '';

// Variables de gestion de error
$email_error = '';
$message_error = '';

if (count($_POST))
{
    $errors =  0;
    if ($_POST['email'] == '')
    {
        $email_error = 'Please enter an email address';
        $errors ++;
    }
}
?>

<!doctype html>
<html>
    <head>
        <title>PHP Contact Form</title>
    </head>
    <body>

        <h1>PHP Contact form</h1>

        <form metod="post" action="">

            Email Address:
            <br>
            <input type="text" name="email" values = "<?php echo $email; ?>">
            <?php echo $email_error; ?>

            <br></br>

            Message:
            <br>
            <textarea name="message"></textarea>

            <br></br>

            <input type="submit" value="submit">

        </form>

    </body>
</html>


