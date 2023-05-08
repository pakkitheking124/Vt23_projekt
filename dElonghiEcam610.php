<?php
include_once('heads/head.store.php');
include_once('nav.fot/navbar.php');
include_once('nav.fot/whitebar.php');
?>
    <div class="delonghi610wrapped">
        <div class="specs">


            <img id="main-image" src="images/delonghiecam610.jpg" alt="">



            <?php
            $products_json = json_decode(file_get_contents("http://localhost/products/automatiskkaffe.json"), true);
            $product = $products_json[0];
            echo "<a href='" . $product['link'] . "'><div>";
            // echo "<img src='" . $product['img'] . "'>";
            echo "<h2>" . $product['name'] . "</h2>";
            if (isset($_SESSION['userid'])) {
                $price_reduction = round(0.15 * $product['price']);
                $price_str = ($product['price'] - $price_reduction) . ":- (-15%)";
                echo "<h3>" . $price_str . "</h3>";

            } else {
                echo "<h3>" . $product['price'] . ":-</h3>";
            }

            echo "<p>" . $product['desc'] . "</p>";
            echo "</div></a>";
            ?>

        </div>

        <div class="different-angle">
            <a class="fafa"><img class="carousel-image" src="images/delonghiecam610.jpg" alt=""></a>
            <a class="fafa"><img class="carousel-image" src="https://www.cremashop.eu/media/cache/product_lg/content/galleries/delonghi/primadonna-soul-ecam-610-75-mb/delonghi-primadonna-soul-ecam-610-75-mb-6925.jpeg" alt=""></a>
            <a class="fafa"><img class="carousel-image" src="https://www.cremashop.eu/media/cache/product_lg/content/galleries/delonghi/primadonna-soul-ecam-610-75-mb/delonghi-primadonna-soul-ecam-610-75-mb-6926.jpeg" alt=""></a>
            <a class="fafa"><img class="carousel-image" src="https://www.cremashop.eu/media/cache/product_lg/content/galleries/delonghi/primadonna-soul-ecam-610-75-mb/delonghi-primadonna-soul-ecam-610-75-mb-6927.jpeg" alt=""></a>
            <a class="fafa"><img class="carousel-image" src="https://www.cremashop.eu/media/cache/product_lg/content/galleries/delonghi/primadonna-soul-ecam-610-75-mb/delonghi-primadonna-soul-ecam-610-75-mb-6933.jpeg" alt=""></a>
            <a class="fafa"><img class="carousel-image" src="https://www.cremashop.eu/media/cache/product_lg/content/galleries/delonghi/primadonna-soul-ecam-610-75-mb/delonghi-primadonna-soul-ecam-610-75-mb-6931.jpeg" alt=""></a>
            <a class="fafa"><img class="carousel-image" src="https://www.cremashop.eu/media/cache/product_lg/content/galleries/delonghi/primadonna-soul-ecam-610-75-mb/delonghi-primadonna-soul-ecam-610-75-mb-6928.jpeg" alt=""></a>
        </div>

        <div class="kundvagn-wrapped">
            <a class="kundvagn-button" href="#">🛒Lägg i kundvagnen</a>
        </div>

    </div>

    <script>

        const mainImage = document.getElementById('main-image');
        const carouselImages = document.getElementsByClassName('carousel-image');
        const sakaDaka = document.getElementsByClassName('fafa');


        Array.from(carouselImages).forEach(image => {
            image.addEventListener('click', () => {

                mainImage.src = image.src;


            });
        });

        Array.from(sakaDaka).forEach(amet => {
            amet.addEventListener('click', () => {

                Array.from(sakaDaka).forEach(a => {
                  a.style.border = '1px solid #e3e9ef';
                  });

                amet.style.border = '1px solid #2ca079';

                });
            });
    </script>


<?php
include_once('nav.fot/footer.php');
?>
