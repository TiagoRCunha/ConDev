<?php

namespace App\Model;

/**
 * Class: UserStartup
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
 * @method getCompanySize
 * @method getCNPJ
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
 * @method setCompanySize
 * @method setCNPJ
 */
class UserStartup extends User
{
  private $companySize;
  private $CNPJ;

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
    $companySize = "0",
    $cnpj = ""
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
    $this->companySize = $companySize;
    $this->cnpj = $cnpj;
  }

  /**
   * Get the value of companySize
   * @return companySize
   */
  public function getCompanySize(): string
  {
    return $this->companySize;
  }

  /**
   * Set the value of companySize
   * @param string $companySize
   * @return $self
   */
  public function setCompanySize(string $companySize)
  {
    $this->companySize = $companySize;
    return $this;
  }

  /**
   * Get the value of CNPJ
   * @return CNPJ
   */
  public function getCNPJ(): string
  {
    return $this->CNPJ;
  }

  /**
   * Set the value of CNPJ
   * @param string $CNPJ
   * @return $self
   */
  public function setCNPJ(string $CNPJ)
  {
    $this->CNPJ = $CNPJ;
    return $this;
  }
}