<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interests</title>
</head>
<body>
    @if($user)
        <h1>{{$user}}'s interests</h1>
        <p>This will be a selection of {{$user}}'s favourite topics</p>
    @else
        <h1>No specified user</h1>
        <p>Please specify a user in the url http://localhost/interests/□ ↩ </p>
    @endif
</body>
</html>