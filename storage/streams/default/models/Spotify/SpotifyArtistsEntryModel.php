<?php namespace Anomaly\Streams\Platform\Model\Spotify;

use Anomaly\Streams\Platform\Entry\EntryModel;

class SpotifyArtistsEntryModel extends EntryModel
{

    

    protected $table = 'spotify_artists';

    protected $titleName = 'id';

    public $rules = [
'name' => 'required',
'genre' => 'required',
'bio' => '',
];

    public $dates = ['created_at', 'updated_at'];

    protected $translatedAttributes = ['bio'];

    protected $translationForeignKey = 'entry_id';

    protected $translationModel = 'Anomaly\Streams\Platform\Model\Spotify\SpotifyArtistsEntryTranslationsModel';

    protected $stream = [
'id' => '31',
'namespace' => 'spotify',
'slug' => 'artists',
'prefix' => 'spotify_',
'view_options' => 'a:2:{i:0;s:2:"id";i:1;s:10:"created_at";}',
'title_column' => 'id',
'order_by' => 'id',
'locked' => '0',
'translatable' => '1',
'trashable' => '0',
'assignments' => [
[
'id' => '164',
'sort_order' => '161',
'stream_id' => '31',
'field_id' => '133',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '1',
'translatable' => '0',
'field' => [
'id' => '133',
'namespace' => 'spotify',
'slug' => 'name',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => '133',
'field_id' => '133',
'locale' => 'en',
'name' => 'skrollx.module.spotify::field.name.name',
],
],
],
'translations' => [
[
'id' => '165',
'assignment_id' => '164',
'locale' => 'en',
'label' => 'skrollx.module.spotify::field.name.label',
'placeholder' => 'skrollx.module.spotify::field.name.placeholder',
'instructions' => 'skrollx.module.spotify::field.name.instructions',
],
],
],
[
'id' => '165',
'sort_order' => '162',
'stream_id' => '31',
'field_id' => '134',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '1',
'translatable' => '0',
'field' => [
'id' => '134',
'namespace' => 'spotify',
'slug' => 'genre',
'type' => 'anomaly.field_type.select',
'config' => 'a:1:{s:7:"options";a:2:{s:5:"metal";s:5:"Metal";s:4:"rock";s:4:"Rock";}}',
'locked' => '1',
'translations' => [
[
'id' => '134',
'field_id' => '134',
'locale' => 'en',
'name' => 'skrollx.module.spotify::field.genre.name',
],
],
],
'translations' => [
[
'id' => '166',
'assignment_id' => '165',
'locale' => 'en',
'label' => 'skrollx.module.spotify::field.genre.label',
'placeholder' => 'skrollx.module.spotify::field.genre.placeholder',
'instructions' => 'skrollx.module.spotify::field.genre.instructions',
],
],
],
[
'id' => '166',
'sort_order' => '163',
'stream_id' => '31',
'field_id' => '135',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '0',
'translatable' => '1',
'field' => [
'id' => '135',
'namespace' => 'spotify',
'slug' => 'bio',
'type' => 'anomaly.field_type.wysiwyg',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => '135',
'field_id' => '135',
'locale' => 'en',
'name' => 'skrollx.module.spotify::field.bio.name',
],
],
],
'translations' => [
[
'id' => '167',
'assignment_id' => '166',
'locale' => 'en',
'label' => 'skrollx.module.spotify::field.bio.label',
'placeholder' => 'skrollx.module.spotify::field.bio.placeholder',
'instructions' => 'skrollx.module.spotify::field.bio.instructions',
],
],
],
],
'translations' => [
[
'id' => '31',
'stream_id' => '31',
'locale' => 'en',
'name' => 'skrollx.module.spotify::stream.artists.name',
'description' => 'skrollx.module.spotify::stream.artists.description',
],
],
];

    
}
