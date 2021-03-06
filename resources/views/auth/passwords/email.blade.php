@extends('layouts.app')

@section('breadcrumb')
<div class="bg-gray-200 p-3 rounded text-sm mb-5">
    <ol class="list-reset flex text-gray-700">
       <li>
            <a class="text-gray-700" href="{{ route('home') }}" title="home">
                {{ __('avored.home') }} >> 
            </a>
        </li>
       <li> <span class="">{{ __('avored.reset_password') }}</span></li>
    </ol>
</div>
@endsection

@section('content')
    <div class="flex items-center justify-center bg-gray-100 py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-lg w-full bg-white rounded-md shadow-md p-6">
            <div>
                <a href="https://avored.com" target="_blank">
                    <img class="mx-auto h-12 w-auto" 
                        src="{{ asset('/images/logo.svg') }}" 
                        alt="AvoRed Ecommerce" />
                </a>
                <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                    {{ __('avored.reset_password') }}
                </h2>
            </div>
            <form class="mt-8" action="{{ route('password.email') }}" method="POST">
                @csrf()
                <input type="hidden" name="remember" value="true" />
                <div class="rounded-md shadow-sm">
                    <div class="mt-3">
                        <avored-input
                            label-text="{{ __('avored.fields.email') }}"
                            label-class="w-full block"
                            input-class="w-full block"
                            field-name="email"
                            input-type="email"
                            error-text="{{ $errors->first('email') }}"
                        ></avored-input>
                    </div>
                </div>
                <div class="mt-6">
                    <button 
                        type="submit" 
                        class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-red-600 hover:bg-red-500 focus:outline-none focus:border-red-700 focus:shadow-outline-red active:bg-red-700"
                    >
                    <span class="absolute left-0 inset-y pl-3">
                        <svg 
                            class="h-5 w-5 text-red-500 group-hover:text-red-400" 
                            fill="currentColor" 
                            viewBox="0 0 20 20"
                        >
                            <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" 
                                clip-rule="evenodd"
                            />
                        </svg>
                    </span>
                        {{ __('avored.reset_password') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
