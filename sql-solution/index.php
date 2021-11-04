<?php

if (isset($_POST['name'])) {

    $name = $_POST['name'];

    echo "Your name is $name and your email is $email";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solution</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <div class="container">
        <div class="content">
            <form action="post.php" method="post">
                <div>
                    <label for="name">Solution</label>
                    <input type="name" name="name">
                </div>

                <button type="submit">Submit</button>
            </form>
        </div>
    </div>

</body>

</html>