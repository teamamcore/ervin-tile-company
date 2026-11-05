<?php

declare(strict_types=1);

namespace App\Support;

class TileServices
{
    /**
     * Placeholder service catalog — swap in Ervin Tile Company's real
     * service list, descriptions, and photography before launch.
     *
     * @return array<int, array{slug: string, title: string, summary: string, description: string, highlights: array<int, string>}>
     */
    public static function all(): array
    {
        return [
            [
                'slug' => 'kitchen-backsplashes',
                'title' => 'Kitchen Backsplashes',
                'summary' => 'Custom backsplashes that turn a kitchen into a centerpiece.',
                'description' => 'From classic subway patterns to intricate mosaics and natural stone slabs, we design and install backsplashes that hold up to daily use without sacrificing style.',
                'highlights' => ['Subway, herringbone & mosaic patterns', 'Natural stone & porcelain slabs', 'Precision cuts around outlets & fixtures'],
            ],
            [
                'slug' => 'bathrooms-showers',
                'title' => 'Bathrooms & Showers',
                'summary' => 'Fully tiled showers, surrounds, and floors built to last.',
                'description' => 'Waterproofing matters as much as design. We build showers and bathroom floors with proper substrate prep, slope, and sealing so they look great and stay watertight for decades.',
                'highlights' => ['Full waterproofing systems', 'Curbless & walk-in showers', 'Heated floor installation'],
            ],
            [
                'slug' => 'flooring',
                'title' => 'Flooring',
                'summary' => 'Porcelain, ceramic, and natural stone flooring for any room.',
                'description' => 'Durable, beautiful flooring for kitchens, entryways, and whole-home renovations — laid flat, true, and square with tight, consistent grout lines.',
                'highlights' => ['Porcelain, ceramic & natural stone', 'Large-format tile specialists', 'Radiant floor heating compatible'],
            ],
            [
                'slug' => 'outdoor-patio',
                'title' => 'Outdoor & Patio',
                'summary' => 'Weatherproof tile for patios, pool decks, and outdoor kitchens.',
                'description' => 'We install slip-resistant, freeze-thaw rated tile for outdoor living spaces so your patio or pool deck looks as refined as the inside of your home.',
                'highlights' => ['Slip-resistant & freeze-thaw rated tile', 'Pool decks & outdoor kitchens', 'Proper outdoor drainage & slope'],
            ],
            [
                'slug' => 'mosaics-custom-designs',
                'title' => 'Mosaics & Custom Designs',
                'summary' => 'One-of-a-kind layouts, medallions, and inlays.',
                'description' => 'For clients who want something no one else has — custom mosaics, medallions, and intricate pattern work laid out and installed with meticulous attention to detail.',
                'highlights' => ['Custom medallions & inlays', 'Mixed-material designs', 'Hand-laid mosaic work'],
            ],
            [
                'slug' => 'repair-regrouting',
                'title' => 'Repair & Regrouting',
                'summary' => 'Restore cracked tile, failing grout, and dated grout color.',
                'description' => 'Not every project is a full remodel. We repair cracked or loose tile, regrout worn joints, and refresh grout color to extend the life of your existing tile work.',
                'highlights' => ['Cracked & loose tile repair', 'Regrouting & grout color sealing', 'Caulk & seal refresh'],
            ],
        ];
    }

    /**
     * @return array{slug: string, title: string, summary: string, description: string, highlights: array<int, string>}|null
     */
    public static function find(string $slug): ?array
    {
        foreach (self::all() as $service) {
            if ($service['slug'] === $slug) {
                return $service;
            }
        }

        return null;
    }
}
