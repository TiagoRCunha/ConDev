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

  public function __construct(\Illuminate\Http\Request $args)
  {
    $this->name = $args->name ?? "";
    $this->cep = $args->cep ?? "";
    $this->phone = $args->phone ?? "";
    $this->email = $args->email ?? "";
    $this->password = $args->password ?? "";
    $this->description = $args->description ?? "";
    $this->tags = $args->tags ?? [""];
    $this->active = $args->active ?? true;
    $this->locale = $args->locale ?? "";
    $this->thumbnail = $args->thumbnail ?? "";
    $this->companySize = $args->companySize ?? "0";
    $this->cnpj = $args->cnpj ?? "";
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