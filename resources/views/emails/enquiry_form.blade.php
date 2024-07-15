<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Enquiry Form Submission</title>
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
    <h2>Enquiry Form Submission</h2> 
    <table>
        <tr>
            <th>Partname</th>
            <td>{{ $data['partname'] }}</td>
        </tr>
        <tr>
            <th>Function of Coating</th>
            <td>{{ $data['function_of_coating'] }}</td>
        </tr>
        <tr>
            <th>Type of Coating</th>
            <td>{{ $data['type_of_coating'] }}</td>
        </tr>
        <tr>
            <th>Coating Thickness</th>
            <td>{{ $data['coating_thickness'] }}</td>
        </tr>
        <tr>
            <th>Surface Finish</th>
            <td>{{ $data['surface_finish'] }}</td>
        </tr>
        <tr>
            <th>New or Old Job</th>
            <td>{{ $data['new_or_old_job'] }}</td>
        </tr>
        <tr>
            <th>Dia of Job</th>
            <td>{{ $data['diaofjob'] }}</td>
        </tr>
        <tr>
            <th>Coating Length of Job</th>
            <td>{{ $data['coating_length_of_job'] }}</td>
        </tr>
        <tr>
            <th>Total Length of Job</th>
            <td>{{ $data['total_length_of_job'] }}</td>
        </tr>
        <tr>
            <th>Weight of Job</th>
            <td>{{ $data['weight_of_job'] }}</td>
        </tr>

        <!-- Personal Info -->
        <tr>
            <th>Company Name</th>
            <td>{{ $data['company_name'] }}</td>
        </tr>
        <tr>
            <th>Contact Person Name</th>
            <td>{{ $data['contact_person_name'] }}</td>
        </tr>
        <tr>
            <th>Contact No.</th>
            <td>{{ $data['contact_no'] }}</td>
        </tr>
        <tr>
            <th>Email Id</th>
            <td>{{ $data['email'] }}</td>
        </tr>
        <tr>
            <th>Address</th>
            <td>{{ $data['address'] }}</td>
        </tr>
        <tr>
            <th>Remarks</th>
            <td>{{ $data['remarks'] }}</td>
        </tr>
    </table>
    
    <p>Thank you!</p>
</body>
</html>
