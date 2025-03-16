<?php
    // Get PDO DSN string
    $root = realpath(__DIR__);
    $database = $root . '/database.sqlite';
    $dsn = 'sqlite:' . $database;

    $error = '';

    // Check if SQLite database already exists
    if (is_readable($database) && filesize($database) > 0) {
        $error = 'SQLite database already exists';
    }

    // Create an empty file for database
    if (!$error) {
        $createdOk = @touch($database);
        if (!$createdOk) {
            $error = 'Cannot create SQLite database';
        }
    }


    // Grab the SQL commands we want to run on the database
    if (!$error) {
        $sql = file_get_contents($root . '/data/init.sql');
        if ($sql === false) {
            $error = 'Cannot find SQL file';
        }
    }

    // Connect to the new database and try to run the SQL commands
    if (!$error) {
        $pdo = new PDO($dsn);
        $result = $pdo->exec($sql);
        if ($result === false) {
            $error = 'Cannot run SQL commands: ' . print_r($pdo->errorInfo(), true);
        }
    }


    // See how many rows we created
    $count = null;

    if (!$error) {
        $sql = "SELECT COUNT(*) AS c FROM post";
        $stmt = $pdo->query($sql);
        if ($stmt) {
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            $count = $result['c'];
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style type="text/css">
            .box {
                border: 1px dotted silver;
                border-radius: 5px;
                padding: 4px;
            }
            .error {
                background-color: #ff6666;
            }
            .success {
                background-color: #88ff88;
            }
        </style>
    </head>
    <body>
        <?php if ($error): ?>
            <div class="error box">
                <?php echo $error ?>
            </div>
        <?php else: ?>
            <div class="success box">
                The database and demo data was created OK.
                <?php if ($count): ?>
                    <?php echo $count ?> new rows were created.
                <?php endif ?>
            </div>
        <?php endif ?>
    </body>
</html>