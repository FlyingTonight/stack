<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/dark.css">
    <title>Document</title>
</head>

<body>
<h2>
    {{$post->title }}
</h2>
<h4>{{$post->category->name}}</h4>

<p>
    {{$post->description}}
</p>

<div class="mb-5">
    <h3 class="mb-4 section-title">{{$post->comments()->count()}} Izohlar</h3>
    @foreach ( $post->comments as $comment )


    <div class="media mb-4">
        <div class="media-body">
            <h6>{{$comment->user->name}} <small><i>{{$comment->created_at}}</i></small></h6>
            <p>{{$comment->body}}</p>
            <button class="btn btn-sm btn-light">True</button>
            {{-- @if ($user->confirmation)
            @if ($user->confirmation->confirmed = true)
                Confirmed
            @endif
        @else
            Not Confirmed
        @endif --}}
        </div>
    </div>
    @endforeach
</div>

<form action="{{route('comments.store')}}" method="POST">
    @csrf


<label for="coments"></label>
<textarea name="body" id="" ></textarea>
<input type="hidden" name="post_id" value="{{ $post->id}}">
<input type="submit" value="Yuborish" class="btn btn-primary">
</form>
</body>
</html>
