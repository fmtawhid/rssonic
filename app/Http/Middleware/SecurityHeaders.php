<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SecurityHeaders
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        // Strict-Transport-Security: Forces HTTPS for 1 year
        $response->header('Strict-Transport-Security', 'max-age=31536000; includeSubDomains');

        // X-Content-Type-Options: Prevents MIME type sniffing
        $response->header('X-Content-Type-Options', 'nosniff');

        // X-Frame-Options: Prevents clickjacking
        $response->header('X-Frame-Options', 'SAMEORIGIN');

        // X-XSS-Protection: Enables XSS filtering
        $response->header('X-XSS-Protection', '1; mode=block');

        // Referrer-Policy: Controls referrer information
        $response->header('Referrer-Policy', 'strict-origin-when-cross-origin');

        // Permissions-Policy: Controls browser features
        $response->header('Permissions-Policy', 'geolocation=(), microphone=(), camera=()');

        // Content-Security-Policy: Mitigates XSS and injection attacks
        $response->header('Content-Security-Policy', "default-src 'self'; script-src 'self' 'unsafe-inline' 'unsafe-eval' https://cdn.tailwindcss.com https://www.googletagmanager.com https://www.google-analytics.com; style-src 'self' 'unsafe-inline' https://fonts.googleapis.com https://cdnjs.cloudflare.com; font-src 'self' https://fonts.gstatic.com https://cdnjs.cloudflare.com; img-src 'self' data: https:; connect-src 'self' https://www.google-analytics.com; frame-ancestors 'self';");

        // Cache-Control: Set appropriate cache headers
        if (!$response->headers->has('Cache-Control')) {
            if ($request->is('assets/*')) {
                // Cache static assets for 1 year
                $response->header('Cache-Control', 'public, max-age=31536000, immutable');
            } else {
                // Don't cache HTML pages by default
                $response->header('Cache-Control', 'no-cache, no-store, must-revalidate, private');
            }
        }

        return $response;
    }
}
