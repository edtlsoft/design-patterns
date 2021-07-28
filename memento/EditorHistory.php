<?php

class EditorHistory
{
    private $editorStates = [];

    public function push(EditorState $editorState)
    {
        return $this->editorStates[] = $editorState;
    }

    public function pop()
    {
        return array_pop($this->editorStates);
    }
}



