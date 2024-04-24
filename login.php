<?php include_once "header.php";?>
  <body>
    <div class="wrapper">
      <section class="form login">
        <header>Онлайн-чат в реальном времени</header>
        <form action="#">
          <div class="error-txt"></div>
          <div class="field input">
            <label for="">Электронная почта</label>
            <input name="email" type="email" placeholder="example@gmail.com" />
          </div>
          <div class="field input">
            <label for="">Пароль</label>
            <input name="password" type="password" placeholder="Введите ваш пароль" />
            <i class="fas fa-eye"></i>
          </div>
          <div class="field button">
            <input type="submit" value="Войти" />
          </div>
        </form>
        <div class="link">Нет аккаунта? <a href="./index.php">Зарегистрироваться</a></div>
      </section>
    </div>
    <script async src="./javascript/pass-show-hide.js"></script>
    <script async src="./javascript/login.js"></script>
  </body>
</html>
