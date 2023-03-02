<?php
 
require_once('model.php');
require_once('comment.php');

function post(string $identifier) 
{
    $post = getPost($identifier);
    $comments = getComments($identifier);
 
require('templates/post.php');
}

