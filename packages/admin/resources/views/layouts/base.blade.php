<!DOCTYPE html>
<html lang="en"
      class="h-full bg-gray-50">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0" />
    <title>{{ $title ?? 'Hub' }} | {{ config('app.name') }}</title>

    <x-hub::branding.favicon />

    <link href="https://fonts.bunny.net/css2?family=Nunito&display=swap"
          rel="stylesheet">
    <link href="{{ asset('vendor/lunar/admin-hub/app.css') }}"
          rel="stylesheet">

    @livewireStyles
</head>

<body>

    {{ $slot }}

    <script></script>

    @livewireScripts
    {{-- Shim for legacy plugins expecting window.livewire --}}
    <script>window.livewire = window.Livewire;</script>
</body>

</html>
