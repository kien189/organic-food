<!-- resources/views/emails/verify.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Verification</title>
    <style>
        /* Reset một số kiểu mặc định của email */
        body,
        html {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        /* Style cho email container */
        .email-container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        /* Style cho các đoạn văn trong email */
        p {
            font-size: 16px;
            color: #333333;
            line-height: 1.5;
        }

        /* Style cho nút xác nhận */
        .verify-button {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 20px;
            background-color: #007bff;
            color: #ffffff;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
        }

        /* Responsive cho các thiết bị di động */
        @media only screen and (max-width: 600px) {
            .email-container {
                padding: 15px;
            }

            .verify-button {
                width: 100%;
                text-align: center;
            }
        }
    </style>
</head>

<body>
    <div class="email-container">
        <h1>Xin chàochào {{ $user->name }},</h1>
        <p>Cảm ơn bạn đã đăng ký với chúng tôi. Vui lòng nhấp vào liên kết bên dưới để xác minh địa chỉ email của bạn:</p>
        <a href="{{ $verifyEmailUrl }}" class="verify-button">Verify Email</a>
        <p>Nếu bạn chưa đăng ký thì không cần thực hiện thêm hành động nào.</p>
    </div>
</body>

</html>
