<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('updated') }}">
                        @csrf
            
                        <!-- Name -->
                        <input type="hidden" name="employee_id" value="{{ $data->id }}">
                        <div>
                            <x-label for="name" :value="__('Name')" />
            
                            <x-input id="designation" class="block mt-1 w-full" type="text" name="designation"  value="{{ $data->name }}"/>
                        </div>

                        <div>
                            <x-label for="designation" :value="__('Designation')" />
            
                            <x-input id="name" class="block mt-1 w-full" type="text" name="name"  value="{{ $data->designation }}"/>
                        </div>

                        <div>
                            <x-label for="designation" :value="__('Address')" />
            
                            <x-input id="address" class="block mt-1 w-full" type="text" name="address"  />
                        </div>

                        <div>
                            <x-label for="designation" :value="__('Phone')" />
            
                            <x-input id="phone" class="block mt-1 w-full" type="text" name="phone"  />
                        </div>

                        <div>
                            <x-label for="designation" :value="__('Email')" />
            
                            <x-input id="email" class="block mt-1 w-full" type="text" name="email"  />
                        </div>
            
            
                        <div class="flex items-center justify-end mt-4">
                            <x-button class="ml-4">
                                Update Employee
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
