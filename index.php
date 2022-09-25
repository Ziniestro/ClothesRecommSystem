<?php
require_once("connection/connection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ClothesCamp</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <nav>
            <div class="section-up">
                <div class="logo">
                    <h1>Clothes Camp</h1>
                </div>
                <div class="searching">
                    <input id="inputSearching" type="text" placeholder="Buscar...">
                </div>
            </div>

            <div class="section-down">

                <div id="section-down-hidden">

                </div>

                <ul class="navigation-list">
                    <li><a href="#">Nuevos Modelos</a></li>
                    <li><a href="#">Más Comprados</a></li>
                    <li><a href="#">Ofertas</a></li>
                    <li><a href="#">Recomendado Para Ti</a></li>
                </ul>


                <ul class="account-list">
                    <li><a href="#">Cuenta</a></li>
                    <li><a href="#">Ordenes</a></li>
                    <li><a href="#">Añadidos</a></li>
                </ul>

            </div>
        </nav>

        <div class="main">

            <section class="aside">
                <div class="ad">
                    <div class="image">
                    </div>
                </div>

                <div class="categories">
                    <h2>Categorías</h2>

                    <ul>
                        <li><a href="#">Camisas</a></li>
                        <li><a href="#">Playeras</a></li>
                        <li><a href="#">Pantalones</a></li>
                        <li><a href="#">Gorras</a></li>
                        <li><a href="#">Zapatos</a></li>
                        <li><a href="#">Tenis</a></li>
                        <li><a href="#">Suéteres</a></li>
                        <li><a href="#">Chamarras</a></li>
                        <li><a href="#">Trajes</a></li>
                        <li><a href="#">Accesorios</a></li>
                    </ul>
                </div>
            </section>

            <section class="show-elements">
                <?php
                //include_once("blocks/item_div.php");
                ?>

                <div class="element-from-database">
                    <img src="images/1.jpg">
                    <div class="data-showed">
                        <div id="product-prize">
                            <h3 style="font-size: 20px; font-weight: bolder;">$ 300.00</h3>
                        </div>
                        <div id="product-monthly">
                            <h4>12 x $30.00 sin intereses</h4>
                        </div>
                        <div class="free-shipping">
                            <h5>Envío Gratis</h5>
                        </div>
                    </div>
                </div>

                <div class="element-from-database">
                    <img src="images/2.jpg">
                    <div class="data-showed">
                        <div id="product-prize">
                            <h3 style="font-size: 20px; font-weight: bolder;">$ 600.00</h3>
                        </div>
                        <div id="product-monthly">
                            <h4>12 x $60.00 sin intereses</h4>
                        </div>
                        <div class="free-shipping">
                            <h5>Envío Gratis</h5>
                        </div>
                    </div>
                </div>

                <div class="element-from-database">
                    <img src="images/3.jpg">
                    <div class="data-showed">
                        <div id="product-prize">
                            <h3 style="font-size: 20px; font-weight: bolder;">$ 1200.00</h3>
                        </div>
                        <div id="product-monthly">
                            <h4>12 x $120.00 sin intereses</h4>
                        </div>
                        <div class="free-shipping">
                            <h5>Envío Gratis</h5>
                        </div>
                    </div>
                </div>


                <div class="element-from-database">
                    <img src="images/4.jpg">
                    <div class="data-showed">
                        <div id="product-prize">
                            <h3 style="font-size: 20px; font-weight: bolder;">$ 690.00</h3>
                        </div>
                        <div id="product-monthly">
                            <h4>12 x $69.00 sin intereses</h4>
                        </div>
                        <div class="free-shipping">
                            <h5>Envío Gratis</h5>
                        </div>
                    </div>
                </div>


            </section>

            <div class="footer">
                <p>Derechos Reservados Código Izquierda S.A. de C.V</p>
            </div>

        </div>


    </div>


</body>

</html>