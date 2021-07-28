<?php
require_once './EditorState.php';

class Editor {
    private $content;
    private $title;

    public function createState()
    {
        return new EditorState($this->content, $this->title);
    }

    public function restore(EditorState $state)
    {
        $this->content = $state->getContent();
        $this->title   = $state->getTitle();
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get the value of title
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }
}