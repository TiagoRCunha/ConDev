<?php

/**
 *  Classe: UsersController
 */

namespace Controller;

class UsersController
{

  protected $container;
  private $user;
  private static $arr_users;

  // constructor receives container instance
  public function __construct()
  {
    $this->user = new \Model\UserDeveloper;

    self::$arr_users = [];
  }

  /**
   * Retorno o usuario indentificado pelo id
   *
   * @param integer $id
   * @return void
   */
  public function getUser(Request $request, Response $response, $args)
  {

    // $this->user->setName('john');
    // $this->user->setCep('9224389');
    // $this->user->setPhone('09214312');
    // $this->user->setEmail('john@doe.com');
    // $this->user->setPassword(md5('123456'));
    // $this->user->setDescription('');
    // $this->user->setTags([]);
    // $this->user->setActive(true);
    // $this->user->setLocale('');
    // $this->user->setThumbnail('');
    // $this->user->setOcupation('');
    // $this->user->setFollowing([]);
    // $this->user->setBirthDate('09/07/1960');

    $response->getBody()->write(json_encode(self::$arr_users));

    return $response->withHeader('Content-Type', 'application/json');
  }
}
