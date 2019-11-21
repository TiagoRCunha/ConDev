<?php

namespace Model;

/**
 * Class: Poll
 * @author Tiago Rodrigues Cunha
 * 
 * @package Model
 * 
 * @method getName
 * @method getVotes
 * @method getUser
 * @method getDeleted
 * @method getOptions
 * @method setName
 * @method setVotes
 * @method setUser
 * @method setDeleted
 * @method setOptions
 */
class Poll
{
  private $name;
  private $votes;
  private $user;
  private $deleted;
  private $options;

  /**
   * Get the value of name
   * @return name
   */
  public function getName(): string
  {
    return $this->name;
  }

  /**
   * Set the value of name
   * @param string $name
   * @return none
   */
  public function setName(string $name)
  {
    $this->name = $name;
  }

  /**
   * Get the value of votes
   * @return votes
   */
  public function getVotes(): string
  {
    return $this->votes;
  }

  /**
   * Set the value of votes
   * @param string $votes
   * @return none
   */
  public function setVotes(string $votes)
  {
    $this->votes = $votes;
  }

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
   * Get the value of deleted
   * @return deleted
   */
  public function getDeleted(): bool
  {
    return $this->deleted;
  }

  /**
   * Set the value of deleted
   * @param bool $deleted
   * @return none
   */
  public function setDeleted(bool $deleted)
  {
    $this->deleted = $deleted;
  }

  /**
   * Get the value of options
   * @return options
   */
  public function getOptions(): array
  {
    return $this->options;
  }

  /**
   * Set the value of options
   * @param array $options
   * @return none
   */
  public function setOptions(array $options)
  {
    $this->options = $options;
  }
}
