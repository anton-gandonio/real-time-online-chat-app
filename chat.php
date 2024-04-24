<?php
  session_start();
  if(!isset($_SESSION["unique_id"])) {
    header("location: login.php");
  }
 ?>
<?php include_once "header.php";?>
  <body>
    <div class="wrapper">
      <section class="chat-area">
        <header>
          <a class="back-icon" href="#"><i class="fas fa-arrow-left"></i></a>
          <img src="./pfp.png" alt="" />
          <div class="details">
            <span>Anton Gandonio</span>
            <p>В сети</p>
          </div>
        </header>
        <div class="chat-box">
          <div class="chat outgoing">
            <div class="details">
              <p>
                что делать есdddddddddddddddddddddddddddddddddddddddddddddddd я
                ебал говно г говно говно говно<b>😂😂😂</b>
              </p>
            </div>
          </div>
          <div class="chat incoming">
            <img src="./pfp.png" alt="" />
            <div class="details">
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
            </div>
          </div>
          <div class="chat outgoing">
            <div class="details">
              <p>
                что делать есdddddddddddddddddddddddddddddddddddddddddddddddd я
                ебал говно г говно говно говно<b>😂😂😂</b>
              </p>
            </div>
          </div>
          <div class="chat incoming">
            <img src="./pfp.png" alt="" />
            <div class="details">
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
            </div>
          </div>
          <div class="chat outgoing">
            <div class="details">
              <p>
                что делать есdddddddddddddddddddddddddddddddddddddddddddddddd я
                ебал говно г говно говно говно<b>😂😂😂</b>
              </p>
            </div>
          </div>
          <div class="chat incoming">
            <img src="./pfp.png" alt="" />
            <div class="details">
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
            </div>
          </div>
        </div>
        <form action="#" class="typing-area">
          <input type="text" placeholder="Введите сообщение" />
          <button><i class="fa-solid fa-location-arrow"></i></button>
        </form>
      </section>
    </div>
  </body>
</html>
