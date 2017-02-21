<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?> | <?php echo config::get('site_title'); ?></title>
    <link rel="stylesheet" href="../../../css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
    <div class="container global">
        <div id="navbar" class="navbarSprite">
            <a href="index.php"><img src="http://static1.1.sqspcdn.com/static/f/1392977/21068147/1353830054663/300px-IMDb_logo.svg.png?token=6mR7%2FyfC6mhpERTKXzHCky1wock%3D" class="mylogo"></a>
            <?php echo $navigation; ?>
        </div>
        
        <?php echo $page_layout; ?>

        <?php echo $footer; ?>
    </div>
</body>
</html>    