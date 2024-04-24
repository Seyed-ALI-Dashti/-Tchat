<?php

session_start();

if (isset($_SESSION['unique_id'])) {
    header("location: users.php");
}

?>
<?php include_once "header.php" ?>

<body>
    <div class="wrapper">
        <section class="form login">
            <header>-T Chat App</header>
            <form action="#">
                <div class="error-text"></div>

                <div class="field input">
                    <label>Email</label>
                    <input type="text" name="email" placeholder="Enter your email">
                </div>
                <div class="field input">
                    <label>Password</label>
                    <input type="password" name="password" id="password" placeholder="Enter your password">
                    <span class="toggle-password" onclick="togglePasswordVisibility()">
                        <i id="toggleIcon" class="fa fa-eye"></i>
                    </span>
                </div>

                <div class="field button">
                    <input type="submit" value="Countinue to Chat">
                </div>
            </form>
            <div class="link">Not yet signed up? <a href="index.php"><S></S>Signup now</a></div>
        </section>
    </div>
    <script src="javascript/pass-show-hide.js"></script>
    <script src="javascript/login.js"></script>

</body>

</html>