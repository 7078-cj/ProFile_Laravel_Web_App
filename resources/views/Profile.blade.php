<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    <h1>Profile</h1>
     <b>id:</b>{{$profile->id}} <br>
    <b>name:</b>{{$profile->name}}
     <br>
     <b>email:</b>{{$profile->email}} <br>
     <b>birthdate:</b>{{$profile->birthdate}} <br>
     <b>home_address:</b>{{$profile->home_address}} <br>
     <b>contact_number:</b>{{$profile->contact_number}} <br>
     <hr>
    <a href="/profiles">All profiles</a>
</body>
</html>
