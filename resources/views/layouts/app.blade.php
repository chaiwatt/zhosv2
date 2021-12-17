
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Starter</title>

  <link rel="stylesheet" href="/css/app.css">

  <livewire:styles />
</head>
  <body class="hold-transition sidebar-mini">
    <div class="wrapper">

      @include('layouts.partials.navbar')

      @include('layouts.partials.left-aside')

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
          {{ $slot }}
      </div>
      <!-- /.content-wrapper -->

      @include('layouts.partials.right-aside')

      @include('layouts.partials.footer')
    </div>
  <!-- ./wrapper -->

  <script src="/js/app.js"></script>
  <livewire:scripts/>
  </body>
</html>
