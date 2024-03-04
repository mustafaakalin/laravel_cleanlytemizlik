@extends('frontend.app')

@section('content')

<div class="bg-base-100 backdrop-blur bg-opacity-50 py-24 sm:py-32 my-12">
    <!-- Simplicity is the consequence of refined emotions. - Jean D'Alembert -->
    <div class="mx-auto grid max-w-7xl gap-x-8 gap-y-20 px-6 lg:px-8 xl:grid-cols-3">
        <div class="max-w-2xl">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Meet our leadership</h2>
            <p class="mt-6 text-lg leading-8 text-gray-600">Cleanly Temizlik olarak, deneyimli ve alanında uzman bir
                kadroya sahibiz. Ekibimiz, temizlik alanındaki en yeni teknolojileri kullanarak, kaliteli ve güvenilir
                bir hizmet sunmak için çalışıyor.</p>
        </div>
        <ul role="list" class="grid gap-x-8 gap-y-12 sm:grid-cols-2 sm:gap-y-16 xl:col-span-2">
            @foreach ($teams as $item)
                
            <li>

                <div class="card w-96 bg-base-100 shadow-xl glass">
                    <figure class="px-10 pt-10">
                        <img src="{{ 'storage/'. $item->avatar  }}" alt="Shoes" class="rounded-xl max-h-72 max-w-72 w-72 h-72" />
                    </figure>
                    <div class="card-body items-center text-center">
                        <h2 class="card-title">{{ $item->name }}</h2>

                        <div class="badge-md badge-accent rounded-md">{{ $item->position }}</div>
                    </div>
                </div>
            </li>

            @endforeach
            <!-- More people... -->
        </ul>
    </div>
</div>

@endsection