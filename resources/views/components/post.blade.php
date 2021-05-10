@props(['post' => $post])

<div class="mb-2">
    <a href="{{ route('users.posts',$post->user) }}" class="font-bold">{{ $post->user->name }}</a>
    <span class="text-gray-600 text-sm ">{{ $post->created_at->diffForHumans() }}</span>
    
</div>
<a href="{{ route('posts.view', $post) }}" class="mt-1 mb-1">{{ $post->body }}</a>
    @can('delete',$post)
    <div class="">
        <form action="{{ route('posts.delete', $post) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="text-blue-500">Delete</button>
        </form>
    </div>
    @endcan
<div class="flex items-center">
    @auth
        
    @if(!$post->likedBy(auth()->user()))
    <form action="{{ route('posts.likes', $post) }}" method="post">
        @csrf
        <button type="submit" class="text-blue-500 mr-2">Like</button>
    </form>
    @else
    <form action="{{ route('posts.likes', $post) }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit" class="text-blue-500">Unlike</button>
    </form>
    @endif
    @endauth
    <span class="ml-2">{{ $post->likes->count() }} {{ Str::plural('like', $post->likes->count()) }}</span>                    
    
</div>