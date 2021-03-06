@extends('Layouts/mainLayout')

@section('title', 'Content veranderen')
@section('content')
    <div class="container col-md-8">
        <div class="row">
            <form class="col-md-8" method="POST" action="/Content/{{ $content->id }}">
                {{method_field('PATCH')}}
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="formGroupExampleInput">title</label>
                    <input type="text" class="form-control" name="title"id="formGroupExampleInput" placeholder="title" value="{{ $content->title }}">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Type content</label>
                    <select class="form-control" name="type" id="exampleFormControlSelect1" >
                        <option value="Parkvereniging">Parkvereniging</option>
                        <option value="home">Home</option>
                        <option value="vogelwerkgroep">vogelwerkgroep</option>
                        <option value="foto">Foto</option>
                        <option value="activiteiten">Activiteiten</option>
                        <option value="newsItem">News Item</option>
                        <option>5</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">text</label>
                    <textarea class="form-control" name="text" id="exampleFormControlTextarea1" rows="3" >{{ $content->text }}</textarea>
                </div>

                <input type="file" id="foto" name="foto"  accept="image/png, image/jpeg">

                <button type="submit" class="btn btn-primary">Update</button>

            </form>
            <form method="POST" action="/Content/{{ $content->id }}">

                {{method_field('DELETE')}}
                {{ csrf_field() }}
                <button type="submit" class="btn btn">Delete </button>
            </form>
        </div>
    </div>
@endsection