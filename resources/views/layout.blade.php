<!DOCTYPE html>
<html>
<head>
    <title>Laravel - ItSolutionStuff.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <style type="text/css">
        @import url(https://fonts.googleapis.com/css?family=Raleway:300,400,600);
  
        body{
            margin: 0;
            font-size: .9rem;
            font-weight: 400;
            line-height: 1.6;
            color: #212529;
            text-align: left;
            background-color: #f5f8fa;
        }
        .navbar-laravel
        {
            box-shadow: 0 2px 4px rgba(0,0,0,.04);
        }
        .navbar-brand , .nav-link, .my-form, .login-form
        {
            font-family: Raleway, sans-serif;
        }
        .my-form
        {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
        }
        .my-form .row
        {
            margin-left: 0;
            margin-right: 0;
        }
        .login-form
        {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
        }
        .login-form .row
        {
            margin-left: 0;
            margin-right: 0;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ALIBABA</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <div  class="bg-white">
        <header>
            <div class="container px-6 py-3 mx-auto">
                <div class="flex items-center justify-between">
                    
                    
                    <div class="flex items-center justify-end w-full">
                        <button" class="mx-4 text-gray-600 focus:outline-none sm:mx-0">
                            
                        </button>
                    </div>
                </div>
                <nav  class="p-6 mt-4 text-white bg-black sm:flex sm:justify-center sm:items-center">
                    <div class="flex flex-col sm:flex-row">
                        <a class="mt-3 hover:underline sm:mx-3 sm:mt-0" href="/">Shop</a>
                        <a href="{{ route('cart.list') }}" class="mt-3 hover:underline sm:mx-3 sm:mt-0">
                          Cart  
                          <a class="mt-3 hover:underline sm:mx-3 sm:mt-0" href="{{ route('profile') }}">profile</a> 
                        @guest
                            <a class="mt-3 hover:underline sm:mx-3 sm:mt-0" href="{{ route('login') }}">Login</a>
                            <a class="mt-3 hover:underline sm:mx-3 sm:mt-0" href="{{ route('register') }}">Register</a>
                        @else
                            <a class="mt-3 hover:underline sm:mx-3 sm:mt-0" href="{{ route('logout') }}">Logout</a>
                        @endguest  
                    </div>
                </nav>
                
                            
            </div>
        </header>
        
        <main class="my-8">
            @yield('content')
        </main>
    
    </div>
    @livewireScripts
</body>
  

</html>