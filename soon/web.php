<!doctype html>
  <!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
  <!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
  <!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
  <!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>__________TITULO DEL SITIO</title>
    <link rel="stylesheet" href="">

    <meta name="description" content="__________Bla bla bla...">
    <meta name="author" content="_________TITULO DEL AUTOR">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS -->
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/buttons.css">
    <link rel="stylesheet" href="css/lists.css">

    <!-- Favicons -->
    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- JS -->
    <script src="./external/matchmedia.js"></script>
    <script src="./js/picturefill.js"></script>


    <!-- CONTACT FORM -->
    <link rel="stylesheet" href="./css/form_style.css" type="text/css" />


    <script type="text/javascript" src="./js/form_jquery.min.js"></script>
    <script type="text/javascript" src="./js/form_jquery.validate.min.js"></script>
    <script type="text/javascript" src="./js/form_jquery.form.js"></script>
    <script type="text/javascript" src="./js/form_contact.js"></script>



</head>

<body>


<script>
// Count down milliseconds = server_end - server_now = client_end - client_now
var server_end = <?php echo $exp_date; ?> * 1000;
var server_now = <?php echo time(); ?> * 1000;
var client_now = new Date().getTime();
var end = server_end - server_now + client_now; // this is the real end time

var _second = 1000;
var _minute = _second * 60;
var _hour = _minute * 60;
var _day = _hour *24
var timer;

function showRemaining()
{
    var now = new Date();
    var distance = end - now;
    if (distance < 0 ) {
       clearInterval( timer );
       document.location.reload(true);
       //document.getElementById('countdown').innerHTML = 'EXPIRED!';

       return;
    }
    var days = Math.floor(distance / _day);
    var hours = Math.floor( (distance % _day ) / _hour );
    var minutes = Math.floor( (distance % _hour) / _minute );
    var seconds = Math.floor( (distance % _minute) / _second );

    var countdown = document.getElementById('countdown');
    countdown.innerHTML = '';
    if (days) {
        countdown.innerHTML += days + '<span>Dias</span>';
    }
    countdown.innerHTML += hours + '<span>Horas</span>';
    countdown.innerHTML += minutes + '<span>Minutos</span>';
    countdown.innerHTML += seconds + '<span>Segundos</span>';
}

timer = setInterval(showRemaining, 1000);
</script>






    <header>
      <a class="logo" href="#"><img src="./img/logo.svg" /></a>
      <h1>Mi sitio ok</h1>
      <p>Mi sitio web creado en html5</p>
    </header>

    <section>
        <article>
            <h2>Titulo de contenido<h2>
            <p> Contenido (ademas de imagenes, citas, videos etc.) </p>
        </article>

        <article>
            <div id="countdown"></div>
        </article>

        <article>

          <div id="wrap">

            <form id="contactform" action="soon/processForm.php" method="post">
                <div class="c-line">
                  <label for="name">Nombre:</label>
                  <input type="text" id="name" name="name" />
                </div>

                <div class="c-line">
                  <label for="email">Email:</label>
                  <input type="text" id="email" name="email" />
                </div>

                <div class="c-line">
                  <label for="message">Mensaje:</label>
                  <textarea id="message" name="message"></textarea>
                </div>

                <div class="c-line">
                  <input type="submit" value="Enviar" id="send" />
                </div>
            </form>

            <div id="response"></div>

          </div>

        </article>

    </section>

    <aside>
       <h3>Titulo de contenido</h3>
       <p>Contenido</p>
    </aside>

    <footer>
        Creado por mi el 2014
    </footer>

</body>
</html>