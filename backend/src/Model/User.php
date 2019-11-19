<?php

namespace Model;

/**
 * abstract Class: Users
 * @author Tiago Rodrigues Cunha
 * 
 * @package Model
 * 
 * @method getName
 * @method getCep
 * @method getAddress
 * @method getPhone
 * @method getEmail
 * @method getPassword
 * @method getTags
 * @method setName()
 * @method setCep
 * @method setAddress
 * @method setPhone
 * @method setEmail
 * @method setPassword
 * @method setTags
 */
abstract class User
{

     private $name;
     private $cep;
     private $address;
     private $phone;
     private $email;
     private $password;
     private $tags;

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
      * Get the value of address
      * @return address
      */
     public function getAddress(): string
     {
          return $this->address;
     }

     /**
      * Set the value of address
      * @param string $address
      * @return none
      */
     public function setAddress(string $address)
     {
          $this->address = $address;
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
      * Get the value of tags
      * @return tags
      */
     public function getTags(): array
     {
          return $this->tags;
     }

     /**
      * Set the value of tags
      * @param string $tags
      * @return none
      */
     public function setTags(array $tags)
     {
          $this->tags = $tags;
     }
}
