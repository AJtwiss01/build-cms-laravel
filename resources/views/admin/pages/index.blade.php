@extends('layouts.app')


@section('content')
<div class="container">

<a class="btn btn-default" href="{{ route('pages.create') }}" >Create New</a>
    <table>
       <tr>
           <th>Title</th>
           <th>Url</th>
       </tr>
@foreach ($pages as $page)

       <tr>
        <th><a href="{{route('pages.edit', ['page' => $page->id])}}">{{$page->title}}</a></th>
        <th>{{$page->url}}</th>
    </tr>
        <a href="
        "></a>
@endforeach
    </table>
</div>

@endsection