<?php require("dir.php") ?>
<header>
    <div class="logo">
        <a href="/ing-web/" style="display: flex; align-items: center; text-decoration: none;">        
            <img src="<?php echo $STATIC ?>/Logo-Rest.png" alt="Banner del restaurante">
            <h1>BucaZona</h1>
        </a>
        <button id="show-filter" class="filter-button">Herramienta de Filtrado</button>
    </div>
    <div>

        <?php

        if (logged_in()) {
            echo "<div style=\"display: flex; flex-direction: row; align-items: center; justify-content: center;\">
                    <div style=\"display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center; color: white;\">
                        <img src=\"".$STATIC."\Perfil.png\" alt=\"ícono de perfil\" class=\"profile-icon\" style=\"margin: 0;\">
                        <p>" . $_SESSION["username"] . "</p>
                    </div>
                    <form action=\"/ing-web/signout\" method=\"post\"><input name=\"signout\" type=\"submit\" style=\"background-color: black; color: white; border: none; width: fit-content; border-radius: 4px; margin: 0 50px !important; padding: 0.5em 1em !important;\" value=\"Sign out\"></form>
                </div>";
                
        } else {
            echo "<a href=\"/ing-web/login\" style=\"display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center; color: white; text-decoration: none;\">
                    <img src=\"".$STATIC."\Perfil.png\" alt=\"ícono de perfil\" class=\"profile-icon\" style=\"margin: 0;\">
                    <p>Inicia sesión</p>
                </a>";
        }
        ?>

    </div>
</header>
<section class="search-filters" id="search-filters" style="margin-top: 20px; display: none;">
    <h2>Buscar Restaurantes</h2>
    <form method="post" action="/ing-web/filter">
        <label for="cuisine">Tipo de Cocina:</label>
        <select id="cuisine" name="cuisine">
            <option value="" selected></option>
            <option value="italiana">Italiana</option>
            <option value="japonesa">Japonesa</option>
            <option value="mexicana">Mexicana</option>
            <option value="comida_rapida">Comida Rápida</option>
            <option value="mariscos">Mariscos</option>
        </select>

        <label for="price">Precio:</label>
        <select id="price" name="price">
            <option value="" selected></option>
            <option value="1">$</option>
            <option value="2">$$</option>
            <option value="3">$$$</option>
        </select>

        <input class="submit" type="submit" name="filter" value="Filtrar">
    </form>
</section>

<script>
    btn = document.getElementById("show-filter");
    btn.addEventListener("click", function() {
        section = document.getElementById("search-filters");
        display = section.style.display;
        console.log(display);
        if (display == "none") {
            section.style.display = "block";
        } else if (display == "block") {
            section.style.display = "none";
        }
    });
</script>

<?php

function num_to_star(int $number)
{
    $full_star_icon = "<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-star-fill\" viewBox=\"0 0 16 16\">
    <path d=\"M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z\"/>
    </svg>";
    $half_star_icon = "<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-star-half\" viewBox=\"0 0 16 16\">
    <path d=\"M5.354 5.119 7.538.792A.516.516 0 0 1 8 .5c.183 0 .366.097.465.292l2.184 4.327 4.898.696A.537.537 0 0 1 16 6.32a.548.548 0 0 1-.17.445l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256a.52.52 0 0 1-.146.05c-.342.06-.668-.254-.6-.642l.83-4.73L.173 6.765a.55.55 0 0 1-.172-.403.58.58 0 0 1 .085-.302.513.513 0 0 1 .37-.245l4.898-.696zM8 12.027a.5.5 0 0 1 .232.056l3.686 1.894-.694-3.957a.565.565 0 0 1 .162-.505l2.907-2.77-4.052-.576a.525.525 0 0 1-.393-.288L8.001 2.223 8 2.226v9.8z\"/>
    </svg>";
    $empty_star_icon = "<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-star\" viewBox=\"0 0 16 16\">
    <path d=\"M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z\"/>
    </svg>";

    $rating = "";

    for ($i = 0; $i < 5; $i++) {
        if ($number > 1) {
            $rating .= $full_star_icon;
            $number -= 2;
        } elseif ($number == 1) {
            $rating .= $half_star_icon;
            $number -= 1;
        } else {
            $rating .= $empty_star_icon;
        }
    }
    return $rating;
}

function num_to_price(int $number)
{
    $dollar_icon = "<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-currency-dollar\" viewBox=\"0 0 16 16\">
    <path d=\"M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z\"/>
    </svg>";
    $price = "";
    for ($i = 0; $i < $number; $i++) {
        $price .= $dollar_icon;
    }

    return $price;
}

function logged_in()
{
    return (isset($_SESSION["userid"]) && isset($_SESSION["username"]));
}

?>