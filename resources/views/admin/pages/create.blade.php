@extends('layouts.app')


@section('content')
<div class="container">

<h2>Create New</h2>

<form action="{{route('pages.store')}}" method="post">
    @include('admin.pages.partials.fields')

</form>
</div>

@endsection