<!DOCTYPE html>
<html lang="ru">
<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Полотно')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="styles/app.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500&family=PT+Serif&display=swap" rel="stylesheet">
    <style>

        header {
            overflow: hidden;
        }
        @media screen and (max-width: 1023px) {
            header
            {
                gap: 25px;
            }

            header nav {
                gap: 16px;
            }    
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: #111211;
            color: #f2f0ea;
        }
        .serif {
            font-family: 'PT Serif', serif;
        }
        .painting-card:hover .painting-overlay {
            opacity: 1;
        }
    </style>
</head>
<body class="page min-h-screen flex flex-col">
    <!-- Navigation -->
    <header class="header border-b border-[#353731] h-[96px] flex items-center justify-between px-6 lg:px-[64px] w-full shrink-0">
        <div class="logo__wrap serif text-[28px] leading-none">
            <a href="/" class="logo__link hover:opacity-80 transition-opacity">полотно.</a>
        </div>
        <nav class="flex gap-[36px] items-center">
            <a href="/gallery" class="{{ Request::is('gallery*') ? 'text-[#f2f0ea]' : 'text-[#adada5]' }} text-[13px] hover:text-[#f2f0ea] transition-colors">Галерея</a>
            <a href="/authors" class="{{ Request::is('authors*') ? 'text-[#f2f0ea]' : 'text-[#adada5]' }} text-[13px] hover:text-[#f2f0ea] transition-colors">Авторы</a>
            <form class="text-[#f2f0ea] text-[13px] hover:color-[#f2f0ea] transition-colors" style="width: 24px; height:24px">
                <input type="submit" style="display: none"/>
                <button class="text-[#f2f0ea] text-[13px] hover:color-[#f2f0ea] transition-colors" style="width: 24px; height:24px" disabled>
                    <svg id="_Слой_1" data-name="Слой_1" version="1.1" viewBox="0 0 24 24" style="width: 20px; height:20px">
                        <!-- Generator: Adobe Illustrator 30.0.0, SVG Export Plug-In . SVG Version: 2.1.1 Build 123)  -->
                        <defs>
                            <style>
                            .st0 {
                                fill: currentColor;
                            }
                            </style>
                        </defs>
                        <path class="st0" d="M11.08,3c1.06,0,2.11.21,3.09.62.98.41,1.87,1,2.62,1.75.75.75,1.35,1.64,1.75,2.62.41.98.62,2.03.62,3.09s-.21,2.11-.62,3.09c-.32.77-.75,1.48-1.28,2.11l3.54,3.54c.27.27.27.71,0,.98-.27.27-.71.27-.98,0l-3.54-3.54c-1.45,1.22-3.29,1.9-5.2,1.9-2.14,0-4.2-.85-5.71-2.37-1.51-1.51-2.37-3.57-2.37-5.71,0-2.14.85-4.2,2.37-5.71.75-.75,1.64-1.34,2.62-1.75.98-.41,2.03-.62,3.09-.62ZM11.08,4.38c-.88,0-1.75.17-2.56.51-.81.34-1.55.83-2.17,1.45-1.26,1.26-1.96,2.96-1.96,4.73,0,1.77.7,3.48,1.96,4.73,1.26,1.26,2.96,1.96,4.73,1.96s3.48-.7,4.73-1.96c.62-.62,1.11-1.36,1.45-2.17.34-.81.51-1.68.51-2.56s-.17-1.75-.51-2.56c-.34-.81-.83-1.55-1.45-2.17-.62-.62-1.36-1.11-2.17-1.45-.81-.34-1.68-.51-2.56-.51Z"/>
                    </svg>
                </button>
            </form>
            <div class="w-px h-[16px] bg-[#353731]"></div>
            <span class="text-[12px] text-[#75786f]">Независимая онлайн-галерея</span>
        </nav>
    </header>

    <!-- Content -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- Global Footer -->
    <footer class="border-t border-[#353731] py-6 px-6 lg:px-[64px] flex flex-col sm:flex-row justify-between items-start gap-4 text-[11px] text-[#75786f]">
        <p>© Полотно, 2026</p>
        <p>Место для внимательного взгляда</p>
    </footer>
</body>
</html>
