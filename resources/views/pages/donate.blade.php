@extends('layouts.app')

@section('content')
        <table width="100%" style="background-color:#000000; margin-top:50px;">
            <tr>
            <td width="50%">
                <h2 style="font-size:40pt; text-align:center; color:yellow; font-weight:bold; font-family:verdana;">Make a Book</h2>  
                <h2 style="font-size:40pt; text-align:center; color:yellow; font-weight:bold; font-family:verdana;">Donation</h2>
            </td>
            <td width="33.3%">
                <img src="https://i.ibb.co/tHJ18pF/Screenshot-82.png" alt="Simply Easy Learning" width="500" height="300">
            </td>
            </tr>
        </table>
        <hr style="margin-buttom:50px">
        @if(!Auth::guest())
            @if(Auth::user()->id == $post->user_id)
            <h1 style="margin-top:50px;">Post the book that you want to donate</h1>
            {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
            <div class="form-group">
                {{Form::label('title', 'Title')}}
                {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
            </div>
            <div class="form-group">
                {{Form::label('body', 'Body')}}
                {{Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Other info : ISBN number, Edition, Year of Publish, Author name'])}}
        
            </div> 
            <div class="form-group">
                {{Form::file('book_image')}}
            </div>
            {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
            {!! Form::close() !!}
            @endif
        @endif    
      
@endsection