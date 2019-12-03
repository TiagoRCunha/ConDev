<?php

/**
 *  Classe: ChatController
 */

namespace Controller;

class ChatController
{

  protected $container;
  private $user;
  private static $arr_chat;

  // constructor receives container instance
  public function __construct()
  {
    $this->user = new \Model\Chat;

    self::$arr_chat = [];
  }

  /**
   * Retorno o usuario indentificado pelo id
   *
   * @param string $id
   * @return void
   */
  public function getChat(string $user_id, string $chat_id)
  {

    return \Persistence\ChatDAO::getChat($user_id, $chat_id);
    //$response->getBody()->write(json_encode(self::$arr_chat));

    // return $response->withHeader('Content-Type', 'application/json');

    // return 'recebido o id ' . $id;
  }

  public function setUser()
  {
    $values = input()->all([
      'name', 'cep', 'phone', 'email', 'description',
      'tags', 'active', 'locale', 'thumbnail', 'companySize', 'CNPJ'
    ]);

    return \Persistence\UserDAO::insertUser($values);
  }
}
