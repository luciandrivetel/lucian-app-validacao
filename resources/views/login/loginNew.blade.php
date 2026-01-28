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
            <h1>New Account</h1>
            <form method="POST" action="#">
                <label for="name">Name</label>
                <input id="name" type="text" name="name">

                <label for="company">Company</label>
                <input id="company" type="text" name="company">

                <label for="email">Email</label>
                <input id="email" type="email" name="email">

                <label for="info">Info</label>
                <input id="info" type="text" name="info">

                <button type="submit">Send</button>
            </form>
        </div>
        <div>
            <p>Messages: success, error, etc</p>
        </div>
    </main>
        
    
    
</body>
</html>