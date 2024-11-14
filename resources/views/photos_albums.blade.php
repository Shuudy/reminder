<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(["resources/css/style.css"])
</head>

<body>
    <form>
        <h1>Liste des photos de l'album</h1> 

        @foreach($album->photos as $photo)
        <div class="gallery">
            <a target="_blank" href="images/salad.jpg">
                <img src="https://picsum.photos/id/{{ $photo->id }}/367/267" alt="salad">
            </a>
            <div class="description">{{ $photo->title }}</div>
        </div>
        @endforeach
    </form>
</body>

</html>