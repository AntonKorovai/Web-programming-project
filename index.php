<?php
session_start();
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookRepo</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Rubik+Doodle+Shadow&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cardo&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Rubik+Doodle+Shadow&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cardo&family=Inter:wght@100;200&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Rubik+Doodle+Shadow&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@700&display=swap" rel="stylesheet">
    <script src="JS/scrript.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>

<body>
    <header class="header">
        <div class="link2MainDiv">
            <a href="http://localhost/bookrepo/index.php">
                BookRepo
            </a>
        </div>

        <nav class="headerNavigationMenu">
            <a href="http://localhost/bookrepo/AllBooksPage.php" class="HNavigationMenuButton">All Books</a>
            <a href="http://localhost/bookrepo/myBooksPage.php" class="HNavigationMenuButton">My Books</a>
            <?php include 'UserAccessManagement/getAdmin.php'; ?>
        </nav>

        <div class="accessWrapper">
            <?php include 'UserAccessManagement/getAccessButton&user.php'; ?>
        </div>
    </header>
    <main class="main">
        <div class="presentation flexIsOn" id="presentation">
            <h1 class="alignTextCenter">A commitment to innovation and <br>sustainability</h1>
            <p class="alignTextCenter">BookRepo is a pioneering website that seamlessly merges creativity and
                <br>functionality to redefine
                classic libraries.
            </p>
            <img class="libraryImg" src="../BookRepo/images/library2.jpg" alt="" width="1000" height="600">
        </div>

        <div class="objectives flexIsOn" id="objectives">
            <h1 class="Main_Star">*</h1>
            <h1>A passion for cultivating virtual realms</h1>
            <p>A digital library dedicated to expanding literary horizons.</p>

            <div class="objectivesContainer">
                <div>
                    <h1 class="Main_Star">*</h1>
                    <h4>Digitalisation and preservation</h4>
                    <p>Pioneering digitalization and preservation efforts, our platform safeguards literary treasures
                        for future generations. Immerse yourself in a fusion of technology and heritage, ensuring
                        timeless works are preserved in the digital landscape.</p>
                </div>

                <div>
                    <h1 class="Main_Star">*</h1>
                    <h4>Continuous Uploads</h4>
                    <p>Experience the joy of perpetual literary enrichment with our continuous uploads of books. A
                        digital library that never stops growing, ensuring an ever-expanding collection to satisfy every
                        reader's curiosity.</p>
                </div>


                <div>
                    <h1 class="Main_Star">*</h1>
                    <h4>App Access</h4>
                    <p>Unlock the world of books at your fingertips with seamless app access. Your gateway to a digital
                        library, offering convenience and exploration in the palm of your hand.</p>
                </div>

                <div>
                    <h1 class="Main_Star">*</h1>
                    <h4>Personal Library</h4>
                    <p>Curate your own sanctuary of stories with our personal library feature. Tailor your reading
                        experience, organize collections, and delve into a world of literary delights uniquely crafted
                        for you.</p>
                </div>

                <div>
                    <h1 class="Main_Star">*</h1>
                    <h4>Free Use</h4>
                    <p>Embrace the freedom of knowledge with unrestricted access – our digital library is dedicated to
                        free use, empowering users to explore, learn, and enjoy an extensive collection of books without
                        any cost barriers.</p>
                </div>

                <div>
                    <h1 class="Main_Star">*</h1>
                    <h4>Digital Solutions</h4>
                    <p>Empower your journey with our cutting-edge digital solutions. From seamless access to
                        comprehensive search functionalities, our platform offers innovative tools to enhance your
                        reading experience in the digital realm.</p>
                </div>

            </div>
        </div>

        <div class="characteristics flexIsOn">
            <h1>*</h1>
            <h1>An array of Books</h1>
            <p>Our comprehensive website caters to a diverse clientele, ranging from childrens
                to elderly people.</p>
            <div class="characteristicsWrapper">
                <div class="characteristicsContainer">
                    <h1 class="Main_Star">*</h1>
                    <h1>BookRepo Web App</h1>
                    <h5>Create your own very personal and infinite library.</h5>
                    <h5>Share your uploaded books with others.</h5>
                    <h5>Experience the world of literature.</h5>
                </div>
                <div class="characteristicsContainer">
                    <h1 class="Main_Star">*</h1>
                    <h1>Our Newsletter</h1>
                    <h5>A world of thought-provoking articles.</h5>
                    <h5>Case studies that celebrate the history of literature.</h5>
                    <h5>Exclusive access to insights.</h5>
                </div>
            </div>

        </div>

        <div class="ourView flexIsOn" id="ourView">
            <h1>“Explore, share, and indulge in a diverse collection of books spanning genres and authors. Your gateway
                to endless stories.”
            </h1>
            <h3>Anton Korovai</h3>
            <h3>CEO, BookRepo</h3>
        </div>

        <div class="lastBooks flexIsOn" style="align-items: start;">
            <h1>Read, Enjoy, Share</h1>
            <?php include 'BookManagement/getLastBooks.php'; ?>
            <script>
                function addToDatabase(button) {
                    console.log(button);
                    // Get the row data
                    var row = button.closest('tr');
                    var Author = row.cells[0].innerText;
                    var Title = row.cells[1].innerText;

                    // Send data to the server using AJAX
                    $.ajax({
                        type: 'POST',
                        url: 'LibraryManagement/addBookToMyLibrary.php',
                        data: { Author: Author, Title: Title },
                        success: function (response) {
                            alert(response);
                        }
                    });
                }
            </script>
        </div>

        <div class="JoinUs flexIsOn">
            <div class="JoinUsWrapper">
                <h1>Join 900+ subscribers</h1>
                <p>Stay in the loop with everything you need to know.</p>
                <a style="margin-top:10px;margin-bottom:10px; cursor: pointer;">Sign up</a>
            </div>
        </div>

    </main>
    <footer>
        <div class="footerWrapper">
            <div class="webSiteReview">
                <h3>BookRepo</h3>
                <p>Designed by Anton Korovai <br>from heart with love &lt;3</p>
            </div>
            <div class="socialWrapper">
                <h3>Social</h3>
                <a href="">Instagram</a>
                <a href="">Facebook</a>
                <a href="">X</a>
            </div>
            <div class="aboutWrapper">
                <h3>
                    About
                </h3>
                <a href="#presentation">About Project</a>
                <a href="#objectives">Objectives</a>
                <a href="#ourView">Our View</a>
            </div>
        </div>
        <p>All rights are reserved</p>
    </footer>
</body>

</html>