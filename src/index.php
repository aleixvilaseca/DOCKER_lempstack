<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>LEMP Stack with Docker</title>
        <body>
            <h1><center>LEMP Stack with Docker</center></h1>
            <p><center>PHP version: <?php echo phpversion(); ?></center></p>
        <style>
            .center {
                display: block;
                margin-left: auto;
                margin-right: auto;
                width: 50%;
            }
        </style>
    </head>
    <body>
        <img src="https://community-cdn-digitalocean-com.global.ssl.fastly.net/2b3vijNShk4WqngPNwgxUmRi" alt="LEMP Stack with Docker" class="center">
        <?php
        $connection = new PDO('mysql:host=mysql;dbname=demo-lempstack;charset=utf8', 'root', 'root');
        $query      = $connection->query("SELECT TABLE_NAME FROM information_schema.TABLES WHERE TABLE_SCHEMA = 'demo'");
        $tables     = $query->fetchAll(PDO::FETCH_COLUMN);

        if (empty($tables)) {
            echo '<p class="center">There are no tables in database <code>demo</code>.</p>';
        } else {
            echo '<p class="center">Database <code>demo</code> contains the following tables:</p>';
            echo '<ul class="center">';
            foreach ($tables as $table) {
                echo "<li>{$table}</li>";
            }
            echo '</ul>';
        }
        ?>
    </body>
</html>