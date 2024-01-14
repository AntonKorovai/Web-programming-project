<?php
// Start the session
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
        <div class="MyBooksPage_MainWrapper">
            <h2 class="HtagMyBookPage">Your Books</h2>
            <?php include 'BookManagement/getBooks.php'; ?>
            <?php if (isset($_SESSION['username'])) {
                echo "<div class=\"add-book-form\">
                    <h3>Add a Book</h3>
                    <form action=\"BookManagement/addBook.php\" method=\"post\">
                        <label for=\"title\">Title:</label>
                        <input type=\"text\" id=\"title\" name=\"title\" required>
        
                        <label for=\"author\">Author:</label>
                        <input type=\"text\" id=\"author\" name=\"author\" required>
        
                        <button type=\"submit\">Add Book</button>
                    </form>
                </div>
                <div class=\"delete-book-form\">
                    <h3>Delete a Book</h3>
                    <form action=\"LibraryManagement/deleteBookFromLibrary.php\" method=\"post\">
                        <label for=\"title\">Title:</label>
                        <input type=\"text\" id=\"title\" name=\"title\" required>
        
                        <label for=\"author\">Author:</label>
                        <input type=\"text\" id=\"author\" name=\"author\" required>
        
                        <button type=\"submit\">Delete Book</button>
                    </form>
                </div>";
            }
            ?>
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
                <a href="http://localhost/bookrepo/index.php#presentation">About Project</a>
                <a href="http://localhost/bookrepo/index.php#objectives">Objectives</a>
                <a href="http://localhost/bookrepo/index.php#ourView">Our View</a>
            </div>
        </div>
        <p>All rights are reserved</p>
    </footer>
</body>

</html>