<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Филиалы и сотрудники</title>
        {{-- bootstrap --}}
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}"></script>

    </head>
    <body>
        <div class="container">
            @foreach($all as $item)
            <div class="container">
                <div class="card card-body">
                <h2>{{$item->placename}}</h2>
                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapse{{$item->id}}" aria-expanded="false" aria-controls="collapse{{$item->id}}">
                    Подробнее
                  </button>
                @foreach($item->workers as $worker)
                    <div class="collapse" id="collapse{{$item->id}}">
                        <p><h5> {{$worker->workername}} - {{$worker->position}} </h5> </p>
                    </div>
                @endforeach
            </div>
        </div>
            @endforeach
        </div>
        </div>
    </body>
</html>
