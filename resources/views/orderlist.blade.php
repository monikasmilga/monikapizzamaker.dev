<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Picų sąrašas</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
          integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
</head>
<body>

<div style="border-style:solid; margin: 20px; border-radius: 10px">
    <table class="table table-striped">
        <tr class="table-info">
            <th>Užsakovo vardas</th>
            <th>Telefono nr.</th>
            <th>Picos padas</th>
            <th>Sūris</th>
            <th>Ingredientai</th>
            <th>Komentaras</th>
            <th>Veiksmas</th>
        </tr>
        @foreach($list as $item)
            <tr>
                <td> {{$item['name']}}</td>
                <td> {{$item['phone']}}</td>
                <td>{{$item['crusts']['name']}}</td>
                <td>{{$item['cheeses']['name']}}</td>
                <td>
                    @foreach($item['ingredients'] as $ingredient)
                        {{ $ingredient['ingredients']['name'] }}<br/>
                    @endforeach </td>
                <td> {{$item['comment']}}</td>
                <td><a href="{{ action('PizzasController@edit', $item['id']) }}">
                        <button class="table-warning" style="border-radius: 10px">Redaguoti</button>
                    </a></td>
            </tr>
        @endforeach
    </table>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>
