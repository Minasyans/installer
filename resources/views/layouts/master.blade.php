<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>
        @if (trim($__env->yieldContent('template_title')))
            @yield('template_title') |
        @endif
        {{ trans('installer::installer_messages.title') }}
    </title>
    <link rel="icon" type="image/png" href="{{ asset('installer/img/favicon/favicon-16x16.png') }}" sizes="16x16"/>
    <link rel="icon" type="image/png" href="{{ asset('installer/img/favicon/favicon-32x32.png') }}" sizes="32x32"/>
    <link rel="icon" type="image/png" href="{{ asset('installer/img/favicon/favicon-96x96.png') }}" sizes="96x96"/>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ url(mix('js/app.js')) }}" defer></script>

    @yield('style')

    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body class="antialiased sans-serif bg-gray-200">
<div class="max-w-3xl mx-auto px-4 py-10">
    <!-- Top Navigation -->

    <div class="py-5">
        <h1 class="font-semibold text-2xl text-center">@yield('title')</h1>
    </div>

    <div class="w-full py-6">
        <div class="flex">
            <a href="{{ route('Installer::welcome') }}" class="w-1/4">
                <div class="relative mb-2">
                    <div class="w-10 h-10 mx-auto {{ isActive('Installer::welcome') }} rounded-full text-lg text-white flex items-center">
                        <span class="text-center text-white w-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-full {{ iconIsActive('Installer::welcome') }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                        </span>
                    </div>
                </div>
            </a>

            <a href="{{ route('Installer::requirements') }}" class="w-1/4">
                <div class="relative mb-2">
                    <div class="absolute flex align-center items-center align-middle content-center" style="width: calc(100% - 2.5rem - 1rem); top: 50%; transform: translate(-50%, -50%)">
                        <div class="w-full bg-gray-300 rounded items-center align-middle align-center flex-1">
                            <div class="@if(Route::currentRouteName() == 'Installer::requirements') w-full @else w-0 @endif bg-green-300 py-1 rounded"></div>
                        </div>
                    </div>

                    <div class="w-10 h-10 mx-auto {{ isActive('Installer::requirements') }} rounded-full text-lg text-white flex items-center">
                        <span class="text-center text-white w-full">
                            <svg class="w-full fill-current {{ iconIsActive('Installer::requirements') }}" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                <path class="heroicon-ui" d="M5 3h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5c0-1.1.9-2 2-2zm14 8V5H5v6h14zm0 2H5v6h14v-6zM8 9a1 1 0 1 1 0-2 1 1 0 0 1 0 2zm0 8a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                            </svg>
                        </span>
                    </div>
                </div>
            </a>

            <a href="{{ route('Installer::permissions') }}" class="w-1/4">
                <div class="relative mb-2">
                    <div class="absolute flex align-center items-center align-middle content-center" style="width: calc(100% - 2.5rem - 1rem); top: 50%; transform: translate(-50%, -50%)">
                        <div class="w-full bg-gray-300 rounded items-center align-middle align-center flex-1">
                            <div class="@if(Route::currentRouteName() == 'Installer::permissions') w-full @else w-0 @endif bg-green-300 py-1 rounded"></div>
                        </div>
                    </div>

                    <div class="w-10 h-10 mx-auto {{ isActive('Installer::permissions') }} rounded-full text-lg text-white flex items-center">
                        <span class="text-center text-white w-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-full {{ iconIsActive('Installer::permissions') }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z" />
                            </svg>
                        </span>
                    </div>
                </div>
            </a>

            <a href="{{ route('Installer::environment') }}" class="w-1/4">
                <div class="relative mb-2">
                    <div class="absolute flex align-center items-center align-middle content-center" style="width: calc(100% - 2.5rem - 1rem); top: 50%; transform: translate(-50%, -50%)">
                        <div class="w-full bg-gray-300 rounded items-center align-middle align-center flex-1">
                            <div class="@if(Route::currentRouteName() == 'Installer::environment') w-full @else w-0 @endif bg-green-300 py-1 rounded"></div>
                        </div>
                    </div>

                    <div class="w-10 h-10 mx-auto {{ isActive('Installer::environment') }} rounded-full text-lg text-white flex items-center">
                        <span class="text-center text-white w-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-full {{ iconIsActive('Installer::environment') }}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </span>
                    </div>
                </div>
            </a>

        </div>
    </div>
    <!-- /Top Navigation -->

    @yield('content')

    <!-- Bottom Navigation -->
{{--    <div class="fixed bottom-0 left-0 right-0 py-5 bg-white shadow-md" x-show="step != 'complete'">--}}
{{--        <div class="max-w-3xl mx-auto px-4">--}}
{{--            <div class="flex justify-between">--}}
{{--                <div class="w-1/2">--}}
{{--                    <button--}}
{{--                        x-show="step > 1"--}}
{{--                        @click="step--"--}}
{{--                        class="w-32 focus:outline-none py-2 px-5 rounded-lg shadow-sm text-center text-gray-600 bg-white hover:bg-gray-100 font-medium border"--}}
{{--                    >Previous</button>--}}
{{--                </div>--}}

{{--                <div class="w-1/2 text-right">--}}
{{--                    <button--}}
{{--                        x-show="step < 3"--}}
{{--                        @click="step++"--}}
{{--                        class="w-32 focus:outline-none border border-transparent py-2 px-5 rounded-lg shadow-sm text-center text-white bg-blue-500 hover:bg-blue-600 font-medium"--}}
{{--                    >Next</button>--}}

{{--                    <button--}}
{{--                        @click="step = 'complete'"--}}
{{--                        x-show="step === 3"--}}
{{--                        class="w-32 focus:outline-none border border-transparent py-2 px-5 rounded-lg shadow-sm text-center text-white bg-blue-500 hover:bg-blue-600 font-medium"--}}
{{--                    >Complete</button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!-- / Bottom Navigation https://placehold.co/300x300/e2e8f0/cccccc -->
</div>
{{--<div class="master">--}}
{{--    <div class="box">--}}
{{--        <div class="header">--}}
{{--            <h1 class="header__title">@yield('title')</h1>--}}
{{--        </div>--}}
{{--        <ul class="step">--}}
{{--            <li class="step__divider"></li>--}}
{{--            <li class="step__item {{ isActive('Installer::final') }}">--}}
{{--                <i class="step__icon fa fa-server" aria-hidden="true"></i>--}}
{{--            </li>--}}
{{--            <li class="step__divider"></li>--}}
{{--            <li class="step__item {{ isActive('Installer::environment')}} {{ isActive('Installer::environmentWizard')}} {{ isActive('Installer::environmentClassic')}}">--}}
{{--                @if(Request::is('install/environment') || Request::is('install/environment/wizard') || Request::is('install/environment/classic') )--}}
{{--                    <a href="{{ route('Installer::environment') }}">--}}
{{--                        <i class="step__icon fa fa-cog" aria-hidden="true"></i>--}}
{{--                    </a>--}}
{{--                @else--}}
{{--                    <i class="step__icon fa fa-cog" aria-hidden="true"></i>--}}
{{--                @endif--}}
{{--            </li>--}}
{{--            <li class="step__divider"></li>--}}
{{--            <li class="step__item {{ isActive('Installer::permissions') }}">--}}
{{--                @if(Request::is('install/permissions') || Request::is('install/environment') || Request::is('install/environment/wizard') || Request::is('install/environment/classic') )--}}
{{--                    <a href="{{ route('Installer::permissions') }}">--}}
{{--                        <i class="step__icon fa fa-key" aria-hidden="true"></i>--}}
{{--                    </a>--}}
{{--                @else--}}
{{--                    <i class="step__icon fa fa-key" aria-hidden="true"></i>--}}
{{--                @endif--}}
{{--            </li>--}}
{{--            <li class="step__divider"></li>--}}
{{--            <li class="step__item {{ isActive('Installer::requirements') }}">--}}
{{--                @if(Request::is('install') || Request::is('install/requirements') || Request::is('install/permissions') || Request::is('install/environment') || Request::is('install/environment/wizard') || Request::is('install/environment/classic') )--}}
{{--                    <a href="{{ route('Installer::requirements') }}">--}}
{{--                        <i class="step__icon fa fa-list" aria-hidden="true"></i>--}}
{{--                    </a>--}}
{{--                @else--}}
{{--                    <i class="step__icon fa fa-list" aria-hidden="true"></i>--}}
{{--                @endif--}}
{{--            </li>--}}
{{--            <li class="step__divider"></li>--}}
{{--            <li class="step__item {{ isActive('Installer::welcome') }}">--}}
{{--                @if(Request::is('install') || Request::is('install/requirements') || Request::is('install/permissions') || Request::is('install/environment') || Request::is('install/environment/wizard') || Request::is('install/environment/classic') )--}}
{{--                    <a href="{{ route('Installer::welcome') }}">--}}
{{--                        <i class="step__icon fa fa-home" aria-hidden="true"></i>--}}
{{--                    </a>--}}
{{--                @else--}}
{{--                    <i class="step__icon fa fa-home" aria-hidden="true"></i>--}}
{{--                @endif--}}
{{--            </li>--}}
{{--            <li class="step__divider"></li>--}}
{{--        </ul>--}}
{{--        <div class="main">--}}
{{--            @if (session('message'))--}}
{{--                <p class="alert text-center">--}}
{{--                    <strong>--}}
{{--                        @if(is_array(session('message')))--}}
{{--                            {{ session('message')['message'] }}--}}
{{--                        @else--}}
{{--                            {{ session('message') }}--}}
{{--                        @endif--}}
{{--                    </strong>--}}
{{--                </p>--}}
{{--            @endif--}}
{{--            @if(session()->has('errors'))--}}
{{--                <div class="alert alert-danger" id="error_alert">--}}
{{--                    <button type="button" class="close" id="close_alert" data-dismiss="alert" aria-hidden="true">--}}
{{--                        <i class="fa fa-close" aria-hidden="true"></i>--}}
{{--                    </button>--}}
{{--                    <h4>--}}
{{--                        <i class="fa fa-fw fa-exclamation-triangle" aria-hidden="true"></i>--}}
{{--                        {{ trans('installer_messages.forms.errorTitle') }}--}}
{{--                    </h4>--}}
{{--                    <ul>--}}
{{--                        @foreach($errors->all() as $error)--}}
{{--                            <li>{{ $error }}</li>--}}
{{--                        @endforeach--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            @endif--}}
{{--            @yield('container')--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
@yield('scripts')
{{--<script type="text/javascript">--}}
{{--    var x = document.getElementById('error_alert');--}}
{{--    var y = document.getElementById('close_alert');--}}
{{--    y.onclick = function() {--}}
{{--        x.style.display = "none";--}}
{{--    };--}}
{{--</script>--}}
</body>
</html>
