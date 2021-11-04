<?php

$error = [];

if (isset($_POST['name'])) {
    $input = strtolower(filter_var($_POST['name'], FILTER_SANITIZE_STRING));

    if ($input === "kevin systorm") {
        echo "you found him!!!👍";
    }
    else {
        echo "wrong";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="post.css">
</head>
<body>
    
</body>
</html>