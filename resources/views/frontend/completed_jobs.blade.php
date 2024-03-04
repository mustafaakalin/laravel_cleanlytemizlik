@extends('frontend.app')

@section('content')
<div class=" my-12">
    <h1 class="flex text-4xl justify-center">Completed Jobs</h1>

@foreach ($completedjobs as $item)
    
    <div class="card card-side bg-base-100 shadow-xl my-12">
        <figure><img src="{{ 'storage/' . $item->image[0] }}" alt="Album" class="w-72 h-72" /></figure>
        <div class="card-body">
            <h2 class="card-title">{{ $item->namesurname }}</h2>
            <p >{{ Str::limit($item->description, $limit = 150, $end = '...') }}</p>
            <div class="card-actions justify-end">
                <button class="btn btn-primary" onclick="window.location.href='{{ route('completed_job', $item->slug) }}';">Review</button>
            </div>
        </div>
    </div>
    
@endforeach
</div>
@endsection