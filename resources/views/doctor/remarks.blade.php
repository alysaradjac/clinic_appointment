<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('dr_css/remarks_form.css') }}">
    <title>Doctor's Remarks</title>
</head>
<body>

<button type="button" class="btn" onclick="location.href='/doctor/history'">Back</button><br>

<p>{{ $remarks->content?? '' }}</p>

</body>
</html>