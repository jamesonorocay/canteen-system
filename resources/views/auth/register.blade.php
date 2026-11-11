<!DOCTYPE html>
<html>
<head>
    <title>Student Registration</title>
</head>
<body>

    <h2>Create Account</h2>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('register') }}" method="POST">
        @csrf

        <label>Full Name</label>
        <input type="text" name="name" value="{{ old('name') }}" required>

        <br><br>

        <label>Email</label>
        <input type="email" name="email" value="{{ old('email') }}" required>

        <br><br>

        <label>Password</label>
        <input type="password" name="password" required>

        <br><br>

        <label>Confirm Password</label>
        <input type="password" name="password_confirmation" required>

        <br><br>

        <button type="submit">Register</button>
    </form>

    <p>Already have an account? <a href="{{ route('login') }}">Login here</a></p>

</body>
</html>
