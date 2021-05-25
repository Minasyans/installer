@extends('installer::layouts.master')

@section('template_title')
    {{ trans('installer::installer_messages.environment.menu.templateTitle') }}
@endsection

@section('title')
    <i class="fa fa-cog fa-fw" aria-hidden="true"></i>
    {!! trans('installer::installer_messages.environment.menu.title') !!}
@endsection

@section('content')

    <div class="flex items-center justify-center py-20">
        <h2 class="text-2xl">{!! trans('installer::installer_messages.environment.menu.desc') !!}</h2>
    </div>

    <div class="fixed bottom-0 left-0 right-0 py-5 bg-white shadow-md">
        <div class="max-w-3xl mx-auto px-4">
            <div class="flex justify-center space-x-4">
                <a href="{{ route('Installer::environmentWizard') }}" class="focus:outline-none border border-transparent py-2 px-5 rounded-lg shadow-sm text-center text-white bg-blue-500 hover:bg-blue-600 font-medium">
                    {{ trans('installer::installer_messages.environment.menu.wizard-button') }}
                </a>

                <a href="{{ route('Installer::environmentClassic') }}" class="focus:outline-none border border-transparent py-2 px-5 rounded-lg shadow-sm text-center text-white bg-blue-500 hover:bg-blue-600 font-medium">
                    {{ trans('installer::installer_messages.environment.menu.classic-button') }}
                </a>
            </div>
        </div>
    </div>

@endsection
