<html>
   <body>
       <form method="post" action="process.php">
           <input name="login" type="text" placeholder="Логин">
           <input name="password" type="password" placeholder="Пароль">
           <input name="submit" type="submit" value="Войти">
       </form>
    <form action="upload.php" method="post" enctype="multipart/form-data">
    <!-- <input type="hidden" name="MAX_FILE_SIZE" value="30000"> -->
            Выберите изображение для загрузки:
            <input type="file" name="files">
            <input type="submit" value="Загрузить" name="submit">            
    </form>
   </body>
</html>