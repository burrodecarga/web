<x-app-layout>
    <div class="max-w-md mx-auto bg-white rounded shadow-lg">
        <div class="w-full mx-auto p-6 my-10">
            <h1 class="font-bold text-2xl capitalize"><strong>{{ __($title) }}</strong></h1>
            <hr>
            <form action="{{ route('countries.update',$country->id)}}" method="POST">
                @method('PUT')
                @csrf
                <input type="hidden" name="id" value="{{ $country->id }}"
               @include('countries.partials.form')
            </form>
        </div>
    </div>
</x-app-layout>
