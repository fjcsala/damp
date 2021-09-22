<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="generator" content="">
        <title>D A M P</title>
        <link rel="canonical" href="">
        <link href="/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <main>
            <div class="container py-4">
                <header class="pb-3 mb-4 border-bottom">
                    <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
                        <span class="fs-4"><strong>D A M P</strong> - <strong>D</strong>ocker <strong>A</strong>pache <strong>M</strong>ySQL <strong>P</strong>HP</span>
                    </a>
                </header>
                <div class="p-5 mb-4 bg-light rounded-3">
                    <div class="container-fluid py-5">
                        <!--
                        <a class="btn btn-primary" href="/info" target="_blank" role="button">PHP Info.</a>
                        <p></p>
                        <a class="btn btn-primary" href="" onclick="javascript:event.target.port=8080" target="_blank" role="button">PHPMyAdmin</a>
                        <p></p>
                        -->
                        <?php
                        echo 'Apache Version: <span class="badge bg-info">'.apache_get_version().'</span>';
                        echo '<p></p>';
                        echo 'PHP Version: <span class="badge bg-info">'.phpversion().'</span>';
                        echo '<p></p>';
                        
                        $DBuser = 'root';
                        $DBpass = 'tiger';
                        $pdo = null;
                        
                        try{
                            $database = 'mysql:host=mysql-server:3306';
                            $pdo = new PDO($database, $DBuser, $DBpass);
                            $version = $pdo->query('select version()')->fetchColumn();
                            echo 'MySQL Version: <span class="badge bg-info">'.$version.'</span>';
                            echo '<p></p>';
                            echo 'PDO Connect Status: <span class="badge bg-success">Success</span>';
                        } catch(PDOException $e) {
                            echo 'PDO Connect Status: <span class="badge bg-danger">Error</span>';
                        }
                        
                        $pdo = null;
                        ?>
                </div>
                <footer class="pt-3 mt-4 text-muted border-top text-center">
                    fjcsala &copy; <?php echo date("Y"); ?>
                </footer>
            </div>
        </main>
    </body>
</html>