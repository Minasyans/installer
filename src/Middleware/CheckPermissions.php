<?php

namespace Minasyans\Installer\Middleware;

use Closure;
use Illuminate\Http\Request;
use Minasyans\Installer\Helpers\PermissionsChecker;

class CheckPermissions
{

    private $permissionChecker;

    /**
     * CheckPermissions constructor.
     * @param PermissionsChecker $checker
     */
    public function __construct(PermissionsChecker $checker)
    {
        $this->permissionChecker = $checker;
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
        $permissionInfo = $this->permissionChecker->check(config('installer.permissions'));

        if ($permissionInfo) {
            return $next($request);
        } else {
            return redirect(route('Installer::permissions'))->with('error', trans('installer::installer_messages.permissions.errorMessage'));
        }
    }

}
