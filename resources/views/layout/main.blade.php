<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ChatIdea</title>
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script></head>
<body>
  <div class="front-container">
    @include('partials.navbar')
    <div class="content-body">
      {{-- content front disini --}}
    </div>
    <footer>Copyright© - All rights reserved 2024.</footer>
  </div>
  <script src="{{ asset('assets/js/script.js') }}"></script>
  <script src="{{ asset('assets/js/component.js') }}"></script>
</body>
</html>