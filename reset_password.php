<!DOCTYPE html>
<html>
<head>
    <title>Reset Password</title>
    <style>
        .reset-password-area {
            /* Your existing styles for the login area */
            text-align: center;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f5f5f5;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
        }

        h3 {
            text-align: center;
            margin-bottom: 20px;
        }

        p {
            text-align: center;
            margin-bottom: 10px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="email"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-submit-area {
            text-align: center;
            margin-top: 20px;
        }

        .signin-wrap {
            text-align: center;
            margin-top: 10px;
        }

        .login-separater {
            margin: 20px 0;
            font-weight: bold;
        }

        .contacts-social {
            text-align: center;
        }

        .contacts-social a {
            display: inline-block;
            margin: 5px;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <section class="reset-password-area section">
        <div class="container">
            <div class="main-form-area">
                <div class="logo-area">
                    <h3>ROAD SAFETY- A SOCIAL CAUSE</h3>
                    <p>Reset Your Password</p>
                </div>

                <form method="POST" action="reset_password_process.php">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email" required>

                    <div class="form-submit-area">
                        <input type="submit" value="Reset Password">
                    </div>
                </form>

                <div class="signin-wrap">
                    <p>Go back? <a href="login.php">Click here</a></p>
                </div>
            </div>
        </div>
    </section>
</body>
</html>