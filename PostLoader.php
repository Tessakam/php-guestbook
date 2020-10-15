<?php

declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

class PostLoader
{
    // open a file
    // json_decode or unserialise it
    // loop over the data from the file
    // assign each entry to a Post class
    // loading the post

    //define external json file
    public const JSON_file = 'posts.json';
    private array $post = [];

    public function __construct()
    {
        /*
        Koen:
       $data = json_encode('');
        foreach($data AS $post) {
            $this->post[] = new Post($content['title']);*/

        //todo check decode and encode error
        array(file_get_contents(self::JSON_file),true);
        $this->post->json_decode;

        array(file_put_contents(self::JSON_file), true);
        $this->post->json_encode;
    }

    public function addPost(Post $post)
    {
        // add the new message to the array
        $this->post[] = $post;

        // clear the old file
        // json_encode or serialize to the file of the post array
    }

    public function savePost (Post $post)
    {
        // save the new message to the array

    }

    public function showPost (Post $post)
    {
        // only show the latest 20 posts

    }
}