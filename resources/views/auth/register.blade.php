<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div>
            <x-input-label for="first_name" :value="__('First Name')" />
            <x-text-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" :value="old('first_name')" required autofocus />
            <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="last_name" :value="__('Last Name')" />
            <x-text-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')" required />
            <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="dob" :value="__('Date of Birth')" />
            <x-text-input id="dob" class="block mt-1 w-full" type="date" name="dob" :value="old('dob')" required />
            <x-input-error :messages="$errors->get('dob')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="mobile" :value="__('Mobile Number')" />
            <x-text-input id="mobile" class="block mt-1 w-full" type="text" name="mobile" :value="old('mobile')" required />
            <x-input-error :messages="$errors->get('mobile')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="country" :value="__('Country')" />
            <select id="country" name="country_id" class="block mt-1 w-full" required>
                <option value="">Select Country</option>
               
            </select>
            <x-input-error :messages="$errors->get('country_id')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="state" :value="__('State')" />
            <select id="state" name="state_id" class="block mt-1 w-full" required>
                <option value="">Select State</option>
            </select>
            <x-input-error :messages="$errors->get('state_id')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="city" :value="__('City')" />
            <select id="city" name="city_id" class="block mt-1 w-full" required>
                <option value="">Select City</option>
            </select>
            <x-input-error :messages="$errors->get('city_id')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="locality" :value="__('Locality')" />
            <x-text-input id="locality" class="block mt-1 w-full" type="text" name="locality" :value="old('locality')" required />
            <x-input-error :messages="$errors->get('locality')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="pincode" :value="__('Pincode')" />
            <x-text-input id="pincode" class="block mt-1 w-full" type="text" name="pincode" :value="old('pincode')" required />
            <x-input-error :messages="$errors->get('pincode')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script>
    //      {
    //     "id": 17,
    //     "name": "South Korea",
    //     "created_at": null,
    //     "updated_at": null
    // }
    
            $(document).ready(function() {
            $.ajax({
                url: '/api/countries',
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    $('#country').empty(); 
                    $('#country').append('<option value="">Select Country</option>'); 

                    $.each(data, function(key, value) {
                        $('#country').append('<option value="'+ value.id +'">'+ value.name +'</option>');
                    });
                },
                error: function(xhr, status, error) {
                    console.log("Error fetching countries: " + error);
                }
            });
        });
        $('#country').on('change', function() {
            var country_id = $(this).val();
            if (country_id) {
                $.ajax({
                    url: '/api/states/' + country_id,
                    type: 'GET',
                    success: function(data) {
                        $('#state').empty().append('<option value="">Select State</option>');

                        $.each(data, function(key, value) {
                            // console.log(value)
                            $('#state').append('<option value="' + value.id + '">' + value.name + '</option>');
                        });
                    }
                });
            }
        });

        $('#state').on('change', function() {
            var state_id = $(this).val();
            if (state_id) {
                $.ajax({
                    url: '/api/cities/' + state_id,
                    type: 'GET',
                    success: function(data) {
                        $('#city').empty().append('<option value="">Select City</option>');
                        $.each(data, function(key, value) {
                            // console.log(value)
                            $('#city').append('<option value="' + value.id + '">' + value.name + '</option>');
                        });
                    }
                });
            }
        });
    </script>
   
</x-guest-layout>
