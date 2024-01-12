<?php
// Start the session
session_start();
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookRepo</title>
    <link rel="stylesheet" href="style.css">
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
    <script src="scrript.js"></script>
    <script src="https://code.jscharting.com/2.9.0/jscharting.js"></script>
    <script src="charts.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
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
        <h1 class="alignTextCenter">Admin Center</h1>
        <div class="dashboardWrapper">
            <div class="NoRegisteredUsers stats">
                <h3>Users Registered</h3>
                <?php include 'getNoUsers.php'; ?>
            </div>
            <div class="NoBooks stats">
                <h3>Books Available</h3>
                <?php include 'getNoBooks.php'; ?>
            </div>
            <form action="deleteBook.php" method="post" class="deleteBook stats">
                <h3>deleteBook</h3>
                <label for="book_id">Book ID:</label>
                <input type="text" id="book_id" name="book_id" required>

                <button type="submit">Delete</button>
            </form>

            <form action="deleteUser.php" method="post" class="deleteUser stats">
                <h3>deleteUser</h3>
                <label for="user_id">User ID:</label>
                <input type="text" id="user_id" name="user_id" required>

                <button type="submit">Delete</button>
            </form>

        </div>
        <div id="chartDiv" style="width:50%;height:300px;margin:0 auto;"></div>
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