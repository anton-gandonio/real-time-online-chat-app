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
      <section class="form signup">
        <header>Онлайн-чат в реальном времени</header>
        <form action="#" enctype="multipart/form-data">
          <div class="error-txt">this is an error message!</div>
          <div class="name-details">
            <div class="field input">
              <label for="">Имя</label>
              <input name="fname" type="text" required placeholder="Ваше имя" />
            </div>
            <div class="field input">
              <label for="">Фамилия</label>
              <input name="lname" type="text" required placeholder="Ваша фамилия" />
            </div>
          </div>
          <div class="field input">
            <label for="">Электронная почта</label>
            <input name="email" type="email" required placeholder="example@gmail.com" />
          </div>
          <div class="field input">
            <label for="">Пароль</label>
            <input name="password" type="password" required placeholder="Придумайте надежный пароль :)" />
            <i class="fas fa-eye"></i>
          </div>
          <div class="field image">
            <label for="profile-picture">Аватар профиля</label>
            <input required
              accept="image/png, image/jpeg, image"
              name="image"
              class="profile-picture"
              type="file"
            />
          </div>
          <div class="field button">
            <input type="submit" value="Зарегистрироваться" />
          </div>
        </form>
        <div class="link">
          Уже зарегистрированы? <a href="./login.html">Войти</a>
        </div>
      </section>
    </div>
    <script async src="./javascript/pass-show-hide.js"></script>
    <script async src="./javascript/signUp.js"></script>
  </body>
</html>
