<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        # FIX: Replace this email with recipient email
        $mail_to = "gerencia.comercial@htscorp.com.co";
        
        # Sender Data
        // $subject = trim($_POST["subject"]);
        $name = str_replace(array("\r","\n"),array(" "," ") , strip_tags(trim($_POST["name"])));
		$phone = strip_tags(trim($_POST['phone']));
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
		$products = trim($_POST["products"]);
        $message = trim($_POST["message"]);
        
        if ( empty($name) OR empty($phone) OR !filter_var($email, FILTER_VALIDATE_EMAIL) OR empty($products)) {
            # Set a 400 (bad request) response code and exit.
            http_response_code(400);
            echo "Todos los campos son requeridos.";
            exit;
        }
        
        # Mail Content
        
		$subject = "Nos ha contactado $name";
		
		$body = "Hemos recibido un nuevo mensaje desde nuestro sitio web de contacto.\n\n"."Estos son los detalles del remitente:\n\nNombre: $name\n\nEmail: $email\n\nTelefono: $phone\n\nEsta interesado en: $products\n\nMensaje:\n$message";

        # email headers.
		$headers = "Reply-To: $email";

        # Send the email.
        $success = mail($mail_to,$subject,$body,$headers);
        if ($success) {
            # Set a 200 (okay) response code.
            http_response_code(200);
            echo "Gracias! Su mensaje se ha enviado";
        } else {
            # Set a 500 (internal server error) response code.
            http_response_code(500);
            echo "Oops! Algo ha ido mal, No se pudo enviar el mensaje.";
        }

    } else {
        # Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);
        echo "Hubo un problema con el envio, intente de nuevo.";
    }

?>
