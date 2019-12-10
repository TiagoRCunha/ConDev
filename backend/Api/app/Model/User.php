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
   * @return self
   */
  public function setName(string $name)
  {
    $this->name = $name;

    return $this;
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
   * @return self
   */
  public function setCep(string $cep)
  {
    $this->cep = $cep;

    return $this;
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
   * @return self
   */
  public function setPhone(string $phone)
  {
    $this->phone = $phone;

    return $this;
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
   * @return self
   */
  public function setEmail(string $email)
  {
    $this->email = $email;

    return $this;
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
   * @return self
   */
  public function setPassword(string $password)
  {
    $this->password = $password;

    return $this;
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
   * @return self
   */
  public function setDescription(string $description)
  {
    $this->description = $description;

    return $this;
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
   * @return self
   */
  public function setTags(array $tags)
  {
    $this->tags = $tags;

    return $this;
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
   * @return self
   */
  public function setActive(bool $active)
  {
    $this->active = $active;

    return $this;
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
   * @return self
   */
  public function setLocale(string $locale)
  {
    $this->locale = $locale;

    return $this;
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
   * @return self
   */
  public function setThumbnail(string $thumbnail)
  {
    $this->thumbnail = $thumbnail;

    return $this;
  }
}