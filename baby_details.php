<!DOCTYPE html>
<html>
<head>
    <title>Baby Details</title>
    <style>
        body {
            background-image: url('images/Baby.jpg');
            background-size: cover;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 10px;
            padding: 20px;
        }

        h2 {
            text-align: left;
            margin-bottom: 20px;
        }

        form {
            background-color: pink;
            max-width: 300px;
            margin: 10 auto;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="date"],
        input[type="number"] {
            width: calc(100% - 12px);
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h2>Baby Details</h2>
    <form action="process_baby_details.php" method="post">
        <label for="baby_name">Baby's Name:</label>
        <input type="text" id="baby_name" name="baby_name" required>

        <label for="baby_dob">Baby's Date of Birth:</label>
        <input type="date" id="baby_dob" name="baby_dob" required>

        <label for="place_of_birth">Place of Birth:</label>
        <input type="text" id="place_of_birth" name="place_of_birth" required>

        <label for="father_name">Father's Name :</label>
        <input type="text" id="father_name" name="father_name" required>

        <label for="mother_name">Mother's Name :</label>
        <input type="text" id="mother_name" name="mother_name" required>

        <label for="gender">Gender :</label>
        <input type="text" id="gender" name="gender" required>

        <label for="birth_weight">Birth Weight (in kg):</label>
        <input type="number" step="0.01" id="birth_weight" name="birth_weight" required>

        <label for="birth_height">Birth Height :</label>
        <input type="number" step="0.01" id="birth_height" name="birth_height" required>
        
        <input type="submit" value="Submit">
    </form>
</body>
</html>
