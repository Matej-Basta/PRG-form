<?php

require_once "Author.php";
require_once "DBBlackbox.php";

//handling form submmission

$is_edit = !empty($_GET["id"]);

if ($is_edit) {
    //select an author from the database
    //TODO
} else {
    //prepare empty author
    $author = new Author;
}


//now we definitely have an Author object!
var_dump($_POST);

$author->hydrateFromRequest();

//save the author
insert($author);