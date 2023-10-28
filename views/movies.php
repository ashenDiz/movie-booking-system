<?php
include '../controllers/theatersController.php';
//include(dirname(__FILE__) . "../controllers/config.php");

$type = $_GET['movie_type'];

$movies = getAllTheMoviesTypeVice($type);

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

    <link rel="stylesheet" href="../css/movieCard.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/addMovie.css">
    <link rel="stylesheet" href="../css/movies.css">

<title>Movies</title>
</head>

<body>

<?php require '../common/header.php'; ?>

<div class="category-div">
    <h2>
        <?php echo $type ?> Movies
    </h2>

    <div class="container">

        <div class="theaterCard">
            <?php if (sizeof($movies) == 0): ?>
                <p>No Movies</p>
            <?php else: ?>
                <?php for ($i = 0; $i < sizeof($movies); $i++): ?>
                    <div class="my-card">
                        <div class="card-content">
                            <div class="img-place">
                                <div id="card-img"
                                     style="background-image: url(<?php echo get_url($movies[$i]['url']); ?>)">
                                </div>
                            </div>
                            <div class="card-text">
                                <p><?php echo $movies[$i]['name']; ?></p>
                                <a href="./movieDetial.php?movie_id=<?php echo $movies[$i]['movie_id']; ?>" class="btn">See
                                    more</a>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
            <?php endif; ?>

        </div>
    </div>

    <?php
    include '../common/footer.php'
    ?>
</body>

</html>