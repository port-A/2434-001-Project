<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link href="style.css"  rel="stylesheet" >
</head>
<body class="body-about">
<?php include('./view/header.php');?>
    <main class="mainImg-about">
        <h1 style="color:#032276">About Cloud Parachutes</h1>
        <hr><br>
        <section>

            <img class="aboutImg" src="./images/divincis.jpg" alt="sunsetjump" width="400" height="300">

            <div class="trivia">
                <h2>Parachute Trivia</h2>
                <details>

                    <summary>When was the first Parachute made?</summary>
                    <p class="ptrivia">
                        Credit for the invention of the first practical parachute frequently goes to Sebastien
                        Lenormand, who
                        demonstrated the parachute principle in 1783. However, parachutes had been imagined and sketched
                        by
                        Leonardo Da Vinci centuries earlier.<br>(Source: <cite><a
                                href="https://en.wikipedia.org/wiki/Parachuting"
                                target="_blank">Wikipedia-Parachuting</a></cite>).
                    </p>
                </details>
            </div>

        </section>
       
        <section class="about">
           <hr>
            <article>
                <p>Have you ever wanted to get away from it all and float on top of the world or have you ever wanted do
                    something excelerating and adventures or have you ever wanted to have a leisure activity that allows
                    you to
                    relax carelessly. Welcome to the clouds, quality parachuting for all!</p>
                </article>
                <article>
                    <p>Cloud parachutes offers package skydiving adventures for all, from beginners to warriors. Our
                        trainers
                        and lead jumpers are experts with many jumps and certifications. We offer expert training for
                        the
                        absolute beginner to the novice jumper in spirit. Our jump leaders guide extreme jumps, such as
                        group
                        jumping, cross country jumps, and free fall altitudes, are just a few of the services we offer.
                        <span class="signup"><a href="signup.php">SignUp</a></span>, and check out all our jump packages
                        and book
                        your cloud adventure now.</p>
                    </article>
                    <br>
                    <figure>
                        <img src="./images/skydiver.png" alt="logo" width="150" height="100">

                    </figure>
                  
        </section>


    </main>

    <?php include('./view/footer.php'); ?>
</body>
</html>