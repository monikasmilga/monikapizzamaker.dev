<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Picos užsakymas</title>
</head>
<body>

{!! Form::open(['url' => route('app.ingredients.create')]) !!}

{{ Form::label('id', 'Ingredients')}}<br/>

{{ Form::select('id', $ingredients )}}<br/>

{{ Form::submit('Click Me!')}}

{!! Form::close() !!}

</body>
</html>


