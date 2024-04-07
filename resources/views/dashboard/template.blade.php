<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Page</title>
  <link rel="stylesheet" href="{{asset('assets/css/stylesadmin.css')}}"> <!-- Menghubungkan ke file CSS eksternal -->
</head>
<body>
  @include('dashboard.header')
  @yield('content')

</body>
</html>
