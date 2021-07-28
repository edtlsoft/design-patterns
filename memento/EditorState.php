<?php

class EditorState
{
    private $content;
    private $title;

    public function __construct(string $content, string $title)
    {
        $this->content = $content;
        $this->title = $title;
    }

    /**
     * Get the value of content
     */ 
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Get the value of title
     */ 
    public function getTitle()
    {
        return $this->title;
    }
}