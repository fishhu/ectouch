<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta name=viewport content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0">
        <title>微商城</title>
        <meta name="description" content=""/>
        <meta name="keywords" content=""/>
        <meta name="format-detection" content="telephone=no"/>
        <meta name="apple-mobile-web-app-capable" content="yes"/>
        <meta name="apple-mobile-web-app-status-bar-style" content="black"/>
        <script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
        </script>
    </head>
    <body>
        <div id="app"></div>
        <script src="{{ mix('/js/main.js') }}"></script>
    </body>
</html>
