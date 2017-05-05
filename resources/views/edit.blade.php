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

{!! Form::open(['url' => route('app.pizzas.store')]) !!}

{{ Form::label('crust_id', 'Pasirinkite picos padą')}}

{{ Form::select('crust_id', $crusts) }}<br/>

{{ Form::label('cheese_id', 'Pasirinkite picos sūrio pagardą')}}

{{ Form::select('cheese_id', $cheeses) }}<br/>

{{ Form::label('ingredient_id', 'Pažymėkite 3 ingredientus:')}}<br/>

@foreach ($ingredients as $key => $ingredient)
    {{ Form::checkbox ('ingredient_id[]', $key) }}
    {{ $ingredient }}<br/>
@endforeach

{{ Form::label('name', 'Nurodykite savo vardą')}}<br>

{{Form::text('name')}}<br>

{{ Form::label('phone', 'Nurodykite savo tel. nr.')}}<br>

{{Form::text('phone')}}<br>

{{ Form::label('comment', 'Komentaras')}}<br>

{{Form::textarea('comment')}}<br>

{{ Form::submit('Užsakyti!')}}

{!! Form::close() !!}

</body>
</html>