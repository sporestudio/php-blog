<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>spore's blog</title>
    </head>
    <body>
        <h1>Blog title</h1>
        <p>This paragraph describes the blog.</p>

        <?php
            for ($postId = 1; $postId <= 5; $postId++) {
                echo "<h2>Post $postId</h2>";
                echo "<p>This is the content of post $postId.</p>";
                echo "<div>dd Mon YYYY</div>";
                echo "<p>
                        <a href='post.php?id=$postId'>Read more...</a>
                    </p>";
            }
        ?>
    </body>
</html>