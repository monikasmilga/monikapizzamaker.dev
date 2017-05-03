<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Picos padas</title>
</head>
<body>

{!! Form::open(['url' => route('app.cheeses.create')]) !!}

{{ Form::label('cheeses', 'Cheeses')}}

{{ Form::text('cheeses') }}<br/>

{{ Form::label('calories', 'Calories')}}

{{ Form::text('calories') }}<br/>

{{ Form::submit('Submit')}}

{!! Form::close() !!}

</body>
</html>