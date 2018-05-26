@extends('layouts.default')

@section('content')
      <table style="padding-left: 20px">
         @foreach ($bl as $blog)
            <tr>
               <td><a style="text-decoration: none" href="/blogs/:{{$blog->id}}">{{ $blog->title }}</a></td>
            </tr>
         @endforeach
      </table>
      <br /><a style="padding-left: 40px" href="/blogs/create"> Create new blog</a>
@endsection




