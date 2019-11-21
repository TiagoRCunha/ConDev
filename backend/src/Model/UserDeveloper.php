<?php

namespace Model;

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
  }
}
