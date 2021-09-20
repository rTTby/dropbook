@extends('layouts.app')

@section('content')

    <h1></h1>
    <table width="100%">
            <tr>
            <td width="50%">  
                <h2 style="font-size:20pt; text-align:center; margin-top:50px">Welcome to</h2>
                <h2 style="font-size:50pt; text-align:center; color:yellow; font-weight:bold; font-family:verdana; text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;">Drop</h2>
                <h2 style="font-size:50pt; text-align:center; color:yellow; font-weight:bold; font-family:verdana; text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;">Book</h2>
                <h2 style="font-size:20pt; text-align:center">A place to share your books</h2>
                <a href="{{url('/donate')}}"><button type="button" style="background-color:yellow;margin-left:auto;margin-right:auto;display:block;margin-top:5%;margin-bottom:0%;border-radius: 12px;" >Donate Now</button></a>
            </td>
            <td width="33.3%">
                <img src="https://static.wixstatic.com/media/910245bc7cc14f2f9e073b1e8748fed8.jpg/v1/fill/w_659,h_434,al_c,q_80,usm_0.66_1.00_0.01/910245bc7cc14f2f9e073b1e8748fed8.webp" alt="Simply Easy Learning" width="500" height="300" style="margin-top:50px">
            </td>
            </tr>
        </table>
    <hr class="solid">

@endsection