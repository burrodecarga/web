<div class="my-5">
    <!-- component -->
  <section class="antialiased bg-gray-100 text-gray-600 h-screen px-4">
      <div class="flex flex-col justify-center h-full">
          <!-- Table -->
          <div class="w-full max-w-xl mx-auto bg-white shadow-lg rounded-sm border border-gray-200">
              <header class="flex justify-between justify-items-center px-5 py-4 border-b border-gray-100 bg-blue-500 text-white">
                  <h2 class="font-semibold text-white text-2xl">{{ __('states') }}</h2>
                  <a class="text-white hover:bg-blue-500 cursor-pointer" title="add state"
                  wire:click="$set('addStateModal',true)">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                  </a>
              </header>
              <div class="p-3">
                  <div class="overflow-x-auto">
                      <table class="table-auto w-full">
                          <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                              <tr>
                                  <th class="p-2 whitespace-nowrap">
                                      <div class="font-semibold text-left">State</div>
                                  </th>
                                  <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">Country</div>
                                </th>
                                  <th class="p-2 whitespace-nowrap">
                                      <div class="font-semibold text-left">actions</div>
                                  </th>
                              </tr>
                          </thead>
                          <tbody class="text-sm divide-y divide-gray-100">
                              @foreach($states as $state)
                              <tr>
                                  <td class="p-2 whitespace-nowrap">
                                      <div class="text-left font-medium text-gray-500">{{ $state->name }}</div>
                                  </td>
                                  <td class="p-2 whitespace-nowrap">
                                    <div class="text-left font-medium text-gray-500">{{ $state->country->name }}</div>
                                </td>
                                  <td class="flex justify-between place-items-center">


                                      <a class="cursor-pointer text-green-600" title="edit country" wire:click="editState({{$state->id}})">
                                          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                            </svg>
                                      </a>


                                      @role('admin')
                                      <button type="submit" class="text-red-500" wire:click="deleteState({{$state->id}})">
                                          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2M3 12l6.414 6.414a2 2 0 001.414.586H19a2 2 0 002-2V7a2 2 0 00-2-2h-8.172a2 2 0 00-1.414.586L3 12z" />
                                            </svg>
                                      </button>
                                      @endrole
                                  </td>
                              </tr>
                              @endforeach
                          </tbody>
                      </table>
                      {{ $states->links() }}
                  </div>
              </div>
          </div>
      </div>
  </section>

  <x-jet-dialog-modal wire:model="addStateModal">
      <x-slot name="title">
          <h1>Add State</h1>
      </x-slot>

      <x-slot name="content">
        <div class="grid grid-cols-6 gap-3">
            <div class="col-span-2">
                <label for="selectState">{{ __('State') }}</label>
                <input class="w-full rounded" type="text" wire:model="selectState">
                <x-jet-input-error for="selectState"/>
            </div>
            <div class="col-span-3">
                <label for="selectCountry">{{ __('Country') }}</label>
               <select class="w-full rounded" wire:model="selectCountry">
                   <option value="">{{ __('select country') }}</option>
                   @foreach ($countries as $country)
                   <option value="{{ $country->id }}">{{ $country->name }}</option>
                   @endforeach
               </select>
                <x-jet-input-error for="selectCountry"/>
            </div>
        </div>
    </x-slot>

        <x-slot name="footer">
            <button class="bg-yellow-500 hover:bg-yellow-400 text-white px-4 py-2 rounded mx-1 "
            wire:click="$set('addStateModal',false)"
            >{{ __('cancel') }}</button>
            <button class="bg-green-500  hover:bg-green-400 text-white px-4 py-2 rounded mx-1" wire:click="addState">{{ __('create') }}</button>
        </x-slot>
  </x-jet-dialog-modal>

  <x-jet-dialog-modal wire:model="editStateModal">
    <x-slot name="title">
        <h1>Add State</h1>
    </x-slot>

    <x-slot name="content">
      <div class="grid grid-cols-6 gap-3">
          <div class="col-span-2">
              <label for="selectState">{{ __('State') }}</label>
              <input class="w-full rounded" type="text" wire:model="selectState">
              <x-jet-input-error for="selectState"/>
          </div>
          <div class="col-span-3">
              <label for="selectCountry">{{ __('Country') }}</label>
             <select class="w-full rounded" wire:model="selectCountry">
                 <option value="">{{ __('select country') }}</option>
                 @foreach ($countries as $country)
                 <option value="{{ $country->id }}"
                    >{{ $country->name }}</option>
                 @endforeach
             </select>
              <x-jet-input-error for="selectCountry"/>
          </div>
      </div>
  </x-slot>

      <x-slot name="footer">
          <button class="bg-yellow-500 hover:bg-yellow-400 text-white px-4 py-2 rounded mx-1 "
          wire:click="$set('editStateModal',false)"
          >{{ __('cancel') }}</button>
          <button class="bg-green-500  hover:bg-green-400 text-white px-4 py-2 rounded mx-1" wire:click="updateState">{{ __('update') }}</button>
      </x-slot>
</x-jet-dialog-modal>
  </div>
