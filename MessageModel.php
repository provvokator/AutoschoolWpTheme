<?php

class MessageModel{

    public $Message;

    public $Title;

    function __construct($MessageTitle,$MessageBody) {
        $this->Title = $MessageTitle;
        $this->Message = '<html>
    <head>
        <title>'.$MessageTitle .'</title>
    </head>
    <body>'.'<p>' .  $MessageBody.'</p>
    </body>
    </html>';

    }


    public function GetMessage(){
        return $this->Message;
    }


}

?>
