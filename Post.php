<?php

declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

class Post implements JsonSerializable // Implement JsonSerializable + add to object.
// Reason: private/protected variables can't be seen by json_encode().
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
    public function __construct(string $title, string $content, string $firstName, string $lastName)
    {
        $this->title = $title;
        $this->content = $content;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->date = new DateTime();
    }

    // link with Class Post and JsonS JSON_FILE posts.json
    public function jsonSerialize()
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
     * @return DateTime
     */
    public function getDate(DateTime $time): void
    {
        $this->date = $date;
    }

}


