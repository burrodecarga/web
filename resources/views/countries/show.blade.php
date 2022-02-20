<x-app-layout>
<div class="container">
  <!-- component -->
<section class="antialiased bg-gray-100 text-gray-600 h-screen mx-auto">
    <div class="flex flex-col justify-center h-full">
        <!-- Table -->
        <div class="w-full max-w-xl mx-auto bg-white shadow-lg rounded-sm border border-gray-200">
            <header class="px-5 py-4 border-b border-gray-100 bg-blue-500 text-white">
                <h2 class="font-semibold text-white text-lg">{{ __('countries') }}</h2>
            </header>
            <div class="p-3">
                <div class="overflow-x-auto">
                    <div class="max-w-sm rounded overflow-hidden shadow-lg mx-auto">
                        <img src="https://random.imagecdn.app/500/150">
                        <div class="px-6 py-4">
                          <div class="font-bold text-xl mb-2">{{ $country->name }}</div>
                          <p class="text-gray-700 text-base">

                          </p>
                        </div>
                        <div class="px-6 pt-4 pb-2">
                          @foreach ($country->states as $state )
                          <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{ $state->name }}</span> @endforeach
                        </div>
                      </div>

                      <a type="button" href="{{ route('countries.index') }}"
class="mx-auto my-3 bg-yellow-700 text-white hover:bg-yellow-800 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
    {{ __('back') }}

</a>

                </div>
            </div>
        </div>
    </div>
</section>
</div>
</x-app-layout>

