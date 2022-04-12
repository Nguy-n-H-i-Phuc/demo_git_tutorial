<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>

<body>
    <div id="warpper">
        <div id="header">
            <h1>Header</h1>
        </div>
        <div id="wp-content">
            <div id="content">
                @yield('content')
            </div>
            <div id="sidebar">
                @yield('sidebar')
            </div>
        </div>
        <div id="footer">
            <h1>Footer</h1>
        </div>
    </div>
</body>

</html>