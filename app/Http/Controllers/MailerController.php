<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class MailerController extends Controller {

    // =============== [ Email ] ===================
    public function email() {
        return view("Usuario/recuperar");
    }


    // ========== [ Compose Email ] ================
    public function composeEmail(Request $request) {
        $email = $request->emailBcc;

        require base_path("vendor/autoload.php");
            $mail = new PHPMailer(true);     // Passing `true` enables exceptions
            // Email server settings
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';            //  smtp host
            $mail->SMTPAuth = true;
            $mail->Username = env('EMAIL_USERNAME');   //  sender username
            $mail->Password = env('EMAIL_PASSWORD');   // sender password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;                          // port - 587/465
            $mail->setFrom($email);
            $mail->addAddress($email);
            $mail->isHTML(true);                // Set email content format to HTML

            $mail->Subject = 'Recuperar Contraseña';
            $mail->Body    = 'Usted solicito recuperar su contraseña 
            <br> Por favor de click aquí para recuperar su contraseña
             <a href="http://127.0.0.1:8000/CambiarContrase%C3%B1a">
            <button class="btn btn-success" type="submit">Recuperar Contraseña</button></a>';
            $dt = $mail->send();

            // $mail->AltBody = plain text version of email body;

            if(!$dt ) {
                return back()->with("failed", "Ocurrio un error en el envio, favor ingrese de nuevo el correo.")->withErrors($mail->ErrorInfo);
            }
            
            else {
                return back()->with("success", "Hemos enviado un correo a $email por favor revise su correo para confirmar.");
            }

        
             return back()->with('error','No se pudo enviar el mensaje.');
        
    }
}