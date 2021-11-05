<!DOCTYPE html>
<html>
<head>
    <title>Siteum</title>
</head>
<body>
@if(isset($details['title']))
    <h1>{{ $details['title'] }}</h1>
@endif
@if(isset($details['body']))
    <p>{{ $details['body'] }}</p>
@endif
@if(isset($details['errors']))
    <p>{{ $details['count'] }}</p>
    <p>{{ $details['errors_title'] }}</p>
    @foreach($details['errors'] as $error)
        <p>{{ $error}}</p>
    @endforeach
@endif
</body>
</html>
