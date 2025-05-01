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

    {{-- <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script> --}}
    {{-- Alpine 3 core --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    @livewireStyles
</head>

<body>

    {{ $slot }}

    <script></script>

    {{-- Load Livewire v3 deferred (after Alpine) --}}
    <script
            defer
            src="{{ asset('vendor/livewire/livewire.js') }}"
            data-csrf="{{ csrf_token() }}"
            data-update-uri="/livewire/update"
            data-navigate-once="true"
    ></script>
    {{-- Shim old Livewire-2 global so window.livewire plugins still work --}}
    <script>
        window.livewire = window.Livewire;
    </script>
</body>

</html>
