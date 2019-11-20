<?php

namespace Model;

/**
 * Class: Post
 * @author Tiago Rodrigues Cunha
 * 
 * @package Model
 * 
 * @method getContent
 * @method getCaption
 * @method getTags
 * @method getRegisterDay
 * @method getDeleted
 * @method getType
 * @method setContent
 * @method setCaption
 * @method setTags
 * @method setRegisterDay
 * @method setDeleted
 * @method setType
 */
class Post
{
  private $content;
  private $caption;
  private $tags;
  private $registerDay;
  private $deleted;
  private $type;

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
   * Get the value of caption
   * @return caption
   */ 
  public function getCaption():string 
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
   * Get the value of tags
   * @return tags
   */ 
  public function getTags(): array
  {
    return $this->tags;
  }

  /**
   * Set the value of tags
   * @param array $tags
   * @return none
   */ 
  public function setTags(array $tags)
  {
    $this->tags = $tags;
  }
  // TODO REVER SOBRE DATE TYPE
  /**
   * Get the value of registerDay
   * @return registerDay
   */ 
  public function getRegisterDay():date
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
   * Get the value of type
   * @return type
   */ 
  public function getType(): string
  {
    return $this->type;
  }

  /**
   * Set the value of type
   * @param string $type
   * @return none
   */ 
  public function setType(string $type)
  {
    $this->type = $type;
  }
}