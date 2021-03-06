@csrf

<div class="mb-4">
    <x-jet-label class="italic my-2 capitalize" value="{{ __('name of country') }}" for="name"/>
    <x-jet-input type="text" name="name" class="w-full" placeholder="{{ __('input name of country')}}"
    value="{{ old('name',$country->name) }}"/>
    <x-jet-input-error for="name" />
</div>

<button type="submit"
class="bg-blue-700 text-white hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
    {{ __($btn) }}

</button>

<a type="button" href="{{ route('countries.index') }}"
class="bg-yellow-700 text-white hover:bg-yellow-800 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
    {{ __('cancel') }}

</a>
