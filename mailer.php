<?php


include 'MessageModel.php';





//Обработка шаблона входящей почты в зависимости от формы, с которой пришло письмо
if(isset($_POST['action'])){

    switch($_POST['action']){
        case "ApplicationForTraining":{

            $Body = "Имя:".$_POST['UserName'] .'<br/>'."Телефон:".$_POST['UserPhone']  .'<br/>'. "Группа: ".$_POST['UserLessonsType'];
            $message = new MessageModel('Заявка на обучение',$Body);

            $headers  = "Content-type: text/html; charset=\"utf-8\"";
	        $headers .= "MIME-Version: 1.0" . "\r\n";
            $headers .= "From: 7region-school.by \r\n";
            $headers .= "Bcc: birthday-archive@example.com\r\n";

            mail ( 'mark.mark8890@mail.ru' ,"7region-school.by", $message->GetMessage() ,$headers);

            break;
        }

        default:{
           break;
        }
    }

}
