<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

@if(isset($error))
    <h4 style="color: red">{{ $error['message'] }}</h4>
@endif

@if(isset($success))
    <h4 style="color: green">{{ $success['message'] }}</h4>
@endif

{!! Form::open(['url' => route('app.pizza.update', $item['id'])]) !!}

{{ Form::label('crust_id', 'Pasirinkite picos padą')}}

{{ Form::select('crust_id', $crusts, ['id' => $item['crusts']['id']]) }}<br/>

{{ Form::label('cheese_id', 'Pasirinkite picos sūrio pagardą')}}

{{ Form::select('cheese_id', $cheeses, ['id' => $item['cheeses']['id']]) }}<br/>

{{ Form::label('ingredient_id', 'Pažymėkite 3 ingredientus:')}}<br/>

@foreach ($ingredients as $key => $ingredient)

    @if(in_array($key, $ingredientsItems))
        {{ Form::checkbox ('ingredient_id[]', $key, true) }}
    @else()
        {{ Form::checkbox ('ingredient_id[]', $key) }}
    @endif()
    {{ $ingredient }}<br/>


@endforeach

{{ Form::label('name', 'Nurodykite savo vardą')}}<br>

{{Form::text('name', $item['name'])}}<br>

{{ Form::label('phone', 'Nurodykite savo tel. nr.')}}<br>

{{Form::text('phone', $item['phone'])}}<br>

{{ Form::label('comment', 'Komentaras')}}<br>

{{Form::textarea('comment', $item['comment'])}}<br>

{{ Form::submit('Pataisyti!')}}

{!! Form::close() !!}

</body>
</html>