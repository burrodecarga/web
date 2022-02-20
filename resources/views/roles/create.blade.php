<x-app-layout>
    <div class="max-w-md mx-auto bg-white rounded shadow-lg">
        <div class="w-full mx-auto p-6 my-10">
            <h1 class="font-bold text-2xl capitalize"><strong>{{ $title }}</strong></h1>
            <hr>
            <form action="{{ route('roles.store')}}" method="POST">
               @include('roles.partials.form')
               @include('roles.partials.permissions')
            </form>
        </div>
    </div>
</x-app-layout>
