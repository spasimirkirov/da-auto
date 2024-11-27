<x-layouts.guest-layout>
    <!-- Session Status -->
    <x-admin.auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="container card pt-2 pt-md-4 w-50">
            <div class="mb-3">
                <label class="form-label" for="email">Email address</label>
                <input name="email" type="email" class="form-control" placeholder="Enter Email">
                <x-admin.input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
            <div class="mb-3">
                <label class="form-label" for="password">Password</label>
                <input name="password" type="password" class="form-control">
                <x-admin.input-error :messages="$errors->get('password')" class="mt-2" />

                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                        href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>

            <div class="d-flex align-items-center justify-content-start mb-4">
                <div class="group-input">
                    <label for="remember_me" class="d-flex align-items-center">
                        <input id="remember_me" type="checkbox"
                            class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                            name="remember">
                        <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                    </label>
                </div>
            </div>
            <div class="mb-2">
                <button class="btn btn-primary" type="submit">Log In</button>
            </div>
        </div>
    </form>
</x-layouts.guest-layout>
