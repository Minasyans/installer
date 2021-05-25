@extends('installer::layouts.master')

@section('template_title')
    {{ __('installer::installer_messages.final.templateTitle') }}
@endsection

@section('title')
    <i class="fa fa-flag-checkered fa-fw" aria-hidden="true"></i>
    {{ __('installer::installer_messages.final.title') }}
@endsection

@section('content')

    <div class="mb-20">
        @if(session('message')['dbOutputLog'])
            <div class="mt-5 mb-3">
                <div class="font-weight-bold text-md">
                    {{ __('installer::installer_messages.final.migration') }}
                </div>
            </div>
            @include('installer::partials.console', [
                'message' => session('message')['dbOutputLog']
            ])
        @endif

        <div class="mt-5 mb-3">
            <div class="font-weight-bold text-md">
                {{ __('installer::installer_messages.final.console') }}
            </div>
        </div>
        @include('installer::partials.console', [
            'message' => $finalMessages
        ])

        <div class="mt-5 mb-3">
            <div class="font-weight-bold text-md">
                {{ __('installer::installer_messages.final.log') }}
            </div>
        </div>
        @include('installer::partials.console', [
            'message' => $finalStatusMessage
        ])

        <div class="mt-5 mb-3">
            <div class="font-weight-bold text-md">
                {{ __('installer::installer_messages.final.env') }}
            </div>
        </div>
        @include('installer::partials.console', [
            'message' => $finalEnvFile
        ])
    </div>

    <div class="fixed bottom-0 left-0 right-0 py-5 bg-white shadow-md">
        <div class="max-w-3xl mx-auto px-4">
            <div class="flex justify-center">
                <a href="{{ url('/') }}" class="focus:outline-none border border-transparent py-2 px-5 rounded-lg shadow-sm text-center text-white bg-blue-500 hover:bg-blue-600 font-medium">
                    {{ __('installer::installer_messages.final.exit') }}
                </a>
            </div>
        </div>
    </div>

@endsection
