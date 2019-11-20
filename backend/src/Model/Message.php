<?php

namespace Model;

/**
 * Class: Message
 * @author Tiago Rodrigues Cunha
 * 
 * @package Model
 * 
 * @method getUser
 * @method getContent
 * @method getEdited
 * @method getSeen
 * @method getSend
 * @method setUser
 * @method setContent
 * @method setEdited
 * @method setSeen
 * @method setSend
 */
class Message
{
  private $user;
  private $content;
  private $edited;
  private $seen;
  private $send;

  /**
   * Get the value of user
   * @return user
   */
  public function getUser(): object
  {
    return $this->user;
  }

  /**
   * Set the value of user
   * @param object $user
   * @return none
   */
  public function setUser(object $user)
  {
    $this->user = $user;
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

  /**
   * Get the value of edited
   * @return edited
   */
  public function getEdited(): bool
  {
    return $this->edited;
  }

  /**
   * Set the value of edited
   * @param bool $edited
   * @return none
   */
  public function setEdited(bool $edited)
  {
    $this->edited = $edited;
  }

  /**
   * Get the value of seen
   * @return seen
   */
  public function getSeen(): bool
  {
    return $this->seen;
  }

  /**
   * Set the value of seen
   * @param bool $seen
   * @return none
   */
  public function setSeen(bool $seen)
  {
    $this->seen = $seen;
  }
  // TODO aqui tem mais um tipo date
  /**
   * Get the value of send
   * @return send
   */
  public function getSend(): date
  {
    return $this->send;
  }

  /**
   * Set the value of send
   * @param date $send
   * @return none
   */
  public function setSend(date $send)
  {
    $this->send = $send;
  }
}
