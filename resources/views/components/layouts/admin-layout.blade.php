<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - BookMania</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Custom Theme Configuration -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            50: '#f0f9ff',
                            100: '#e0f2fe',
                            200: '#bae6fd',
                            300: '#7dd3fc',
                            400: '#38bdf8',
                            500: '#0ea5e9', // Primary Brand Color
                            600: '#0284c7',
                            700: '#0369a1',
                            800: '#075985',
                            900: '#0c4a6e',
                        }
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <style>
        /* Minimalist scrollbar for webkit browsers */
        ::-webkit-scrollbar {
            width: 6px;
            height: 6px;
        }
        ::-webkit-scrollbar-thumb {
            background-color: #cbd5e1;
            border-radius: 3px;
        }
        ::-webkit-scrollbar-track {
            background: transparent;
        }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 font-sans antialiased">

    <!-- Layout Container -->
    <div class="flex h-screen overflow-hidden">

        <!--
            =========================================
            SIDEBAR NAVIGATION
            =========================================
        -->
        <x-common.admin-sidebar />

        <!--
            =========================================
            MAIN CONTENT AREA
            =========================================
        -->
        <div class="flex-1 flex flex-col h-screen overflow-hidden">

            <!--
                HEADER / TOPBAR
            -->
           <x-common.admin-header />

            <!--
                SCROLLABLE CONTENT AREA
            -->
            {{ $slot }}
        </div>
    </div>
</body>
</html>
