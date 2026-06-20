<!--
The main layout file containing your HTML head, CSS/JS links, 
and a dynamic navigation bar that changes based on Auth::user()->role
-->

<!DOCTYPE html>
<html lang="en">
<head>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Placeholder for System Title (Job Portal)</title>
</head>
<body>
    <a href="{{ route('jobs.index') }}">Home Link Placeholder</a>
    <a href="{{ route('profile.show') }}">Profile Link Placeholder</a>
    <a href="{{ route('applications.index') }}">Applications Link Placeholder</a>
    <a href="{{ route('admin.dashboard') }}">Admin Link Placeholder</a>
    <a href="{{ route('login') }}">Login Link Placeholder</a>
    <a href="{{ route('register') }}">Register Link Placeholder</a>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <input type="submit" value="Logout Button Placeholder">
    </form>

    @yield('content')
</body>
</html>