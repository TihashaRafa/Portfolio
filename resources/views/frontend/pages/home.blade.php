

@php
    $homepage = App\Models\home::all();
@endphp

<div class="elisc_tm_section animated" id="home">
    <div class="elisc_tm_home w-full min-h-[100vh] clear-both float-left bg-[#EFFBF8]">
        <div class="tm_content w-full max-w-[1250px] h-auto clear-both my-0 mx-auto py-0 px-[20px]">
            <div class="details w-full min-h-[100vh] flex items-center">
                <div class="left w-1/2">
                    <div class="title w-full float-left mb-[21px]">

                        @foreach($homepage as $items)


                        <h3 class="font-extrabold text-[50px] leading-[60px]">Hi, I'm <span class="text-blue-color">{{ $items->name }}</span></h3>
                        <h3 class="font-extrabold text-[50px] leading-[60px]">
                            <span class="cd-headline clip"> 
                                <span class="blc">Creative</span>
                                <span class="cd-words-wrapper">
                                <b class="is-visible">Developer</b>
                                <b>Coder</b>
                                <b>Programmer</b>
                                </span>
                            </span>
                        </h3>
                        @endforeach
                        {{-- <h3 class="font-extrabold text-[60px] leading-[70px]">Based in Florida</h3> --}}
                    </div>
                    <div class="subtitle wfll max-w-[80%] float-left mb-[40px]">
                        <p>I'm a php/Laravel &amp; developer with <span class="text-blue-color">1+ years</span> of experience</p>
                    </div>
                    <div class="buttons w-full float-left flex items-center mb-[150px]">
                        <div class="elisc_tm_button transition_link">
                            <a href="#portfolio">Got a project?</a>
                        </div>
                        <div class="elisc_tm_button transition_link" data-style="border">
                            <a href="#contact">Let's talk</a>
                        </div>
                    </div>
                    <div class="info w-full float-left">
                        <ul class="relative">
                            <li class="pl-[15px]"><a class="text-[#130F49] font-semibold text-[18px]" href="tel:+8801775956395">+8801775956395</a></li>
                            <li class="pl-[15px]"><a class="text-[#130F49] font-semibold text-[18px]" href="mailto:support@elisc.com">rafatisha.98@gmail.com</a></li>
                            <li class="pl-[15px]"><a class="href_location text-[#130F49] font-semibold text-[18px]" href="#"> 44/5, Lake Circus Kalabagan,Dhanmondi, Dhaka-1205</a></li>
                        </ul>
                    </div>
                </div>
                <div class="right w-1/2 pl-[50px]">
                    <img src="{{ asset('assets/img/about/2.png') }}" alt="" />
                </div>
            </div>
        </div>
    </div>
</div>