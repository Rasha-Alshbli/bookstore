<?php

include 'config.php';
session_start();

$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
    header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>


    <!-- font awsome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

    <?php include './header.php'; ?>

    <div class="heading">
        <h3>about us</h3>
        <p><a href="home.php">home</a> / about</p>
    </div>

    <section class="about">

        <div class="flex">
            <div class="image">
                <img src="images/about-img.jpg" alt="image">
            </div>
            <div class="content">
                <h3>why choose us?</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias sapiente vitae pariatur iure nam maxime odit, repudiandae cum distinctio fugiat consequatur illo possimus velit sint adipisci asperiores nisi itaque dolorum!</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptates hic doloremque mollitia fuga laudantium quisquam nisi autem debitis, rem obcaecati?</p>
                <a href="contact.php" class="btn">Contact us</a>
            </div>
        </div>

    </section>

    <section class="reviews">

        <h1 class="title">Clients' reviews</h1>

        <div class="box-container">

            <div class="box">
                <img src="images/pic-1.png" alt="image">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque reiciendis sint ut assumenda quod esse excepturi impedit corrupti mollitia pariatur!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Joe Deo</h3>
            </div>

            <div class="box">
                <img src="images/pic-2.png" alt="image">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque reiciendis sint ut assumenda quod esse excepturi impedit corrupti mollitia pariatur!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Sue Joe</h3>
            </div>

            <div class="box">
                <img src="images/pic-3.png" alt="image">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque reiciendis sint ut assumenda quod esse excepturi impedit corrupti mollitia pariatur!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>John Leo</h3>
            </div>

            <div class="box">
                <img src="images/pic-4.png" alt="image">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque reiciendis sint ut assumenda quod esse excepturi impedit corrupti mollitia pariatur!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Sara Deo</h3>
            </div>

            <div class="box">
                <img src="images/pic-5.png" alt="image">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque reiciendis sint ut assumenda quod esse excepturi impedit corrupti mollitia pariatur!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Ray Del</h3>
            </div>

            <div class="box">
                <img src="images/pic-6.png" alt="image">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque reiciendis sint ut assumenda quod esse excepturi impedit corrupti mollitia pariatur!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Suzy Mi</h3>
            </div>

        </div>

    </section>

    <section class="authors">
        <h1 class="title">great authors</h1>
        <div class="box-container">

            <div class="box">
                <img src="./images/author-1.jpg" alt="image">
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
                <h3>Sane Doe</h3>
            </div>

            <div class="box">
                <img src="./images/author-2.jpg" alt="image">
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
                <h3>Jane Doe</h3>
            </div>

            <div class="box">
                <img src="./images/author-3.jpg" alt="image">
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
                <h3>John Doe</h3>
            </div>

            <div class="box">
                <img src="./images/author-4.jpg" alt="image">
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
                <h3>Saly Doe</h3>
            </div>

            <div class="box">
                <img src="./images/author-5.jpg" alt="image">
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
                <h3>Saly Doe</h3>
            </div>

            <div class="box">
                <img src="./images/author-6.jpg" alt="image">
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
                <h3>Saly Doe</h3>
            </div>

        </div>

    </section>




    <?php include './footer.php'; ?>

    <!-- custom js file link -->
    <script src="./js/script.js"></script>

</body>

</html>