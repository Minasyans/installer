@extends('installer::layouts.master')

@section('template_title')
    {{ __('installer::installer_messages.environment.wizard.templateTitle') }}
@endsection

@section('title')
    {{ __('installer::installer_messages.environment.wizard.title') }}
@endsection

@section('content')

    @error('db-connection')
        <div class="bg-red-50 p-4 rounded flex items-start text-red-600 mt-4 mb-10 shadow-lg">
            <div class="text-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="fill-current w-5 pt-1" viewBox="0 0 24 24"><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm4.597 17.954l-4.591-4.55-4.555 4.596-1.405-1.405 4.547-4.592-4.593-4.552 1.405-1.405 4.588 4.543 4.545-4.589 1.416 1.403-4.546 4.587 4.592 4.548-1.403 1.416z"></path></svg>
            </div>
            <div class=" px-3">
                <h3 class="text-red-800 font-semibold tracking-wider">
                    {{ $message }}
                </h3>
            </div>
        </div>
    @enderror

    <div x-data="{active: 0}">

        <div class="flex justify-between space-x-4 mt-5 mb-10">

            @foreach(config('installer.settings') as $tabTitle => $settings)
                <div x-on:click.prevent="active = {{ $loop->index }}" x-bind:class="{'bg-white': active === {{ $loop->index }}}" class="p-4 rounded-lg shadow cursor-pointer hover:bg-gray-50 w-full">
                    <div class="flex flex-col items-center">
                        @includeIf('installer::icons.' . $tabTitle . '-icon')
                        <span>{{ __(Str::ucfirst($tabTitle)) }}</span>
                    </div>
                </div>
            @endforeach

        </div>

        <form method="post" action="{{ route('Installer::environmentSaveWizard') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            @foreach(config('installer.settings') as $tabTitle => $settings)
                <div class="tab mb-20" x-show.transition.in="active === {{ $loop->index }}">

                    @foreach($settings['fields'] as $name => $field)
                        @if ($tabTitle !== 'application')
                                @include('installer::fields.' . $field['type'],
                               [
                                    'name' => $name,
                                    'label' => $field['label'],
                                    'more' => isset($field['more-info']) ? $field['more-info'] : '',
                                    'value' => isset($envConfig[$field['envKey']]) ? $envConfig[$field['envKey']] : '',
                                    'placeholder' => isset($field['placeholder']) ? $field['placeholder'] : '',
                                    'options' => isset($field['options']) ? $field['options'] : []
                               ])
                        @else
                            <div class="bg-white border border-gray-200" x-data="{selected: null}">
                                <ul class="shadow-box">
                                    @foreach($field as $accordionKey => $content)
                                        <li class="relative border-b border-gray-200">
                                            <button type="button" class="w-full px-8 py-6 text-left" @click="selected !== {{ $loop->iteration}} ? selected = {{ $loop->iteration}} : selected = null">
                                                <div class="flex items-center justify-between">
                                                    <span>{{ __($accordionKey) }}</span>
                                                </div>
                                            </button>

                                            <div class="relative overflow-hidden transition-all max-h-0 duration-600" style="" x-ref="container{{ $loop->iteration}}" x-bind:style="selected == {{ $loop->iteration}} ? 'max-height: ' + $refs.container{{ $loop->iteration}}.scrollHeight + 'px' : ''">
                                                <div class="p-6">
                                                    @foreach($content as $key => $field)

                                                        @include('installer::fields.' . $field['type'],
                                                       [
                                                            'name' => $key,
                                                            'label' => $field['label'],
                                                            'more' => isset($field['more-info']) ? $field['more-info'] : '',
                                                            'value' => isset($envConfig[$field['envKey']]) ? $envConfig[$field['envKey']] : '',
                                                            'placeholder' => isset($field['placeholder']) ? $field['placeholder'] : '',
                                                            'options' => isset($field['options']) ? $field['options'] : []
                                                       ])

                                                    @endforeach
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    @endforeach
                </div>
            @endforeach

            <div class="fixed bottom-0 left-0 right-0 py-5 bg-white shadow-md">
                <div class="max-w-3xl mx-auto px-4">
                    <div class="flex justify-between">
                        <div class="w-1/2">
                            <button
                                x-show="active > 0"
                                @click="active--"
                                type="button"
                                class="w-32 focus:outline-none py-2 px-5 rounded-lg shadow-sm text-center text-gray-600 bg-white hover:bg-gray-100 font-medium border"
                            >{{ __('installer::installer_messages.back') }}</button>
                        </div>

                        <div class="w-1/2 text-right">
                            <button x-show.transition.in="active === 0" @click="active = 1" type="button" class="focus:outline-none border border-transparent py-2 px-5 rounded-lg shadow-sm text-center text-white bg-blue-500 hover:bg-blue-600 font-medium">
                                {{ __('installer::installer_messages.environment.wizard.form.buttons.setup_database') }}
                            </button>
                            <button x-show.transition.in="active === 1" @click="active = 2" type="button" class="focus:outline-none border border-transparent py-2 px-5 rounded-lg shadow-sm text-center text-white bg-blue-500 hover:bg-blue-600 font-medium">
                                {{ __('installer::installer_messages.environment.wizard.form.buttons.setup_application') }}
                            </button>
                            <button x-show.transition.in="active === 2" type="submit" class="focus:outline-none border border-transparent py-2 px-5 rounded-lg shadow-sm text-center text-white bg-blue-500 hover:bg-blue-600 font-medium">
                                {{ __('installer::installer_messages.environment.wizard.form.buttons.install') }}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>
@endsection
