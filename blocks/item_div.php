<?php
$numrows = mysqli_num_rows($result);

for ($i = 0; $i < $numrows; $i++) {

    $row = mysqli_fetch_array($result, MYSQLI_BOTH);

    echo <<<_END
                                                <div class="element-from-database">
                                                    <img src="Imagenes/1.jpg">  
                                                    <div class="data-showed">
                                                        <div id="product-prize">
                                                            <h3 style="font-size: 20px; font-weight: bolder;">$row[2]</h3>
                                                        </div>
                                                        <div id="product-monthly">
                                                            <h4>12 x $30.00 sin intereses</h4>
                                                        </div>
                                                        <div class="free-shipping">
                                                            <h5>Envío Gratis</h5>
                                                        </div>
                                                    </div>
                                                </div>
            _END;
}

mysqli_close($connection);
