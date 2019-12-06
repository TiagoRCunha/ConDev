<?php

namespace App\Model;

/**
 * Class: Event
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
 * @method getName
 * @method getStartDate
 * @method getEndDate
 * @method setContent
 * @method setCaption
 * @method setTags
 * @method setRegisterDay
 * @method setDeleted
 * @method setType
 * @method setName
 * @method setStartDate
 * @method setEndDate
 */
class Event extends Post
{
  private $name;
  private $startDate;
  private $endDate;

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
   * Get the value of startDate
   * @return startDate
   */
  public function getStartDate(): string
  {
    return $this->startDate;
  }

  /**
   * Set the value of startDate
   * @param string $startDate
   * @return none
   */
  public function setStartDate(string $startDate)
  {
    $this->startDate = $startDate;
  }

  /**
   * Get the value of endDate
   * @return endDate
   */
  public function getEndDate(): string
  {
    return $this->endDate;
  }

  /**
   * Set the value of endDate
   * @param string $endDate
   * @return none
   */
  public function setEndDate(string $endDate)
  {
    $this->endDate = $endDate;
  }
}