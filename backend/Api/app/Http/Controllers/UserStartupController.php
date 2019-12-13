<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserStartupController extends Controller
{

  /**
   * Retorno o usuario indentificado pelo id
   *
   * @param string $id
   * @return void
   */

  public function getUser(Request $request)
  {
    return \App\Persistence\UserStartupDAO::getUserById($request->id);
  }

  public function setUser(Request $request)
  {
    $user = new \App\Model\UserStartup($request);

    return json_encode(
      [ "success" => \App\Persistence\UserStartupDAO::insertUser($user) ]
    );

  }

  public function deleteUser(Request $request) {
    return json_encode(
      [ "success" => \App\Persistence\UserStartupDAO::deleteUser($request->id) ]
    );

  }

  public function updateUser(Request $request)
  {
    $user = new \App\Model\UserStartup($request);

    return json_encode(
      [ "success" => \App\Persistence\UserStartupDAO::updateUser($request->id, $user) ]
    );

  }
}
