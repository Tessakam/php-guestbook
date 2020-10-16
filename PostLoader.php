<?php

declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

class PostLoader
{
    //define external json file
    public const JSON_file = 'posts.json';
    private array $post = [];

    public function __construct()
    {
        $data = (json_decode(file_get_contents(self::JSON_file), true));

        foreach ($data as $post) {
            $this->post[] = new Post($post['title'], $post['content'], $post['firstName'], $post['lastName']);
        }
    }

    public function save()
    {
        file_put_contents(self::JSON_file, json_encode($this->getPost()));
    }

     public function getPost(): array
    {
        return $this->post;
    }

    public function addPost(Post $post)
    {
        // add the new message to the array
        $this->post[] = $post;

        // clear the old file
        // json_encode or serialize to the file of the post array
    }
}