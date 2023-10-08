    <?php
    require_once('../source/data.php');
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <header>
            <a class="header_buttons">Mijn Lijst</a>
            <a class="header_buttons">Account</a>
        </header>
        <main>
            <section class="nummers">


                <?php
                foreach ($library as $single) {
                    include('../source/card.php');
                }
                ?>
            </section>
            <section class="zoekbalk">
                <li class="zoekbalk_button">ABC</a>
                <li class="zoekbalk_button_2">Zoek</a>
            </section>
        </main>
    </body>

    </html>