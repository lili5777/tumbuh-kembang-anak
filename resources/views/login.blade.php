<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Aplikasi Tumbuh Kembang Anak</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        :root {
            --primary-color: #6C63FF;
            --secondary-color: #4FC3F7;
            --accent-color: #FF9E80;
            --light-color: #F8F9FA;
            --dark-color: #343A40;
            --success-color: #66BB6A;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: #f0f8ff;
            background-image: radial-gradient(circle at 10% 20%, rgba(107, 183, 255, 0.1) 0%, rgba(255, 158, 128, 0.1) 90%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            overflow: hidden;
        }

        .floating-elements {
            position: absolute;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 0;
        }

        .floating-element {
            position: absolute;
            opacity: 0.6;
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0) rotate(0deg);
            }

            50% {
                transform: translateY(-20px) rotate(5deg);
            }
        }

        .floating-element:nth-child(1) {
            top: 15%;
            left: 10%;
            width: 50px;
            animation-delay: 0s;
        }

        .floating-element:nth-child(2) {
            top: 25%;
            right: 15%;
            width: 35px;
            animation-delay: 1s;
        }

        .floating-element:nth-child(3) {
            bottom: 20%;
            left: 20%;
            width: 45px;
            animation-delay: 2s;
        }

        .floating-element:nth-child(4) {
            bottom: 30%;
            right: 10%;
            width: 55px;
            animation-delay: 3s;
        }

        .login-container {
            position: relative;
            z-index: 1;
            width: 90%;
            max-width: 360px;
            background-color: white;
            border-radius: 18px;
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.1);
            padding: 30px;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .login-container:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
        }

        .logo {
            width: 80px;
            height: 80px;
            margin: 0 auto 15px;
            background-color: var(--secondary-color);
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            font-size: 32px;
            box-shadow: 0 4px 12px rgba(79, 195, 247, 0.4);
        }

        h1 {
            color: var(--primary-color);
            margin-bottom: 8px;
            font-size: 22px;
        }

        .subtitle {
            color: var(--dark-color);
            opacity: 0.7;
            margin-bottom: 25px;
            font-size: 13px;
        }

        .input-group {
            position: relative;
            margin-bottom: 20px;
            text-align: left;
        }

        .input-group label {
            display: block;
            margin-bottom: 6px;
            color: var(--dark-color);
            font-weight: 500;
            font-size: 13px;
        }

        .input-group input {
            width: 100%;
            padding: 12px 12px 12px 40px;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            font-size: 13px;
            transition: all 0.3s ease;
            outline: none;
        }

        .input-group input:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(108, 99, 255, 0.2);
        }

        .input-group i {
            position: absolute;
            left: 12px;
            top: 35px;
            color: var(--primary-color);
            font-size: 16px;
        }

        .remember-forgot {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            font-size: 12px;
        }

        .remember-me {
            display: flex;
            align-items: center;
        }

        .remember-me input {
            margin-right: 6px;
            accent-color: var(--primary-color);
        }

        .forgot-password a {
            color: var(--primary-color);
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .forgot-password a:hover {
            color: var(--accent-color);
            text-decoration: underline;
        }

        .login-btn {
            width: 100%;
            padding: 13px;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            border: none;
            border-radius: 8px;
            color: white;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 12px rgba(108, 99, 255, 0.4);
            margin-bottom: 15px;
        }

        .login-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(108, 99, 255, 0.6);
        }

        .login-btn:active {
            transform: translateY(0);
        }

        .social-login {
            margin-bottom: 20px;
        }

        .social-login p {
            color: var(--dark-color);
            opacity: 0.7;
            font-size: 12px;
            margin-bottom: 12px;
            position: relative;
        }

        .social-login p::before,
        .social-login p::after {
            content: "";
            position: absolute;
            top: 50%;
            width: 30%;
            height: 1px;
            background-color: #e0e0e0;
        }

        .social-login p::before {
            left: 0;
        }

        .social-login p::after {
            right: 0;
        }

        .social-icons {
            display: flex;
            justify-content: center;
            gap: 12px;
        }

        .social-icon {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .social-icon:hover {
            transform: translateY(-3px);
        }

        .facebook {
            background-color: #3B5998;
        }

        .google {
            background-color: #DB4437;
        }

        .apple {
            background-color: #000000;
        }

        .register-link {
            font-size: 13px;
            color: var(--dark-color);
        }

        .register-link a {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s ease;
        }

        .register-link a:hover {
            color: var(--accent-color);
            text-decoration: underline;
        }

        /* Responsive Design */
        @media (max-width: 480px) {
            .login-container {
                padding: 25px 15px;
                width: 95%;
            }

            .logo {
                width: 70px;
                height: 70px;
                font-size: 28px;
            }

            h1 {
                font-size: 20px;
            }

            .input-group input {
                padding: 10px 10px 10px 35px;
            }

            .input-group i {
                top: 32px;
                font-size: 14px;
            }

            .remember-forgot {
                flex-direction: column;
                align-items: flex-start;
                gap: 8px;
            }
        }

        /* Animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .login-container {
            animation: fadeIn 0.8s ease-out forwards;
        }
    </style>
</head>

<body>
    <div class="floating-elements">
        <img src="https://cdn-icons-png.flaticon.com/512/206/206853.png" alt="Child Icon" class="floating-element">
        <img src="https://cdn-icons-png.flaticon.com/512/1946/1946429.png" alt="Toy Icon" class="floating-element">
        <img src="https://cdn-icons-png.flaticon.com/512/864/864685.png" alt="Book Icon" class="floating-element">
        <img src="https://cdn-icons-png.flaticon.com/512/346/346218.png" alt="Ball Icon" class="floating-element">
    </div>

    <div class="login-container">
        <div class="logo">
            <i class="fas fa-child"></i>
        </div>
        <h1>Selamat Datang</h1>
        <p class="subtitle">Pantau tumbuh kembang anak Anda dengan mudah</p>
        @if(session('error'))
            <div class="alert alert-danger"
                style="color: red; background-color: #ffeeee; padding: 8px; border-radius: 5px; margin-bottom: 15px; border: 1px solid #ffcccc;font-size: 12px">
                {{ session('error') }}
            </div>
        @endif
        <form method="POST" action="{{ route('proses_login') }}">
            @csrf
            <div class="input-group">
                <label for="email">Email</label>
                <i class="fas fa-envelope"></i>
                <input type="email" id="email" placeholder="Masukkan email Anda" name="email" required>
            </div>

            <div class="input-group">
                <label for="password">Password</label>
                <i class="fas fa-lock"></i>
                <input type="password" id="password" name="password" placeholder="Masukkan password Anda" required>
            </div>

            <button type="submit" class="login-btn">MASUK</button>
        </form>

        <p class="register-link">Belum punya akun? <a href="{{route('register')}}">Daftar sekarang</a></p>
    </div>


</body>

</html>