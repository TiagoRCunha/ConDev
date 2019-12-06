<?php

/**
*  Classe: ChatController
*/

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ChatController {

    private $user;
    private static $arr_chat;

    // constructor receives container instance

    public function __construct() {
        $this->user = new \App\Model\Chat;

        self::$arr_chat = [];
    }

    /**
    * Retorno o usuario indentificado pelo id
    *
    * @param string $id
    * @return void
    */

    public function getChat( string $user_id, string $chat_id ) {

        return \Persistence\ChatDAO::getChat( $user_id, $chat_id );
    }

    public function getAllChat( string $user_id ) {

        return \Persistence\ChatDAO::getAllChat( $user_id );
    }

    public function setChat() {
        $values = input()->all();

        return \Persistence\ChatDAO::insertChat( $values );
    }
}