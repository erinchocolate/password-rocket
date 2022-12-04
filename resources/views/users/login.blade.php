@extends('main_layout')

@section('content')

<!-- Login form-->
    <main>
      <div>
        <div
          class="bg-darkGrey border p-10 rounded max-w-lg mx-auto mt-24 text-almostWhite"
        >
          <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">Log In</h2>
          </header>

          <form method ="POST" action="user/authenticate">
            @csrf
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
            </div>

            <div class="mb-6">
              <button
                type="submit"
                class="py-2 px-4 border-2 border-white bg-neonGreen text-veryDarkGrey font-bold py-2 hover:text-neonGreen hover:bg-darkGrey hover:border-neonGreen"
              >
                Sign In
              </button>
            </div>

            <div class="mt-8">
              <p>
                Don't have an account?
                <a href="/register" class="hover:text-neonGreen"
                  >Register</a
                >
              </p>
            </div>
          </form>
        </div>
      </div>
    </main>
@endsection