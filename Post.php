<?php

class Post
{
//required attributes
    private string $title, $content, $firstName, $lastName;
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
        $this->date = $date;
    }

    //link with JSON_FILE messages.json
    // https://www.w3schools.com/js/js_json_php.asp
    // serialize ( mixed $value ) : string
    public function serialize()
    {
        return [
            'title' => $this->title,
            'content' => $this->content
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

