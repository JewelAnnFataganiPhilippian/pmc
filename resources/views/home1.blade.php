@extends('layouts/app')
@section('title')
    Philippian Marketing Corporation    
@endsection

@section('content')

    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/font.css">
    <div class="header_top">
        <div class="w-full h-full flex around gap-x-10 opacity-75 pl-40">
            <div class="h-full flex items-center text-xs ">
                <box-icon  name='phone'></box-icon>
                <span>+639234445555</span>
            </div>
            <div class="h-full flex items-center ">
                <box-icon name='envelope' ></box-icon>
                <span>sampleemail23@gmail.com</span>
            </div>
            <div class="h-full flex items-center ">
                <a href="" class="h-full flex items-center "><box-icon name='facebook-circle' type='logo' ></box-icon>
                <span>www.samplefacebook.com</span></a>
            </div>
        </div>
    </div>
    <div class="header_bottom flex justify-around z-50 ">
        <div class="h-full flex items-center ">
            <a href=""> <img src="/img/pmc_logo.png" alt="pmc_logo"> </a>
        </div>
        <div class="text-white flex items-center"> 
            <ul class="h-full flex items-center gap-x-5">
                <li><a href="#">Home</a></li>
                <li><a href="{{ url('/about') }}">About</a></li>
                <li><a href="">Team</a></li>
                <li><a href="">News and Announcements</a></li> 
                <li><a href="">Careers</a></li>
                <li><a href="">Contact Us</a></li>
            </ul>
        </div>
    </div>
    <link rel="stylesheet" href="css/revealup.css">
    
    <div class="bod w-full">
        <div class="cover w-full relative flex justify-center ">
            <div class="absolute w-3/5 grid gap-y-8 sec top-48">
                {{-- <h1 class="w-full flex justify-center poppins text-5xl font-semibold text-white tracking-widest ">Caption Here</h1>
                <p class="poppins text-2xl text-white w-full text-center">It is a long established fact that a reader will be distracted by the readable content of a page when locking at its layout.</p>
                <div class="flex justify-center">
                    <a href="" class="w-1/5 text-center rounded-full outline outline-offset-2 outline-1 outline-white text-white p-1 text-2xl">More Info</a>
                </div> --}}
                <h1 class="w-full flex justify-center poppins text-2xl font-semibold text-white tracking-widest"> <span class="span1">Caption Here</span></h1>
                <div class="flex justify-center ">
                    <h1 class="poppins text-2xl text-white w-full text-center"><span class="span2">It is a long established fact that a reader will be distracted by the readable content of a page when locking at its layout.</span> </h1>
                </div>
                <div class="flex justify-center">
                    <p class="span3 w-1/5 text-center rounded-full outline outline-offset-2 outline-1 outline-white text-white p-1 text-1xl font-semibold">More Info</p>
                </div>
            </div>
            
        </div>
    </div>
    <div class=" w-full bg-white" style="height: 96vh; background-image: url('img/14.png');">
        <div class="h-full w-full flex items-center p-20">
            <div class="h-5/6 flex justify-center space-x-2">
                <div class="h-full">
                    <img class="h-full" src="/img/award.jpg" alt="award">
                </div>
                <div class="h-full pl-14 " style="width: 43%" >
                    <div class="h-1/5 ">
                        
                        <h2 class="bebas text-6xl font-medium text-transparent bg-clip-text bg-gradient-to-b from-black to-red-700 tracking-wide" >SOME TEXT</h2>
                    </div>
                    <div class="h-3/5 text-justify flex items-center">
                        <p class="text-xl indent-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam quis facilisis ligula. Curabitur porttitor tempor augue, quis efficitur eros condimentum vitae. Suspendisse dignissim lacinia lectus ac fermentum. Integer consectetur quis sapien sed tempus. Pellentesque vitae dictum nunc. Nam tincidunt neque ut imperdiet iaculis. Maecenas bibendum lacus eget nunc porttitor bibendum. Aenean at imperdiet nunc. </p>
                    </div>
                    <div class="flex items-end h-1/5">
                    <button class=" p-2 px-9 text-lg rounded bg-red-950 text-white">Read More</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-slate-600" style="height: 35vh">
        <img class="h-full w-full"src="img/about/about.jpg" alt="picture">
    </div>

    <div class="partnership flex justify-center bg-gray-200 shadow-inner shadow-black" style="height: 45vh ">
        <div class="h-full">
            <div class="h-2/5 flex justify-center items-center">
                <h3 class="bebas text-6xl text-center  text-transparent bg-clip-text bg-gradient-to-b from-black to-red-700 tracking-widest font-medium">PARTNERSHIP</h3>
            </div>
            <div class="h-3/5 flex justify-center">
                <div class="h-5/6 w-full flex justify-center">
                    <div class="h-full flex items-center justify-center transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-125 duration-300">
                        <img src="img/partnership/partnership1.png" alt="1" class=" w-2/4">
                    </div>
                    <div class="h-full flex items-center justify-center transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-125 duration-300">
                        <img src="img/partnership/partnership2.png" alt="2" class="w-2/4">
                    </div>
                    <div class="h-full flex items-center justify-center transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-125 duration-300">
                        <img src="img/partnership/partnership3.png" alt="3" class="w-2/4">
                    </div>
                    <div class="h-full flex items-center justify-center transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-125 duration-300">
                        <img src="img/partnership/partnership4.png" alt="4" class="w-2/4">
                    </div>
                    <div class="h-full flex items-center justify-center transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-125 duration-300">
                        <img src="img/partnership/partnership5.png" alt="5" class="w-2/4">
                    </div>
                    <div class="h-full flex items-center justify-center transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-125 duration-300">
                        <img src="img/partnership/partnership6.png" alt="6" class="w-2/4">
                    </div>
                    <div class="h-full flex items-center justify-center transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-125 duration-300">
                        <img src="img/partnership/partnership7.png" alt="7" class=" w-2/4">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="team" class="h-screen w-full ">
        <div class="flex justify-center items-end" style="height: 20%">
            
            <h4 class="bebas text-6xl text-center font-medium text-transparent bg-clip-text bg-gradient-to-b from-black to-red-700 tracking-widest ">Meet the Team</h4>
        </div>
        <div class="" style="height: 10%">
            <h5 class="h-full montserrat flex justify-center items-center text-2xl font-extrabold tracking-wider">The Management</h5>
        </div>
        <div class=" flex justify-center w-full bg-white" style="height: 55%">
            <div class="h-full w-3/4 flex justify-center space-x-10">
                <div class="flex justify-center">
                    <div>
                        <div class="h-3/4 flex items-center" >
                            <img src="img/team/JVS.png" class="h-full  rounded-full object-fill" alt="">
                        </div>
                        <div class="h-1/4 text-center flex justify-center">
                            <div class="h-full ">
                                <div class="h-2/5 w-full flex justify-center items-center">
                                    <div class="bebas text-2xl tracking-wider">Sir JVS</div>
                                </div>
                                <div class="h-3/5 ">
                                    <p>Chief Marketing Officer</p>
                                    <p>Chief Finance Officer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center">
                    <div>
                        <div class="h-3/4 flex items-center" >
                            <img src="img/team/PTS.png" class="h-full  rounded-full object-fill" alt="">
                        </div>
                        <div class="h-1/4 text-center flex justify-center">
                            <div class="h-full ">
                                <div class="h-2/5 w-full flex justify-center items-center">
                                    <div class="bebas text-2xl tracking-wider">Sir PTS</div>
                                </div>
                                <div class="h-3/5 ">
                                    <p>Chief Executive Officer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center">
                    <div>
                        <div class="h-3/4 flex items-center" >
                            <img src="img/team/JSS.png" class="h-full  rounded-full object-fill" alt="">
                        </div>
                        <div class="h-1/4 text-center flex justify-center">
                            <div class="h-full ">
                                <div class="h-2/5 w-full flex justify-center items-center">
                                    <div class="bebas text-2xl tracking-wider">Sir JSS</div>
                                </div>
                                <div class="h-3/5 ">
                                    <p>Chief Marketing Officer</p>
                                    <p>Chief Finance Officer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="" style="height: 15%">
            <div class="flex justify-center">
                <button class="p-3 px-14 text-lg  rounded bg-red-950 text-white">View all</button>
            </div>
        </div>
    </div>
    <div class="flex justify-center" style="height: 30vh; background: rgba(21, 2, 2, 1) ">
        <div class="">
            <div class="h-2/4 w-full flex justify-center items-center">
                <div class="h-5/6 flex items-end" style="width: 60%">
                    <p class="montserrat text-white text-lg text-center">
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. 
                    </p>
                </div>
            </div>
            <div class="h-2/4 w-full flex justify-center items-center">
                <div class="h-2/5 w-3/5 flex " style="width:55%">
                    <input type="email" placeholder="Enter your email" class="h-full w-3/4 bg-gray p-4">
                    <a href="" class="h-full w-1/4 bg-red-950 flex justify-center items-center text-white text-xl">Get Started</a>
                </div>
            </div>
        </div>
    </div>
    <div class="flex justify-center items-center bg-gray-300" style="height: 90vh">
        <div class="relative flex h-4/5 w-4/5">
            <div class="absolute bg-cover bg-no-repeat z-10 flex pl-14 items-center" style="background-image: url(/img/14.png) ;left: 5%; bottom: 2%; width: 58%; height: 90%">
                <div class="applynow h-4/5 w-4/5 flex items-center">
                    <div class="h-full">
                        <div class="h-1/3 flex items-end">
                            <p class="bebas text-6xl text-transparent bg-clip-text bg-gradient-to-b from-black to-red-700 tracking-normal font-medium">BE PART OF US</p>
                        </div>
                        <div class="h-1/3 flex items-center">
                            <p class="montserrat text-1xl text-justify font-bold">Maecenas malesuada neque eget ante mattis vehicula. Curabitur nec lacus velit. Aenean mattis elit eu augue mattis mollis.</p>
                        </div>
                        <div class="h-1/3">
                            <a href="" class="bebas py-1 w-1/3 bg-red-950 flex justify-center items-center text-white text-xl rounded-full ">APPLY NOW</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="absolute bg-cover bg-no-repeat z-0" style="background-image: url('/img/applynow/applynow1.jpg'); right: 5%;top: 2%; width: 35%; height: 90%">
            </div>
        </div>
    </div>
    <div class="flex justify-center bg-gray-300" style="height: 120vh ">
        <div class=" w-4/5">
            <div style="height: 10%">
                <p class="bebas text-6xl text-center font-medium text-transparent bg-clip-text bg-gradient-to-b from-black to-red-700 tracking-widest">ANNOUNCEMENT</p>
            </div>
            <div style="height: 30% ">
                <div class=" bg-slate-500">
                    <img class="h-full" src="img/announcement/announcement1.png" alt="">
                </div>
                <div class="h-1/5 flex items-center ">
                    <h6 class=" bebas text-4xl">latest</h6>
                </div>
            </div>
            <div class="bg-slate-300 flex gap-x-10" style="height: 30%">
                <div class="group h-full w-1/4 bg-gray-100 p-3 hover:bg-gradient-to-b from-black to-red-900 ">
                    <div class="h-3/5 w-full">
                        <img class="h-full w-full rounded-lg"src="img/services2.png" alt="image">
                    </div>
                    <div class="flex items-center" style="height: 10%">
                        <h1 class="poppins font-medium text-2xl group-hover:text-white">Caption Here</h1>
                    </div>
                    <div class=" flex items-center" style="height: 30%">
                        <p class=" indent-10 text-justify group-hover:text-white">The first use of Lorem ipsum is uncertain, though some have suggested the 1500s, when sections of Classical.</p>
                    </div>
                </div>
                <div class="group h-full w-1/4 bg-gray-100 p-3 hover:bg-gradient-to-b from-black to-red-900 ">
                    <div class="h-3/5 w-full">
                        <img class="h-full w-full rounded-lg"src="img/services2.png" alt="image">
                    </div>
                    <div class="flex items-center" style="height: 10%">
                        <h1 class="poppins font-medium text-2xl group-hover:text-white">Caption Here</h1>
                    </div>
                    <div class=" flex items-center" style="height: 30%">
                        <p class=" indent-10 text-justify group-hover:text-white">The first use of Lorem ipsum is uncertain, though some have suggested the 1500s, when sections of Classical.</p>
                    </div>
                </div>
                <div class="group h-full w-1/4 bg-gray-100 p-3 hover:bg-gradient-to-b from-black to-red-900 ">
                    <div class="h-3/5 w-full">
                        <img class="h-full w-full rounded-lg"src="img/services2.png" alt="image">
                    </div>
                    <div class="flex items-center" style="height: 10%">
                        <h1 class="poppins font-medium text-2xl group-hover:text-white">Caption Here</h1>
                    </div>
                    <div class=" flex items-center" style="height: 30%">
                        <p class=" indent-10 text-justify group-hover:text-white">The first use of Lorem ipsum is uncertain, though some have suggested the 1500s, when sections of Classical.</p>
                    </div>
                </div>
                <div class="group h-full w-1/4 bg-gray-100 p-3 hover:bg-gradient-to-b from-black to-red-900 ">
                    <div class="h-3/5 w-full">
                        <img class="h-full w-full rounded-lg"src="img/services2.png" alt="image">
                    </div>
                    <div class="flex items-center" style="height: 10%">
                        <h1 class="poppins font-medium text-2xl group-hover:text-white">Caption Here</h1>
                    </div>
                    <div class=" flex items-center" style="height: 30%">
                        <p class=" indent-10 text-justify group-hover:text-white">The first use of Lorem ipsum is uncertain, though some have suggested the 1500s, when sections of Classical.</p>
                    </div>
                </div>
            </div>
            <div class="" style="height: 30%">
                <div class="h-2/4 flex justify-center items-center" >
                    <button class="flex justify-center p-4 px-16 text-2xl rounded bg-red-950 text-white">View More</button>
                </div>
                <div class="h-2/4 flex justify-center"  >
                    <p class="poppins text-lg text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed varius mauris a lectus laoreet, ac faucibus quam sollicitudin. Praesent auctor euismod interdum. Ut semper egestas enim nec luctus. Nam nec ipsum vel neque convallis ultricies. Duis commodo malesuada metus, ac tempor lectus sagittis ac. Nunc pharetra dui vehicula aliquet pretium. Sed pharetra blandit sem eu consectetur. Aliquam sed ultrices justo. In a ante tincidunt augue mattis commodo at eget ipsum.</p>
                </div>
            </div>
        </div>
    </div>  
@endsection