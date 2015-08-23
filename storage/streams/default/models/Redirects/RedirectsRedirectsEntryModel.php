<?php namespace Anomaly\Streams\Platform\Model\Redirects;

use Anomaly\Streams\Platform\Entry\EntryModel;

class RedirectsRedirectsEntryModel extends EntryModel
{

    

    protected $table = 'redirects_redirects';

    protected $titleName = 'from';

    public $rules = [
'from' => 'required|unique:redirects_redirects,from',
'to' => 'required',
'status' => 'required',
'secure' => '',
];

    public $dates = ['created_at', 'updated_at'];

    

    

    

    protected $stream = [
'id' => '18',
'namespace' => 'redirects',
'slug' => 'redirects',
'prefix' => 'redirects_',
'view_options' => 'a:2:{i:0;s:2:"id";i:1;s:10:"created_at";}',
'title_column' => 'from',
'order_by' => 'id',
'locked' => '0',
'translatable' => '0',
'trashable' => '0',
'assignments' => [
[
'id' => '124',
'sort_order' => '124',
'stream_id' => '18',
'field_id' => '97',
'config' => 'a:0:{}',
'unique' => '1',
'required' => '1',
'translatable' => '0',
'field' => [
'id' => '97',
'namespace' => 'redirects',
'slug' => 'from',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => '97',
'field_id' => '97',
'locale' => 'en',
'name' => 'anomaly.module.redirects::field.from.name',
],
],
],
'translations' => [
[
'id' => '124',
'assignment_id' => '124',
'locale' => 'en',
'label' => 'anomaly.module.redirects::field.from.label',
'placeholder' => 'anomaly.module.redirects::field.from.placeholder',
'instructions' => 'anomaly.module.redirects::field.from.instructions',
],
],
],
[
'id' => '125',
'sort_order' => '125',
'stream_id' => '18',
'field_id' => '98',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '1',
'translatable' => '0',
'field' => [
'id' => '98',
'namespace' => 'redirects',
'slug' => 'to',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => '98',
'field_id' => '98',
'locale' => 'en',
'name' => 'anomaly.module.redirects::field.to.name',
],
],
],
'translations' => [
[
'id' => '125',
'assignment_id' => '125',
'locale' => 'en',
'label' => 'anomaly.module.redirects::field.to.label',
'placeholder' => 'anomaly.module.redirects::field.to.placeholder',
'instructions' => 'anomaly.module.redirects::field.to.instructions',
],
],
],
[
'id' => '126',
'sort_order' => '126',
'stream_id' => '18',
'field_id' => '99',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '1',
'translatable' => '0',
'field' => [
'id' => '99',
'namespace' => 'redirects',
'slug' => 'status',
'type' => 'anomaly.field_type.select',
'config' => 'a:2:{s:13:"default_value";s:3:"301";s:7:"options";a:2:{i:301;s:49:"anomaly.module.redirects::field.status.option.301";i:302;s:49:"anomaly.module.redirects::field.status.option.302";}}',
'locked' => '1',
'translations' => [
[
'id' => '99',
'field_id' => '99',
'locale' => 'en',
'name' => 'anomaly.module.redirects::field.status.name',
],
],
],
'translations' => [
[
'id' => '126',
'assignment_id' => '126',
'locale' => 'en',
'label' => 'anomaly.module.redirects::field.status.label',
'placeholder' => 'anomaly.module.redirects::field.status.placeholder',
'instructions' => 'anomaly.module.redirects::field.status.instructions',
],
],
],
[
'id' => '127',
'sort_order' => '127',
'stream_id' => '18',
'field_id' => '100',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '0',
'translatable' => '0',
'field' => [
'id' => '100',
'namespace' => 'redirects',
'slug' => 'secure',
'type' => 'anomaly.field_type.boolean',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => '100',
'field_id' => '100',
'locale' => 'en',
'name' => 'anomaly.module.redirects::field.secure.name',
],
],
],
'translations' => [
[
'id' => '127',
'assignment_id' => '127',
'locale' => 'en',
'label' => 'anomaly.module.redirects::field.secure.label',
'placeholder' => 'anomaly.module.redirects::field.secure.placeholder',
'instructions' => 'anomaly.module.redirects::field.secure.instructions',
],
],
],
],
'translations' => [
[
'id' => '18',
'stream_id' => '18',
'locale' => 'en',
'name' => 'anomaly.module.redirects::stream.redirects.name',
'description' => 'anomaly.module.redirects::stream.redirects.description',
],
],
];

    
}
