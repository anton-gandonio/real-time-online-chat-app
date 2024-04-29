<?php
session_start();
if (!isset($_SESSION["unique_id"])) {
  header("location: login.php");
}
?>
<?php include_once "header.php"; ?>

<body>
  <div class="wrapper">
    <section class="chat-area">
      <header>
        <?php
        include_once "php/config.php";
        $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
        $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$user_id}");
        if (mysqli_num_rows($sql) > 0) {
          $row = mysqli_fetch_assoc($sql);
        }
        ?>
        <a class="back-icon" href="users.php"><i class="fas fa-arrow-left"></i></a>
        <img src="php/images/<?php echo $row['img']; ?>" alt="" />
        <div class="details">
          <span><?php echo $row['fname'] . " " . $row["lname"]; ?></span>
          <p><?php echo $row['status'] ?></p>
        </div>
      </header>
      <div class="chat-box">
        
      </div>
      <form action="#" autocomplete="off" class="typing-area">
        <input type="text" hidden name="outgoing_id" value="<?php echo $_SESSION['unique_id']; ?>" >
        <input type="text" hidden name="incoming_id" value="<?php echo $user_id; ?>" >
        <input class="input-field" name="message" type="text" placeholder="Введите сообщение" />
        <button><i class="fa-solid fa-location-arrow"></i></button>
      </form>
    </section>
  </div>
  <script src="javascript/chat.js"></script>
</body>

</html>