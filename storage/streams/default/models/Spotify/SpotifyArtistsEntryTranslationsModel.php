<?php namespace Anomaly\Streams\Platform\Model\Spotify;

use Anomaly\Streams\Platform\Entry\EntryTranslationsModel;

class SpotifyArtistsEntryTranslationsModel extends EntryTranslationsModel
{

    protected $cacheMinutes = 99999;

    protected $table = 'spotify_artists_translations';
}
