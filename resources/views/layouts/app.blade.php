<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

  <!-- Essetial Meta Tags -->
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Primary Meta Tags -->
  <title>@yield('title')</title>
  <meta name="description" content="É possivel Capturar Leads e Enviar Mensagens via whatsapp? Sim, O LeadsZapp HUB, permite que você conecte o seu whatsapp ou whatsapp da sua empresa para...">
  <meta name="keywords" content="group, whatsapp, automação, negócios, marketing">

  <!-- Secodary Meta Tags -->
  <meta name="application-name" content="Leadszapp">
  <meta name="apple-mobile-web-app-title" content="Leadszapp">
  <meta http-equiv="content-language" content="pt-br">
  <meta name="author" content="Leadszapp">
  <meta name="copyright" content="Leadszapp">
  <meta name="creator" content="Darlley Brito">

  <!-- Open Graph Facebook and WhatsApp -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://lzphub.com/">
  <meta property="og:title" content="Leadszapp">
  <meta property="og:description" content="O mais completo sistema em automação de Marketing!">
  <meta property="og:site_name" content="Leadszapp">
  <meta property="og:image" itemprop="image" content="/assets/img/leadszapp.jpg">
  <meta property="og:image:width" content="512">
  <meta property="og:image:height" content="512">
  <meta property="og:image:alt" content="Leadszapp">
  <meta property="og:image:type" content="image/jpeg">
  <meta property="og:image:type" content="image/jpeg">
  <meta property=”og:secure_url” content=”https://exemple/example.jpg”>

  <!-- Twitter
  <meta name="twitter:creator" content="@cloudfaster">
  <meta name="twitter:card" content="summary">
  <meta name="twitter:title" content="Leadszapp">
  <meta name="twitter:description" content="O mais completo sistema em automação de Marketing!@">
  <meta name="twitter:site" content="https://lzphub.com/">
  <meta name="twitter:image" content="/assets/img/leadszapp.jpg">

  icons
  <link rel="icon" type="image/x-icon" href="/assets/favicons/favicon-16x16.png">
  <link rel="apple-touch-icon" sizes="57x57" href="/assets/favicons/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="/assets/favicons/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="/assets/favicons/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="/assets/favicons/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="/assets/favicons/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="/assets/favicons/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="/assets/favicons/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="/assets/favicons/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="/assets/favicons/apple-icon-180x180.png">
  <link rel="apple-touch-icon" href="assets/favicons/apple-icon.png">
  <link rel="icon" type="image/png" sizes="192x192" href="/assets/favicons/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="128x128" href="assets/favicons/android-icon-144x144.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/assets/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="/assets/favicons/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/assets/favicons/favicon-16x16.png">
  <link rel="manifest" href="assets/favicons/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="/assets/favicon/ms-icon-144x144.png">
  -->

  <!-- Theme -->
  <meta name="theme-color" content="#0093dd">
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  @livewireStyles
</head>
<body class="app">
    <div class="container-xxl app-container">
        {{$slot}}
    </div>

    @livewireScripts

    <!-- Scripts Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>