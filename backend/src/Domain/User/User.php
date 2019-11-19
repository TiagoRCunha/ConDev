<?php

declare(strict_types=1);

namespace App\Domain\User;

use JsonSerializable;

/**
 * @author Tiago Rodrigues Cunha
 */
class User implements JsonSerializable
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $password;

    /**
     * @var array
     */
    private $tag;

    /**
     * @var array
     */
    private $following;

    /**
     * @var bool
     */
    private $active;

    /**
     * @var string
     */
    private $thumbnail;

    /**
     * @var string
     */
    private $ocupation;

    /**
     * @var string
     */
    private $birthDate;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $locale;

    /**
     * @param string    $name
     * @param string    $email
     * @param string    $password
     * @param array     $tag
     * @param array     $following
     * @param bool      $active
     * @param string    $thumbnail
     * @param string    $ocupation
     * @param string    $birthDate
     * @param string    $description
     * @param string    $locale
     */
    public function __construct(
        string $name,
        string $email,
        string $password,
        array $tag,
        array $following,
        bool $active,
        string $thumbnail,
        string $ocupation,
        string $birthDate,
        string $description,
        string $locale
    ) {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->tag = $tag;
        $this->following = $following;
        $this->active = $active;
        $this->thumbnail = $thumbnail;
        $this->ocupation = $ocupation;
        $this->birthDate = $birthDate;
        $this->description = $description;
        $this->locale = $locale;
    }

    /**
     * @param none
     * @return string name
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return void
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @param none
     * @return string email
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return void
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @param none
     * @return string password
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @return void
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    /**
     * @param none
     * @return array tag
     */
    public function getTag(): array
    {
        return $this->tag;
    }

    /**
     * @param array $tag
     * @return void
     */
    public function setTag(array $tag): void
    {
        $this->tag = $tag;
    }

    /**
     * @param none
     * @return array following
     */
    public function getFollowing(): array
    {
        return $this->following;
    }

    /**
     * @param array $following
     * @return void
     */
    public function setFollowing(array $following): void
    {
        $this->following = $following;
    }

    /**
     * @param none
     * @return bool active
     */
    public function getActive(): bool
    {
        return $this->active;
    }

    /**
     * @param bool $active
     * @return void
     */
    public function setActive(bool $active): void
    {
        $this->active = $active;
    }

    /**
     * @param none
     * @return string thumbnail
     */
    public function getThumbnail(): string
    {
        return $this->thumbnail;
    }

    /**
     * @param string $thumbnail
     * @return void
     */
    public function setThumbnail(string $thumbnail): void
    {
        $this->thumbnail = $thumbnail;
    }

    /**
     * @param none
     * @return string ocupation
     */
    public function getOcupation(): string
    {
        return $this->ocupation;
    }

    /**
     * @param string $ocupation
     * @return void
     */
    public function setOcupation(string $ocupation): void
    {
        $this->ocupation = $ocupation;
    }

    /**
     * @param none
     * @return string
     */
    public function getBirthDate(): string
    {
        return $this->birthDate;
    }

    /**
     * @param string $birthDate
     * @return void
     */
    public function setBirthDate(string $birthDate): void
    {
        $this->birthDate = $birthDate;
    }

    /**
     * @param none
     * @return string description
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return void
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @param none
     * @return string locale
     */
    public function getLocale(): string
    {
        return $this->locale;
    }

    /**
     * @param string $locale
     * @return void
     */
    public function setLocale(string $locale): void
    {
        $this->locale = $locale;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        return [
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
            'tag' => $this->tag,
            'following' => $this->following,
            'active' => $this->active,
            'ocupation' => $this->ocupation,
            'birthDate' => $this->birthDate,
            'description' => $this->description,
            'locale' => $this->locale
        ];
    }
}
