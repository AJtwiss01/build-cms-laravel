@extends('layouts.app')


@section('content')
<div class="container">

<h2>Edit Page</h2>

<form action="{{route('pages.update', ['page'=> $model->id] )}}" method="post">
{{ method_field('PUT') }}
@include('admin.pages.partials.fields')
</form>
</div>

@endsection