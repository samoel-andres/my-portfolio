<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Notification - Samoel Andres</title>
    <style type=text/css>
    html, body {
        color: #7d7d7d;
        font-family: sans-serif;
        font-size: 16px;
    }

    table {
        border-spacing: 0px;
    }

    td, th {
        border: 1px solid #006064;
        padding: 5px 10px 5px 10px;
        text-align: start;
    }

    th, strong {
        color: #006064;
    }
    
    p {
        padding: 5px 10px 5px 10px;
    }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $contact['name'] }}</td>
                <td>{{ $contact['email'] }}</td>
                <td>{{ $contact['phone'] }}</td>
            </tr>
        </tbody>
    </table>
    <br>
    <strong>Subject: {{ $contact['subject'] }}</strong>
    <p>{{ $contact['msg'] }}</p>
</body>
</html>