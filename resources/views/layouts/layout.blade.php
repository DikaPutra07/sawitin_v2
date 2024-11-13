<!DOCTYPE html>
<html lang="en">

@include('layouts.head')

<body>
    
    <div class="flex h-screen">

        @include('layouts.sidebar')

        <div class="flex-1 flex flex-col bg-gray-50 ml-64 min-h-screen overflow-auto">

            @include('layouts.navbar')

            @yield('content')

        </div>
        
    </div>

</body>

</html>