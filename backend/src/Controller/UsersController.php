<?php
/**
 *  Classe: UusersController
 */

 use Psr\Container\ContainerInterface;

 namespace Controller;


 class UsersController {

    protected $container;
    private $user ; 
    private static $arr_users;

      // constructor receives container instance
      public function __construct(ContainerInterface $container) {
        $this->container = $container;
      
        $this->user = new \Model\User();
        
        self::$arr_users = [
          "id" => $user->getId(),
          "nome" => $user->getNome(),
          "login" => $user->getLogin(),
          "senha" => $user->getSenha()           
        ];
        
      }
      
      /**
       * Retorno o usuario indentificado pelo id
       *
       * @param integer $id
       * @return void
       */
      public function getUser( Request $request, Response $response, $args) {
        
        $this->user->setId(1);
        $this->user->setNome('Wanderlei');
        $this->user->setLogin('wander');
        $this->user->setSenha(md5('123456'));
        
        $response->getBody()->write(json_encode(self::$arr_users) );

        return $response->withHeader('Content-Type', 'application/json');
        
    } 

 }