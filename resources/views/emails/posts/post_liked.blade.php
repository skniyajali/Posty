@component('mail::message')
# Your post was liked

{{ $liker->name }} liked of your posts

@component('mail::button', ['url' => route('posts.view', $post)])
View post
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
