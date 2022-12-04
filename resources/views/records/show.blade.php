@extends('record_layout')

@section('content')
<!-- Password Description-->
    <main class="text-almostWhite">
      <a href="/user/dashboard" class="inline-block ml-4 mb-4"
        ><i class="fa-solid fa-arrow-left"></i> Back
      </a>

      <div class="flex flex-col items-center justify-center text-center">
        <h3 class="text-2xl mb-2">{{$record->password}}</h3>
        <div class="text-lg space-y-6">
          <p>
            {{$record->description}}
          </p>
        </div>
      </div>
    </main>
@endsection