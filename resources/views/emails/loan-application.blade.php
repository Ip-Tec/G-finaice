<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loan Application HTML Email</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        h2 {
            color: #333;
        }

        p {
            margin-bottom: 10px;
        }

        strong {
            font-weight: bold;
        }

        img {
            display: block;
            margin-top: 10px;
        }

        a {
            color: #007bff;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Loan Application Details</h2>

        <p><strong>First Name:</strong> {{ $details['first_name'] }}</p>
        <p><strong>Middle Name:</strong> {{ $details['middle_name'] }}</p>
        <p><strong>Last Name:</strong> {{ $details['last_name'] }}</p>
        <p><strong>Date of Birth:</strong> {{ $details['date_of_birth'] }}</p>
        <p><strong>Gender:</strong> {{ $details['gender'] }}</p>
        <p><strong>Marital Status:</strong> {{ $details['marital_status'] }}</p>
        <p><strong>Home Address:</strong> {{ $details['home_address'] }}</p>
        <p><strong>Nationality:</strong> {{ $details['nationality'] }}</p>
        <p><strong>Email:</strong> {{ $details['email'] }}</p>
        <p><strong>Occupation:</strong> {{ $details['occupation'] }}</p>
        <p><strong>Monthly Income:</strong> {{ $details['monthly_income'] }}</p>
        <p><strong>Home Tel:</strong> {{ $details['home_tel'] }}</p>
        <p><strong>Mobile:</strong> {{ $details['mobile'] }}</p>
        <p><strong>Total Loan Amount:</strong> {{ $details['total_loan_amount'] }}</p>
        <p><strong>Loan Duration:</strong> {{ $details['loan_duration'] }}</p>
        <p><strong>Loan Purpose:</strong> {{ $details['loan_purpose'] }}</p>
        <p><strong>Applied Before:</strong> {{ $details['applied_before'] ? 'Yes' : 'No' }}</p>

        @if(isset($details['id_card']))
        <p><strong>ID Card:</strong></p>
        <img src="{{ asset($details['id_card']) }}" width="200" alt="ID Card">
        @endif

        @if(isset($idCardPath))
        <img src="{{ asset('storage' . $idCardPath) }}" width="200" />
        <p><strong>ID Card:</strong> <a href="{{ asset('storage' . $idCardPath) }}" download>Download ID Card</a></p>
        @endif

    </div>
    <div class="container" style="margin: 2rem 0.5rem;">
        <p>Design By <a href="https://github.com/Ip-Tec">Ip-Tec</a></p>

    </div>
</body>

</html>