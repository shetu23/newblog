<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="images/favicon.ico" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <script src="//unpkg.com/alpinejs" defer></script>
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            laravel: "#ef3b2d",
                        },
                    },
                },
            };
        </script>
        <title>pinkhostblog</title>
    </head>
    <body class="mb-48">
        <nav class="flex justify-between items-center mb-4">

            <ul class="flex space-x-6 mr-6 text-lg">

                <span class="font-bold-uppercase">welcome {{auth()->user()->name}}
                </span>

                <li>
                    <a href="#" class="hover:text-laravel"><i class="fa-solid fa-gear"></i> manage posts</a>
                </li>
                <li>
                <form method="POST" action="{{route('logout')}}" >
                    @csrf

                    <button class="text-red-500">logout</button>
                </form>
                </li>
            </ul>
        </nav>
        <main>  <header class="text-center">
                        <h2 class="text-2xl font-bold uppercase mb-1">
                            create a post
                        </h2>
                    </header>

                    <form method="POST" action="{{route('savepost')}}" >
                    @csrf

                    <div class="mb-6">
                            <label
                                for="title"
                                class="inline-block text-lg mb-2">title</label>
                            <input
                                type="text"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="title"/>

                        </div>


                        </div>

                        <div class="mb-6">
                            <label
                                for="name"
                                class="inline-block text-lg mb-2">User's name</label>
                            <input
                                type="text"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="name"/>

                        </div>

                        <div class="mb-6">
                            <label
                                for="description"
                                class="inline-block text-lg mb-2">
                            Description
                            </label>
                            <textarea
                                class="border border-gray-200 rounded p-2 w-full"
                                name="description"
                                rows="10"></textarea>

                        </div>

                        <div class="mb-6">
                            <button class="bg-black text-white rounded py-2 px-4 hover:bg-black">
                                Create post </button>

                        </div>
                    </form>

        </main>
    <footer class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-black text-white h-24 mt-24 opacity-90 md:justify-center">
            <p class="ml-2">Copyright & copy; 2023, All Rights reserved</p>
        </footer>

    </body>
</html>
