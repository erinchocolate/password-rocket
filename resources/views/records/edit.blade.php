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
          <a href="/dashboard" class="hover:text-neonGreen"
            ><i class="fa-sharp fa-solid fa-gear"></i> Manage Passwords</a
          >
        </li>
        <li>
          <form class="inline hover:text-neonGreen" method="POST" action="/user/logout">
            @csrf
            <button type="submit"><i class="fa-sharp fa-solid fa-right-from-bracket"></i>Logout</button>
        </li>
      </ul>
    </nav>

    <!-- Edit Form-->
    <main class="text-almostWhite">
      <div
        class="bg-darkGrey border p-10 rounded max-w-lg mx-auto mt-24 text-almostWhite"
      >
        <header class="text-center">
          <h2 class="text-2xl font-bold uppercase mb-1">Edit {{$record->password}}</h2>
        </header>
        <form method="POST" action="/records/{{$record->id}}">
          @csrf
          @method('PUT')
          <div class="mb-6">
            <label for="password" class="inline-block text-lg mb-2"
              >Password</label
            >
            <input
              type="text"
              class="border rounded p-2 w-full text-veryDarkGrey"
              name="title"
              value={{$record->password}}
            />
          </div>

          <div class="mb-6">
            <label for="description" class="inline-block text-lg mb-2">
              Note
            </label>
            <textarea
              class="border rounded p-2 w-full text-veryDarkGrey"
              name="description"
              rows="10"
            >
            {{$record->description}}
            </textarea>
          </div>
          <div class="mb-6">
            <button type="submit"
              class="py-2 px-4 border-2 border-white bg-neonGreen text-veryDarkGrey font-bold hover:text-neonGreen hover:bg-darkGrey hover:border-neonGreen"
            >
              Update Password
            </button>

            <a
              href="/dashboard"
              class="text-almostWhite hover:text-neonGreen ml-4"
            >
              Back
            </a>
          </div>
        </form>
      </div>
    </main>

@endsection