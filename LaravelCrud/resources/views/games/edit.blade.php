<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Edition</title>

</head>
<body>
<div class="container">
<h2>Edit a game</h2>


    <form action="{{  route('games.update', $game->id)  }}" method="POST">
        @csrf
         @method('PUT')
        <div class="form-group row">
            <label for="titleid" class="col-sm-3 col-form-label">Titre</label>
            <div class="col-sm-9">
                <input name="title" type="text" class="form-control" id="titleid" value="{{$game->titre}}">
            </div>
        </div>
        <div class="form-group row">
            <label for="publisherid" class="col-sm-3 col-form-label">Editeur</label>
            <div class="col-sm-9">
                <input name="publisher" type="text" class="form-control" id="publisherid"
                        value="{{$game->editeur}}">
            </div>
        </div>
        <div class="form-group row">
            <label for="releasedateid" class="col-sm-3 col-form-label">Publication</label>
            <div class="col-sm-9">
                <input name="releasedate" type="text" class="form-control" id="releasedateid"
                       value="{{$game->publication}}">
            </div>
        </div>
        
        <div class="form-group row">
            <div class="offset-sm-3 col-sm-9">
                <button href="/index" type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
    </form>

 </div>
</body>
</html>