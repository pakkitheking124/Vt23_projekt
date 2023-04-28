<?php
include_once ('heads/head.store.php');
include_once ('nav.fot/navbar.php');
include_once ('nav.fot/whitebar.php');
?>

    <div class="store-wrapped">

        <div class="categories-store">
            <a href="store.php">Erbjudande</a>
            <a class="nuauto" href="automatiskacaffem.php">Automatic Coffee Machines
            </a>
            <a href="#">Espresso Maskiner</a>
            <a href="#">Coffe Makers</a>
            <a href="#">Mjölk Kylare</a>
            <a href="#">Koppar, Muggar och Termosar</a>
            <a href="#">Coffe Capslar</a>
            <a href="#">Coffe Böner</a>
        </div>


    <?php
    if(isset($_SESSION['userid'])){
        echo "<h1>";
        echo "Hej ", $_SESSION['userUid'];
        echo "</h1>";

        echo "<p>";
        echo "Välkommen är inloggad och därför får du 15% rabatt";
        echo "</p>";
    }
    ?>

        <div class="autocoffemachines-store">

            <?php
                $products_json = json_decode(file_get_contents("http://localhost/products/automatiskkaffe.json"), true);

                foreach ($products_json as $product){
                    echo "<a href='" . $product['link'] . "'><div>";
                    echo "<img src='" . $product['img'] . "'>";
                    echo "<h2>" . $product['name'] . "</h2>";
                    if(isset($_SESSION['userid'])){
                        $price_reduction = round(0.15*$product['price']);
                        $price_str = ($product['price'] - $price_reduction) . ":- (-15%)";
                        echo "<h3>" . $price_str . "</h3>";

                    } else {
                        echo "<h3>" . $product['price'] . ":-</h3>";
                    }

                    echo "<p>" . $product['desc'] . "</p>";
                    echo "</div></a>";
                }
            ?>

            <!--<a href="#"><div>
                    <img src="images/smegBCC01.jpg" alt="">
                    <h2>Smeg BCC01</h2>
                    <h3>7000:- (-800kr)</h3>
                    <p>• jadiddiidd <br><br> • jadiddiidd <br><br> • jadiddiidd <br><br> • jadiddiidd <br> </p>
                </div></a>

            <a href="#"><div>
                    <img src="images/SmegBCC02.jpg" alt="">
                    <h2>Smeg BCC02</h2>
                    <h3>8000:- (-500kr)</h3>
                    <p>• jadiddiidd <br><br> • jadiddiidd <br><br> • jadiddiidd <br><br> • jadiddiidd <br> </p>
                </div></a>

            <a href="#"><div>
                    <img src="images/siemenseq300.jpg" alt="">
                    <h2>Siemens EQ.300</h2>
                    <h3>7500:- (-500kr)</h3>
                    <p>• jadiddiidd <br><br> • jadiddiidd <br><br> • jadiddiidd <br><br> • jadiddiidd <br> </p>
                </div></a>

            <a href="#"><div>
                    <img src="images/siemenseq9.jpg" alt="">
                       <h2>Siemens EQ.9 Plus</h2>
                    <h3>3245:- (-400kr)</h3>
                    <p>• jadiddiidd <br><br> • jadiddiidd <br><br> • jadiddiidd <br><br> • jadiddiidd <br> </p>
                </div></a>

            <a href="#"><div>
                    <img src="images/Siemenseq6.jpg" alt="">
                    <h2>Siemens EQ.6</h2>
                    <h3>450:- (-100kr)</h3>
                    <p>• jadiddiidd <br><br> • jadiddiidd <br><br> • jadiddiidd <br><br> • jadiddiidd <br> </p>
                </div></a>

            <a href="#"><div>
                    <img src="images/siemenseq500.jpg" alt="">
                    <h2>Simens EQ.500</h2>
                    <h3>100:- (-126kr)</h3>
                    <p>• jadiddiidd <br><br> • jadiddiidd <br><br> • jadiddiidd <br><br> • jadiddiidd <br> </p>
                </div></a>

            <a href="#"><div>
                    <img src="images/delonghiecam350-75-sdinamica.jpg" alt="">
                    <h2>7000:-</h2>
                    <h3>100:- </h3>
                    <p>• jadiddiidd <br><br> • jadiddiidd <br><br> • jadiddiidd <br><br> • jadiddiidd <br> </p>
                </div></a>

            <a href="#"><div>
                    <img src="images/delonghidinamica.jpg" alt="">
                    <h2>DeLonghi Dinamica</h2>
                    <h3>100:-</h3>
                    <p>• jadiddiidd <br><br> • jadiddiidd <br><br> • jadiddiidd <br><br> • jadiddiidd <br> </p>
                </div></a>

            <a href="#"><div>
                    <img src="images/delonghiecam250.jpg" alt="">
                    <h2>DeLonghi ECAM250</h2>
                    <h3>100:-</h3>
                    <p>• jadiddiidd <br><br> • jadiddiidd <br><br> • jadiddiidd <br><br> • jadiddiidd <br> </p>
                </div></a>

            <a href="#"><div>
                    <img src="images/delonghiecam610.jpg" alt="">
                    <h2>DeLonghi ECAM610</h2>
                    <h3>100:-</h3>
                    <p>• jadiddiidd <br><br> • jadiddiidd <br><br> • jadiddiidd <br><br> • jadiddiidd <br> </p>
                </div></a>

            <a href="#"><div>
                    <img src="images/delonghiecam650.jpg" alt="">
                    <h2>7000:-</h2>
                    <h3>100:-</h3>
                    <p>• jadiddiidd <br><br> • jadiddiidd <br><br> • jadiddiidd <br><br> • jadiddiidd <br> </p>
                </div></a>

            <a href="#"><div>
                    <img src="images/nivonacaferomatica.jpg" alt="">
                    <h2>Nivona CafeRomatica</h2>
                    <h3>100:-</h3>
                    <p>• jadiddiidd <br><br> • jadiddiidd <br><br> • jadiddiidd <br><br> • jadiddiidd <br> </p>
                </div></a>-->


        </div>



<?php
include_once ('nav.fot/footer.php');
?>