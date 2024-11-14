<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Connexion - Reminder</title>
  @vite(["resources/css/style.css"])
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
</head>
<body>
  <form action="{{ route('login') }}" method="post">
    <h1>Se connecter</h1>
    @csrf
    <div class="inputs">
      <input type="text" placeholder="Nom d'utilisateur" />
      <input type="password" placeholder="Mot de passe">
    </div>
    
    <div align="center">
      <button type="submit">Se connecter</button>
    </div>
  </form>
</body>
</html>