<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to XPocketMP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.css" rel="stylesheet">
</head>
<body>
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                <h1 class="text-4xl font-bold">Welcome to XPocketMP</h1>
            </div>

            <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                <div class="grid grid-cols-1 md:grid-cols-2">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="ml-4 text-lg leading-7 font-semibold">
                                <a href="{{ url('/about') }}" class="underline text-gray-900 dark:text-white">About Us</a>
                            </div>
                        </div>
                    </div>

                    <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                        <div class="flex items-center">
                            <div class="ml-4 text-lg leading-7 font-semibold">
                                <a href="{{ url('/contact') }}" class="underline text-gray-900 dark:text-white">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                <div class="text-center text-sm text-gray-500 sm:text-left">
                    <div class="flex items-center">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-5 h-5 text-gray-400">
                            <path d="M12 8c.667-1.333 2-2 4-2 2.667 0 4 1.333 4 4s-1.333 4-4 4c-2 0-3.333-.667-4-2M12 12h0c-.667-1.333-2-2-4-2-2.667 0-4 1.333-4 4s1.333 4 4 4c2 0 3.333-.667 4-2m0 0V6M12 12v6"></path>
                        </svg>
                        <a href="https://laravel.com/docs" class="ml-1 underline">
                            Laravel Documentation
                        </a>

                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="ml-4 w-5 h-5 text-gray-400">
                            <path d="M12 8c.667-1.333 2-2 4-2 2.667 0 4 1.333 4 4s-1.333 4-4 4c-2 0-3.333-.667-4-2M12 12h0c-.667-1.333-2-2-4-2-2.667 0-4 1.333-4 4s1.333 4 4 4c2 0 3.333-.667 4-2m0 0V6M12 12v6"></path>
                        </svg>
                        <a href="https://laracasts.com" class="ml-1 underline">
                            Laracasts
                        </a>
                    </div>
                </div>

                <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                    XPocketMP © {{ date('Y') }}
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.js"></script>
</body>
</html>