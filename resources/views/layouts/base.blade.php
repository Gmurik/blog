<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <base href="http://myblog.vlane.ru">
    <link rel="shortcut icon" href="assets/images/favicon.png">
    <title>{{$title ?? ''}}</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,400italic|Roboto:400,700,500|Open+Sans:400,600&subset=latin,cyrillic'
          rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="assets/css/default.css?cbcabb7557075c34568079062e82823cf039b5e6"/>
    @section('head_style')
    @show
    <!--[if lt IE 9 ]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    @section('head_script')
        <script>
            window.BlogSettings = {
                "activeMenu": "main"
            };
        </script>
    @show
</head>
<body>

    @section('header')
    @show

    @section('search_panel')
    @show

    @section('content')
    @show

    @section('footer_links')
    @show

    @section('copyrights')
    @show

    @section('bottom_scripts')
        <script src="assets/js/default.js"></script>
        <script src="assets/js/app.js?605940bc60e5bd27cca6ec6315d8b7b384cc389a"></script>
    @show

</body>
</html>