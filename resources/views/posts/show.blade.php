@extends('layouts.app')

@section('content')
    <a href="http:/posts" class="btn btn-default"><- Go Back</a>
    
    <h1>{{$post->title}}</h1>
    <div class="row">
        <div>
            <img style="width: 50%;height: 80%; background-size: cover; margin-top:50px" src="/storage/book_image/{{$post->book_image}}" alt="">
        </div>
    </div>
    <p style="margin-top: 50px">{{$post->body}}</p>
    <hr>
    <small>Posted on {{$post->created_at}}</small>
    
    <hr style="margin-buttom:50px">
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
        <table width="20%">
            <tr>
            <td width="50%"> 
                <a href="http:/posts/{{$post->id}}/edit" class="btn btn-info" style="color: whitesmoke">Edit</a>
    
            </td>
            <td width="33.3%">            
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}

            </td>
            </tr>
            <tr>
            {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right' ])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {!!Form::close()!!}
        @endif
    @endif
@endsection