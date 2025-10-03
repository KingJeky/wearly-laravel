<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Wearly' }}</title>
         <script src="https://cdn.tailwindcss.com"></script>
         <!-- Preline CSS via CDN -->
<link href="https://cdn.jsdelivr.net/npm/preline@3.2.3/dist/preline.min.css" rel="stylesheet">


        @livewireStyles
    </head>
    <body class="bg-slate-200 dark:bg-slate-700">
        @livewire('partials.navbar')
        <main>
            {{ $slot }}
        </main>
        @livewire('partials.footer')



            <!-- Preline JS via CDN -->
<script defer src="https://cdn.jsdelivr.net/npm/preline@3.2.3/dist/preline.min.js"></script>
 @livewireScripts
    </body>
</html>