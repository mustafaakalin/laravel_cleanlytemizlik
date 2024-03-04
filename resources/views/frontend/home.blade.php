@extends('frontend.app')
@section('content')

<div class="container mx-auto my-8">
    <!-- It is not the man who has too little, but the man who craves more, that is poor. - Seneca -->

    <!-- job locations -->
    <div class="my-36">
        <div class="relative isolate overflow-hidden bg-gray-900 py-24 sm:py-32">
            <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&crop=focalpoint&fp-y=.8&w=2830&h=1500&q=80&blend=111827&sat=-100&exp=15&blend-mode=multiply"
                alt="" class="absolute inset-0 -z-10 h-full w-full object-cover object-right md:object-center">
            <div class="hidden sm:absolute sm:-top-10 sm:right-1/2 sm:-z-10 sm:mr-10 sm:block sm:transform-gpu sm:blur-3xl"
                aria-hidden="true">
                <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-[#ff4694] to-[#776fff] opacity-20"
                    style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                </div>
            </div>
            <div class="absolute -top-52 left-1/2 -z-10 -translate-x-1/2 transform-gpu blur-3xl sm:top-[-28rem] sm:ml-16 sm:translate-x-0 sm:transform-gpu"
                aria-hidden="true">
                <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-[#ff4694] to-[#776fff] opacity-20"
                    style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                </div>
            </div>
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto max-w-2xl lg:mx-0">
                    <h2 class="text-4xl font-bold tracking-tight text-white sm:text-6xl">Job Locations</h2>
                    <p class="mt-6 text-lg leading-8 text-gray-300">Şimdilik sadece Antalya Merkez</p>
                </div>
                <div class="mx-auto mt-10 max-w-2xl lg:mx-0 lg:max-w-none">
                    <div
                        class="grid grid-cols-1 gap-x-8 gap-y-6 text-base font-semibold leading-7 text-white sm:grid-cols-2 md:flex lg:gap-x-10">
                        <a href="{{ route('reservation') }}"">Rezervasyon <span aria-hidden=" true">&rarr;</span></a>
                        <a href="{{ route('contact') }}">İletişim <span aria-hidden="true">&rarr;</span></a>
                        <a href="#">Hizmetler <span aria-hidden="true">&rarr;</span></a>
                        <a href="{{ route('team') }}">Meet our leadership <span aria-hidden="true">&rarr;</span></a>
                    </div>
                    <dl class="mt-16 grid grid-cols-1 gap-8 sm:mt-20 sm:grid-cols-2 lg:grid-cols-4">
                        <div class="flex flex-col-reverse">
                            <dt class="text-base leading-7 text-gray-300">Offices worldwide</dt>
                            <dd class="text-2xl font-bold leading-9 tracking-tight text-white">1</dd>
                        </div>
                        <div class="flex flex-col-reverse">
                            <dt class="text-base leading-7 text-gray-300">Full-time colleagues</dt>
                            <dd class="text-2xl font-bold leading-9 tracking-tight text-white">{{ count($teams) }}+</dd>
                        </div>
                        <div class="flex flex-col-reverse">
                            <dt class="text-base leading-7 text-gray-300">Hours per Day max</dt>
                            <dd class="text-2xl font-bold leading-9 tracking-tight text-white">8</dd>
                        </div>
                        <div class="flex flex-col-reverse">
                            <dt class="text-base leading-7 text-gray-300">max service</dt>
                            <dd class="text-2xl font-bold leading-9 tracking-tight text-white">Low Price</dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
    </div>

    <!-- Sliders  -->
    <div class="my-36">

        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                @foreach ($sliders as $item)

                <div class="swiper-slide">
                    <img src="{{'storage/' . $item->image }}" alt="" class="">
                </div>

                @endforeach
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

            <!-- If we need scrollbar -->
            <div class="swiper-scrollbar"></div>
        </div>
    </div>

    <!-- team members -->
    <div class="my-36">

        <h1 class="text-4xl flex justify-center my-12">Team MEMBERS</h1>

        <div class="mx-auto grid max-w-7xl gap-x-8 gap-y-20 px-6 lg:px-8 xl:grid-cols-3">
            <ul role="list"
                class="grid gap-x-8 gap-y-12 sm:grid-cols-2 sm:gap-y-16 xl:col-span-4 xl:grid-cols-4 md:col-span-3 md:grid-cols-3">
                @foreach ($teams as $item)

                <li>
                    <div class="flex items-center gap-x-6">
                        <img class="h-16 w-16 rounded-full" src="{{ 'storage/'. $item->avatar }}" alt="">
                        <div>
                            <h3 class="text-base font-semibold leading-7 tracking-tight  light:text-gray-900">{{
                                $item->name }}</h3>
                            </h3>
                            <p class="text-sm font-semibold leading-6 text-indigo-600">{{ $item->position }}</p>
                        </div>
                    </div>
                </li>

                @endforeach
                <!-- More people... -->
            </ul>
        </div>
    </div>

    <!-- dirty image to clean image -->
    <div class="my-36">
        <div class="relative cursor-pointer">
            <img id="dirtyImage" class="w-full h-auto"
                src="https://static.cleanly.com/bynext_resources/images/web/sketch/bynext-not-clean.svg?v=11.72"
                alt="Dirty Image">
            <div id="cleanImageContainer" class="absolute top-0 left-0 w-full h-full overflow-hidden hidden">
                <img id="cleanImage" class="w-full h-auto"
                    src="https://static.cleanly.com/bynext_resources/images/web/sketch/bynext-clean.svg?v=11.72"
                    alt="Clean Image">
            </div>
            <input id="dirtytoclean" type="range" min="0" max="100" value="0"
                class="absolute bottom-0 left-0 w-full opacity-50"
                style="appearance: none; background: #000000; border: 2px solid #FFFFFF;">
        </div>
    </div>
    <script>
        // JavaScript
        document.getElementById('dirtytoclean').addEventListener('input', function(e) {
            var cleanImageContainer = document.getElementById('cleanImageContainer');
            var value = e.target.value;
            cleanImageContainer.style.height = value + '%';
            cleanImageContainer.classList.remove('hidden');
        });
    </script>

    <!-- reservation section -->
    <div
        class="relative isolate overflow-hidden backdrop-blur px-6 pt-16 shadow-2xl sm:rounded-3xl sm:px-16 md:pt-24 lg:flex lg:gap-x-20 lg:px-24 lg:pt-0">
        <svg viewBox="0 0 1024 1024"
            class="absolute left-1/2 top-1/2 -z-10 h-[64rem] w-[64rem] -translate-y-1/2 [mask-image:radial-gradient(closest-side,white,transparent)] sm:left-full sm:-ml-80 lg:left-1/2 lg:ml-0 lg:-translate-x-1/2 lg:translate-y-0"
            aria-hidden="true">
            <circle cx="512" cy="512" r="512" fill="url(#759c1415-0410-454c-8f7c-9a820de03641)" fill-opacity="0.7" />
            <defs>
                <radialGradient id="759c1415-0410-454c-8f7c-9a820de03641">
                    <stop stop-color="#7775D6" />
                    <stop offset="1" stop-color="#E935C1" />
                </radialGradient>
            </defs>
        </svg>
        <div class="mx-auto max-w-md text-center lg:mx-0 lg:flex-auto lg:py-32 lg:text-left">
            <h2 class="text-3xl font-bold tracking-tight sm:text-4xl">Reservation</h2>
            <h3 class="text-xl font-bold ">Temizlik Rezervasyonu Yapmak Hiç Bu Kadar Kolay Olmamıştı!</h3>
            <p class="mt-6 text-lg leading-8">
                Evinizin veya iş yerinizin pırıl pırıl olmasını ister misiniz? Temizlik için saatler harcamak yerine
                profesyonellerin ellerine mi bırakmak istiyorsunuz? O zaman doğru yerdesiniz!</p>
            <div class="mt-10 flex items-center justify-center gap-x-6 lg:justify-start">
                <a href="{{ route('reservation') }}"
                    class="rounded-md bg-white border-2 border-violet-600 px-3.5 py-2.5 text-sm font-semibold text-gray-900 shadow-sm hover:bg-gray-100 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">Get
                    started</a>
                <a href="#" class="text-sm font-semibold leading-6 text-white">Learn more <span
                        aria-hidden="true">→</span></a>
            </div>
        </div>
        <div class="relative mt-16 h-80 lg:mt-8">
            <img class="absolute left-0 top-0 w-[57rem] max-w-none rounded-md bg-white/5 ring-1 ring-white/10"
                src="/images/static/cleanerreservation.jpg" alt="App screenshot" width="1824" height="1080">
        </div>
    </div>

    <!-- testimonials -->
    <div class="my-36">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:mx-0">
                <h2 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Testimonials</h2>
                <p class="mt-6 text-lg leading-8 text-gray-600">Müşteri memnuniyeti bizim için her şeyden önemli.
                    Müşterilerimizin temizlik hizmetlerimizden memnun kaldığını görmek bizim için büyük bir mutluluk
                    kaynağı.</p>
            </div>
            <div class="mt-16 grid grid-cols-1 gap-8 sm:mt-20 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($testimonials as $item)
                    
                <div class="flex flex-col p-8 bg-white rounded-lg shadow-lg">
                    <p class="text-lg font-semibold leading-7 text-gray-900">"{{ $item->comment }}"</p>
                    <div class="mt-6 flex items-center">
                        <img class="h-12 w-12 rounded-full"
                            src="{{ 'storage/'. $item->avatar }}"
                            alt="">
                        <div class="ml-4">
                            <p class="text-base font-semibold leading-6 text-gray-900">{{ $item->name }}</p>
                            <p class="text-sm font-semibold leading-6 text-indigo-600">{{ $item->position }}</p>
                        </div>
                    </div>
                </div>
                
                @endforeach
            </div>
        </div>
    </div>

</div>

@endsection