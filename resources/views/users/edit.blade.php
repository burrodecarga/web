<x-app-layout>
    <div class="container">
        <div class="max-w-md mx-auto bg-white rounded shadow-lg">
            <div class="w-full mx-auto p-6 my-10">
                <h1 class="font-bold text-2xl capitalize"><strong>{{ __('edit user') }}</strong></h1>
                <hr>

                <form method="POST" action="{{ route('users.update', $user->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="border-b-2">
                        <x-jet-label class="capitalize  font-bold" for="name" value="{{ __('name') }}" />
                        <p class="bg-white px-3 py-2 text-gray-400">{{ $user->name }}</p>
                    </div>

                    <div>
                        <div class="mt-1 border-b-2">
                            <x-jet-label class="capitalize  font-bold" for="email" value="{{ __('email') }}" />
                            <p class="bg-white px-3 py-2 text-gray-400">{{ $user->email }}</p>
                        </div>

                        <div>


                                <x-jet-label class="capitalize  font-bold" for="email" value="{{ __('phone') }}" />
                                <p class="bg-white px-3 py-2 text-gray-400">{{ $user->phone }}</p>
                            </div>



                            <div class="mt-1 border-b-2">
                                <x-jet-label class="capitalize  font-bold" for="address"
                                    value="{{ __('address') }}" />
                                <p class="bg-white px-3 py-2 text-gray-400">{{ $user->address }}</p>
                            </div>

                            <div class="mt-1 border-b-2">
                                <x-jet-label class="capitalize font-bold" for="country" value="{{ __('country') }}" />
                                <p class="bg-white px-3 py-2 text-gray-400">{{ $user->country.'  '.$user->state }}</p>
                            </div>

                            <div class="mt-1 border-b-2">
                                @role('superadmin')
                                <x-jet-label class="capitalize font-bold" for="role" value="{{ __('role') }}" />
                                <select name="role" id="role" name="role" class="block mt-1 w-full rounded">
                                    <option value="">Seleccione un Role</option>
                                    @foreach ($roles as $role)
                                        <option value="{{ $role->id }}"
                                            @if ($role->id == $user->roleId($user)) ) selected @endif>{{ $role->name }}
                                        </option>
                                    @endforeach
                                </select>
                                <x-jet-input-error for="role" />
                                @endrole
                            </div>





                            <div class="flex items-center justify-end mt-4">
                                <a href="{{ URL::previous() }}"
                                    class="bg-yellow-400 text-white hover:bg-yellow-700 px-4 py-1 mx-3 rounded capitalize">{{ __('cancel') }}</a>
                                @role('superadmin')
                                <x-jet-button class="ml-4">
                                    {{ __('Update') }}
                                </x-jet-button>
                                @endrole
                            </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
