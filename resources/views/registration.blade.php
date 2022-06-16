<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{url('studentreg')}}" method="post">
        @csrf
        <label for="">enter name</label>
        <input type="text" name="sname" id="">
        <label for="">enter contact</label>
        <input type="text" name="scontact" id="">
        <label for="">enter place</label>
        <input type="text" name="splace" id="">
        <button type="submit">submit</button>
        @if(isset($message))
        <p>{{$message}}</p>
        @endif
    </form>

</body>
</html>