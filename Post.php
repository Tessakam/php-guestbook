<?php

declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

class Post
{
//required attributes
    private string $title, $firstName, $lastName, $content;
    private DateTime $date;

    /**
     * Post constructor.
     * @param string $title
     * @param string $content
     * @param string $firstName
     * @param string $lastName
     * @param DateTime $date
     */
    public function __construct(string $title, string $content, string $firstName, string $lastName, DateTime $date)
    {
        $this->title = $title;
        $this->content = $content;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->date = new DateTime();
    }

    // link with JSON_FILE posts.json
    // tips from Hendrik
    // 1) method / post
    // 2) put the variables in array ($title) - array.push
    // 3) json automatically creates array in posts.json --> json array

    //get access to the properties

    public function JSON()
    {
        return [
            'title' => $this->title,
            'content' => $this->content,
            'firstName' => $this->firstName,
            'lastName' => $this->lastName,
            'date' => $this->date,
        ];
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @return DateTime
     */
    public function getDate(): DateTime
    {
        return $this->date;
    }


}

