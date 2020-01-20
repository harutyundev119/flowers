<?php

                function sandwiches(){
    $connect = mysqli_connect("localhost", "root", "", "1880bar");
    $query = "SELECT * FROM 1880bar WHERE dish='Sandwiches & Burgers'";
    $result = mysqli_query($connect, $query);
    while($row = mysqli_fetch_array($result))
    {
        echo '

        <div style=" width=200px; height=256px; float: left; padding: 16px; ">
            <img src="data:image/jpeg;base64,'.base64_encode($row['name1'] ).'" height="200" width="200" class="img-thumnail" />
            <div style="width: 200px;height: 56px;background: #363636;"><p style="width: 134px;
            height: 38px; margin-left:33px ; font-family: Roboto; font-style: normal; font-weight: normal; font-size: 16px; line-height: 19px; text-align: center; color: #FFFFFF;">'.$row['name'].'</p>  </div>
        </div> ';}}


               function appetires(){
    $connect = mysqli_connect("localhost", "root", "", "1880bar");
    $query = "SELECT * FROM 1880bar WHERE dish='Appetizers'";
    $result = mysqli_query($connect, $query);
    while($row = mysqli_fetch_array($result))
    {
        echo '

         <div style=" width=200px; height=256px; float: left; padding: 16px; ">
            <img src="data:image/jpeg;base64,'.base64_encode($row['name1'] ).'" height="200" width="200" class="img-thumnail" />
            <div style="width: 200px;height: 56px;background: #363636;"><p style="width: 134px;
            height: 38px; margin-left:33px ; font-family: Roboto; font-style: normal; font-weight: normal; font-size: 16px; line-height: 19px; text-align: center; color: #FFFFFF;">'.$row['name'].'</p>  </div>
        </div>';}}

                function dessert(){
    $connect = mysqli_connect("localhost", "root", "", "1880bar");
    $query = "SELECT * FROM 1880bar WHERE dish='Desserts'";
    $result = mysqli_query($connect, $query);
    while($row = mysqli_fetch_array($result))
    {
        echo '

         <div style=" width=200px; height=256px; float: left; padding: 16px; ">
            <img src="data:image/jpeg;base64,'.base64_encode($row['name1'] ).'" height="200" width="200" class="img-thumnail" />
            <div style="width: 200px;height: 56px;background: #363636;"><p style="width: 134px;
            height: 38px; margin-left:33px ; font-family: Roboto; font-style: normal; font-weight: normal; font-size: 16px; line-height: 19px; text-align: center; color: #FFFFFF;">'.$row['name'].'</p>  </div>
        </div>

        ';
    }



}




                function salads(){
            $connect = mysqli_connect("localhost", "root", "", "1880bar");
            $query = "SELECT * FROM 1880bar WHERE dish='Salads'";
            $result = mysqli_query($connect, $query);
            while($row = mysqli_fetch_array($result))
            {
                echo '

         <div style=" width=200px; height=256px; float: left; padding: 16px; ">
            <img src="data:image/jpeg;base64,'.base64_encode($row['name1'] ).'" height="200" width="200" class="img-thumnail" />
            <div style="width: 200px;height: 56px;background: #363636;"><p style="width: 134px;
            height: 38px; margin-left:33px ; font-family: Roboto; font-style: normal; font-weight: normal; font-size: 16px; line-height: 19px; text-align: center; color: #FFFFFF;">'.$row['name'].'</p>  </div>
        </div>


        ';
            }}

                function soups()
            {
                $connect = mysqli_connect("localhost", "root", "", "1880bar");
                $query = "SELECT * FROM 1880bar WHERE dish='Soups'";
                $result = mysqli_query($connect, $query);
                while ($row = mysqli_fetch_array($result)) {
                    echo '

         <div style=" width=200px; height=256px; float: left; padding: 16px; ">
            <img src="data:image/jpeg;base64,'.base64_encode($row['name1'] ).'" height="200" width="200" class="img-thumnail" />
            <div style="width: 200px;height: 56px;background: #363636;"><p style="width: 134px;
            height: 38px; margin-left:33px ; font-family: Roboto; font-style: normal; font-weight: normal; font-size: 16px; line-height: 19px; text-align: center; color: #FFFFFF;">'.$row['name'].'</p>  </div>
        </div>


        ';
                }
            }

                function hotdishes(){
                    $connect = mysqli_connect("localhost", "root", "", "1880bar");
                    $query = "SELECT * FROM 1880bar WHERE dish='Soups'";
                    $result = mysqli_query($connect, $query);
                    while($row = mysqli_fetch_array($result))
                    {
                        echo '

         <div style=" width=200px; height=256px; float: left; padding: 16px; ">
            <img src="data:image/jpeg;base64,'.base64_encode($row['name1'] ).'" height="200" width="200" class="img-thumnail" />
            <div style="width: 200px;height: 56px;background: #363636;"><p style="width: 134px;
            height: 38px; margin-left:33px ; font-family: Roboto; font-style: normal; font-weight: normal; font-size: 16px; line-height: 19px; text-align: center; color: #FFFFFF;">'.$row['name'].'</p>  </div>
        </div>


        ';
                    }



                }

                function garnish(){
                    $connect = mysqli_connect("localhost", "root", "", "1880bar");
                    $query = "SELECT * FROM 1880bar WHERE dish='garnish'";
                    $result = mysqli_query($connect, $query);
                    while($row = mysqli_fetch_array($result))
                    {
                        echo '

        <div style=" width=200px; height=256px; float: left; padding: 16px; ">
            <img src="data:image/jpeg;base64,'.base64_encode($row['name1'] ).'" height="200" width="200" class="img-thumnail" />
            <div style="width: 200px;height: 56px;background: #363636;"><p style="width: 134px;
            height: 38px; margin-left:33px ; font-family: Roboto; font-style: normal; font-weight: normal; font-size: 16px; line-height: 19px; text-align: center; color: #FFFFFF;">'.$row['name'].'</p>  </div>
        </div>


        ';
                    }



                }



                function cocktails(){
    $connect = mysqli_connect("localhost", "root", "", "1880bar");
    $query = "SELECT * FROM 1880bar WHERE dish='Cocktals'";
    $result = mysqli_query($connect, $query);
    while($row = mysqli_fetch_array($result))
    {
        echo '

         <div style=" width=200px; height=256px; float: left; padding: 16px; ">
            <img src="data:image/jpeg;base64,'.base64_encode($row['name1'] ).'" height="200" width="200" class="img-thumnail" />
            <div style="width: 200px;height: 56px;background: #363636;"><p style="width: 134px;
            height: 38px; margin-left:33px ; font-family: Roboto; font-style: normal; font-weight: normal; font-size: 16px; line-height: 19px; text-align: center; color: #FFFFFF;">'.$row['name'].'</p>  </div>
        </div>

        ';
    }



}

                function bar(){
    $connect = mysqli_connect("localhost", "root", "", "1880bar");
    $query = "SELECT * FROM 1880bar WHERE dish='Bar'";
    $result = mysqli_query($connect, $query);
    while($row = mysqli_fetch_array($result))
    {
        echo '

         <div style=" width=200px; height=256px; float: left; padding: 16px; ">
            <img src="data:image/jpeg;base64,'.base64_encode($row['name1'] ).'" height="200" width="200" class="img-thumnail" />
            <div style="width: 200px;height: 56px;background: #363636;"><p style="width: 134px;
            height: 38px; margin-left:33px ; font-family: Roboto; font-style: normal; font-weight: normal; font-size: 16px; line-height: 19px; text-align: center; color: #FFFFFF;">'.$row['name'].'</p>  </div>
        </div>

        ';
    }



}


                function winelist(){
    $connect = mysqli_connect("localhost", "root", "", "1880bar");
    $query = "SELECT * FROM 1880bar WHERE dish='Winelist'";
    $result = mysqli_query($connect, $query);
    while($row = mysqli_fetch_array($result))
    {
        echo '

         <div style=" width=200px; height=256px; float: left; padding: 16px; ">
            <img src="data:image/jpeg;base64,'.base64_encode($row['name1'] ).'" height="200" width="200" class="img-thumnail" />
            <div style="width: 200px;height: 56px;background: #363636;"><p style="width: 134px;
            height: 38px; margin-left:33px ; font-family: Roboto; font-style: normal; font-weight: normal; font-size: 16px; line-height: 19px; text-align: center; color: #FFFFFF;">'.$row['name'].'</p>  </div>
        </div>

        ';
    }



}


