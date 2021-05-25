<?php

namespace Minasyans\Installer\Middleware;

use Closure;
use Illuminate\Http\Request;
use Minasyans\Installer\Helpers\RequirementsChecker;

class CheckRequirements
{

    private $requirementChecker;

    /**
     * CheckRequirements constructor.
     * @param RequirementsChecker $checker
     */
    public function __construct(RequirementsChecker $checker)
    {
        $this->requirementChecker = $checker;
    }

    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $phpVersionInfo = $this->requirementChecker->checkPHPversion(config('installer.core.minPhpVersion'));
        $packagesInfo = $this->requirementChecker->check(config('installer.requirements'));

        if ($phpVersionInfo && $packagesInfo) {
            return $next($request);
        } else {
            return redirect(route('Installer::requirements'))->with('error', trans('installer::installer_messages.requirements.errorMessage'));
        }
    }

}
