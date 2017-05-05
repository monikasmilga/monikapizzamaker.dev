<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Picų sąrašas</title>
</head>
<body>

<table style="border-color: #5e5e5e; background-color: #dfdfdf ; border-style: dashed;">
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
            <td><a href="{{ action('PizzasController@edit', $item['id']) }}"><button>Redaguoti</button></a></td>
        </tr>
    @endforeach
</table>

<br/>
</body>
</html>
