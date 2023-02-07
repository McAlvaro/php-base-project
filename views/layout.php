<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script> -->
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
        <div class="container">
            <a href="/" class="navbar-brand h3">FW</a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="/" class="nav-link h3">Home</a></li>
                <li class="nav-item"><a href="/service" class="nav-link h3">Services</a></li>
                <li class="nav-item"><a href="/contact" class="nav-link h3">Contact</a></li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <?php echo $content; ?>
        </div>
    </div>
</body>
</html>
