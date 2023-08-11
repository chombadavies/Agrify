{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email</title>
</head>
<body>
    <div>
        <p>Inquiry from: {{$name}}</p>
        <p> Email: {{$email}} </p>
        <p> Email: {{$phone}} </p>
        <p> Message: {{$message}} </p>
       </div>
</body>
</html> --}}

<p>Inquiry from: {{json_encode($name) }}</p>
<p> Email:{{ json_encode($email) }}</p>
<p> Message:{{json_encode ($phone) }}</p>
<p> Message:{{json_encode ($message) }} </p>






