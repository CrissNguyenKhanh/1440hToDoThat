<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LARAVEL CMS 01</title>
</head>

<body style="font-family: Arial, sans-serif; background: linear-gradient(to right, #4facfe, #00f2fe); margin: 0; padding: 0;">

    <div style="display: flex; min-height: 100vh; align-items: center; justify-content: center; padding: 20px;">
        <div style="max-width: 900px; background: white; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); border-radius: 10px; overflow: hidden; display: flex; flex-direction: row; width: 100%;">

            <!-- Left Section -->
            <div style="flex: 1; padding: 40px; background: #f8f9fa;">
                <h2 style="font-size: 28px; font-weight: bold; color: #333;">Welcome to <span style="color: #4facfe;">WEBITSHOWROOM</span></h2>
                <p style="font-size: 16px; line-height: 1.6; margin-top: 20px; color: #555;">
                    At WEBITSHOWROOM, we provide the best platform for managing your content efficiently and professionally.
                </p>
                <p style="font-size: 14px; line-height: 1.4; margin-top: 10px; color: #777;">
                    "Transforming your ideas into digital reality with seamless solutions."
                </p>
                <p style="font-size: 12px; line-height: 1.4; margin-top: 20px; color: #aaa;">
                    <small>Discover the difference in quality and service.</small>
                </p>
            </div>

            <!-- Right Section -->
            <div style="flex: 1; padding: 40px; background: #ffffff;">
                <div style="margin: 0 auto; max-width: 300px;">
                    <h3 style="font-size: 22px; font-weight: bold; text-align: center; color: #333;">Client Login</h3>
                    <form method="post" action="{{ route('auth.loginClient') }}" style="margin-top: 20px;">
                        @csrf
                        <div style="margin-bottom: 20px;">
                            <input type="text" name="email" class="form-control" placeholder="Email" 
                                value="{{ old('email') }}" 
                                style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box; font-size: 14px;">
                            @if ($errors->has('email'))
                                <span style="color: red; font-size: 12px;">* {{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <div style="margin-bottom: 20px;">
                            <input type="password" name="password" class="form-control" placeholder="Password" 
                                style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box; font-size: 14px;">
                            @if ($errors->has('password'))
                                <span style="color: red; font-size: 12px;">* {{ $errors->first('password') }}</span>
                            @endif
                        </div>
                        <button type="submit" style="width: 100%; padding: 10px; background: #4facfe; color: white; border: none; border-radius: 5px; font-size: 16px; cursor: pointer; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                            Đăng nhập
                        </button>
                        <a href="#" style="display: block; margin-top: 10px; text-align: center; font-size: 12px; color: #4facfe;">Forgot password?</a>
                    </form>
                    <p style="font-size: 12px; text-align: center; margin-top: 20px; color: #aaa;">
                        <small>Newbie Code web app framework © 2024</small>
                    </p>
                </div>
            </div>

        </div>
    </div>

    <div style="text-align: center; padding: 20px 10px; background: #f1f1f1; font-size: 14px; color: #777;">
        <div>Copyright Example Company</div>
        <div>© 2023</div>
    </div>

</body>

</html>
