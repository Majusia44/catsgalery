<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Kocia Galeria</title>
</head>
<body>
<form action="upload.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>


   <?php 
   $conn = mysqli_connect("localhost", "root", "", "galeriakot");
   $sql = "SELECT `id_obrazy`, `obraz`, `nazwa` FROM `obrazy`";
   $query = mysqli_query($conn, $sql);
   while ($a = mysqli_fetch_assoc($query)) {
    # code...
    echo "<div class='gal1'><img src='".$a['obraz']."' alt='kicia1.jpg'></div>";
   }
   ?>
</body>
</html>
