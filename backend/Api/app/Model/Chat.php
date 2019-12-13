<?php

namespace App\Model;

/**
 * Class: Chat
 * @author Tiago Rodrigues Cunha
 * 
 * @package Model
 * 
 * @method getUsers
 * @method getCaption
 * @method getRegisterDay
 * @method getMessages
 * @method getBlocked
 * @method setUsers
 * @method setCaption
 * @method setRegisterDay
 * @method setMessages
 * @method setBlocked
 */
class Chat
{
  private $users;
  private $caption;
  private $registerDay;
  private $messages;
  private $blocked;

  /**
   * Get the value of users
   * @return users
   */
  public function getUsers(): array
  {
    return $this->users;
  }

  /**
   * Set the value of users
   * @param array $users
   * @return none
   */
  public function setUsers(array $users)
  {
    $this->users = $users;
  }

  /**
   * Get the value of registerDay
   * @return registerDay
   */
  public function getRegisterDay(): string
  {
    return $this->registerDay;
  }

  /**
   * Set the value of registerDay
   * @param string $registerDay
   * @return none
   */
  public function setRegisterDay(string $registerDay)
  {
    $this->registerDay = $registerDay;
  }

  /**
   * Get the value of messages
   * @return messages
   */
  public function getMessages(): array
  {
    return $this->messages;
  }

  /**
   * Set the value of messages
   * @param array $messages
   * @return none
   */
  public function setMessages(array $messages)
  {
    $this->messages = $messages;
  }

  /**
   * Get the value of blocked
   * @return blocked
   */
  public function getBlocked(): bool
  {
    return $this->blocked;
  }

  /**
   * Set the value of blocked
   * @param bool $blocked
   * @return none
   */
  public function setBlocked(bool $blocked)
  {
    $this->blocked = $blocked;
  }
}