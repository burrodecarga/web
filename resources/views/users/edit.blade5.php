<x-app-layout>
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
                            <div class="mt-1 flex justify-between items-center border-b-2 ">
                                <x-jet-label class="capitalize  font-bold" for="email" value="{{ __('birthdate') }}" />
                                @if($user->birthdate)
                                <p class="bg-white px-3 py-2 text-gray-400">{{ $user->birthdate->format('d-m-Y') }}</p>
                                @endif

                                <x-jet-label class="capitalize  font-bold" for="email" value="{{ __('gender') }}" />
                                <p class="bg-white px-3 py-2 text-gray-400">{{ $user->gender }}</p>
                            </div>



                            <div class="mt-1 border-b-2">
                                <x-jet-label class="capitalize  font-bold" for="address" value="{{ __('address') }}" />
                                <p class="bg-white px-3 py-2 text-gray-400">{{ $user->address }}</p>
                            </div>

                            <div class="mt-1 border-b-2">
                                <x-jet-label class="capitalize font-bold" for="phone" value="{{ __('phone') }}" />
                                <p class="bg-white px-3 py-2 text-gray-400">{{ $user->phone }}</p>
                            </div>

                            <div class="mt-1 border-b-2">
                               
                            </div>





                            <div class="flex items-center justify-end mt-4">
                                <a href="{{ URL::previous() }}"
                                    class="bg-yellow-400 text-white hover:bg-yellow-700 px-4 py-1 mx-3 rounded capitalize">{{
                                    __('cancel') }}</a>
                                <x-jet-button class="ml-4">
                                    {{ __('Update') }}
                                </x-jet-button>
                            </div>
                </form>
</x-app-layout>
