<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    {{-- <link rel="stylesheet" href="css/font.css"> --}}
    
    <title>@yield('title')</title>
</head>
<body>
    {{--font(bebas) --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

    {{-- font(poppins) --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;800&display=swap" rel="stylesheet">

    {{-- font(abhaya) --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abhaya+Libre:wght@800&display=swap" rel="stylesheet">

    {{-- font(montserrat) --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
    
    @yield('content')
    
    <footer class="bg-black" style="height: 50vh">
        <div class="h-2/3 ">
            <div class="h-1/3 flex items-center pl-40">
                <img src="/img/pmc_logo.png" alt="pmc_logo">
            </div>
            <div class="h-2/3 flex justify-center items-center">
                <div class="h-full w-3/4  text-white flex  justify-between ">
                    <div class="h-full flex items-center ">
                        <div class="gap-y-10" >
                            <div class="flex gap-x-5"><box-icon name='map-alt' color='#ffffff' ></box-icon> Techno Park, APC Bldg, Dasmariñas, 4114 Cavite</div>
                            <div class="flex gap-x-5"><box-icon name='phone-call' color='#ffffff' ></box-icon> +639112223333</div>
                            <div class="flex gap-x-5"><box-icon name='envelope' color='#ffffff' ></box-icon> SampleEmail23@gmail.com</div>
                        </div>
                    </div>
                    <div class="w-1/3">
                        <div class="bebas text-3xl">FOLLOW US</div>
                        <div class="flex gap-x-10">
                            <a href=""><box-icon name='facebook-square' type='logo' color='#ffffff' ></box-icon></a>
                            <a href=""><box-icon name='youtube' type='logo' color='#ffffff' ></box-icon></a>
                        </div>
                        <div class="text-center">Sed ultricies et urna sit amet lacinia. Nam at augue et urna euismod efficitur. </div>
                        <div class="flex h-1/4 w-full">
                            <div class="flex w-full">
                                <input type="email" placeholder="Enter your email" class="h-4/5 w-2/3 bg-gray p-4">
                                <a href="" class="h-4/5 w-1/3 bg-red-950 flex justify-center items-center text-white text-xl">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="h-1/3  flex justify-center text-white">
            <div class="h-full w-3/4 ">
                <div class="h-2/4 w-full border-b border-white flex justify-center items-center">
                    <ul class="flex gap-x-10">
                        <li><a href="">Home</a></li>
                        <li><a href="">Terms and Condition</a></li>
                        <li><a href="">Privacy</a></li>
                    </ul>
                </div>
                <div class="h-2/4 flex justify-center items-center">
                    <div>Copyright @ 2021, Philippian Marketing Corporation. All Rights Reserved.</div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>