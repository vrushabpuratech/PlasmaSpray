<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Form Submission</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Contact Form Submission</h2> 
    <table>
        <tr>
            <th>Name</th>
            <td>{{ $data['name'] }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{ $data['email'] }}</td>
        </tr>
        <tr>
            <th>Mobile</th>
            <td>{{ $data['mobile'] }}</td>
        </tr>
        <tr>
            <th>State</th>
            <td>{{ $data['state'] }}</td>
        </tr>
        <tr>
            <th>City</th>
            <td>{{ $data['city'] }}</td>
        </tr>
        <tr>
            <th>Country</th>
            <td>{{ $data['country'] }}</td>
        </tr>
        <tr>
            <th>Message</th>
            <td>{{ $data['message'] }}</td>
        </tr>
    </table>
    
    <p>Thank you!</p>
</body>
</html>
