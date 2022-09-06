<?php

class Post
{
    private $author;
    private $message;

    public function setAuthor($authorName)
    {
        $this->author = $authorName;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function setMessage($message)
    {
        $this->message = $message;
    }

    public function getMessage()
    {
        return $this->message;
    }

}
