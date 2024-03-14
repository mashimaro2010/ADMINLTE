<!DOCTYPE html>
   <html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!--=============== REMIXICONS ===============-->
      <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

      <!--=============== CSS ===============-->
      <link rel="stylesheet" href="assets/css/styles.css">

      <title>Login Data Center</title>
   </head>
   <body class="body">
      <div class="login">
         <!--<img src="assets/img/login-bg2.jpg" alt="login image" class="login__img">-->

         <form action="auth_login.php" method="post" class="login__form">
            <h2 class="login__title">Login Data Center</h2>

            <div class="login__content">
               <div class="login__box">
                  <i class="ri-user-3-line login__icon"></i>

                  <div class="login__box-input">
                     <input type="User" name="DataCenterUserName" required class="login__input" id="login-email" placeholder=" ">
                     <label for="login-email" class="login__label">User</label>
                  </div>
               </div>

               <div class="login__box">
                  <i class="ri-lock-2-line login__icon"></i>

                  <div class="login__box-input">
                     <input type="password" name="DataCenterPassword" required class="login__input" id="login-pass" placeholder=" ">
                     <label for="login-pass" class="login__label">Password</label>
                     <i class="ri-eye-off-line login__eye" id="login-eye"></i>
                  </div>
               </div>
            </div>

            <div class="login__check">
               <div class="login__check-group">
                  <input type="checkbox" class="login__check-input" id="login-check">
                  <label for="login-check" class="login__check-label">กดให้จำรหัสผ่าน</label>
               </div>

               <a href="#" class="login__forgot">ลืมรหัสผ่าน?</a>
            </div>

            <button type="submit" class="login__button">Login</button>

            <p class="login__register">
               ยังไม่มี Account <a href="#">คลิ๊กลงทะเบียน</a>
            </p>
         </form>
      </div>
      
      <!--=============== MAIN JS ===============-->
      <script src="assets/js/main.js"></script>
   </body>
</html>