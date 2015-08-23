<?php namespace Anomaly\Streams\Platform\Model\UrlLinkType;

use Anomaly\Streams\Platform\Entry\EntryModel;

class UrlLinkTypeUrlsEntryModel extends EntryModel
{

    

    protected $table = 'url_link_type_urls';

    protected $titleName = 'title';

    public $rules = [
'title' => 'required',
'url' => 'required',
'description' => '',
];

    public $dates = ['created_at', 'updated_at'];

    protected $translatedAttributes = ['title', 'description'];

    protected $translationForeignKey = 'entry_id';

    protected $translationModel = 'Anomaly\Streams\Platform\Model\UrlLinkType\UrlLinkTypeUrlsEntryTranslationsModel';

    protected $stream = [
'id' => '28',
'namespace' => 'url_link_type',
'slug' => 'urls',
'prefix' => 'url_link_type_',
'view_options' => 'a:2:{i:0;s:2:"id";i:1;s:10:"created_at";}',
'title_column' => 'title',
'order_by' => 'id',
'locked' => '0',
'translatable' => '1',
'trashable' => '0',
'assignments' => [
[
'id' => '157',
'sort_order' => '157',
'stream_id' => '28',
'field_id' => '126',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '1',
'translatable' => '1',
'field' => [
'id' => '126',
'namespace' => 'url_link_type',
'slug' => 'title',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => '126',
'field_id' => '126',
'locale' => 'en',
'name' => 'anomaly.extension.url_link_type::field.title.name',
],
],
],
'translations' => [
[
'id' => '157',
'assignment_id' => '157',
'locale' => 'en',
'label' => 'anomaly.extension.url_link_type::field.title.label',
'placeholder' => 'anomaly.extension.url_link_type::field.title.placeholder',
'instructions' => 'anomaly.extension.url_link_type::field.title.instructions',
],
],
],
[
'id' => '158',
'sort_order' => '158',
'stream_id' => '28',
'field_id' => '127',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '1',
'translatable' => '0',
'field' => [
'id' => '127',
'namespace' => 'url_link_type',
'slug' => 'url',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => '127',
'field_id' => '127',
'locale' => 'en',
'name' => 'anomaly.extension.url_link_type::field.url.name',
],
],
],
'translations' => [
[
'id' => '158',
'assignment_id' => '158',
'locale' => 'en',
'label' => 'anomaly.extension.url_link_type::field.url.label',
'placeholder' => 'anomaly.extension.url_link_type::field.url.placeholder',
'instructions' => 'anomaly.extension.url_link_type::field.url.instructions',
],
],
],
[
'id' => '159',
'sort_order' => '159',
'stream_id' => '28',
'field_id' => '128',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '0',
'translatable' => '1',
'field' => [
'id' => '128',
'namespace' => 'url_link_type',
'slug' => 'description',
'type' => 'anomaly.field_type.textarea',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => '128',
'field_id' => '128',
'locale' => 'en',
'name' => 'anomaly.extension.url_link_type::field.description.name',
],
],
],
'translations' => [
[
'id' => '159',
'assignment_id' => '159',
'locale' => 'en',
'label' => 'anomaly.extension.url_link_type::field.description.label',
'placeholder' => 'anomaly.extension.url_link_type::field.description.placeholder',
'instructions' => 'anomaly.extension.url_link_type::field.description.instructions',
],
],
],
],
'translations' => [
[
'id' => '28',
'stream_id' => '28',
'locale' => 'en',
'name' => 'anomaly.extension.url_link_type::stream.urls.name',
'description' => 'anomaly.extension.url_link_type::stream.urls.description',
],
],
];

    
}
