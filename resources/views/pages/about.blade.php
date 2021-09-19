@extends('layouts.app')

@section('content')

        <h1 style = "text-align:center; font-weight:bold; font-size:40pt; margin-top:50px; ">{{$title}}</h1>
        <hr style="height:2px;border-width:0;color:gray;background-color:gray">
        <h1 style = "text-align:center; margin-top:50px;" >The Team</h1>
        <p style = "text-align:center; font-size:13pt; margin-top:50px;">We are a team of a non-profit organization Dropbook, that accepts donations of new and gently used books, and connects them with libraries, schools and organizations that do not have the funds to foster the love of reading.</p>
        <table width="100%" style = "margin-top:50px;">
            <tr>
            <td width="33.3%" style="text-align: center">   
                <img src="https://static.wixstatic.com/media/45ed7d_3a2f364a7eb34e2eaa4164368c2fd3c8~mv2.png/v1/fill/w_140,h_139,al_c,q_85,usm_0.66_1.00_0.01/Screenshot%20(32).webp" alt="Simply Easy Learning" width="200" height="200" style = "padding:8px; margin: 25px; background-color: #FFFF00; -radius: 10px; text-align:right;">
            </td>
            <td width="33.3%" style="text-align: center">
                <img src="https://static.wixstatic.com/media/45ed7d_d3beb31413e64ac084bdf0e1825d568d~mv2.png/v1/fill/w_140,h_139,al_c,q_85,usm_0.66_1.00_0.01/Screenshot%20(33).webp" alt="Simply Easy Learning" width="200" height="200" style = "padding:8px; margin: 25px; background-color: #FFFF00; -radius: 10px;">
            </td>
            <td width="33.3%" style="text-align: center">
                <img src="https://static.wixstatic.com/media/45ed7d_8c5a105a041f4fe3a8850ce8c4ec73b7~mv2.jpg/v1/fill/w_140,h_139,al_c,q_80/7bb798a1-d0a3-4a25-b72e-ac5efa200370.webp" alt="Simply Easy Learning" width="200" height="200" style = "padding:8px; margin: 25px; background-color: #FFFF00; -radius: 10px;" class="center">
            </td>
            </tr>
        </table>
        <table width="100%">
        <tr>
            <td width="33.3%"><h3 style = "text-align:center;">Lexi</h3></td>
            <td width="33.3%"><h3 style = "text-align:center;">Mook</h3></td>
            <td width="33.3%"><h3 style = "text-align:center;">Ruby</h3></td>
            </tr>
        </table>
        <table width="100%">
        <tr>
            <td width="33.3%"><h6 style = "text-align:center;">Admin/Staff</h6></td>
            <td width="33.3%"><h6 style = "text-align:center;">Admin/Staff</h6></td>
            <td width="33.3%"><h6 style = "text-align:center;">Admin/Staff</h6></td>
            </tr>
        </table>
       



@endsection
