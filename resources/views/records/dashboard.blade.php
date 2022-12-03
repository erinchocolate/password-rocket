@extends('dashboard_layout')

@section('content')

@foreach($records as $record)
<div class="flex flex-row">
<table class="w-full">
          <tr>
            <td class="px-4 py-8 border-almostWhite text-lg">
              <a href="/records/{{$record->id}}">{{$record->password}} </a>
            </td>
            <td class="px-4 py-8 border-almostWhite text-lg">
              <a href="edit.html" class="text-neonGreen hover:text-red"
                ><i class="fa-solid fa-pen-to-square"></i> Edit</a
              >
            </td>
            <td class="px-4 py-8 border-almostWhite text-lg">
              <form action="">
                <button class="text-neonGreen hover:text-red">
                  <i class="fa-solid fa-trash-can"></i>
                  Delete
                </button>
              </form>
            </td>
          </tr>
        </table>
</div>
@endforeach
@endsection
