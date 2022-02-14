<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Author form</title>
</head>
<body>
    <form action="handle-form.php" method="POST">
        <label for="name">Name</label>
        <input type="text" id="name" value="<?= $author->name ?>" name="name">
        <br>
        <br>
        <label for="country">Country</label>
        <input type="text" id="country" value="<?= $author->country ?>" name="country">
        <br>
        <br>
        <button>Save author</button>

    </form>
</body>
</html>