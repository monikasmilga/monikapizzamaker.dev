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

{!! Form::open(['url' => route('app.crusts.create')]) !!}

{{ Form::label('crusts', 'Picos padas')}}

{{ Form::text('crusts') }}<br/>

{{ Form::label('calories', 'Kalorijų kiekis')}}

{{ Form::text('calories') }}<br/>

{{ Form::submit('Įvesti')}}

{!! Form::close() !!}

</body>
</html>