<?php

/**
 *  Classe: MessageController
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{

  protected $container;
  private $user;
  private static $arr_message;

  // constructor receives container instance
  public function __construct()
  {
    $this->user = new \App\Model\Message;

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

    return \App\Persistence\MessageDAO::getMessage($user_id, $message_id);
    //$response->getBody()->write(json_encode(self::$arr_message));

    // return $response->withHeader('Content-Type', 'application/json');

    // return 'recebido o id ' . $id;
  }

  public function setMessage(Request $request)
  {
    $values = $request->all();

    return \App\Persistence\MessageDAO::insertMessage($values);
  }
}
