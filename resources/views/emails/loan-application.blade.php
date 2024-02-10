<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loan Application</title>
</head>

<body>
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
    <p><strong>Applied Before:</strong> {{ $details['applied_before'] }}</p>

    'id_card' => 'nullable|image|max:2048'
    <!-- Add other form data fields here -->

    @if(isset($idCardPath))
    <img src="{{ asset('storage/' . $idCardPath) }} }}" width="6rem" />
    <p><strong>ID Card:</strong> <a href="{{ asset('storage/' . $idCardPath) }}">Download ID Card</a></p>
    @endif
</body>

</html>