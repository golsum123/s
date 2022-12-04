<!DOCTYPE html>
<?php require_once 'dbconnection.php';?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css.css">
    <title>Softelino</title>
</head>
<body>
    <div id="min"></div>
    <div class="container">
    <header>
    <div class="slidshow">
        <div class="slidshowBtn"><img src="image/ArrowLeft.png" alt=""></div>
        <?php
            $person = $connection->query("SELECT* FROM person");

            if($person->num_rows > 0) {
                 while($row = $person->fetch_assoc()){
                echo "<div class='slids'>";
                echo '<div class="slidshowImg">';
                    echo '<img src="image/'.  $row['image'] .'">';
                echo '</div>';
                echo '<div class="slidshowParagraf">';
                        echo '<h1>' . $row['name']  . '</h1>';
                        echo'<div class= "stardiv">';
                        for($i=1; $i<= $row['ratting']  ; $i++){
                            echo '<img class="starimg" src="image/rate.png">';
                        }
                        echo'</div>';
                        echo '<p>'. $row['bio']  .'</p>';
                echo '</div>';

                echo '</div>';
            }
        }   
        else{
            echo "<p>image not found</p>";
        }
        ?>
        <div class="slidshowBtn"><img src="image/ArrowRight.png" alt=""></div>
    </div>
    </header>

        <div class="price">
            <h1>PRICE</h1>
            <p>Softelino Code Camp price is based on your finantial situation and your education background.
                This are our price standard base on your education background. first fill the form then you will have an 
                interview with our team then you will gwt the specific price for your self.
                Finding a mentor in my early age of computer science journey was my great decision I have ever made. There are thousand free resource available to learn but to study and work on real project with other developers is something that is very rare.   

            </p>
        </div>

        <div class="priceDetiles">
        <?php
            $price = $connection->query("SELECT* FROM price");
        if($price->num_rows > 0) {
            while($row = $price->fetch_assoc()){
            echo '<div class="starter div" onmouseover="myFunction()">';
            echo '<img src="image/'. $row['image'] .'" >';
            echo '<h3>' . $row['state'] . '<h3/>';
            echo '<p>'. $row['state_details'] .'</p>';
            echo '<table> <tr> <td>' . $row['price'] .'</td>'. '<td>per <br> month</td>'. ' </tr> </table>';
            echo '</div>';
            }
        }   
        else{
        echo "<p>image not found</p>";
        }
        ?>
            </div>
        </div>
        <footer>
            <div class="footerParagraf">
                <h1>SCHOLERSHIP</h1>
                <P>
                    Softelino will provide scholership for student who have finantial problems. therefore to get a
                     scholership just reach out to one of our team and prove yourself worth it to get a scholership. 
                </P>
            </div>
            <div class="footerImage">
                <img src="image/Webinar.png" alt="">
            </div>

        </footer>



    </div>
</body>