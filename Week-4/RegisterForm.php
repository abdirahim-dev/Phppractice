<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: lightgray;
        }

        form, #result {
            width: 300px;
            margin: 30px auto;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 10px gray;
        }

        h2 {
            text-align: center;
            color: green;
        }

        label {
            display: block;
            margin-top: 15px;
        }

        input[type="text"],
        input[type="password"],
        textarea {
            box-sizing: border-box;
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid gray;
            border-radius: 5px;
        }

        textarea {
            height: 80px;
            resize: vertical;
        }

        .gender label {
            display: inline;
            margin-right: 10px;
        }

        button {
            padding: 10px 15px;
            margin-top: 20px;
            border: none;
            border-radius: 5px;
            color: white;
            cursor: pointer;
            transition: 0.3s;
        }

        .reset {
            background-color: gray;
        }

        .register {
            background-color: green;
        }

        button:hover {
            transform: scale(1.05);
            opacity: 0.8;
        }

        #result {
            display: none;
        }

        #result p {
            overflow-wrap: anywhere;
        }
    </style>
</head>

<body>

    <form id="registerForm">
        <h2>Register Form</h2>

        <label for="fullname">Full Name:</label>
        <input type="text" id="fullname"
               placeholder="Enter your full name" required>

        <label for="password">Password:</label>
        <input type="password" id="password"
               placeholder="Enter your password" required>

        <label>Gender:</label>

        <div class="gender">
            <input type="radio" id="male" name="gender"
                   value="Male" required>
            <label for="male">Male</label>

            <input type="radio" id="female" name="gender"
                   value="Female">
            <label for="female">Female</label>
        </div>

        <label for="message">Message:</label>
        <textarea id="message"
                  placeholder="Write your message"></textarea>

        <button type="reset" class="reset">Reset</button>
        <button type="submit" class="register">Register</button>
    </form>

    <div id="result">
        <h2>Registration Details</h2>

        <p><strong>Full Name:</strong> <span id="showName"></span></p>
        <p><strong>Password:</strong> <span id="showPassword"></span></p>
        <p><strong>Gender:</strong> <span id="showGender"></span></p>
        <p><strong>Message:</strong> <span id="showMessage"></span></p>
    </div>

    <script>
        const form = document.getElementById("registerForm");

        form.addEventListener("submit", function(event) {
            event.preventDefault();

            const fullname = document.getElementById("fullname").value;
            const password = document.getElementById("password").value;
            const gender = document.querySelector(
                'input[name="gender"]:checked'
            ).value;
            const message = document.getElementById("message").value;

            document.getElementById("showName").textContent = fullname;
            document.getElementById("showPassword").textContent = password;
            document.getElementById("showGender").textContent = gender;
            document.getElementById("showMessage").textContent =
                message || "No message";

            document.getElementById("result").style.display = "block";
        });

        form.addEventListener("reset", function() {
            document.getElementById("result").style.display = "none";
        });
    </script>

</body>
</html>