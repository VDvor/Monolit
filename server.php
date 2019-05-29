<?php
$name = $_POST['user-name'];
$phone = $_POST['user-phone'];
$comments = $_POST['user-message'];
$consent = $_POST['user-checkbox'];
$consent = isset($consent) ? "Нет" : "Да";
$mail_message = '
<html>
    <head>
        <title>Сообщение</title>
     </head> 
     <body>
     <h2> Сообщение</h2>  
     <ul>
         <li> Имя:' . $name . '</li>
         <li> Телефон:' . $phone . '</li>
         <li> Сообщение:' . $comments . '</li>         
         <li> Согласие с политикой конфиденциальности:' . $consent . '</li>
     </ul>
    </body>
    </html>
';
$headers = "From: Администратор сайта\r\n".
"MIME-Version: 1.0" . "\r\n" .
"Content-type: text/html; charset=UTF-8" . "\r\n";
$mail = mail('vlad_dvorcov@mail.ru' , 'Сообщение' , $mail_message , $headers);
if(mail('vlad_dvorcov@mail.ru' , 'Сообщение' , $mail_message , $headers)){
    echo"сообщение успешно отправлено"; 
} else { 
    echo "при отправке сообщения возникли ошибки";
}

// $data= [];
// if ($mail) {
//      $data['status'] = "OK";
//      $data['mes'] = "Письмо успешно отправлено";
// }else{
//     $data['status' ]= "NO";
//     $data['mes'] = "На сервере произошла ошибка";
// }


// echo json_encode($data);

?>