<!DOCTYPE html>
<html>
<head>
<style>
body {
  background-color: lightpink;
  
}

</style>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
    <body>
       @include('include.navbar')
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>