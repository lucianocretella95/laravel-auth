@dd($lead);

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1> you recived mail from: {{$lead['name']}}</h1>
    <p> email is: {{$lead['email']}}</p>
    <p> message: {{$lead['message']}}</p>
</body>
</html>