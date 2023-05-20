<!doctype html>
<html lang="tr-TR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Registration Form</title>
</head>
<body>
  <h1 >Student Registration Form</h1>
   <form action="post.php" method="post" enctype="multipart/form-data">
       <label for="fname">FULL NAME:</label>
       <input type="text" id="fname" name="fullname"><br>
       <label for="email">EMAIL</label>
       <input type="email" id="email" name="eposta"><br>
       <label>GENDER:</label>
       <input type="radio" id="male" name="gender" value="Male" required>
       <label for="male">MALE</label>
       <input type="radio" id="female" name="gender" value="Female" required>
       <label for="male">FEMALE</label><br>

       <input type="submit" value="SUBMIT">
   </form>


</body>
</html>