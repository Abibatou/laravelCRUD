<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Affichage</title>
</head>
<body>
    <div class="container">
    	<h2>Liste des jeux</h2>
    	<table class="table table-bordered">
    		<thead>
    			<tr>
    				<th>
    					Id
    				</th>
                    <th>
                        Titre
                    </th>
    				<th>
    					Editeur
    				</th>
    				<th>
    					Publication
    				</th>
    			</tr>
    		</thead>
    		@foreach($games as $game)
    		<tbody>
    			<tr>
                    <td>
                        {{$game->id}}
                    </td>
    				<td>
    					{{$game->titre}}
    				</td>
    				<td>
    					{{$game->editeur}}
    				</td>
    				<td>
    					{{$game->publication}}
    				</td>
    				<td>
    					 <form action="{{ route('games.edit', $game->id) }}" method="GET">
                                        
                                        <button class="btn btn-primary" type="submit">Editer</button>
                                    </form>
    					<form action="{{ route('games.delete', $game->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit">Supprimer</button>
                                    </form>

    				</td>
    			</tr>
    		</tbody>
    		@endforeach
    	</table>
    </div>

</body>
</html>