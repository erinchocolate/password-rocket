<!-- Common parts of all pages-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{asset('images/rocket.png')}}" />
    <!-- Icon library -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
      integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:ital,wght@0,200;0,400;0,700;1,400;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Tailwind css -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Tailwind css custom config -->
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              veryDarkGrey: "#18171F",
              darkGrey: "#24232C",
              grey: "#817D92",
              almostWhite: "#E6E5EA",
              neonGreen: "#A4FFAF",
              red: "#F64A4A",
              orange: "#FB7C58",
              yellow: "#F8CD65",
            },
            fontFamily: {
              display: ["JetBrains Mono", "monospace"],
            },
          },
        },
      };
    </script>
    <title>Password Rocket🚀</title>
  </head>

    @yield('content')
    <!-- Footer-->
    <footer
      class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-veryDarkGrey text-almostWhite h-24 mt-24 opacity-90 md:justify-center"
    >
      <p class="ml-2">Copyright &copy; 2022, Meiqiao All Rights reserved</p>
    </footer>
    
  </body>
</html>