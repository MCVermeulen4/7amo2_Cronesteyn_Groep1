@foreach ($contents as $content)
    <h3>{{$content->title}}</h3>
    <p>{{$content->text}}</p>
@endforeach