<?php

session_start();

if (!isset($_SESSION['unique_id'])) {
    header("location: login.php");
}

?>
<?php include_once "header.php" ?>

<?php
include_once "php/config.php";
$user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
$sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$user_id}");
if (mysqli_num_rows($sql) > 0) {
    $row = mysqli_fetch_assoc($sql);
}
?>

<body>
    <div class="wrapper">
        <section class="caht-page">
            <header>
                <a href="users.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
                <img src="php/images/<?= $row['image'] ?>" alt="">
                <div class="details">
                    <span><?= $row['fname'] . " " . $row['lname'] ?></span>
                    <p><?= $row['status'] ?></p>
                </div>
            </header>
            <div class="chat-box">
                <div class="chat outgoing">
                    <div class="details">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="chat incoming">
                    <img src="" alt="">
                    <div class="details">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
            <form action="#" class="typing-area" autocomplete="off">
                <input type="text" name="outgoing_id" value="<?= $_SESSION['unique_id']; ?>" hidden>
                <input type="text" name="incoming_id" value="<?= $user_id; ?>" hidden>
                <input type="text" name="message" class="input-field" placeholder="Type a message here...">
                <button><i class="fab fa-telegram-plane"></i></button>
            </form>
        </section>
    </div>
    <script src="javascript/chat.js"></script>

</body>

</html>