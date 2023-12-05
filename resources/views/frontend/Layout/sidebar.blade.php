
@php
    $sidebar = App\Models\sideBer::all();
    $sidebars = App\Models\sidebarTwo::all();
@endphp
<div class="elisc_tm_sidebar w-[370px] h-[100vh] fixed left-0 top-0 border-solid border-[rgba(85,82,124,.1)] border-r">
    <div class="sidebar_inner w-full float-left h-auto clear-both text-center">
        <div class="author w-full float-left pt-[60px]">
            <div class="image relative w-[118px] inline-block">
                <img class="relative opacity-0 min-w-full" src="{{ asset('assets/img/thumbs/1-1.jpg') }}" alt="" />
                <div class="main absolute inset-0 bg-no-repeat bg-cover bg-center rounded-full" data-img-url="{{ asset('assets/img/about/1.jpg') }}"></div>
            </div>
            <div class="name w-full float-left mt-[-19px]">
                @foreach($sidebars as $items)
                <h4><span>{{ $items->name }}<span class="back">{{ $items->name }}</span></span></h4>
                @endforeach
            </div>
        </div>
        <div class="menu scrollable w-full float-left">
            <ul class="anchor_nav h-full flex items-center justify-center flex-col">
                @foreach($sidebar as $items)
                <li class="current mb-[15px]"><a href="#{{$items->slug}}">{{ $items->title }}</a></li>
                @endforeach

                
            </ul>
        </div>
        <div class="copyright absolute bottom-[50px]">
            <div class="social w-full float-left mb-[7px]">
                <ul>
                    @foreach($sidebars as $items)
                    <li class="mr-[3px] inline-block"><a class="w-[40px] h-[40px] inline-block relative rounded-full text-dark-color" href="{{ $items->fb_link }}"><i class="icon-facebook-1 absolute top-1/2 left-1/2 translate-x-[-50%] translate-y-[-50%] text-[16px]"></i></a></li>
                    <li class="mr-[3px] inline-block"><a class="w-[40px] h-[40px] inline-block relative rounded-full text-dark-color" href="{{ $items->linkedin_link }}"><i class="icon-twitter-1 absolute top-1/2 left-1/2 translate-x-[-50%] translate-y-[-50%] text-[16px]"></i></a></li>
                    <li class="inline-block"><a class="w-[40px] h-[40px] inline-block relative rounded-full text-dark-color" href="{{ $items->git_link }}"><i class="icon-linkedin-1 absolute top-1/2 left-1/2 translate-x-[-50%] translate-y-[-50%] text-[16px]"></i></a></li>
                    @endforeach
                </ul>
            </div>
            <div class="text py-0 px-[50px]">
                @foreach($sidebars as $items)
                <p>Copyright © {{ $items->footer_content }} . All rights reserved.</p>

                @endforeach
            </div>
        </div>
    </div>
</div>

