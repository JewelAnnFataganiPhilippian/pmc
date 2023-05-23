@extends('layouts/app')
@section('title')
    About
@endsection

@section('content')
<link rel="stylesheet" href="css/about.css">
<link rel="stylesheet" href="css/font.css">
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
<div class="bg-cover bg-no-repeat" style="height: 89vh; background-image: url('img/14.png') ">
    <div class=" h-1/4 flex justify-center">
       <div class="h-full w-4/5 ">
            <div class="h-2/4">
                <h1 class="h-full flex justify-center items-end bebas text-6xl text-center font-medium text-transparent bg-clip-text bg-gradient-to-b from-black to-red-700 tracking-widest ">COMPANY INFORMATION</h1>
            </div>
            <div class="h-2/4 ">
                <p class="h-full montserrat font-black text-center text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed varius mauris a lectus laoreet, ac faucibus quam sollicitudin. Praesent auctor euismod interdum. Ut semper egestas enim nec luctus. Nam nec ipsum vel neque convallis ultricies. Duis commodo malesuada metus, ac tempor lectus sagittis ac. Nunc pharetra dui vehicula aliquet pretium.</p>
            </div>
       </div>
    </div>
    <div class="h-3/4  flex justify-center">
        <div class="h-full w-3/5 ">
            <div class="h-2/4 p-2 py-4 ">
                <div class="h-full flex rounded-2xl bg-gray-200 p-3 px-4 gap-x-5 shadow-md shadow-gray-400">
                    <div class="h-full w-2/5">
                        <img class="h-full w-full rounded-lg" src="img/services2.png" alt="image">
                    </div>
                    <div class="w-3/5 h-full px-3">
                        <div class="bebas h-1/3 text-2xl text-red-700 tracking-wider flex items-center">OUR VISION</div>
                        <div class="montserrat h-2/3 font-bold indent-10 text-xs text-justify ">Sed ultricies et urna sit amet lacinia. Nam at augue et urna euismod efficitur. Fusce hendrerit efficitur mauris, sit amet elementum felis rutrum vitae. Proin quis dolor gravida, imperdiet urna vel, sagittis leo. Etiam eget lectus sit amet est tristique luctus. In hac habitasse platea dictumst. Curabitur molestie eros felis, et tempus orci consequat nec. </div>
                    </div>
                </div>
            </div>
            <div class="h-2/4 p-2 py-4 ">
                <div class="h-full flex rounded-2xl bg-gray-200 p-3 px-4 gap-x-5 shadow-md shadow-gray-500">
                    <div class="w-3/5 h-full px-3">
                        <div class="bebas h-1/3 text-2xl text-red-700 tracking-wider flex items-center justify-end">OUR MISSION</div>
                        <div class="montserrat h-2/3 font-bold indent-10 text-xs text-justify ">Sed ultricies et urna sit amet lacinia. Nam at augue et urna euismod efficitur. Fusce hendrerit efficitur mauris, sit amet elementum felis rutrum vitae. Proin quis dolor gravida, imperdiet urna vel, sagittis leo. Etiam eget lectus sit amet est tristique luctus. In hac habitasse platea dictumst. Curabitur molestie eros felis, et tempus orci consequat nec. </div>
                    </div>
                    <div class="h-full w-2/5">
                        <img class="h-full w-full rounded-lg" src="img/services1.png" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bg-cover bg-no-repeat" style="height: 130vh; background-image: url('img/about/milestone.png')">
    <div class=" h-full w-full z-5" style="background-color: rgba(0, 0, 0, 0.6);">
        <div class="  h-1/4 flex flex justify-center">
            <div class="h-full w-2/3">
                <div class="h-2/4 flex justify-center items-end">
                    <h1 class="bebas text-white text-6xl opacity-100 ">OUR COMPANY MILESTONE</h1>
                </div>
                <div class="h-2/4 flex items-center">
                    <p class="montserrat font-bold text-white text-center ">Nullam leo sem, volutpat vel nibh ac, pretium fringilla odio. Etiam rhoncus ligula at quam accumsan aliquam. Nunc posuere ex vitae lectus ornare consequat. </p>
                </div>
            </div>
        </div>
        
        <div class=" h-3/4 w-full bg-slate-600">
            <div class=" h-full timeline ">
                <div class="timeline__component">
                  <div class="timeline__date timeline__date--right">August 30, 2017</div>
                </div>
                <div class="timeline__middle">
                  <div class="timeline__point"></div>
                </div>
                <div class="timeline__component timeline__component--bg">
                  <h2 class="timeline__title">Published First Video</h2>
                  <p class="timeline__paragraph">
                    My first YouTube video was a tutorial on how to build a client-server sockets app in Java.
                  </p>
                </div>
                <div class="timeline__component timeline__component--bg">
                  <h2 class="timeline__title">5,000 Subscribers Q&A</h2>
                  <p class="timeline__paragraph">
                    To celebrate 5,000 subscribers, I published a video answering some of the most popular questions which
                    my viewers had asked me since starting my YouTube channel.
                  </p>
                  <p class="timeline__paragraph">
                    I didn't even remove the jumper in the background before recording that video 🤣
                  </p>
                </div>
                <div class="timeline__middle">
                  <div class="timeline__point"></div>
                </div>
                <div class="timeline__component">
                  <div class="timeline__date">February 25, 2019</div>
                </div>
                <div class="timeline__component">
                  <div class="timeline__date timeline__date--right">June 3, 2020</div>
                </div>
                <div class="timeline__middle">
                  <div class="timeline__point"></div>
                </div>
                <div class="timeline__component timeline__component--bg">
                  <h2 class="timeline__title">First Live Stream</h2>
                  <p class="timeline__paragraph">
                    In my first ever live stream, I couldn't put my cup of coffee down.
                  </p>
                </div>
                <div class="timeline__component timeline__component--bottom timeline__component--bg">
                  <h2 class="timeline__title">Vertical Timeline</h2>
                  <p class="timeline__paragraph">
                    Published this video.
                  </p>
                  <p class="timeline__paragraph">
                    Link to code in description 🔽
                  </p>
                </div>
                <div class="timeline__middle">
                  <div class="timeline__point"></div>
                  <div class="timeline__point timeline__point--bottom"></div>
                </div>
                <div class="timeline__component timeline__component--bottom">
                  <div class="timeline__date">June 28, 2021</div>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection