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
    @if(session('error'))
        <span>{{ session('error') }}</span>
    @endif
    @csrf
    <div class="inputs">
      <input type="text" name="username" placeholder="Nom d'utilisateur" />
      <input type="password" name="password" placeholder="Mot de passe">
    </div>
    
    <div>
      <button type="submit">Se connecter</button>
    </div>
  </form>
</body>
</html>