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
      </ul>
    </nav>
<!-- Password Description-->
    <main class="text-almostWhite">
      <a href="/dashboard" class="inline-block ml-4 mb-4"
        ><i class="fa-solid fa-arrow-left"></i> Back
      </a>

      <div class="flex flex-col items-center justify-center text-center gap-20">
        <h3 class="text-2xl mb-2">{{$record->password}}</h3>
        <div class="text-lg space-y-6">
          <p>
            {{$record->description}}
          </p>
        </div>
          <form method="POST" action="/records/{{$record->id}}">
            @csrf
            @method('delete')
            <button class="text-neonGreen hover:text-red">
              <i class="fa-solid fa-trash-can"></i>
                Delete
            </button>
          </form>
        </div>
    </main>
@endsection