<?php

namespace abolfazl\minifier;

use Closure;

class Minifier
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $r = $this->minifyHTML($next($request)->getContent());
        return $next($request)->setContent($r);
    }

    function minifyHTML($htmlString)
    {
        $replace = [
            '<!--(.*?)-->' => '', //remove comments
            "/<\?php/" => '<?php ',
            "/\n([\S])/" => '$1',
            "/\r/" => '', // remove carriage return
            "/\n/" => '', // remove new lines
            "/\t/" => '', // remove tab
            "/\s+/" => ' ', // remove spaces
        ];
        return preg_replace(array_keys($replace), array_values($replace), $htmlString);
    }

}
