@extends('layout')

@section('content')
<body class="mb-48 font-display bg-veryDarkGrey">
    <!-- Navigation bar-->
    <nav
      class="flex justify-between text-almostWhite items-center font-bold font-style: italic"
    >
      <a href="/" class="hover:text-neonGreen"
        ><img class="w-12" src="{{asset('images/rocket.png')}}" alt="rocket emoji" />
      </a>
      <ul class="flex space-x-6 mr-6">
        <li>
          <a href="/register" class="hover:text-neonGreen"
            ><i class="fa-sharp fa-solid fa-pen-to-square"></i> Register</a
          >
        </li>
        <li>
          <a href="/login" class="hover:text-neonGreen">
            <i class="fa-sharp fa-solid fa-bolt"></i> Login</a
          >
        </li>
      </ul>
    </nav>
 <!-- Register form-->
    <main>
      <div>
        <div
          class="bg-darkGrey border p-10 rounded max-w-lg mx-auto mt-24 text-almostWhite"
        >
          <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">Register</h2>
          </header>

          <form method ="POST" action="/user/register">
            @csrf
            <div class="mb-6">
              <label for="name" class="inline-block text-lg mb-2"> Name </label>
              <input
                type="text"
                class="border rounded p-2 w-full text-darkGrey"
                name="name"
              />
              @error('name')
              <p class="text-neonGreen text-xs mt-1">
                {{$message}}
              </p>
              @enderror
            </div>

            <div class="mb-6">
              <label for="email" class="inline-block text-lg mb-2">Email</label>
              <input
                type="email"
                class="border rounded p-2 w-full text-darkGrey"
                name="email"
              />
              @error('email')
              <p class="text-neonGreen text-xs mt-1">
                {{$message}}
              </p>
              @enderror
             
            </div>

            <div class="mb-6">
              <label for="password" class="inline-block text-lg mb-2">
                Password
              </label>
              <input
                type="password"
                class="border rounded p-2 w-full text-darkGrey"
                name="password"
              />
              @error('password')
              <p class="text-neonGreen text-xs mt-1">
                {{$message}}
              </p>
              @enderror
            </div>

            <div class="mb-6">
              <label for="password2" class="inline-block text-lg mb-2">
                Confirm Password
              </label>
              <input
                type="password"
                class="border rounded p-2 w-full text-darkGrey"
                name="password_confirmation"
              />
              @error('password_confirmation')
              <p class="text-neonGreen text-xs mt-1">
                {{$message}}
              </p>
              @enderror
            </div>

            <div class="mb-6">
              <button
                type="submit"
                class="py-2 px-4 border-2 border-white bg-neonGreen text-veryDarkGrey font-bold py-2 hover:text-neonGreen hover:bg-darkGrey hover:border-neonGreen"
              >
                Sign Up
              </button>
            </div>

            <div class="mt-8">
              <p>
                Already have an account?
                <a href="/login" class="hover:text-neonGreen">Login</a>
              </p>
            </div>
          </form>
        </div>
      </div>
    </main>
@endsection