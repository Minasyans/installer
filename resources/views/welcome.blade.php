@extends('installer::layouts.master')

@section('template_title')
    {{ trans('installer::installer_messages.welcome.templateTitle') }}
@endsection

@section('title')
    {{ trans('installer::installer_messages.welcome.title') }}
@endsection

@section('content')
    <div class="flex items-center justify-center py-20">
        <h2 class="text-3xl">{{ trans('installer::installer_messages.welcome.message') }}</h2>
    </div>

    <div class="fixed bottom-0 left-0 right-0 py-5 bg-white shadow-md">
        <div class="max-w-3xl mx-auto px-4">
            <div class="flex justify-center">
                <a href="{{ route('Installer::requirements') }}" class="focus:outline-none border border-transparent py-2 px-5 rounded-lg shadow-sm text-center text-white bg-blue-500 hover:bg-blue-600 font-medium">
                    {{ trans('installer::installer_messages.welcome.next') }}
                </a>
            </div>
        </div>
    </div>
@endsection
