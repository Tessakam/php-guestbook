<?php

class PostLoader
{
    private array $posts;


    // open a file
    // json_decode or unserialise it
    //public const JSON_FILE = 'posts.json';

    // loop over the data from the file
    // assign each entry to a Post class

    //loading the post
    $data = json_encode('');
    foreach($data AS $content) {
        $this->post[] = new Post($content['title']);
    }
    }
        // adding the post

    public function addPost(Post $post){

    // add the new message to the array
    // clear the old file
    // json_encode or serialize to the file of the post array


}