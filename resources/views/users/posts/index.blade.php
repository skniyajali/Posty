@extends ('layouts.header')

@section('content')

<div class="flex justify-center mt-6">
    
    <div class="w-8/12">
        <div class="p-6">
            <h1 class="text-2xl font-medium mb-1">{{ $user->name }}</h1>
            <p class="">Posted {{ $posts->count() }} {{ Str::plural('post', $posts->count()) }} and recived {{ $user->recivedLikes()->count() }} {{ Str::plural('like', $user->recivedlikes()->count()) }}</p>
        </div>

        <div class="bg-white p-6 rounded-lg">
            @if($posts->count())
                @foreach ($posts as $post)

                <x-post :post="$post"/>
                                    
                @endforeach
                {{ $posts->links() }}
            @else
                <p class="text-red-100">Post Not Aviable</p>
            @endif
        </div>
    </div>


</div>

@endsection