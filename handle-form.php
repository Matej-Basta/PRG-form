<?php

require_once "Author.php";
require_once "DBBlackbox.php";

//handling form submmission

$is_edit = !empty($_GET["id"]);

if ($is_edit) {
    //select an author from the database
    $author = find($_GET["id"], "Author");
} else {
    //prepare empty author
    $author = new Author;
}


//now we definitely have an Author object!
var_dump($_POST);

$author->hydrateFromRequest();


//saving the changes
if ($is_edit) {
    update($author->id, $author);
} else {
    $author->id = insert($author);
}



header("Location: display-form.php?id={$author->id}");