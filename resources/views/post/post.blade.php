@extends ('layouts.header')

@section('content')

<div class="flex justify-center mt-6">
    <div class="w-6/12 bg-white p-6 rounded-lg">
        @auth
        <form action="{{ route('posts') }}" method="post" class="mb-4">
            @csrf
            <div class="mb-4">
                <label for="body" class="text-black font-bold mb-1 sr-only">Body</label>
                <textarea name="body" id="body" cols="30" rows="4" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('body') border-red-500 @enderror" placeholder="Post Somthing"></textarea>
                @error('body')
                    <span class="text-red-500 text-xs mt-2">{{ $message }}</span>
                @enderror
            </div>
            <div class="">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded font-medium">Post</button>
            </div>
        </form>
        @endauth
        
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

@endsection