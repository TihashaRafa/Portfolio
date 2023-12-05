@php
    $sidebar = App\Models\sideBer::all();
    $sidebars = App\Models\sidebarTwo::all();
@endphp

<div class="elisc_tm_mobile_menu">
    <div class="inner relative w-full h-full text-right px-[20px] pt-[70px] pb-[20px]">
        <div class="wrapper">
            <div class="avatar w-[70px] h-[70px] relative float-right mb-[50px]">
                <div class="image absolute inset-0 bg-no-repeat bg-cover bg-center" data-img-url="{{ asset('assets/img/about/1.jpg') }}"></div>
            </div>
            <div class="menu_list w-full h-auto clear-both float-left mb-[50px]">
                <ul class="m-0 anchor_nav">
                    @foreach($sidebar as $items)
                    <li class="current mb-[15px]"><a href="#{{$items->slug}}">{{ $items->title }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="social w-full float-left mb-[5px]">
                <ul>
                    @foreach($sidebars as $items)
                    <li class="mr-[3px] inline-block"><a class="w-[40px] h-[40px] inline-block relative rounded-full text-dark-color" href="{{ $items->fb_link }}"><i class="icon-facebook-1 absolute top-1/2 left-1/2 translate-x-[-50%] translate-y-[-50%] text-[16px]"></i></a></li>
                    <li class="mr-[3px] inline-block"><a class="w-[40px] h-[40px] inline-block relative rounded-full text-dark-color" href="{{ $items->linkedin_link }}"><i class="icon-twitter-1 absolute top-1/2 left-1/2 translate-x-[-50%] translate-y-[-50%] text-[16px]"></i></a></li>
                    <li class="inline-block"><a class="w-[40px] h-[40px] inline-block relative rounded-full text-dark-color" href="{{ $items->git_link }}"><i class="icon-linkedin-1 absolute top-1/2 left-1/2 translate-x-[-50%] translate-y-[-50%] text-[16px]"></i></a></li>
                    @endforeach
                </ul>
            </div>
            <div class="copyright w-full float-left">

                @foreach($sidebars as $items)
                <p class="text-dark-color">Copyright &copy; {{ $items->footer_content }}</p>
                @endforeach
            </div>
        </div>
    </div>
</div>