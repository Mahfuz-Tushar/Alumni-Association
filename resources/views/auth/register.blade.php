<x-guest-layout >
    <x-auth-card>
        <x-slot name="logo">
            {{-- <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a> --}}
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" style="
                    
    
 
                  " class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>
            <br>
            <!-- department -->
            <div>
                <x-label for="Department" :value="__('Department')" />

                <x-input id="Department" style="
                    
    
 
                  " class="block mt-1 w-full" type="text" name="department" :value="old('Department')" required autofocus />
            </div>
            <br>
            <!-- Session -->
            <div>
                <x-label for="Session" :value="__('Session')" />

                <x-input id="Session" style="
                    
    
 
                  " class="block mt-1 w-full" type="text" name="session" :value="old('Session')" required autofocus />
            </div>
            <br>
            <!-- Address -->
            <div>
                <x-label for="Address" :value="__('Address')" />

                <x-input id="Address" style="
                    
    
 
                  " class="block mt-1 w-full" type="text" name="address" :value="old('Address')" required autofocus />
            </div>
            <br>
            <!-- Passing Year -->
            <div>
                <x-label for="Passing Year" :value="__('Passing Year')" />

                <x-input id="Passing Year" style="
                    
    
 
                  " class="block mt-1 w-full" type="text" name="passing_year" :value="old('Passing Year')" required autofocus />
            </div>
            <br>
            <!-- Gender -->
            <div>
                <x-label for="Gender " :value="__('Gender ')" />
                
                

                
                  <div>
                    <select class="form-control" name="gender" >
                        <option value="">Select Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="others">Others</option>
                    </select>
                    </div>
            </div>
            <br>
            <!-- Current Job -->
            <div>
                <x-label for="Current Job " :value="__('Current Job ')" />

                <x-input id="Current Job " style="
                    
    
 
                  " class="block mt-1 w-full" type="text" name="current_job " :value="old('Current Job ')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
