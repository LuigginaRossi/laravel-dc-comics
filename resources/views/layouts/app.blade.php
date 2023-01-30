<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DC Comics</title>

  {{-- Viene caricato il JS ed anche il file app.scss --}}
  @vite('resources/js/app.js')
</head>

<body>
    <div class="container py-5">
      {{-- header --}}
      {{-- @include('partials.header') --}}

      <h1 class="text-center pt-4">DC COMICS</h1>
      <div class="container my-5">

        {{-- segnaposto per il contenuto di ogni pagina.
            Questo dovrà essere sostituito in ogni pagina con un contenuto diverso --}}
        @yield('content')
      </div>

      {{-- @dump($comics) --}}

      {{-- footer --}}
      {{-- @include('partials.footer') --}}
    </div>
      
</body>

</html>