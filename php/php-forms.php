<?php
include "../partials/top_page.php";
include "../partials/header.php";
include "functions/functions-forms.php";
?>
    <hr class="php">
    <nav class="padd2 nav-php">
        <a href="../directory-php.php">Volver al directorio</a>
    </nav>
    <hr class="php">
    <section class="section-php padd5">
        <h4 class="text-center">Formularios</h4>
        <div class="padd2 exam-php">
            <h6>Ejemplo de un formulario</h6>
            <div class="padd2">
                <form id="form-begining" method="post" action="functions/functions-forms.php">
                    <label for="name">Nombre:
                        <input id="name" name="name" type="text" placeholder="Nombre" class="">
                    </label>
                    <label for="age">Edad:
                        <input id="age" name="age" type="text" placeholder="Edad" class="">
                    </label>
                    <input id="send" name="send" type="submit" class="btn" value="Enviar">
                </form>
                <?php

                ?>
            </div>
        </div>
        <div class="padd2 exam-php">
            <h6>Ejemplo de una pequeña calculadora</h6>
            <div class="padd2">
                <form id="calc" method="post" action="functions/functions-forms.php">
                    <label for="ope-one">
                        <input id="ope-one" name="ope-one" type="number" placeholder="Número uno">
                    </label>
                    <label for="ope-two">
                        <input id="ope-two" name="ope-two" type="number" placeholder="Número dos">
                    </label>
                    <label for="operation">
                        <select id="operation" name="operation">
                            <option>Seleccione operación</option>
                            <option>Suma</option>
                            <option>Resta</option>
                            <option>Multiplicación</option>
                            <option>División</option>
                            <option>Módulo</option>
                        </select>
                    </label>
                    <input id="send-calc" name="send-calc" type="submit" value="Calcular">
                </form>
            </div>
        </div>
    </section>
    <hr class="php">
<?php
include "../partials/footer.php";
include "../partials/bottom-page.php";
/**
 * Created by PhpStorm.
 * User: Susana
 * Date: 9/23/2017
 * Time: 12:16 PM
 */?>