<?php

namespace App\Support;

use Alaouy\Youtube\Facades\Youtube;

/**
 * Datos de un video de YouTube. Usa la API cuando hay clave configurada
 * y, si no la hay o falla, se arma con el ID extraído de la URL.
 */
class YoutubeVideo
{
    public static function id(?string $url): ?string
    {
        if (!$url) {
            return null;
        }

        preg_match('~(?:youtu\.be/|[?&]v=|/embed/|/shorts/)([A-Za-z0-9_-]{11})~', $url, $coincidencia);

        return $coincidencia[1] ?? null;
    }

    public static function info(?string $url): ?object
    {
        $id = self::id($url);
        if (!$id) {
            return null;
        }

        if (config('youtube.key')) {
            try {
                $info = Youtube::getVideoInfo($id);
                if ($info) {
                    return $info;
                }
            } catch (\Throwable $e) {
                // Se usa el respaldo sin API
            }
        }

        return (object) [
            'id' => $id,
            'snippet' => (object) [
                'thumbnails' => (object) [
                    'medium' => (object) ['url' => "https://img.youtube.com/vi/{$id}/mqdefault.jpg"],
                ],
            ],
        ];
    }
}
