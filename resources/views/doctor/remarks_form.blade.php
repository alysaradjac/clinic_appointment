<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('dr_css/remarks_form.css') }}">
    <title>Doctors Remarks</title>
</head>
<body>
    <form action="{{ route('remarks.store') }}" method="POST">
    @csrf

        <textarea name="content" placeholder="Type your remarks here..." wrap="soft"></textarea>
        <br> 
        <button type="submit">Done</button> 
    
    </form>
</body>
</html>