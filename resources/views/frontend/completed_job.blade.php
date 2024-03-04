@extends('frontend.app')

@section('content')

<div class="my-12 container px-8">
    <h1 class="flex text-4xl justify-center">Completed Job |&nbsp;<div class="text-green-600">{{ $completedjob->jobtype }}</div>
    </h1>

    <!-- Slider main container -->
    <div class="my-36 border-2 border-yellow-500 rounded-lg">

        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                @foreach ($completedjob->image as $item)
                    
                <div class="swiper-slide">
                    <img src="{{ '/storage/' . $item }}" alt="" class="">
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

    <div class="my-36 px-2 border-2 border-black rounded-lg">
        <div class="flex justify-center">
            <p class="text-2xl">{{ $completedjob->namesurname }}</p>
        </div>
        <div class="flex flex-row justify-between my-4">
            <div class="tooltip" data-tip="{{ $completedjob->created_at->format('d/m/Y') }}">
                <p class="text-base badge badge-warning">{{ $completedjob->created_at->diffForHumans()   }}</p>
            </div>
            <div class="">
                <p class="text-base badge badge-warning">Job Total Time:&nbsp;{{ $completedjob->jobtotaltime }}</p>
            </div>
        </div>
        <div class="flex flex-row justify-between my-4">

            <div class="tooltip" data-tip="{{ $completedjob->jobtype }}">
                <p class="text-base badge badge-success truncate ...">Job Type:&nbsp;{{ $completedjob->jobtype }}</p>
            </div>
            <p class="text-base badge badge-info truncate ...">Job Location:&nbsp;{{ $completedjob->joblocation }}</p>
        </div>
        <div>
            <p class="text-base">
                Müşterimiz, evindeki koltuk takımlarının kirlendiğini ve lekelendiğini fark etmiş ve koltuklarını
                temizletmek için firmamıza başvurmuştur. Ekibimiz, müşterimizin evine giderek koltukları detaylı bir
                şekilde incelemiştir. Koltukların kumaş türüne ve kirlilik seviyesine uygun temizlik yöntemi
                belirlenmiştir. Koltuklar, özel koltuk yıkama şampuanları ve leke çıkarıcılar kullanılarak özenle
                yıkanmıştır. Yıkama işleminin ardından koltuklar kurutulmuş ve müşterimize teslim edilmiştir.
                Müşterimiz, koltuklarının ilk günkü gibi temiz ve parlak olduğunu görünce çok mutlu olmuştur.
            </p>
        </div>
    </div>


    <div class="bg-base-100 backdrop-blur border-2 rounded-lg border-lime-500 py-24 sm:py-32 my-36">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <dl class="grid grid-cols-1 gap-x-8 gap-y-16 text-center lg:grid-cols-3">
                <div class="mx-auto flex max-w-xs flex-col gap-y-4">
                    <dt class="text-base leading-7 text-gray-600">Toplam Müşteri Sayısı</dt>
                    <dd class="order-first text-3xl font-semibold tracking-tight light:text-gray-900 sm:text-5xl">
                        <svg fill="currentcolor" class="text-green-600" viewBox="0 0 36 36" version="1.1"
                            preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <title>users-solid</title>
                                <path class="clr-i-solid clr-i-solid-path-1"
                                    d="M12,16.14q-.43,0-.87,0a8.67,8.67,0,0,0-6.43,2.52l-.24.28v8.28H8.54v-4.7l.55-.62.25-.29a11,11,0,0,1,4.71-2.86A6.59,6.59,0,0,1,12,16.14Z">
                                </path>
                                <path class="clr-i-solid clr-i-solid-path-2"
                                    d="M31.34,18.63a8.67,8.67,0,0,0-6.43-2.52,10.47,10.47,0,0,0-1.09.06,6.59,6.59,0,0,1-2,2.45,10.91,10.91,0,0,1,5,3l.25.28.54.62v4.71h3.94V18.91Z">
                                </path>
                                <path class="clr-i-solid clr-i-solid-path-3"
                                    d="M11.1,14.19c.11,0,.2,0,.31,0a6.45,6.45,0,0,1,3.11-6.29,4.09,4.09,0,1,0-3.42,6.33Z">
                                </path>
                                <path class="clr-i-solid clr-i-solid-path-4"
                                    d="M24.43,13.44a6.54,6.54,0,0,1,0,.69,4.09,4.09,0,0,0,.58.05h.19A4.09,4.09,0,1,0,21.47,8,6.53,6.53,0,0,1,24.43,13.44Z">
                                </path>
                                <circle class="clr-i-solid clr-i-solid-path-5" cx="17.87" cy="13.45" r="4.47"></circle>
                                <path class="clr-i-solid clr-i-solid-path-6"
                                    d="M18.11,20.3A9.69,9.69,0,0,0,11,23l-.25.28v6.33a1.57,1.57,0,0,0,1.6,1.54H23.84a1.57,1.57,0,0,0,1.6-1.54V23.3L25.2,23A9.58,9.58,0,0,0,18.11,20.3Z">
                                </path>
                                <rect x="0" y="0" width="36" height="36" fill-opacity="0"></rect>
                            </g>
                        </svg>
                        @php
                            $completedjobcount = DB::table('completedjobs')->count();
                            $completedjobtotaltime = DB::table('completedjobs')->sum('jobtotaltime');
                        @endphp
                        {{ $completedjobcount }}+
                    </dd>
                </div>
                <div class="mx-auto flex max-w-xs flex-col gap-y-4">
                    <dt class="text-base leading-7 text-gray-600">Toplam Çalışma Saati</dt>
                    <dd class="order-first text-3xl font-semibold tracking-tight light:text-gray-900 sm:text-5xl">
                        <svg fill="currentcolor" class="text-red-600" height="200px" width="200px" version="1.1"
                            id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 0 299.123 299.123" xml:space="preserve">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <g id="XMLID_205_">
                                    <g>
                                        <g>
                                            <circle cx="114.685" cy="24.613" r="24.613"></circle>
                                            <path
                                                d="M251.932,283.747c-4.962-5.641-15.326-4.916-22.37-3.589c-1.214,0.229-2.467-0.078-3.437-0.844 c-0.969-0.766-1.262-1.964-1.616-3.148c-1.971-6.611-7.064-9.753-14.863-11.812c-3.568-0.943-7.014-1.531-10.401-1.472V112.795 l7.655-5.758c5.241-3.943,6.295-11.388,2.351-16.63c-2.443-3.248-6.231-4.883-10.007-4.723V36.035c0-3.231-2.619-5.85-5.85-5.85 s-5.85,2.619-5.85,5.85v55.84l-12.896,9.701l-0.083-16.541c-0.078-15.419-12.685-27.963-28.104-27.963 c-6.611,0-57.131,0-63.756,0c-15.419,0-28.026,12.544-28.104,27.963c-0.012,2.522-0.395,78.767-0.415,82.757 c-9.596,4.419-16.329,14.024-16.582,25.206l5.922,55.998c0.235,2.163,2.062,3.802,4.237,3.802h36.541 c2.18,0,4.009-1.645,4.239-3.814l5.932-55.986c-0.252-11.164-6.965-20.757-16.537-25.186c0.032-6.384,0.395-78.707,0.415-82.658 c0.007-1.265,1.035-2.285,2.299-2.281c1.264,0.004,2.287,1.029,2.287,2.293v74.952c15.831,8.013,21.539,24.83,20.585,33.838 l-5.932,55.986c-0.722,6.815-6.435,11.955-13.288,11.955h-1.36v22.894c0,7.871,6.38,14.251,14.251,14.251 s14.251-6.38,14.251-14.251V170.882h6.154v113.911c0,7.871,6.38,14.251,14.251,14.251c7.871,0,14.251-6.38,14.251-14.251 c0-186.144-0.253-83.868-0.259-199.861c0-1.373,1.113-2.487,2.487-2.488c1.373,0,2.488,1.113,2.488,2.486 c0,0.073-0.001,0.148-0.004,0.224l0.202,40.186c0.023,4.491,2.576,8.585,6.599,10.579c4.027,1.997,8.832,1.547,12.416-1.149 l17.514-13.175v143.328c-12.721,4.114-21.929,12.995-21.929,12.995c-34.275,30.775,58.298,17.672,81.737,20.622 C270.794,301.49,259.848,292.747,251.932,283.747z M85.377,192.998H46.706c0.214-6.457,3.607-12.123,8.659-15.48 c1.492,3.073,3.97,6.703,10.678,6.7c6.942-0.003,9.165-3.591,10.675-6.701C81.77,180.875,85.162,186.54,85.377,192.998z">
                                            </path>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                        
                        {{ $completedjobtotaltime }} hours
                    </dd>
                </div>
                <div class="mx-auto flex max-w-xs flex-col gap-y-4">
                    <dt class="text-base leading-7 text-gray-600">En Popüler Hizmet</dt>
                    <dd class="order-first text-3xl font-semibold tracking-tight light:text-gray-900 sm:text-5xl">
                        <svg width="180px" height="180px" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <g id="Interface / Trending_Up">
                                    <path id="Vector"
                                        d="M20.0005 7L14.1543 12.9375C14.0493 13.0441 13.9962 13.0976 13.9492 13.1396C13.1899 13.8193 12.0416 13.8193 11.2822 13.1396C11.2352 13.0976 11.1817 13.0442 11.0767 12.9375C10.9716 12.8308 10.9191 12.7774 10.8721 12.7354C10.1127 12.0557 8.96397 12.0557 8.20461 12.7354C8.15771 12.7773 8.10532 12.8305 8.00078 12.9367L4 17M20.0005 7L20 13M20.0005 7H14"
                                        stroke="#2ec27e" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                </g>
                            </g>
                        </svg>
                        Koltuk Yıkama
                    </dd>
                </div>
            </dl>
        </div>
    </div>

</div>
@endsection