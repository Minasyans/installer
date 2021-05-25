@extends('installer::layouts.master')

@section('template_title')
    {{ trans('installer::installer_messages.environment.classic.templateTitle') }}
@endsection

@section('title')
    <i class="fa fa-code fa-fw" aria-hidden="true"></i> {{ trans('installer::installer_messages.environment.classic.title') }}
@endsection

@section('content')

    <form method="post" action="{{ route('Installer::environmentSaveClassic') }}">
        {!! csrf_field() !!}
        <textarea class="textarea" name="envConfig">{{ $envConfig }}</textarea>

        <button type="submit" class="focus:outline-none border border-transparent py-2 px-5 rounded-lg shadow-sm text-center text-white bg-blue-500 hover:bg-blue-600 font-medium">
            {!! trans('installer::installer_messages.environment.classic.save') !!}
        </button>
    </form>

    @if(!isset($environment['errors']))
        <div class="fixed bottom-0 left-0 right-0 py-5 bg-white shadow-md">
            <div class="max-w-3xl mx-auto px-4">
                <div class="flex justify-between">
                    <a href="{{ route('Installer::environmentWizard') }}" class="focus:outline-none py-2 px-5 rounded-lg shadow-sm text-center text-gray-600 bg-white hover:bg-gray-100 font-medium border">
                        {!! trans('installer::installer_messages.environment.classic.back') !!}
                    </a>

                    <a href="{{ route('Installer::database') }}" class="focus:outline-none border border-transparent py-2 px-5 rounded-lg shadow-sm text-center text-white bg-blue-500 hover:bg-blue-600 font-medium">
                        {!! trans('installer::installer_messages.environment.classic.install') !!}
                    </a>
                </div>
            </div>
        </div>
    @endif

@endsection
