<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row">
            <?php for ($i = 0; $i <= 5; $i++) : ?>
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <img src="./imgs/cappo<?= $i + 1 ?>.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card <?= $i + 1 ?></h5>
                            <p class="card-text">content of card <?= $i + 1 ?></p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            <?php endfor ?>
        </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>