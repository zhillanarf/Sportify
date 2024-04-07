<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet" />
  <link rel="stylesheet" href="{{asset('assets/css/styles1.css')}}" />
  <link rel="stylesheet" href="{{asset('assets/css/styleslist.css')}}" />
  <title>Sportify</title>
</head>

<body>
    @include('layouts.header')
    @yield('content')
</body>

</html>