<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Picos padas</title>
</head>
<body>

@if(isset($name))
    <div style="background-color: #5cb85c; font-style: italic"> Ingredientas pridėtas: {{$name . ', kalorijų kiekis ' . $calories}}</div>

@endif

{!! Form::open(['url' => route('app.ingredients.create')]) !!}

{{ Form::label('ingredients', 'Ingredients')}}

{{ Form::text('ingredients') }}<br/>

{{ Form::label('calories', 'Calories')}}

{{ Form::text('calories') }}<br/>

{{ Form::submit('Submit')}}

{!! Form::close() !!}

</body>
</html>