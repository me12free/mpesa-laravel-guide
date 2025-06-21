// Example: 2FA Middleware
namespace App\Http\Middleware;

use Closure;

class Ensure2FAEnabled
{
    public function handle($request, Closure $next)
    {
        if (!auth()->user() || !auth()->user()->has2faEnabled()) {
            return redirect()->route('2fa.setup');
        }
        return $next($request);
    }
}
