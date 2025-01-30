<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>YourBrand</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    
</head>
<body>
   
    <div class="container-fluid">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
            @component('components.navbar')
            @endcomponent
        </nav>
        <div class="p-4">
            @yield('content')
        </div>
        <div class="p-4">
            @component('components.footer')
            @endcomponent
        </div>
        {{-- <div class="d-flex vh-100">
            <!-- Sidebar -->
            <div class="col-md-2 bg-light p-0 border-end">
                @component('components.sidebar', ['categories' => $categories])
                @endcomponent
            </div>
    
            <!-- Main Content -->
            <div class="col-md-10 p-4">
                @yield('content')
            </div>
        </div> --}}
        
                
        
    </div>
    
   
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

