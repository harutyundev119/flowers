<?php
$mysqli = new PDO("mysql:host=localhost; dbname=1880bar;charset=utf8", "root", "");

$id=$_GET['id'];
$result = $mysqli->prepare("SELECT * FROM 1880bar WHERE ID = :userid");
$result->bindParam(':userid', $id);
$result->execute();
for($i=0; $row = $result->fetch(); $i++){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Բարիգալուստ</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body style="background-color: lightblue;">
<form method="post" enctype="multipart/form-data">
<input type="file" name="image" id="image" />
    <input type="hidden" name="id" required  value="<?php echo $row["id"]; ?>"   placeholder="name">
        <input type="submit" name="updatephoto" id="insert" value="update photo" class="btn btn-info" />
</form>
<form method="post" enctype="multipart/form-data">
        <br />
    <input type="hidden" name="id" required  value="<?php echo $row["id"]; ?>"   placeholder="name">
        <p><?php echo $row["id"]; ?></p>
    Name:  <input style="width: 600px;" type="text" name="name" required  value="<?php echo $row["name"]; ?>"   placeholder="name"><br><br>
    Ingredientsam:<input style="width: 600px;" type="text" name="ingredientsam"  value="<?php echo $row["ingredientsam"]; ?>"  required placeholder="ingredientsam"><br><br>
    Ingredientsru:<input style="width: 600px;"type="text" name="ingredientsru"  value="<?php echo $row["ingredientsru"]; ?>"  required placeholder="ingredientsru"><br><br>
    Ingredientsen:<input style="width: 600px;"type="text" name="ingredientsen"  value="<?php echo $row["ingredientsen"]; ?>" required placeholder="ingredientsen"><br><br>
    Price:<input type="text" name="price"          value="<?php echo $row["price"]; ?>" required placeholder="price"><br><br>
    Dish:<input list="browsers" name="dish" value="<?php echo $row["dish"]; ?>" required placeholder="dish">
        <datalist id="browsers"  style="background-color: ">
            <option value="Appetizers">
            <option value="Salads">
            <option value="Soups">
            <option value="Hot Dishes">
            <option value="Garnish">
            <option value="Sandwiches & Burgers">
            <option value="Desserts">
            <option value="Cocktals">
            <option value="Bar">
            <option value="Winelist">
        </datalist>
        <input type="submit" name="insert" id="insert" value="update" class="btn btn-info" />
    </form>
<?php }

if(isset($_POST["insert"]))
{   $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $ingeredientsam = $_POST['ingredientsam'];
    $ingeredientsru = $_POST['ingredientsru'];
    $ingeredientsen = $_POST['ingredientsen'];
    $dish = $_POST['dish'];
    $connect = mysqli_connect("localhost", "root", "", "1880bar");
    /* $query = "INSERT INTO tbl_images(name,) VALUES ('$file')";*/
    $query ="UPDATE `1880bar` SET `name`='$name',`price`='$price',`ingredientsam`='$ingeredientsam',`ingredientsru`='$ingeredientsru',`ingredientsen`='$ingeredientsen',`dish`='$dish' WHERE `id`='$id'";
    if(mysqli_query($connect, $query))
    {
        echo '<script>alert("Image Inserted into Database")</script>';
    }
}
if(isset($_POST["updatephoto"]))

{   $id = $_POST['id'];
    $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
    $connect = mysqli_connect("localhost", "root", "", "1880bar");
    /* $query = "INSERT INTO tbl_images(name,) VALUES ('$file')";*/
    $query ="UPDATE `1880bar` SET `name1`='$file' WHERE `id`='$id'";
    if(mysqli_query($connect, $query))
    {
        echo '<script>alert("Image Inserted into Database")</script>';
    }
}
?>