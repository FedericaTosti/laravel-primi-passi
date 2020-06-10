<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel primi passi</title>

    <script src="js/app.js" charset="utf-8"></script>
    <link rel="stylesheet" href="/css/app.css">
  </head>

  {{-- riproporre un layout comune a 3 pagine comprensivo di header + navbar (sulla sinistra) + footer; complessita' di questi 3 componenti a piacere (va bene dalla scritta del <p> alla navbar di Amazon); le pagine dovranno invece definire un content (attraverso la tecnica yield/section/extends) come Home, About e Contact; anche in questo caso, la complessita' del content e' a piacere --}}

  <body>

    <div class="header">
      @include("header")
    </div>

    <div class="navbar">
      @include("navbar")
    </div>

    <div class="main">
      @yield("main")
    </div>

    <div class="footer">
      @include("footer")
    </div>

  </body>
</html>
