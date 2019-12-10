<?php

namespace App\Model;

/**
 * Class: UserDeveloper
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
 * @method getOcupation
 * @method getFollowing
 * @method getBirthDate
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
 * @method setOcupation
 * @method setFollowing
 * @method setBirthDate
 */
class UserDeveloper extends User
{
  private $ocupation;
  private $following;
  private $birthDate;

  public function __construct(
    $name = "",
    $cep = "",
    $phone = "",
    $email = "",
    $password = "",
    $description = "",
    $tags = [""],
    $active = true,
    $locale = "",
    $thumbnail = "",
    $ocupation = "",
    $following = [""],
    $birthDate = ""
  )
  {
    $this->name = $name;
    $this->cep = $cep;
    $this->phone = $phone;
    $this->email = $email;
    $this->password = $password;
    $this->description = $description;
    $this->tags = $tags;
    $this->active = $active;
    $this->locale = $locale;
    $this->thumbnail = $thumbnail;
    $this->ocupation =$ocupation;
    $this->following = $following;
    $this->birthDate = $birthDate;

  }
  /**
   * Get the value of ocupation
   * @return ocupation
   */
  public function getOcupation(): string
  {
    return $this->ocupation;
  }

  /**
   * Set the value of ocupation
   * @param string $ocupation
   * @return none
   */
  public function setOcupation(string $ocupation)
  {
    $this->ocupation = $ocupation;

    return $this;
  }

  /**
   * Get the value of following
   * @return following
   */
  public function getFollowing(): array
  {
    return $this->following;
  }

  /**
   * Set the value of following
   * @param array $following
   * @return none
   */
  public function setFollowing(array $following)
  {
    $this->following = $following;

    return $this;
  }

  /**
   * Get the value of birthDate
   * @return birthDate
   */
  public function getBirthDate(): string
  {
    return $this->birthDate;
  }

  /**
   * Set the value of birthDate
   * @param string $birthDate
   * @return none
   */
  public function setBirthDate(string $birthDate)
  {
    $this->birthDate = $birthDate;

    return $this;
  }
}