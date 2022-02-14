<?php

//preparing all the data

require_once "Author.php";

//if there is id with a specific value (not empty, no null, not falsy)
$is_edit = !empty($_GET["id"]);

if ($is_edit) {
    //selecting author from the database
    //TODO
} else {
    //prepare empty author
    $author = new Author;
}

//now we definitely have an Author object!





include "form.php";