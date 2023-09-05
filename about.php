<?php
include "components/connect.php";
if (isset($_COOKIE['user_id'])){
    $user_id=$_COOKIE['user_id'];
}
else
{
    $user_id = '';
}
 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width initial-scale=1.0">
        <title>About us</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <?php include 'components/user_header.php'; ?>
        <section class="about">
            <div class="row">
                
                <div class="content">
                    <h3>why choose us?</h3>
                    <p class="content__text">First-time home buyers may need a little more hand-holding as they enter the market for the first time, those relocating will need a real estate agent with extensive understanding of the nuance of a city and its neighborhoods and lifestyles.</p>
                    <div class="reasons">
                        <div class="reasons_container">
                            <div class="reasons_card">
                                <img src="./img/papers.png">
                                <p>over 1000 papers signed</p>
                            </div >
                            <div class="reasons_card">
                                <img src="./img/hotline.png">
                                <p>24/7 Help service for all customers to guide and support</p>
                            </div>
                            <div class="reasons_card">
                                <img src="./img/lawyer.png">
                                <p>full legal support of all transactions</p>
                            </div>
                        </div>
                        <div class="reasons_container">
                            <div class="reasons_card">
                                <img src="./img/info.png">
                                <p>access to the most updated info</p>
                            </div>
                            <div class="reasons_card">
                                <img src="./img/profecional.png">
                                <p>all agents are professionals who will find a house for valuable price </p>
                            </div>
                            <div class="reasons_card">
                                <img src="./img/fast.png">
                                <p>we do everything possible to satisfy you as fast as possible</p>
                            </div>
                        </div>
                        <a href="contact.php" class="inline-btn">contact us</a>
                    </div>
                    
                
                </div>
            </div>
        </section>
        <section class="steps">
            <h1 class="heading">simple steps to own your property</h1>
            <div class="box-container">
                <div class="box">
                    <img src="./img/search.png"  alt="">
                    <h3>search property</h3>
                    <p>Step 1</p>
                </div>
                <div class="box">
                    <img src="./img/customer-service.png"  alt="">
                    <h3>contact our agents</h3>
                    <p>Step 2</p>
                </div>
                <div class="box">
                    <img src="./img/house_!.png"  alt="">
                    <h3>enjoy your new home</h3>
                    <p>Step 3</p>
                </div>
            </div>
        </section>
        <section class="reviews">
            <h1 class="heading">client`s reviews</h1>
            <div class="box-container">
                <div class="box">
                    <div class="user">
                        <img src="./img/client_1.jpg" alt="">
                        <div>
                            <h3>Baranovska</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p>The agency provides the following range of services:
                        ·selection of housing suitable for the client; ·search for a buyer for real estate provided by the client; ·support of purchase and sale agreements; </p>
                </div>
                <div class="box">
                    <div class="user">
                        <img src="./img/client_2.jpg" alt="">
                        <div>
                            <h3>Morozova</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p>They offer accommodation for every budget in new buildings in the city center and beyond. For your apartments from developers delivered to homes with the possibility of a mortgage.</p>
                </div>
                <div class="box">
                    <div class="user">
                        <img src="./img/client_3.jpg" alt="">
                        <div>
                            <h3>Vlasiuk</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p>Home Properties real estate company in the market for many years providing services for the purchase or sale of apartments in the primary and secondary markets, and conduct transactions with real estate. </p>
                </div>
                <div class="box">
                    <div class="user">
                        <img src="./img/client_4.jpg" alt="">
                        <div>
                            <h3>Kit</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p>Thanks to our experts you can buy luxury properties in Lviv and in the suburbs and buy housing economy class. In agencies hosted a huge number of exclusive offers as options for apartments and houses.</p>
                </div>
                <div class="box">
                    <div class="user">
                        <img src="./img/client_5.jpg" alt="">
                        <div>
                            <h3>Luzhna</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p>Competent in matters of real estate market, our agency staff will give you professional advice on all matters purchase or lease commercial buildings and help choose the option according to your criteria.</p>
                </div>
                <div class="box">
                    <div class="user">
                        <img src="./img/client_6.jpg" alt="">
                        <div>
                            <h3>Romanova</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p>A large number of housing and commercial facilities submitted to their fullest potential in our directory where you can choose from many different types of housing options. Quickly pick up the apartment for you.</p>
                </div>
            </div>
        </section>
        <?php include 'components/footer.php'; ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="js/scripts.js"></script>
    <?php
    include 'components/message.php';
    ?>
    </body>
</html>