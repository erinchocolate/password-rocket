@extends('main_layout')

@section('content')
    <!-- Hero-->
    <section
      class="relative h-72 flex flex-col justify-center align-center text-center space-y-4 mb-4"
    >
      <div></div>
      <div class="text-almostWhite font-bold">
        <h1 class="text-5xl">Password Rocket🚀</h1>
        <p class="text-2xl my-4">
          Protect your digital life by a
          <span class="text-neonGreen"> strong</span> password
        </p>
        <div>
          <a
            href="/register"
            class="inline-block border-2 border-white py-2 px-4 rounded-2xl uppercase mt-2 hover:text-neonGreen hover:border-neonGreen"
            >Sign Up to save your password</a
          >
        </div>
      </div>
    </section>

    <!-- Generator-->
    <main class="text-almostWhite">
      <div class="flex flex-col space-y-4 items-center">
        <!-- Result container-->
        <div class="flex flex-row px-6 py-5 bg-darkGrey w-1/2">
          <span id="result" class="font-bold text-2xl grow"></span>
          <button id="clipboard" class="grow-0">
            <i
              class="fa-regular fa-copy text-neonGreen hover:text-almostWhite"
            ></i>
          </button>
        </div>

        <!-- Setting container-->
        <div class="bg-darkGrey flex flex-col px-6 py-5 gap-4 w-1/2">
          <div class="flex flex-row justify-between">
            <label class="text-xl">Password Length</label>
            <p class="text-3xl text-neonGreen" id="length">10</p>
          </div>
          <div>
            <input
              type="range"
              min="0"
              max="20"
              value="10"
              class="accent-neonGreen w-full"
              id="range"
              onChange="updateLength(this.value);"
            />
          </div>
          <div>
            <input
              type="checkbox"
              class="accent-neonGreen"
              id="lowercase"
              checked
            />
            <label>Include Lowercase Letters</label>
          </div>
          <div>
            <input
              type="checkbox"
              class="accent-neonGreen"
              id="uppercase"
              checked
            />
            <label>Include Uppercase Letters</label>
          </div>

          <div>
            <input
              type="checkbox"
              class="accent-neonGreen"
              id="number"
              checked
            />
            <label>Include Numbers</label>
          </div>
          <div>
            <input
              type="checkbox"
              class="accent-neonGreen"
              id="symbol"
              checked
            />
            <label>Include Symbols</label>
          </div>
          <div class="flex flex-col rounded-xl gap-4">
            <button
              class="border-2 border-white bg-neonGreen text-veryDarkGrey font-bold py-2 hover:text-neonGreen hover:bg-darkGrey hover:border-neonGreen"
              id="generate"
            >
              Generate
              <i class="fa-sharp fa-solid fa-arrow-right-long"></i>
            </button>

              <button
              id="save"
              class="border-2 border-white bg-neonGreen text-veryDarkGrey font-bold py-2 hover:text-neonGreen hover:bg-darkGrey hover:border-neonGreen"
            >
              Save
              <i class="fa-sharp fa-solid fa-floppy-disk"></i>
            </button>
          </div>
        </div>
      </div>
    </main>
@endsection
