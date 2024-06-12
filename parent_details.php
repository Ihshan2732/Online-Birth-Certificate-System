<!DOCTYPE html>
<html>
<head>
    <title>Parent Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('images/images (4).jpeg');
            background-size: cover;
            margin: 0;
            padding: 10px;
        }

        h2 {
            text-align: left;
            margin-bottom: 20px;
            
          
        }

        form {
            background-image: url('images/images (6).jpeg');
            background-size: cover;
            max-width: 400px;
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
        textarea {
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
    <h2>Parent's Details</h2>
    <form action="process_parent_details.php" method="post">
        <label for="father_fullname">Father's Full Name:</label>
        <input type="text" id="father_fullname" name="father_fullname" required>

        <label for="father_dob">Father's Date of Birth:</label>
        <input type="date" id="father_dob" name="father_dob" required>

        <label for="mother_fullname">Mother's Full Name:</label>
        <input type="text" id="mother_fullname" name="mother_fullname" required>

        <label for="mother_dob">Mother's Date of Birth:</label>
        <input type="date" id="mother_dob" name="mother_dob" required>

        <label for="father_profession">Father's Profession:</label>
        <input type="text" id="father_profession" name="father_profession" required>

        <label for="mother_profession">Mother's Profession:</label>
        <input type="text" id="mother_profession" name="mother_profession" required>

        <label for="address">Address:</label>
        <textarea id="address" name="address" required></textarea>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
