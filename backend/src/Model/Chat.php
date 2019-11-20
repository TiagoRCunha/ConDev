<?php

namespace Model;

/**
 * Class: Chat
 * @author Tiago Rodrigues Cunha
 * 
 * @package Model
 * 
 * @method getUsers
 * @method getCaption
 * @method getContent
 * @method getRegisterDay
 * @method getMessages
 * @method getBlocked
 * @method setUsers
 * @method setCaption
 * @method setContent
 * @method setRegisterDay
 * @method setMessages
 * @method setBlocked
 */
class Chat
{
  private $users;
  private $caption;
  private $content;
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
   * Get the value of caption
   * @return caption
   */
  public function getCaption(): string
  {
    return $this->caption;
  }

  /**
   * Set the value of caption
   * @param string $caption
   * @return none
   */
  public function setCaption(string $caption)
  {
    $this->caption = $caption;
  }

  /**
   * Get the value of content
   * @return content
   */
  public function getContent(): string
  {
    return $this->content;
  }

  /**
   * Set the value of content
   * @param string $content
   * @return none
   */
  public function setContent(string $content)
  {
    $this->content = $content;
  }
  // TODO rever sobre tipo date
  /**
   * Get the value of registerDay
   * @return registerDay
   */
  public function getRegisterDay(): date
  {
    return $this->registerDay;
  }

  /**
   * Set the value of registerDay
   * @param date $registerDay
   * @return none
   */
  public function setRegisterDay(date $registerDay)
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
