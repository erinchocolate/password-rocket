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
    <div class="text-almostWhite">
      <div class="bg-darkGrey border border-almostWhite p-10 rounded">
        <header>
          <h1 class="text-3xl text-center font-bold">
            Hi👋{{auth()->user()->name}}
          </h1>
          <p class="mt-4 text-xl text-center font">Manage your passwords👇</p>
        </header>

    @foreach($records as $record)
      <div class="">
        <table class="w-full flex flex-row justify-center">
          <tr>
            <td class="px-4 py-8 border-almostWhite text-lg hover:text-red">
              <a href="/records/{{$record->id}}">{{$record->password}} </a>
            </td>
            <td class="px-4 py-8 border-almostWhite text-lg">
              <a href="/records/{{$record->id}}/edit" class="text-neonGreen hover:text-red"
                ><i class="fa-solid fa-pen-to-square"></i>Edit</a
              >
            </td>
            <td class="px-4 py-8 border-almostWhite text-lg">
            </td>
          </tr>
        </table>
      </div>
    @endforeach
@endsection
