<?php

//Conexion a mysql
$connect = mysqli_connect('localhost', 'julian', 'julian', 'formulario');

// Recoge valores desde el formulario
$email = isset($_POST['email']) ?$_POST['email'] : '';
$message = isset($_POST['message']) ?$_POST['message'] : '';
$nombreCliente = isset($_POST['nombreCliente']) ?$_POST['nombreCliente'] : '';
$departamento = isset($_POST['departamento']) ?$_POST['departamento'] : '';

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

    if ($_POST['message'] == '')
    {
        $message_error = 'Please enter a message';
        $errors ++;
    }

    if ($_POST['nombreCliente'] == '')
    {
        $message_error = 'Please enter a name';
        $errors ++;
    }

    if ($_POST['departamento'] == '')
    {
        $message_error = 'Please enter a department';
        $errors ++;
    }

    if ($errors == 0)
    {
        $query = ' INSERT INTO  contact (
            email,
            message
        )   VALUES (
            ""'.addslashes($_POST['email']).'",
            ""'.addslashes($_POST['message']).'"
        )';
        mysqli_query($connect, $query); 
    }
    
    //Enviar la informacion capturada al email del Admin
    $message = 'You have received a contact form submission:
   
    Email: '.$_POST['email'].'
    Message: '.$_POST['message'];

    mail('jcorredorg@hotmail.com',
    'Contact form submission',
    $message);

    header('Location: pagina.html');
    die();

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

            NombreCliente:
            <br>
            <input type="text" name="nombreCliente" values= "<?php echo $nombreCliente; ?>">

            <br></br>


            <br>
            <form action="">
            <label for="departamento"> Departamento</label> 
            <select name="departamento" id="departamento">
                <option value="atencionCliente">Atención al Cliente</option>
                <option value="soporteTecnico">Soporte Técnico</option>
                <option value="facturacion">Facturación</option>
            </select>

            <br></br>

            <input type="submit" value="Enviar" />
            </form>
            
            <br></br>


        

    </body>
</html>


