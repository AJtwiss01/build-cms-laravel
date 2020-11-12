{!! csrf_field() !!}


@if (!$errors->isEmpty())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $message)
        <li>{{$message}}</li>

        @endforeach
    </ul>
</div>


@endif
<div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" name="title" id="title" value="{{$model->title}}">

</div>

<div class="form-group">
    <label for="url">Url</label>
    <input type="text" class="form-control" name="url" id="url" value="{{$model->url}}">

</div>
<div class="form-group">
    <label for="content">Content</label>
    <textarea class="form-control" name="content" id="content">{{$model->content}}</textarea>
</div>
<div class="form-group">
    <input type="submit" class="btn btn-default" value="Submit">
</div>