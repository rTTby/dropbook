@extends('layouts.app')

@section('content')
    <h1 style="margin-top:50px">Gallery</h1>
    <hr class="solid">
    <table width="100%">
            <tr>
            <td width="50%"> 
                <h1 style="font-size:40pt; font-weight:bold; text-align:center">Check Out</h1>            
                <h1 style="font-size:40pt; font-weight:bold; text-align:center">The Available Books</h1>   
                        
            </td>
            <td width="33.3%">
                <img src="https://static.wixstatic.com/media/fe1b5a83499747c1a7342b9f0b6420d8.jpg/v1/fill/w_711,h_361,al_c,q_80,usm_0.66_1.00_0.01/fe1b5a83499747c1a7342b9f0b6420d8.webp" alt="Simply Easy Learning" width="350" height="200">
            </td>
            </tr>
            <tr>
                <td width="50%">
                <h6 style="font-size:15pt; text-align:center; margin-top:50px">Search by book title or author</h2> 
                 <div class="col-md-4" style=" text-align:center; margin: 20px auto;">
                    <form type="get", action="{{ url('/search') }}" >
                    <div class="form-group">
                        <input type="query" name="query" id="query" class='form-control'>
                        <span class="form-group-btn">
                            <button type="submit" class="btn btn-primary" style="color:black; background-color:yellow;margin-left:auto;margin-right:auto;display:block;margin-top:5%;margin-bottom:0%;border-radius: 50px; border: 1px solid black; ">Search</button>
                        </span>
                    </div>
                    </form>
            
                </div>
                </td>
            </tr>
        </table>
    
    
    <hr class="solid">
    <h1>Sharing is Caring</h1>
    <h6>Shared Gallery</h6>

    
        @if(count($posts) > 0)
        <div class='card' style="margin-top:50px">
            <ul class="List-group list-group-flush">
            @foreach($posts as $post)
            <div class="row">
                <div class="col-md-4">
                        <img style="width: 80%"src="/storage/book_image/{{$post->book_image}}" alt="">
                </div>
                <div class="col-md-8">
                    
                        <h3 style="margin-top: 50px"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                        <small>Posted on {{$post->created_at}}</small>

                       
                </div>
                
            </div>               
            @endforeach
            </ul>
        </div>
            @else


        @endif

@endsection