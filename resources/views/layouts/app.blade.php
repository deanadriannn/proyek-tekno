<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/app.css'])
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;800&display=swap" rel="stylesheet">
  <title>Document</title>
</head>
<body>
  <header class="pt-5">
    @isset($header)
      {{ $header }}
    @endisset
  </header>

  <main class="container mt-5">
    {{ $slot }}
  </main>
</body>
</html>