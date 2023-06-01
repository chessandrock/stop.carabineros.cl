<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>S.T.O.P. Sistema Táctico de Operación Policial - Carabineros de Chile</title>
    <meta name="theme-color" content="#1d7d4d" />
    <meta name="author" content="Carabineros de Chile - Departamento de Análisis Criminal" />
    <meta name="description" content="S.T.O.P. - Sistema Táctico de Operación Policial - Carabineros de Chile" />
    <meta name="keywords" content="keywords" />
    <link rel="icon" type="image/png" href="/logo.png" />
    <link rel="apple-touch-icon" href="/apple-touch-icon.png" />
    <meta http-equiv="x-ua-compatible" content="IE=edge,chrome=1,requiresActiveX=true" />
    <meta http-equiv="imagetoolbar" content="false" />
    <meta http-equiv="x-dns-prefetch-control" content="off" />
    @viteReactRefresh
    @vite('resources/js/app.js')
</head>

<body class='antialiased'>
    <!--[if lt IE 9]>
        <p class="outdated-browser-warning">
            You are using an <strong>outdated</strong> browser.
            Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
        </p>
    <[endif]-->
    <div id="root"></div>
</body>

</html>
