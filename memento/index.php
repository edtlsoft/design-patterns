<?php
require_once './Editor.php';
require_once './EditorHistory.php';

$editor = new Editor();
$history = new EditorHistory();

$editor->setContent("Content #1");
$editor->setTitle("Title #1");
$history->push($editor->createState());

$editor->setContent("Content #2");
$editor->setTitle("Title #2");
$history->push($editor->createState());

$editor->setContent("Content #3");
$editor->setTitle("Title #3");
$history->push($editor->createState());

$editor->setContent("Content #4");
$editor->setTitle("Title #4");

$editor->restore($history->pop());
$editor->restore($history->pop());

var_dump($editor->getContent());
var_dump($editor->getTitle());
