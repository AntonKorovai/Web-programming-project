<?php if (!isset($_SESSION['username'])) {
    echo "<div class=\"access\">
                        <button class=\"register accessButton\">
                            Register
                        </button>
                        <button class=\"loggin accessButton\">
                            Login
                        </button>
                    </div>";
} else {
    $usernameL = $_SESSION["username"];
    echo "<form action=\"UserAccessManagement/logout.php\" class = \"logoutForm\">
                        <button type=\"submit\" class = \"logout accessButton\">
                            Log Out
                        </button>
                    </form>
                    <script>
                        var p = document.createElement('p');
                        p.setAttribute('id', 'loggedUser')
                        p.innerHTML = 'Logged as: $usernameL';
                        document.querySelector('.logoutForm').insertBefore(p, document.querySelector('.logout'));
                    </script>
                    ";
}
?>

