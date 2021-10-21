<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- <title>ICT1004 Lab 6 for Week 6</title> -->
        <!-- <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" 
              href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
              integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" 
              crossorigin="anonymous">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="css/main.css">
        <script defer
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous">
        </script>
        <script defer
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"
            integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm"
            crossorigin="anonymous">
        </script>
        <script defer src="js/main.js"></script>
    </head> -->
    
    <?php
        include "head.inc.php";
    ?>
    
    <body>
<!--        <nav class="navbar navbar-expand-sm navbar-dark bg-dark"> 
            <a class="navbar-brand" href="#">
                <img src="images/sadcat.jpg" width="50"/>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#dogs">Dogs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#cats">Cats</a> 
                </li>
            </ul> 
            </div>
        </nav>-->
            <?php
                include "nav.inc.php";
            ?>
        <header class="jumbotron text-center">
            <h1 class="display-4">
                Welcome to World of Pets!
            </h1>
            <h2>
                Home to Singapore's Pet Lovers!
            </h2>
        </header>       
        <main>
            <main class="container">
                
            <section id="dogs">
                <h2>All About Dogs!</h2>
                <div class="row">
                    <article class="col-sm">
                        <h3>Poodles</h3>
                        <figure>
                            <img class="image-thumbnail" src="images/poodle_small.jpg" alt="Poodle"
                                 title="View larger image..."/>
                            
                            <figcaption>Standard Poodle</figcaption>
                        </figure>
                    <p>
                        Poodles are a group of formal dog breeds, the Standard
                        Poodle, Miniature Poodle and Toy Poodle...
                    </p>
                </article>
                <article class="col-sm">
                    <h3>Chihuahua</h3>
                    <figure>
                            <img img class="image-thumbnail" src="images/chihuahua_small.jpg" alt="Chihuahua"
                                 title="View larger image..."/>
                        <figcaption>Chihuahua</figcaption>
                    </figure>
                    <p>
                        The Chihuahua is the smallest breed of dog, and is named
                        after the Mexican state of Chihuahua...
                    </p>
                </article>
                </div>
            </section>
            
            <section id="cats">
                <h2>All About Cats!</h2>
                <div class="row">
                <article class="col-sm">
                    <h3>Tabby</h3>
                    <figure>
                        <img img class="image-thumbnail" src="images/tabby_small.jpg" alt="Tabby"
                             title="View Larger Image...">
                        <figcaption>Tabby</figcaption>
                    </figure>
                    <p>
                        A tabby is any domestic cat 
                        with a distinctive 'M' shaped marking on its forehead, 
                        stripes by its eyes and across its cheeks, 
                        along its back, and around its legs and tail...
                    </p>
                </article>
                <article class="col-sm">
                    <h3>Calico</h3>
                    <figure>
                            <img img class="image-thumbnail" src="images/calico_small.jpg" alt="Calico"
                                 title="View larger image..."/>
                        <figcaption>Calico</figcaption>
                    </figure>
                    <p>
                        Calico cats are domestic cats with coats that are typically
                        25% to 75% white and has large orange and black patches...
                    </p>
                </article>
            </section>
        </main>
<!--        <footer class="container">
            <p><em>Copyright &copy;2021 World of Pets Pte. Ltd.</em></p>
        </footer>-->
            <?php
                include "footer.inc.php";
            ?>
    </body>
</html>