<?



    $to = "soloviov.gosha2016@yandex.ru";
    $name=$_GET['firstname_input'];
    $lastname=$_GET['lastname_input'];
    $mail=$_GET['e-mail_input'];
    $phone=$_GET['phone_input'];
    $message=$_GET['message_input'];

    $mes = "Имя: $name \nФамилия: $lastname \nE-mail: $mail \nТелефон: $phone \nСообщение: $message";

    $send = mail($to, "Help", $mes, "Content-type:text/plain; charset = UTF-8\r\nForm:$email");

    echo "</br>$mes";



?>