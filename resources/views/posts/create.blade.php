@extends('layouts.app')

@section('content')
    <table width="100%" style="margin-top:50px; margin-buttom:50px;">
        <tr>
        <td width="33.3%">
            <img src="https://i.ibb.co/tHJ18pF/Screenshot-82.png" alt="Simply Easy Learning" width="500" height="300">
        </td>
        </tr>
    </table>
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
    
@endsection