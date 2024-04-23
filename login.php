<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Онлайн-чат в реальном времени</title>
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    />
  </head>
  <body>
    <div class="wrapper">
      <section class="form login">
        <header>Онлайн-чат в реальном времени</header>
        <form action="#">
          <div class="error-txt">this is an error sosik!</div>
          <div class="field input">
            <label for="">Электронная почта</label>
            <input type="email" placeholder="example@gmail.com" />
          </div>
          <div class="field input">
            <label for="">Пароль</label>
            <input type="password" placeholder="Введите ваш пароль" />
            <i class="fas fa-eye"></i>
          </div>
          <div class="field button">
            <input  type="submit" value="Зарегистрироваться" />
          </div>
        </form>
        <div class="link">Нет аккаунта? <a href="./index.php">Зарегистрироваться</a></div>
      </section>
    </div>
    <script async src="./javascript/pass-show-hide.js"></script>
    <script async src="./javascript/signUp.js"></script>
  </body>
</html>
