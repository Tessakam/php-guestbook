<?php

declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

class PostLoader
{
    //define external json file
    public const JSON_file = 'posts.json';

    // open a file
    // json_decode or unserialise it

    // loop over the data from the file
    // assign each entry to a Post class
    // loading the post
    /*
        Koen:
       $data = json_encode('');
        foreach($data AS $post) {
            $this->post[] = new Post($content['title']);*/

    public function __construct()
    {
        array(file_get_contents(self::JSON_file));
        $this->content->json_decode;

        array(file_put_contents(self::JSON_file));
        $this->content->json_encode;
    }

    public function addPost(Post $post)
    {
        // add the new message to the array
        // clear the old file
        // json_encode or serialize to the file of the post array
    }
}