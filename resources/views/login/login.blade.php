<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="App validação workflows">
    <title>App Validação Workflows</title>
</head>
<body>
    <header>
        <x-logo/>
    </header>
    <main>
        <div>
            <h1>LogIn</h1>
            <form method="POST" action="#">
                <label for="email">Email</label>
                <input id="email" type="email" name="email">

                <label for="password">Password</label>
                <input id="password" type="password" name="password">

                <button type="submit">LogIn</button>
            </form>
            <div>
                <a href="{{route('register')}}">Ask for a new account</a>
            </div>
        </div>
    </main>
        
    
    
</body>
</html>