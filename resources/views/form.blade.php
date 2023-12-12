<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Login Admin</title>
        <link rel="stylesheet" href={{asset("form/style.css")}}>
        <img src={{asset("layout/BanGiayStore.png")}} alt="profile-pic" width="150px">
        <script src={{asset("form/form.js")}}></script>
    </head>
    <body>
        <div class="container">
            <h1>Login</h1>
            <input type="text" placeholder="Username" id="username" />
            <input type="password" placeholder="Password" id="password" />
            <button id="submit">Submit</button>
            <p type="message" id="message-ref">Signed up Successfully</p>
        </div>
    </body>
</html>
