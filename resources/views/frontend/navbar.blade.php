<div class="navbar backdrop-blur bg-gray-50 bg-opacity-50 text-black z-10 sticky top-0">
    <!-- Very little is needed to make a happy life. - Marcus Aurelius -->
    <div class="navbar-start">
        <div class="dropdown">
            <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
                </svg>
            </div>
            <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                <li>
                    <a href="{{ route('home') }}">
                        Home
                    </a>
                </li>
                <li>
                    <a href="{{ route('about') }}">
                        About
                    </a>
                </li>
                <li>
                    <a href="{{ route('team') }}">
                        Teams
                    </a>
                </li>
                <li>
                    <a href="{{ route('contact') }}">
                        Contact
                    </a>
                </li>
                <li>
                    <a href="{{ route('completed_jobs') }}">
                        Completed Jobs
                    </a>
                </li>
                <li>
                    <a>Services</a>
                    <ul class="p-2">
                        <li><a>𝐃𝐚𝐢𝐫𝐞 𝐕𝐞 𝐕𝐢𝐥𝐥𝐚 𝐓𝐞𝐦𝐢𝐳𝐥𝐢𝐠̆𝐢</a></li>
                        <li><a>𝐀𝐩𝐚𝐫𝐭𝐦𝐚𝐧 𝐓𝐞𝐦𝐢𝐳𝐥𝐢𝐠̆𝐢</a></li>
                        <li><a>𝐈̇𝐧𝐬̧𝐚𝐚𝐭 𝐒𝐨𝐧𝐫𝐚𝐬ı 𝐓𝐞𝐦𝐢𝐳𝐥𝐢𝐠̆𝐢</a></li>
                        <li><a>𝐊𝐨𝐥𝐭𝐮𝐤 𝐘ı𝐤𝐚𝐦𝐚</a></li>
                        <li><a>𝐇𝐚𝐥ı 𝐘ı𝐤𝐚𝐦𝐚</a></li>
                        <li><a>𝐎𝐭𝐨 𝐊𝐨𝐥𝐭𝐮𝐤 𝐘ı𝐤𝐚𝐦𝐚</a></li>
                        <li><a>𝐘𝐚𝐭𝐚𝐤 𝐘ı𝐤𝐚𝐦𝐚</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('reservation') }}">Reservation</a></li>
            </ul>
        </div>
        <a class="btn btn-ghost text-xl" href="{{ route('home') }}">
            <img src="/images/static/cleanlytemizliklogo-removebg-preview.png" alt="" class="w-12">
            Cleanly Temizlik
        </a>
    </div>
    <div class="navbar-center hidden lg:flex">
        <ul class="menu menu-horizontal px-1">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('about') }}">About</a></li>
            <li><a href="{{ route('team') }}">Teams</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
            <li><a href="{{ route('completed_jobs') }}">Completed Jobs</a></li>
            <li>
                <details>
                    <summary>Services</summary>
                    <ul class="p-2">
                        <li><a>𝐃𝐚𝐢𝐫𝐞 𝐕𝐞 𝐕𝐢𝐥𝐥𝐚 𝐓𝐞𝐦𝐢𝐳𝐥𝐢𝐠̆𝐢</a></li>
                        <li><a>𝐀𝐩𝐚𝐫𝐭𝐦𝐚𝐧 𝐓𝐞𝐦𝐢𝐳𝐥𝐢𝐠̆𝐢</a></li>
                        <li><a>𝐈̇𝐧𝐬̧𝐚𝐚𝐭 𝐒𝐨𝐧𝐫𝐚𝐬ı 𝐓𝐞𝐦𝐢𝐳𝐥𝐢𝐠̆𝐢</a></li>
                        <li><a>𝐊𝐨𝐥𝐭𝐮𝐤 𝐘ı𝐤𝐚𝐦𝐚</a></li>
                        <li><a>𝐇𝐚𝐥ı 𝐘ı𝐤𝐚𝐦𝐚</a></li>
                        <li><a>𝐎𝐭𝐨 𝐊𝐨𝐥𝐭𝐮𝐤 𝐘ı𝐤𝐚𝐦𝐚</a></li>
                        <li><a>𝐘𝐚𝐭𝐚𝐤 𝐘ı𝐤𝐚𝐦𝐚</a></li>
                    </ul>
                </details>
            </li>
            <li><a href="{{ route('reservation') }}">Reservation</a></li>
        </ul>
    </div>
    <div class="navbar-end">
{{--        <input type="checkbox" value="dark" class="toggle theme-controller"/>--}}
        <div class="dropdown dropdown-end">
            <div tabindex="0" role="button" class="btn btn-ghost">
                <img src="/images/static/flags/tr.png" alt="" class="w-6">
            </div>
            <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-32">
                <li>
                    <a href="#">
                        <img src="/images/static/flags/tr.png" alt="" class="w-6">
                        Türkçe
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="/images/static/flags/us.png" alt="" class="w-6">
                        English
                    </a>
                </li>
            </ul>
        </div>
{{--        login register button dropdown tailwindcss , daisyui--}}
        <div class="dropdown dropdown-end">
            <div tabindex="0" role="button" class="btn btn-ghost">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M5 15l7-7 7 7"/>
                </svg>
            </div>
            <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow rounded-box w-32 bg-slate-50 bg-opacity-50  backdrop-blur">
                <li>
                    <a href="{{ url('login') }}">
                        Login
                    </a>
                </li>
                <li>
                    <a href="{{ url('register') }}">
                        Register
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>


<div class="fixed bottom-0 right-0 z-10 p-8">
    <a href="https://api.whatsapp.com/message/XPOHSSNP4IR7E1?autoload=1&app_absent=0&text=Hello%20from%20Cleanly%20Temizlik%20website!" target="_blank" rel="noopener noreferrer">
      <img src="/images/static/whatsapp-icon.png" alt="WhatsApp Button" class="h-20 w-20  transition ease-in-out duration-200 transform hover:-translate-y-1 hover:scale-110">
    </a>
    <a href="https://www.instagram.com/cleanlytemizlik/" target="_blank" rel="noopener noreferrer">
      <img src="/images/static/instagram-icon.png" alt="Instagram Button" class="h-20 w-20 p-2  transition ease-in-out duration-200 transform hover:-translate-y-1 hover:scale-110">
    </a>
  </div>