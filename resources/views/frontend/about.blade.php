@extends('frontend.app')

@section('content')

<div class="relative isolate overflow-hidden bg-white  my-12 px-6 py-24 sm:py-32 lg:overflow-visible lg:px-0 backdrop-blur">
    <!-- I have not failed. I've just found 10,000 ways that won't work. - Thomas Edison -->
    <div class="absolute inset-0 -z-10 overflow-hidden">
        <svg class="absolute left-[max(50%,25rem)] top-0 h-[64rem] w-[128rem] -translate-x-1/2 stroke-gray-200 [mask-image:radial-gradient(64rem_64rem_at_top,white,transparent)]"
            aria-hidden="true">
            <defs>
                <pattern id="e813992c-7d03-4cc4-a2bd-151760b470a0" width="200" height="200" x="50%" y="-1"
                    patternUnits="userSpaceOnUse">
                    <path d="M100 200V.5M.5 .5H200" fill="none" />
                </pattern>
            </defs>
            <svg x="50%" y="-1" class="overflow-visible fill-gray-600">
                <path
                    d="M-100.5 0h201v201h-201Z M699.5 0h201v201h-201Z M499.5 400h201v201h-201Z M-300.5 600h201v201h-201Z"
                    stroke-width="0" />
                    
            </svg>
            <rect width="100%" height="100%" stroke-width="0" fill="url(#e813992c-7d03-4cc4-a2bd-151760b470a0)" />
        </svg>
    </div>
    <div
        class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:mx-0 lg:max-w-none lg:grid-cols-2 lg:items-start lg:gap-y-10 ">
        <div
            class="lg:col-span-2 lg:col-start-1 lg:row-start-1 lg:mx-auto lg:grid lg:w-full lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8 ">
            <div class="lg:pr-4 ">
                <div class="lg:max-w-lg ">
                    <p class="text-base  font-semibold leading-7 text-indigo-600">Hakkımızda</p>
                    <h1 class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">{{ $abouts->title }}</h1>
                    <p class="mt-6 text-xl leading-8 text-gray-700">Temizlik, hayatımızın her alanında önemli bir yere sahiptir. Sağlıklı bir yaşam sürmek, huzurlu bir ortamda bulunmak ve verimli olmak için temizlik şarttır.</p>
                </div>
            </div>
        </div>
        <div
            class="-ml-12 -mt-12 p-12 lg:sticky lg:top-4 lg:col-start-2 lg:row-span-2 lg:row-start-1 lg:overflow-hidden">
            <img class="w-[48rem] max-w-none rounded-xl  shadow-xl ring-1 ring-gray-400/10 sm:w-[57rem]"
                src="/images/static/06.png" alt="">
        </div>
        <div
            class="lg:col-span-2 lg:col-start-1 lg:row-start-2 lg:mx-auto lg:grid lg:w-full lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8">
            <div class="lg:pr-4">
                <div class="max-w-xl text-base leading-7 text-gray-700 lg:max-w-lg">
                    <p class="dark:text-gray-600">{{ $abouts->description }}</p>
                    <ul role="list" class="mt-8 space-y-8 text-gray-600 ">
                        <li class="flex gap-x-3">
                            <svg class="mt-1 h-5 w-5 flex-none text-indigo-600" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="#9141ac"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier">  <g> <path class="st0" d="M435.95,287.525c32.51,0,58.87-26.343,58.87-58.853c0-32.51-26.361-58.871-58.87-58.871 c-32.502,0-58.863,26.361-58.863,58.871C377.088,261.182,403.448,287.525,435.95,287.525z"></path> <path class="st0" d="M511.327,344.251c-2.623-15.762-15.652-37.822-25.514-47.677c-1.299-1.306-7.105-1.608-8.673-0.636 c-11.99,7.374-26.074,11.714-41.19,11.714c-15.099,0-29.184-4.34-41.175-11.714c-1.575-0.972-7.373-0.67-8.672,0.636 c-2.757,2.757-5.765,6.427-8.698,10.683c7.935,14.94,14.228,30.81,16.499,44.476c2.27,13.7,1.533,26.67-2.138,38.494 c13.038,4.717,28.673,6.787,44.183,6.787C476.404,397.014,517.804,382.987,511.327,344.251z"></path> <path class="st0" d="M254.487,262.691c52.687,0,95.403-42.716,95.403-95.402c0-52.67-42.716-95.386-95.403-95.386 c-52.678,0-95.378,42.716-95.378,95.386C159.109,219.975,201.808,262.691,254.487,262.691z"></path> <path class="st0" d="M335.269,277.303c-2.07-2.061-11.471-2.588-14.027-1.006c-19.448,11.966-42.271,18.971-66.755,18.971 c-24.466,0-47.3-7.005-66.738-18.971c-2.555-1.583-11.956-1.055-14.026,1.006c-16.021,16.004-37.136,51.782-41.384,77.288 c-10.474,62.826,56.634,85.508,122.148,85.508c65.532,0,132.639-22.682,122.165-85.508 C372.404,329.085,351.289,293.307,335.269,277.303z"></path> <path class="st0" d="M76.049,287.525c32.502,0,58.862-26.343,58.862-58.853c0-32.51-26.36-58.871-58.862-58.871 c-32.511,0-58.871,26.361-58.871,58.871C17.178,261.182,43.538,287.525,76.049,287.525z"></path> <path class="st0" d="M115.094,351.733c2.414-14.353,9.225-31.253,17.764-46.88c-2.38-3.251-4.759-6.083-6.955-8.279 c-1.299-1.306-7.097-1.608-8.672-0.636c-11.991,7.374-26.076,11.714-41.182,11.714c-15.108,0-29.202-4.34-41.183-11.714 c-1.568-0.972-7.382-0.67-8.681,0.636c-9.887,9.854-22.882,31.915-25.514,47.677c-6.468,38.736,34.924,52.762,75.378,52.762 c14.437,0,29.016-1.777,41.459-5.84C113.587,379.108,112.757,365.835,115.094,351.733z"></path> </g> </g></svg>
                            <span><strong class="font-semibold text-gray-900">Ekibimiz.</strong> Deneyimli kadromuz ve kaliteli ürünlerimizle, temizlik alanındaki en yeni teknolojileri kullanıyoruz. Profesyonel yaklaşımımızla, beklentilerinizin ötesinde bir temizlik hizmeti sunuyoruz.</span>
                        </li>
                        <li class="flex gap-x-3">
                            <svg fill="currentColor" class="mt-1 h-10 w-8 flex-none text-green-600"  viewBox="0 0 100 100" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0" aria-hidden="true"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M57.4,38.4A18.1,18.1,0,1,1,39.3,20.2,18.12,18.12,0,0,1,57.4,38.4ZM32.6,30.2c-1.3,0-2.3,1.3-2.3,3.1,0,1.6.9,3.1,2.3,3.1s2.3-1.3,2.3-3.1C34.7,31.6,33.8,30.2,32.6,30.2Zm13.5,0c-1.3,0-2.3,1.3-2.3,3.1,0,1.6.9,3.1,2.3,3.1s2.3-1.3,2.3-3.1S47.5,30.2,46.1,30.2ZM28,40.7c.5,5.7,4.7,10.6,11.2,10.6A11.28,11.28,0,0,0,50.7,40.7Z"></path><path d="M79.6,45.4A1.37,1.37,0,0,0,78.2,44l-14.6-.1a1.29,1.29,0,0,0-1.4,1.3v2.6a1.37,1.37,0,0,0,1.4,1.4l4.5.1a.89.89,0,0,1,.6,1.5l-20,20.1a1,1,0,0,1-.9-.2L37.1,59.8a1.37,1.37,0,0,0-1.8-.1h0l-.1.1h0l-1.9,1.9a.1.1,0,0,1-.1.1L20.6,74.4a1.39,1.39,0,0,0,0,1.9l1.9,1.9a1.39,1.39,0,0,0,1.9,0L34.8,67.9a1.87,1.87,0,0,1,2.6-.1L47.6,78.1a1.17,1.17,0,0,0,1.9,0L72.7,54.7a.88.88,0,0,1,1.5.6l.1,4.5a1.37,1.37,0,0,0,1.4,1.4h2.6a1.29,1.29,0,0,0,1.4-1.3Z"></path></g></svg>
                            <span><strong class="font-semibold text-gray-900">Memnun Müşteriler.</strong> Müşteri memnuniyeti bizim için en önemli önceliktir. Bu nedenle, hizmetlerimizi müşterilerimizin istek ve ihtiyaçları doğrultusunda şekillendiriyoruz.</span>
                        </li>
                    </ul>
                    <p class="mt-8"></p>
                    <h2 class="mt-16 text-2xl font-bold tracking-tight text-gray-900">Neden Bizi Tercih Etmelisiniz?</h2>
                    <ul class="mt-8 space-y-8 text-gray-600  list-disc ">
                        <li>Deneyimli ve profesyonel bir ekibe sahibiz.</li>    
                        <li>Müşterilerimizin memnuniyetini her zaman ön planda tutuyoruz.</li>
                        <li>En yüksek kalitede hizmeti, uygun fiyatlarla sunuyoruz.</li>
                        <li>Güvenilir ve dürüst bir firmayız.</li>
                        <li>7/24 hizmet vermekteyiz.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection