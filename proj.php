<!DOCTYPE html>
<html>
<head>
    <title>Blood Management System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .container h2 {
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form-group button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .form-group button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Blood Management System</h2>

        <form method="POST" action="register.php">
            <div class="form-group">
                <label for="name">Donor Name:</label>
                <input type="text" name="name" required>
            </div>

            <div class="form-group">
                <label for="contact">Contact Number:</label>
                <input type="text" name="contact" required>
            </div>

            <div class="form-group">
                <label for="blood_type">Blood Type:</label>
                <input type="text" name="blood_type" required>
            </div>

            <div class="form-group">
                <button type="submit" name="register">Register Donor</button>
            </div>
        </form>

        <form method="POST" action="search.php">
            <div class="form-group">
                <label for="blood_type">Blood Type:</label>
                <input type="text" name="blood_type" required>
            </div>

            <div class="form-group">
                <button type="submit" name="search">Search Blood</button>
            </div>
        </form>
    </div>
</body>
</html>
