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
        <h1 style="font-size:30pt; text-align:center; font-weight:bold; margin-top:50px;">Donate-A-Box</h1>
        <h4 style=" text-align-last: center; margin-top: 50px;">Drop book supports organizations that don’t have books in their libraries for the children.</h4>
        <h4 style=" position:relative;text-align:center; margin-top: 50px;">Donate-A-Box provides a box of gently-used children's books for only $30 to an organization.</h4>
        <h4 style=" position:relative;text-align:center; margin-top: 50px; color:DarkTurquoise;">Give one box or give ten boxes, but let’s GET KIDS READING!</h4>

        <p style="font-size:20pt; margin-top: 50px;">These are the donation plan : </p>

        <table style="height: 100px; margin-top: 50px;   border: 1px solid black;" class="table table-bordered">
        <tbody>
            <tr>
            <td class="align-text-bottom" style="font-size:30pt; text-align:center; font-weight:bold;   border: 1px solid black;">$30</td>
            <td class="align-text-bottom" style="font-size:30pt; text-align:center; font-weight:bold;  border: 1px solid black;">$300</td>
        </tbody>
        </table>
        
        <!-- @if(count($donate) > 0) -->
        <!-- <ul style="font-size:20pt;"> -->
            <!-- @foreach($donate as $donate) -->
                <!-- <li>{{$donate}}</li> -->
            <!-- @endforeach -->
        <!-- </ul> -->
        <!-- @endif -->
        
@endsection