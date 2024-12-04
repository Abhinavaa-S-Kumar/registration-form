<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Successful</title>
    <style>
        /* Overall Styling */
        body {
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #6e45e2, #88d3ce);
            font-family: 'Arial', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #fff;
        }

        /* Container Styling */
        .success-container {
            width: 60%;
            background: rgba(255, 255, 255, 0.1);
            border: 2px solid rgba(255, 255, 255, 0.3);
            backdrop-filter: blur(10px);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.3);
            border-radius: 10px;
            padding: 30px;
            text-align: center;
            color: #fff;
        }

        .success-container h1 {
            font-size: 2.5rem;
            color: #f5f5f5;
            text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);
            margin-bottom: 20px;
        }

        .success-container p {
            font-size: 1.2rem;
            margin: 10px 0;
            text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.2);
        }

        /* 3D Button Style */
        .back-button {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 1.1rem;
            color: #fff;
            background: #6e45e2;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
            text-decoration: none;
        }

        .back-button:hover {
            background: #88d3ce;
            transform: scale(1.05);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        }
    </style>
</head>
<body>
    <div class="success-container">
        <h1>Registration Successful</h1>
        <p><strong>Name:</strong> <?php echo htmlspecialchars($_POST['name']); ?></p>
        <p><strong>Email:</strong> <?php echo htmlspecialchars($_POST['email']); ?></p>
        <p><strong>Phone:</strong> <?php echo htmlspecialchars($_POST['countryCode'] . ' ' . $_POST['phone']); ?></p>
        <p><strong>Date of Birth:</strong> <?php echo htmlspecialchars($_POST['dob']); ?></p>
        <p><strong>Gender:</strong> <?php echo htmlspecialchars($_POST['gender']); ?></p>
        <p><strong>Country:</strong> <?php echo htmlspecialchars($_POST['country']); ?></p>
        <p><strong>Comments:</strong> <?php echo htmlspecialchars($_POST['comments']); ?></p>
        <a href="index.html" class="back-button">Back to Registration</a>
    </div>
</body>
</html>
