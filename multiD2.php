<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <style>
    #imgDiv{
        display:grid;
        grid-template-columns: auto auto auto;
        grid-column-gap: 10%;
        margin: auto;
        
    }
    .img1{
        width: 20%;
        padding-left:0;
        margin-left: 25%;
        font-size: 18px;
    }
    img{
        height: 100px;
        width: 70%
        border: none;
        border-radius: 50%;
        }
        #head{
            background-color: #222222;
            color:white;
            text-align: center;
            margin-top:4vh;
        }
        #subHead{
            background-color: green;
            color:white;
            text-align: center;
            margin-top: 5vh; 
        }
        input{
            margin-top: 1vh;
            padding: 5px;
            background-color: #555fff;
            color: white;
            font-size: 20px;
            border: none;
            border-radius: 10%;
            margin-left: -20px;
        }
        .sizing{
            font-size: 20px;
            margin-left: 25%;
        }
        .texts{
            margin-left:75%;
        }
        .img2{
            margin-left:50%;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active sizing" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link sizing" href="#">Product</a>
        </li>
        <li class="nav-item">
          <a class="nav-link sizing" href="#">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<?php
$products = array(
				"Electronics" => array(
									"Television" => array(
														array(
															"id" => "PR001", 
															"name" => "MAX-001",
															"brand" => "Samsung"
														),
														array(
															"id" => "PR002", 
															"name" => "BIG-301",
															"brand" => "Bravia"
														),
														array(
															"id" => "PR003", 
															"name" => "APL-02",
															"brand" => "Apple"
														)
													),
									"Mobile" => array(
														array(
															"id" => "PR004", 
															"name" => "GT-1980",
															"brand" => "Samsung"
														),
														array(
															"id" => "PR005", 
															"name" => "IG-5467",
															"brand" => "Motorola"
														),
														array(
															"id" => "PR006", 
															"name" => "IP-8930",
															"brand" => "Apple"
														)
													)
								),
				"Jewelry" => array(
									"Earrings" => array(
														array(
															"id" => "PR007", 
															"name" => "ER-001",
															"brand" => "Chopard"
														),
														array(
															"id" => "PR008", 
															"name" => "ER-002",
															"brand" => "Mikimoto"
														),
														array(
															"id" => "PR009", 
															"name" => "ER-003",
															"brand" => "Bvlgari"
														)
													),
									"Necklaces" => array(
														array(
															"id" => "PR010", 
															"name" => "NK-001",
															"brand" => "Piaget"
														),
														array(
															"id" => "PR011", 
															"name" => "NK-002",
															"brand" => "Graff"
														),
														array(
															"id" => "PR012", 
															"name" => "NK-003",
															"brand" => "Tiffany"
														)
													)				
							)
            );

              // echo "<pre>";
            // print_r($products);
            // echo "</pre>";
            ?>
            <div>
            <?php
             foreach($products as $key1 => $val1){
                echo '<div id="head">';
                echo "<h1>" . $key1 . "</h1>";
                echo "</div>";
                foreach($val1 as $key2 => $val2){
                    echo '<div id="subHead">';
                    echo "<h2>" . $key2 . "</h2>";
                    echo "</div>";

                    echo '<div id="imgDiv">';
                    foreach($val2 as $key3 => $val3){
                        if($key2=="Television"){
                            echo '<div class="img1">';
                            echo '<img src="tel.jpeg" alt="Television">' . "<br>";
                            echo '<div class="texts">';
                            echo $val3['id'] . "<br>";
                            echo $val3['name'] . "<br>";
                            echo $val3['brand'] . "<br>";
                            echo '<input type="submit" value="Add To Cart">';
                            echo "</div>";
                            echo '</div>';
                        }
                        else if($key2=="Mobile"){
                            echo '<div class="img1">';
                            echo '<img class="img2" src="mob.jpeg" alt="Mobile">' . "<br>";
                            echo '<div class="texts">';
                            echo $val3['id'] . "<br>";
                            echo $val3['name'] . "<br>";
                            echo $val3['brand'] . "<br>";
                            echo '<input type="submit" value="Add To Cart">';
                            echo "</div>";
                            echo '</div>';
                        }
                        else if($key2=="Earrings"){
                            echo '<div class="img1">';
                            echo '<img src="ear.jpeg" alt="Mobile">' . "<br>";
                            echo '<div class="texts">';
                            echo $val3['id'] . "<br>";
                            echo $val3['name'] . "<br>";
                            echo $val3['brand'] . "<br>";
                            echo '<input type="submit" value="Add To Cart">';
                            echo "</div>";
                            echo '</div>';
                        }
                        else{
                            echo '<div class="img1">';
                            echo '<img class="img2" src="neck.png" alt="Mobile">' . "<br>";
                            echo '<div class="texts">';
                            echo $val3['id'] . "<br>";
                            echo $val3['name'] . "<br>";
                            echo $val3['brand'] . "<br>";
                            echo '<input type="submit" value="Add To Cart">';
                            echo "</div>";
                            echo '</div>';
                        }
                    }
                    echo "</div>";
                }
            }
            ?>
    
</body>
</html>