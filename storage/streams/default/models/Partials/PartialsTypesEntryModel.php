<?php namespace Anomaly\Streams\Platform\Model\Partials;

use Anomaly\Streams\Platform\Entry\EntryModel;

class PartialsTypesEntryModel extends EntryModel
{

    

    protected $table = 'partials_types';

    protected $titleName = 'name';

    public $rules = [
'name' => 'required|unique:partials_types,name',
'slug' => 'required|unique:partials_types,slug',
'layout' => 'required',
'description' => '',
'css' => '',
'js' => '',
];

    public $dates = ['created_at', 'updated_at'];

    

    

    

    protected $stream = [
'id' => '13',
'namespace' => 'partials',
'slug' => 'types',
'prefix' => 'partials_',
'view_options' => 'a:2:{i:0;s:2:"id";i:1;s:10:"created_at";}',
'title_column' => 'name',
'order_by' => 'id',
'locked' => '0',
'translatable' => '0',
'trashable' => '0',
'assignments' => [
[
'id' => '82',
'sort_order' => '82',
'stream_id' => '13',
'field_id' => '63',
'config' => 'a:0:{}',
'unique' => '1',
'required' => '1',
'translatable' => '0',
'field' => [
'id' => '63',
'namespace' => 'partials',
'slug' => 'name',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => '63',
'field_id' => '63',
'locale' => 'en',
'name' => 'anomaly.module.partials::field.name.name',
],
],
],
'translations' => [
[
'id' => '82',
'assignment_id' => '82',
'locale' => 'en',
'label' => 'anomaly.module.partials::field.name.label',
'placeholder' => 'anomaly.module.partials::field.name.placeholder',
'instructions' => 'anomaly.module.partials::field.name.instructions',
],
],
],
[
'id' => '83',
'sort_order' => '83',
'stream_id' => '13',
'field_id' => '65',
'config' => 'a:1:{s:4:"type";s:1:"_";}',
'unique' => '1',
'required' => '1',
'translatable' => '0',
'field' => [
'id' => '65',
'namespace' => 'partials',
'slug' => 'slug',
'type' => 'anomaly.field_type.slug',
'config' => 'a:1:{s:7:"slugify";s:4:"name";}',
'locked' => '1',
'translations' => [
[
'id' => '65',
'field_id' => '65',
'locale' => 'en',
'name' => 'anomaly.module.partials::field.slug.name',
],
],
],
'translations' => [
[
'id' => '83',
'assignment_id' => '83',
'locale' => 'en',
'label' => 'anomaly.module.partials::field.slug.label',
'placeholder' => 'anomaly.module.partials::field.slug.placeholder',
'instructions' => 'anomaly.module.partials::field.slug.instructions',
],
],
],
[
'id' => '84',
'sort_order' => '84',
'stream_id' => '13',
'field_id' => '68',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '1',
'translatable' => '0',
'field' => [
'id' => '68',
'namespace' => 'partials',
'slug' => 'layout',
'type' => 'anomaly.field_type.editor',
'config' => 'a:2:{s:4:"mode";s:4:"twig";s:13:"default_value";s:39:"<h1>{{ partial.entry.field_slug }}</h1>";}',
'locked' => '1',
'translations' => [
[
'id' => '68',
'field_id' => '68',
'locale' => 'en',
'name' => 'anomaly.module.partials::field.layout.name',
],
],
],
'translations' => [
[
'id' => '84',
'assignment_id' => '84',
'locale' => 'en',
'label' => 'anomaly.module.partials::field.layout.label',
'placeholder' => 'anomaly.module.partials::field.layout.placeholder',
'instructions' => 'anomaly.module.partials::field.layout.instructions',
],
],
],
[
'id' => '85',
'sort_order' => '85',
'stream_id' => '13',
'field_id' => '64',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '0',
'translatable' => '0',
'field' => [
'id' => '64',
'namespace' => 'partials',
'slug' => 'description',
'type' => 'anomaly.field_type.textarea',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => '64',
'field_id' => '64',
'locale' => 'en',
'name' => 'anomaly.module.partials::field.description.name',
],
],
],
'translations' => [
[
'id' => '85',
'assignment_id' => '85',
'locale' => 'en',
'label' => 'anomaly.module.partials::field.description.label',
'placeholder' => 'anomaly.module.partials::field.description.placeholder',
'instructions' => 'anomaly.module.partials::field.description.instructions',
],
],
],
[
'id' => '86',
'sort_order' => '86',
'stream_id' => '13',
'field_id' => '66',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '0',
'translatable' => '0',
'field' => [
'id' => '66',
'namespace' => 'partials',
'slug' => 'css',
'type' => 'anomaly.field_type.editor',
'config' => 'a:1:{s:4:"mode";s:3:"css";}',
'locked' => '1',
'translations' => [
[
'id' => '66',
'field_id' => '66',
'locale' => 'en',
'name' => 'anomaly.module.partials::field.css.name',
],
],
],
'translations' => [
[
'id' => '86',
'assignment_id' => '86',
'locale' => 'en',
'label' => 'anomaly.module.partials::field.css.label',
'placeholder' => 'anomaly.module.partials::field.css.placeholder',
'instructions' => 'anomaly.module.partials::field.css.instructions',
],
],
],
[
'id' => '87',
'sort_order' => '87',
'stream_id' => '13',
'field_id' => '67',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '0',
'translatable' => '0',
'field' => [
'id' => '67',
'namespace' => 'partials',
'slug' => 'js',
'type' => 'anomaly.field_type.editor',
'config' => 'a:1:{s:4:"mode";s:10:"javascript";}',
'locked' => '1',
'translations' => [
[
'id' => '67',
'field_id' => '67',
'locale' => 'en',
'name' => 'anomaly.module.partials::field.js.name',
],
],
],
'translations' => [
[
'id' => '87',
'assignment_id' => '87',
'locale' => 'en',
'label' => 'anomaly.module.partials::field.js.label',
'placeholder' => 'anomaly.module.partials::field.js.placeholder',
'instructions' => 'anomaly.module.partials::field.js.instructions',
],
],
],
],
'translations' => [
[
'id' => '13',
'stream_id' => '13',
'locale' => 'en',
'name' => 'anomaly.module.partials::stream.types.name',
'description' => 'anomaly.module.partials::stream.types.description',
],
],
];

    
}
