<div class="w-full float-left px-4 mx-4 pt-4 pb-16">
    <x-admin.title name="General Settings"/>
    <div>
        <div class=" shadow-md sm:rounded-lg">
        </div>
    </div>

    <form wire:submit="updateSettings" class="pt-8 max-w-2xl">
        <div class="grid grid-cols-3 gap-4">
            <div class="h-8 col-span-1 grid items-center">
                <label class="block uppercase font-semibold text-xs text-gray-900" for="site_title">
                    Site Title
                </label>
            </div>

            <input
                class="col-span-2 border border-blue-400 focus:outline-none focus:ring-2 focus:ring-blue-500 h-8 px-2
                    rounded-md"
                type="text"
                name="site_title"
                id="site_title"
                required
                autofocus
            >
            @error('site_title')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
            <div class="h-8 col-span-1 grid items-center">
                <label class="block uppercase font-semibold text-xs text-gray-900" for="site_description">
                    Tagline
                </label>
            </div>
            <input
                class="border border-blue-400 focus:outline-none focus:ring-2 focus:ring-blue-500 px-2 h-8 col-span-2
                    rounded-md"
                type="text"
                name="site_description"
                id="site_description"
                required
                autofocus
            >
            @error('site_description')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror

            <div class="h-8 col-span-1 grid items-center">
                <label class="block uppercase font-semibold text-xs text-gray-900" for="site_address">
                    Site Address (URL)
                </label>
            </div>
            <input
                class="border border-blue-400 focus:outline-none focus:ring-2 focus:ring-blue-500 px-2 h-8 col-span-2
                    rounded-md"
                type="text"
                name="site_address"
                id="site_address"
                required
            >
            @error('site_address')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror

            <div class="h-8 col-span-1 grid items-center">
                <label class="block uppercase font-semibold text-xs text-gray-900" for="admin_email">
                    Administration Email Address
                </label>
            </div>
            <div class="col-span-2">
                <input
                    class="border border-blue-400 focus:outline-none focus:ring-2 focus:ring-blue-500 px-2 h-8 w-full
                    rounded-md"
                    type="text"
                    name="admin_email"
                    id="admin_email"
                    required
                >

                @error('admin_email')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror


                <p class="text-xs text-gray-500 mt-1">
                    This address is used for admin purposes. If you change this, an email will be sent to your new
                    address
                    to confirm it. <strong>The new address will not become active until confirmed.</strong>
                </p>

            </div>
            <div class="h-8 col-span-1 grid items-center">
            <span class="block uppercase font-semibold text-xs text-gray-900">
                Membership
            </span>
            </div>
            <div class="col-span-2 flex items-center space-x-2">
                <input
                    class="border border-blue-400 focus:outline-none focus:ring-2 focus:ring-blue-500 p-2
                        rounded-md"
                    type="checkbox"
                    name="membership"
                    id="membership"
                    required
                >
                <label for="membership">
                    Anyone can register
                </label>
            </div>
            @error('admin_email')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror

            <div class="h-8 col-span-1 grid items-center">
                <label class="block uppercase font-semibold text-xs text-gray-900" for="new_user">
                    New User Default Role
                </label>
            </div>
            <div class="col-span-2">
                <select
                    class="border border-blue-400 focus:outline-none focus:ring-2 focus:ring-blue-500 px-2 h-8
                        rounded-md"
                    type="text"
                    name="new_user"
                    id="new_user"
                    required
                >
                    <option selected value="subscriber">Subscriber</option>
                    <option value="contributor">Contributor</option>
                    <option value="author">Author</option>
                    <option value="editor">Editor</option>
                    <option value="administrator">Administrator</option>
                </select>

                @error('new_user')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="h-8 col-span-1 grid items-center">
                <label class="block uppercase font-semibold text-xs text-gray-900" for="site_language">
                    Site Language
                </label>
            </div>

            <div class="col-span-2">
                <select
                    class="border border-blue-400 focus:outline-none focus:ring-2 focus:ring-blue-500 px-2 h-8
                        rounded-md"
                    type="text"
                    name="site_language"
                    id="site_language"
                    required
                >
                    <optgroup label="Installed">
                        <option value="" lang="en" selected="selected">English (United States)</option>
                    </optgroup>
                    <optgroup label="Available">
                        @foreach($languages as $language)
                            <option value="{{ $language->language }}">{{ $language->name }}</option>
                        @endforeach
                    </optgroup>
                </select>
                @error('site_language')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="h-8 col-span-1 grid items-center">
                <label class="block uppercase font-semibold text-xs text-gray-900" for="timezone">
                    Timezone
                </label>
            </div>

            <div class="col-span-2">
                <select
                    class="border border-blue-400 focus:outline-none focus:ring-2 focus:ring-blue-500 px-2 h-8
                        rounded-md"
                    type="text"
                    name="timezone"
                    id="timezone"
                    required
                >
                    @foreach($continents as $continent)
                        <optgroup label="{{ $continent }}">
                            @foreach($timezones as $timezone)
                                @if ($timezone->continent === $continent)
                                    <option
                                        @if($timezone->timezone === 'UTC') selected @endif
                                    value="{{$continent.'/'.$timezone->timezone}}">{{ $timezone->timezone }}
                                    </option>
                                @endif
                            @endforeach
                        </optgroup>
                    @endforeach
                </select>
                <p class="text-xs text-gray-500 mt-1">
                    Choose either a city in the same timezone as you or a UTC (Coordinated Universal Time) time offset.
                </p>
                <p class="text-xs text-gray-500 mt-1">Universal time is <code>2023-11-28 17:53:19</code>.</p>
                @error('timezone')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>


            <div class="h-8 col-span-1 grid items-center">
                <label class="block uppercase font-semibold text-xs text-gray-900" for="site_language">
                    Date Format
                </label>
            </div>

            <div class="col-span-2 col-start-2 grid grid-cols-2 items-center space-x-2">
                <label class="grid grid-cols-2 col-span-2 items-center ">
                    <div>
                        <input
                            class="accent-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500"
                            type="radio"
                            name="membership"
                            id="membership"
                            required
                        >
                        <span>November 28, 2023</span>
                    </div>
                    <span class="col-start-2 text-center w-1/3 bg-gray-300 h-7 py-1 rounded-md">F j, Y</span>
                </label>
            </div>

            <div class="col-span-2 col-start-2 grid grid-cols-2 items-center space-x-2 -mt-2">
                <label class="grid grid-cols-2 col-span-2 items-center ">
                    <div>
                        <input
                            class="accent-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500"
                            type="radio"
                            name="membership"
                            id="membership"
                            required
                        >
                        <span>22023-11-28</span>
                    </div>
                    <span class="col-start-2 text-center w-1/3 bg-gray-300 h-7 py-1 rounded-md">Y-m-d</span>
                </label>
            </div>

            <div class="col-span-2 col-start-2 grid grid-cols-2 items-center space-x-2 -mt-2">
                <label class="grid grid-cols-2 col-span-2 items-center ">
                    <div>
                        <input
                            class="accent-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500"
                            type="radio"
                            name="membership"
                            id="membership"
                            required
                        >
                        <span>11/28/2023</span>
                    </div>
                    <span class="col-start-2 text-center w-1/3 bg-gray-300 h-7 py-1 rounded-md">m/d/Y</span>
                </label>
            </div>

            <div class="col-span-2 col-start-2 grid grid-cols-2 items-center space-x-2 -mt-2">
                <label class="grid grid-cols-2 col-span-2 items-center ">
                    <div>
                        <input
                            class="accent-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500"
                            type="radio"
                            name="membership"
                            id="membership"
                            required
                        >
                        <span>28/11/2023</span>
                    </div>
                    <span class="col-start-2 text-center w-1/3 bg-gray-300 h-7 py-1 rounded-md">d/m/Y</span>
                </label>
            </div>

            <div class="col-span-2 col-start-2 grid grid-cols-2 items-center space-x-2 -mt-2">
                <label class="grid grid-cols-2 col-span-2 items-center ">
                    <div>
                        <input
                            class="accent-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500"
                            type="radio"
                            name="membership"
                            id="membership"
                            required
                        >
                        <span>Custom:</span>
                    </div>
                    <input
                        class="col-start-2 w-1/3 border border-blue-400 focus:outline-none focus:ring-2
                            focus:ring-blue-500 h-7 px-2 rounded-md"
                        type="text"
                        name="site_title"
                    >
                </label>
            </div>

        </div>
        <table>
            <tbody>



                <tr>
                    <th scope="row">Time Format</th>
                    <td>
                        <fieldset>
                            <legend class="screen-reader-text"><span>
		Time Format	</span></legend>
                            <label><input type="radio" name="time_format" value="g:i a" checked="checked"> <span
                                    class="date-time-text format-i18n">5:53 pm</span><code>g:i a</code></label><br>
                            <label><input type="radio" name="time_format" value="g:i A"> <span
                                    class="date-time-text format-i18n">5:53 PM</span><code>g:i A</code></label><br>
                            <label><input type="radio" name="time_format" value="H:i"> <span
                                    class="date-time-text format-i18n">17:53</span><code>H:i</code></label><br>
                            <label><input type="radio" name="time_format" id="time_format_custom_radio"
                                          value="\c\u\s\t\o\m"> <span class="date-time-text date-time-custom-text">Custom:<span
                                        class="screen-reader-text"> enter a custom time format in the following field</span></span></label><label
                                for="time_format_custom" class="screen-reader-text">Custom time format:</label><input
                                type="text" name="time_format_custom" id="time_format_custom" value="g:i a"
                                class="small-text"><br>
                            <p><strong>Preview:</strong> <span class="example">5:53 pm</span><span
                                    class="spinner"></span>
                            </p>
                            <p class="date-time-doc"><a
                                    href="https://wordpress.org/documentation/article/customize-date-and-time-format/">Documentation
                                    on date and time formatting</a>.</p>
                        </fieldset>
                    </td>
                </tr>
                <tr>
                    <th scope="row"><label for="start_of_week">Week Starts On</label></th>
                    <td><select name="start_of_week" id="start_of_week">

                            <option value="0">Sunday</option>
                            <option value="1" selected="selected">Monday</option>
                            <option value="2">Tuesday</option>
                            <option value="3">Wednesday</option>
                            <option value="4">Thursday</option>
                            <option value="5">Friday</option>
                            <option value="6">Saturday</option>
                        </select></td>
                </tr>
            </tbody>
        </table>


        <p class="submit"><input type="submit" name="submit" id="submit" class="button button-primary"
                                 value="Save Changes"></p></form>

</div>
