<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'IBlog' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script>
        (function() {
            const saved = localStorage.getItem('theme');
            if (saved) {
                document.documentElement.setAttribute('data-theme', saved);
            }
        })();
    </script>
    <style>
        :root {
            --splash-bg: #ffffff;
            --text-color: #333333;
        }
        [data-theme="dark"] {
            --splash-bg: #1f2937;
            --text-color: #ffffff;
        }
        #splash {
            position: fixed;
            inset: 0;
            background: var(--splash-bg);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 9999;
            transition: opacity 0.3s ease-out 0.5s;
        }
        #splash.hidden {
            opacity: 0;
            pointer-events: none;
        }
        @keyframes dropIn {
            0% { transform: translateY(-500px); opacity: 0; }
            70% { transform: translateY(25px); opacity: 1; }
            85% { transform: translateY(-8px); }
            100% { transform: translateY(0); opacity: 1; }
        }
        @keyframes dropInDelay {
            0% { transform: translateY(-500px); opacity: 0; }
            20% { transform: translateY(-500px); opacity: 0; }
            70% { transform: translateY(25px); opacity: 1; }
            85% { transform: translateY(-8px); }
            100% { transform: translateY(0); opacity: 1; }
        }
    </style>
</head>
<body class="bg-base-200 min-h-screen">
    <div id="splash" class="text-center py-20">
        <div>
            <span class="text-5xl font-black tracking-widest">
                <span style="display:inline-block; animation: dropIn 1s ease-out forwards; color: var(--text-color);">I</span>
                <span class="text-primary" style="display:inline-block; animation: dropInDelay 1s ease-out forwards;">Blog</span>
            </span>
            <div class="flex gap-2 justify-center mt-6">
                <span class="w-2 h-2 rounded-full bg-neutral/50 animate-[bounce_1s_infinite]"></span>
                <span class="w-2 h-2 rounded-full bg-neutral/50 animate-[bounce_1.2s_infinite]"></span>
                <span class="w-2 h-2 rounded-full bg-neutral/50 animate-[bounce_1.4s_infinite]"></span>
            </div>
        </div>
    </div>

    <x-nav />
    <main class="container mx-auto px-4 py-8 max-w-6xl">
        {{ $slot }}
    </main>
    <footer class="footer footer-center p-6 bg-base-100 text-base-content rounded">
        <aside>
            <p>IBlog &copy; {{ date('Y') }}</p>
        </aside>
    </footer>

    <script>
        window.addEventListener('load', function() {
            setTimeout(function() {
                document.getElementById('splash').classList.add('hidden');
            }, 100);
        });
    </script>
</body>

</html>