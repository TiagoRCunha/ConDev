<?php

namespace App\Model;
/**
 * abstract Class: User
 * @author Tiago Rodrigues Cunha
 * 
 * @package Model
 * 
 * @method getName
 * @method getCep
 * @method getPhone
 * @method getEmail
 * @method getPassword
 * @method getDescription
 * @method getTags
 * @method getActive
 * @method getLocale
 * @method getThumbnail
 * @method setName
 * @method setCep
 * @method setPhone
 * @method setEmail
 * @method setPassword
 * @method setDescription
 * @method setTags
 * @method setActive
 * @method setLocale
 * @method setThumbnail
 */
abstract class User
{

  private $name;
  private $cep;
  private $phone;
  private $email;
  private $password;
  private $description;
  private $tags;
  private $active;
  private $locale;
  private $thumbnail;

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
   * @return  none
   */
  public function setName(string $name)
  {
    $this->name = $name;
  }

  /**
   * Get the value of cep
   * @return cep
   */
  public function getCep(): string
  {
    return $this->cep;
  }

  /**
   * Set the value of cep
   * @param string $cep
   * @return none
   */
  public function setCep(string $cep)
  {
    $this->cep = $cep;
  }

  /**
   * Get the value of phone
   * @return phone
   */
  public function getPhone(): string
  {
    return $this->phone;
  }

  /**
   * Set the value of phone
   * @param string $phone
   * @return none
   */
  public function setPhone(string $phone)
  {
    $this->phone = $phone;
  }

  /**
   * Get the value of email
   * @return email
   */
  public function getEmail(): string
  {
    return $this->email;
  }

  /**
   * Set the value of email
   * @param string $email
   * @return none
   */
  public function setEmail(string $email)
  {
    $this->email = $email;
  }

  /**
   * Get the value of password
   * @return password
   */
  public function getPassword(): string
  {
    return $this->password;
  }

  /**
   * Set the value of password
   * @param string $password
   * @return none
   */
  public function setPassword(string $password)
  {
    $this->password = $password;
  }

  /**
   * Get the value of description
   * @return description
   */
  public function getDescription(): string
  {
    return $this->description;
  }

  /**
   * Set the value of description
   * @param string $description
   * @return none
   */
  public function setDescription(string $description)
  {
    $this->description = $description;
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

  /**
   * Get the value of active
   * @return active
   */
  public function getActive(): bool
  {
    return $this->active;
  }

  /**
   * Set the value of active
   * @param bool $active
   * @return none
   */
  public function setActive(bool $active)
  {
    $this->active = $active;
  }

  /**
   * Get the value of locale
   * @return locale
   */
  public function getLocale(): string
  {
    return $this->locale;
  }

  /**
   * Set the value of locale
   * @return string $locale
   * @return none
   */
  public function setLocale(string $locale)
  {
    $this->locale = $locale;
  }

  /**
   * Get the value of thumbnail
   * @return thumbnail
   */
  public function getThumbnail(): string
  {
    return $this->thumbnail;
  }

  /**
   * Set the value of thumbnail
   * @param string $thumbnail
   * @return none
   */
  public function setThumbnail(string $thumbnail)
  {
    $this->thumbnail = $thumbnail;
  }
}