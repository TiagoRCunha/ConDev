<?php

/**
 *  Classe: MessageController
 */

namespace Controller;

class MessageController
{

  protected $container;
  private $user;
  private $chat;
  private static $arr_message;

  // constructor receives container instance
  public function __construct()
  {
    $this->user = new \Model\Message;

    self::$arr_message = [];
  }

  /**
   * Retorno o usuario indentificado pelo id
   *
   * @param string $id
   * @return void
   */
  public function getMessage(string $user_id, string $message_id)
  {

    return \Persistence\MessageDAO::getMessage($user_id, $message_id);
    //$response->getBody()->write(json_encode(self::$arr_message));

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
