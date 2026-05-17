<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class PageVisit extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'path',
        'referrer_url',
        'referrer_domain',
        'source_type',
        'utm_source',
        'utm_medium',
        'utm_campaign',
        'utm_content',
        'utm_term',
        'country',
        'device',
        'browser',
        'os',
        'session_hash',
        'is_conversion',
        'conversion_type',
        'created_at',
    ];

    protected $casts = [
        'is_conversion' => 'boolean',
        'created_at'    => 'datetime',
    ];

    // ─── Scopes ──────────────────────────────────────────

    public function scopePeriod(Builder $query, int $days): Builder
    {
        return $query->where('created_at', '>=', now()->subDays($days)->startOfDay());
    }

    public function scopeToday(Builder $query): Builder
    {
        return $query->whereDate('created_at', today());
    }

    public function scopeConversions(Builder $query): Builder
    {
        return $query->where('is_conversion', true);
    }

    // ─── Referrer classification ─────────────────────────

    /**
     * Map known domains to a readable source name.
     */
    private static array $knownSources = [
        'google'    => ['google.com', 'google.fr', 'google.de', 'google.co.uk', 'google.es', 'google.it', 'google.ca', 'google.be', 'google.ch'],
        'bing'      => ['bing.com'],
        'yahoo'     => ['yahoo.com', 'search.yahoo.com'],
        'facebook'  => ['facebook.com', 'fb.com', 'l.facebook.com', 'lm.facebook.com', 'm.facebook.com'],
        'instagram' => ['instagram.com', 'l.instagram.com'],
        'linkedin'  => ['linkedin.com', 'lnkd.in'],
        'twitter'   => ['twitter.com', 't.co', 'x.com'],
        'youtube'   => ['youtube.com', 'youtu.be'],
        'reddit'    => ['reddit.com', 'old.reddit.com'],
        'tiktok'    => ['tiktok.com'],
    ];

    private static array $searchEngines = ['google', 'bing', 'yahoo'];
    private static array $socialNetworks = ['facebook', 'instagram', 'linkedin', 'twitter', 'youtube', 'reddit', 'tiktok'];

    /**
     * Classify a referrer domain into a source type.
     */
    public static function classifySource(?string $domain, ?string $utmMedium = null): string
    {
        if ($utmMedium) {
            return match (true) {
                str_contains($utmMedium, 'cpc'), str_contains($utmMedium, 'paid'), str_contains($utmMedium, 'ad') => 'paid',
                str_contains($utmMedium, 'social') => 'social',
                str_contains($utmMedium, 'email'), str_contains($utmMedium, 'newsletter') => 'email',
                default => 'referral',
            };
        }

        if (!$domain) {
            return 'direct';
        }

        $cleanDomain = strtolower(preg_replace('/^www\./', '', $domain));

        foreach (self::$knownSources as $name => $domains) {
            if (in_array($cleanDomain, $domains)) {
                if (in_array($name, self::$searchEngines)) return 'organic';
                if (in_array($name, self::$socialNetworks)) return 'social';
            }
        }

        return 'referral';
    }

    /**
     * Get a human-readable label for a referrer domain.
     */
    public static function getSourceLabel(?string $domain): string
    {
        if (!$domain) return 'Direct';

        $cleanDomain = strtolower(preg_replace('/^www\./', '', $domain));

        foreach (self::$knownSources as $name => $domains) {
            if (in_array($cleanDomain, $domains)) {
                return ucfirst($name);
            }
        }

        return $cleanDomain;
    }
}
