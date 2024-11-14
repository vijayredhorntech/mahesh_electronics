<!DOCTYPE html>
<html>
<head>
    <title>Contact Form Submission</title>
</head>
<body>
<h1>New Contact Form Submission</h1>

<p>You have received a new contact form submission:</p>

<ul>
    <li><strong>Name:</strong> {{ $formData['name'] }}</li>
    <li><strong>Email:</strong> {{ $formData['email'] }}</li>
    <li><strong>Phone:</strong> {{ $formData['phone'] }}</li>
</ul>

</body>
</html>
