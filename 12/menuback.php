<?php
$connect = mysqli_connect("localhost", "root", "", "1880bar");
if(isset($_POST["insert"]))
{
    $name = $_POST['name'];
    $price = $_POST['price'];
    $ingeredientsam = $_POST['ingredientsam'];
    $ingeredientsru = $_POST['ingredientsru'];
    $ingeredientsen = $_POST['ingredientsen'];
    $dish = $_POST['dish'];
    $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
   /* $query = "INSERT INTO tbl_images(name,) VALUES ('$file')";*/
    $query ="INSERT INTO `1880bar`(`id`, `name`, `price`, `ingredientsam`, `ingredientsru`, `ingredientsen`, `dish`, `name1`) VALUES ('null','$name','$price','$ingeredientsam','$ingeredientsru','$ingeredientsru','$dish','$file')";
    if(mysqli_query($connect, $query))
    {
        echo '<script>alert("Image Inserted into Database")</script>';
    }
}
?>
<!DOCTYPE html>
<html>
<head>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <style>
        .namediv{
            width: 200px;
            height: 56px;
            background: #363636;
        }
        .namep{
            width: 134px;
            height: 38px;
            margin-left:33px ;
            font-family: Roboto;
            font-style: normal;
            font-weight: normal;
            font-size: 16px;
            line-height: 19px;
            text-align: center;
            color: #FFFFFF;
        }
    </style>
</head>
<body>
<br /><br />
<div class="container">

    <br />
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="image" id="image" />
        <br />
        <input type="text" name="name" required  placeholder="name"><br><br>
        <input type="text" name="ingredientsam" required placeholder="ingredientsam"><br><br>
        <input type="text" name="ingredientsru" required placeholder="ingredientsru"><br><br>
        <input type="text" name="ingredientsen" required placeholder="ingredientsen"><br><br>
        <input type="text" name="price" required placeholder="price"><br><br>
        <input list="browsers" name="dish"  required placeholder="dish">
        <datalist id="browsers" style="background-color: ">
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
        <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-info" />
    </form>
    <br />
    <br />
    <div style="width: 930px;">
        <?php
        $query = "SELECT * FROM 1880bar ORDER BY id DESC";
        $result = mysqli_query($connect, $query);
        while($row = mysqli_fetch_array($result))
        {

            echo ' <style>.m.'.$row['id'].':hover .n.'.$row['id'].'{display:block;}</style>
 
 
            <div class="n.'.$row['id'].'"  style="position:relative; z-index:1; width=200px; height=256px; float: left; padding: 16px;display=flex;align-items:flex-end ">
               
               
            <img src="data:image/jpeg;base64,'.base64_encode($row['name1'] ).'" height="200" width="200" class="img-thumnail">
               
               
            <div class="namediv"><p class="namep">'.$row['name'].'</p>    
               
            <button><a href="edit.php?id='.$row["id"].'">Փոփոխել</a></button>
            <button><a href="delete.php?id='.$row["id"].'">Ջնջել</a></button> </div>
               
                
            <div class="m.'.$row['id'].'" style="display:none; width: 200px; height: 256px; background:rgba(39, 122, 95, 0.9); position:absolute; z-index: 2; bottom: 16px; padding: 16px;">
               
               
            <div style="width: 168px; height: 32px;"><center><p style="font-family: Roboto;  font-style: normal; font-weight: bold; font-size: 18px; line-height: 21px;  color: #FFFFFF; ">'.$row['name'].'</p></center></div>
               
               
               <div  style="width: 183px; height: 154px;"><p style="font-family: Roboto; padding: 24px; font-style: normal; font-weight: normal; font-size: 16px; line-height: 19px; text-align: center; color: #FFFFFF;">'.$row['ingredientsam'].'</p></div>
              
               
               <div style="width: 86px; height: 21px; "><p style="font-family: Roboto; margin-left: 41px; padding: 10px; font-weight: bold;  color: #FFFFFF;">'.$row['price'].'</p></div>
               
               </div>
               </div>
                ';}
?>
    </div>
</body>
</html>
<script>
    $(document).ready(function(){
        $('#insert').click(function(){
            var image_name = $('#image').val();
            if(image_name == '')
            {
                alert("Please Select Image");
                return false;}
            else
            {
                var extension = $('#image').val().split('.').pop().toLowerCase();
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)
                {
                    alert('Invalid Image File');
                    $('#image').val('');
                    return false;
                }
            }
        });
    });






</script>