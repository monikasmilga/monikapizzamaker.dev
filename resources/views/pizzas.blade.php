<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Picos užsakymas</title>
</head>
<body>

{!! Form::open(['url' => route('app.pizzas.create')]) !!}

{{ Form::label('crusts', 'Pasirinkite picos padą')}}

{{ Form::select('crusts') }}<br/>


{{ Form::submit('Click Me!')}}

{!! Form::close() !!}

</body>
</html>


