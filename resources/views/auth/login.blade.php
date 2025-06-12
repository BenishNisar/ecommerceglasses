@extends("Layout.layout")
@section("Content")
    <section class="login-section">
        <div class="container">
            <div class="row">
                <!-- Login Form -->
                <div class="col-md-6 offset-md-3">
                    <div class="login-form">
                        <h1 class="h3">Login</h1>
                        <p class="login-description">Enter your email and password to login:</p>

                        <form method="POST" action="" id="customer_login" class="form">
                            @csrf
                            <div class="form-group">
                                <input
                                    type="email"
                                    name="email"
                                    id="email"
                                    class="form-control"
                                    required
                                    value="{{ old('email') }}"
                                />
                                <label for="email" class="floating-label">E-mail</label>
                                @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <div class="password-container">
                                    <input
                                        type="password"
                                        name="password"
                                        id="password"
                                        class="form-control"
                                        required
                                    />
                                    <label for="password" class="floating-label">Password</label>
                                    <!-- Forgot Password Link Positioned Inside -->
                                    <a href="#" class="forgot-password">Forgot your password?</a>
                                </div>
                            </div>

                            <button type="submit" class="discover-btn  btn-block">Login</button>

                            <div class="text-center mt-4">
                                <span>Don't have an account? <a href="#" class="register-link">Sign up</a></span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .login-section {
            background-color:none;
            padding: 50px 0;
            margin-top: 120px;
        }

        .login-form {
            background-color:none;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .login-form h1 {
            font-size: 30px;
            margin-bottom: 20px;
            font-weight: 600;
        }

        .login-description {
            font-size: 16px;
            margin-bottom: 20px;
            color: #333;
        }

        .form-group {
            position: relative;
            margin-bottom: 20px;
        }

        .form-control {
            padding: 10px 15px;
            font-size: 16px;
            width: 100%;
            border-radius: 6px;
            border: 1px solid #e4e4e4;
        }

        .floating-label {
            position: absolute;
            top: 50%;
            left: 15px;
            transform: translateY(-50%);
            font-size: 14px;
            color: #aaa;
            pointer-events: none;
            transition: 0.3s;
        }

        .form-control:focus + .floating-label,
        .form-control:not(:placeholder-shown) + .floating-label {
            font-size: 12px;
            color: #020043;
            top: 0;
        }

        .password-container {
            position: relative;
        }

        .forgot-password {
            font-size: 14px;
            color: #003c5d;
            text-decoration: none;
            position: absolute;
            bottom: -20px;
            right: 0;
            font-weight: 500;
            transition: color 0.3s ease, transform 0.3s ease;
        }

        .forgot-password:hover {
            text-decoration: underline;
            color: #ff5733; /* Change color to a contrasting color on hover */
            transform: scale(1.1); /* Slight zoom effect */
        }

        .register-link {
            font-size: 14px;
            color: #003c5d;
            text-decoration: none;
        }

        .register-link:hover {
            text-decoration: underline;
        }
    </style>
@endsection
