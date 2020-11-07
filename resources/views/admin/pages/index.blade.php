@extends('layouts.app')


@section('content')
<div class="container">

<a class="btn" >Create New</a>
    <table>
       <tr>
           <th>Title</th>
           <th>Url</th>
       </tr>
@foreach ($pages as $page)

       <tr>
        <th>{{$page->title}}</th>
        <th>{{$page->url}}</th>
    </tr>
        
@endforeach
    </table>
</div>

@endsection