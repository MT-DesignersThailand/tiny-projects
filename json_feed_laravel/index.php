<?php
$url = 'https://blog.mtdesigners.com/feed';
$json = file_get_contents($url);
$obj = json_decode($json, true);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app.css">
    <title>JSON Feed Laravel</title>
</head>

<body>
    <main>
        <?php foreach ($obj as $value) : ?>
            <div class="card">
                <img src="<?php echo $value['image']; ?>">

                <h1><?php echo $value['title']; ?></h1>

                <a href="<?php echo $value['url']; ?>">Visit Post</a>

                <!-- You can also include the "body" of the posts -->
                <!-- <p><?php echo $value['body']; ?></p> -->

            </div>
        <?php endforeach; ?>
    </main>
</body>

</html>