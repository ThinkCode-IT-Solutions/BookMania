<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premium Laptops - BookMania</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'sepia-50': '#f5f8fb',
                        'sepia-100': '#eaf3fb',
                        'sepia-200': '#d7e7fa',
                        'sepia-300': '#b6d0f4',
                        'sepia-400': '#88aee8',
                        'sepia-500': '#5678d0',
                        'sepia-600': '#3f56a2',
                        'sepia-700': '#2b3b74',
                        'sepia-800': '#18254a',
                        'sepia-900': '#0d1428'
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-sepia-50 text-sepia-900">
    <!-- Header -->
    <x-common.header />

    {{ $slot }}

    <!-- Footer -->
    <x-common.footer />
</body>

</html>
