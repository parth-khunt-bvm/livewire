<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Increment Decrement</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        @livewireStyles

    </head>

    <body>

        @include('navigation')

        <div class="container-fluid p-3 bg-info text-white ">
            <h1>Increment Decrement</h1>
        </div>

        @livewire('increment-decrement')

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        @livewireScripts
    </body>
</html>
