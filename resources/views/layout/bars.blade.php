<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <style>
    /* Adjust the class name to match your HTML */
    .top-nav ul {
      list-style: none;
      padding: 0;
      text-align: right; /* Align the list items to the right */
    }

    .top-nav ul li {
      display: inline-block;
      margin-right: 20px; /* Add some spacing between list items */
    }
  </style>
</head>
<body>
  <!-- Navbar -->
  <div class='top-nav'>
    <ul>
      <li><a href="/">Home</a></li>
      <li><a href="about">ABOUT</a></li>
      <li><a href="/services">SERVICES</a></li>
      <li><a href="/contact">CONTACTS</a></li>
      <li><a href="/login">LOGIN</a></li>
      <li><a href="/signup">SIGNUP</a></li>
    </ul>
  </div>

  <!-- Main Content -->
  @yield('content')

  <!-- Footer -->
  <div>footer</div>
</body>
</html>
