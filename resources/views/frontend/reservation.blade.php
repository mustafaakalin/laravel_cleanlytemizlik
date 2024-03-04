@extends('frontend.app')

@section('content')
<div class="isolate backdrop-blur px-6 py-24 sm:py-32 lg:px-8">
    <!-- Life is available only in the present moment. - Thich Nhat Hanh -->
    <div class="mx-auto max-w-2xl text-center">
        <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Reservation for Clean
        </h2>

        @if (session('modal'))
        <div role="alert" class="alert alert-success mt-5">
            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span>
                {{ session('modal') }}
            </span>
        </div>
        @endif

        <p class="mt-2 text-lg leading-8 text-gray-600">Temizlik Rezervasyonunuzu hemen oluşturun.
        </p>
    </div>
    <form action="#" method="POST" class="mx-auto mt-16 max-w-xl sm:mt-20">
        @csrf
        @method('POST')
        <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
            <div>
                <label for="first-name" class="block text-sm font-semibold leading-6 light:text-gray-900">First
                    name (zorunlu)</label>
                <div class="mt-2.5">
                    <input type="text" name="name" id="first-name" autocomplete="given-name"
                        class="block bg-transparent w-full rounded-md border-0 px-3.5 py-2 light:text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required>
                        @error('name')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                </div>
            </div>
            <div>
                <label for="last-name" class="block text-sm font-semibold leading-6 light:text-gray-900">Last
                    name (zorunlu)</label>
                <div class="mt-2.5">
                    <input type="text" name="lastname" id="lastname" autocomplete="family-name"
                        class="block bg-transparent w-full rounded-md border-0 px-3.5 py-2 light:text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required>
                        @error('lastname')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                </div>
            </div>

            <div class="sm:col-span-2">
                <label for="clean_type" class="block text-sm font-semibold leading-6 light:text-gray-900">Clean Type (zorunlu)</label>
                <select id="clean_type" name="cleantype"
                    class="block bg-transparent w-full rounded-md border-0 px-3.5 py-2 light:text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required>
                    <option value="Daire ve Villa Temizliği" >Daire veya Villa Temizliği</option>
                    <option value="Apartman Temizliği">Apartman Temizliği</option>
                    <option value="İnşaat Sonrası Temizlik">İnşaat Sonrası Temizlik</option>
                    <option value="Koltuk Yıkama">Koltuk Yıkama</option>
                    <option value="Halı Yıkama">Halı Yıkama</option>
                    <option value="Oto Koltuk Yıkama">Oto Koltuk Yıkama</option>
                    <option value="Yatak Yıkama">Yatak Yıkama</option>
                </select>
                @error('cleantype')
                <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>


            <div class="sm:col-span-2">
                <label for="company" class="block text-sm font-semibold leading-6 light:text-gray-900">Company</label>
                <div class="mt-2.5">
                    <input type="text" name="company" id="company" autocomplete="organization"
                        class="block bg-transparent w-full rounded-md border-0 px-3.5 py-2 light:text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        @error('company')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                </div>
            </div>
            <div class="sm:col-span-2">
                <label for="email" class="block text-sm font-semibold leading-6 light:text-gray-900">Email</label>
                <div class="mt-2.5">
                    <input type="email" name="email" id="email" autocomplete="email"
                        class="block bg-transparent w-full rounded-md border-0 px-3.5 py-2 light:text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        @error('email')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                </div>
            </div>
            <div class="sm:col-span-2">
                <label for="phone" class="block text-sm font-semibold leading-6 light:text-gray-900">Phone
                    number (zorunlu)</label>
                <div class="relative mt-2.5">
                    <div class="absolute inset-y-0 left-0 flex items-center">
                        <label for="country" class="sr-only">Country</label>
                        <select id="country" name="country"
                            class="h-full rounded-md border-0 bg-transparent bg-none py-0 pl-4 pr-9 text-gray-400 focus:ring-2 focus:ring-inset ring-1 ring-inset ring-gray-300 focus:ring-indigo-600 sm:text-sm">
                            <option value="90">TR</option>
                            <option disabled>CA</option>
                            <option disabled>EU</option>
                        </select>
                        <svg class="pointer-events-none absolute right-3 top-0 h-full w-5 text-gray-400"
                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <input type="tel" name="phone" id="phone-number" autocomplete="tel"
                         placeholder="5555555555"
                        class="block bg-transparent w-full rounded-md border-0 px-3.5 py-2 pl-20 light:text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        @error('phone')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                </div>
            </div>
            <div class="sm:col-span-2">
                <label for="address" class="block text-sm font-semibold leading-6 light:text-gray-900">Address (zorunlu)</label>
                <div class="mt-2.5">
                    <textarea name="address" id="address" rows="4"
                        class="block bg-transparent w-full rounded-md border-0 px-3.5 py-2 light:text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required></textarea>
                        @error('address')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                </div>
            </div>
        </div>
        <div class="mt-10">
            <button type="submit"
                class="block w-full rounded-md bg-indigo-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Create Reservation</button>
        </div>
    </form>
</div>
@endsection