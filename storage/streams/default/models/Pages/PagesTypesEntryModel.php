<?php namespace Anomaly\Streams\Platform\Model\Pages;

use Anomaly\Streams\Platform\Entry\EntryModel;

class PagesTypesEntryModel extends EntryModel
{

    

    protected $table = 'pages_types';

    protected $titleName = 'name';

    public $rules = [
'name' => 'required|unique:pages_types,name',
'slug' => 'required|unique:pages_types,slug',
'description' => '',
'layout' => 'required',
'theme_layout' => 'required',
'page_handler' => 'required',
'meta_title' => '',
'meta_description' => '',
'meta_keywords' => '',
'additional_parameters' => '',
'ttl' => '',
'css' => '',
'js' => '',
];

    public $dates = ['created_at', 'updated_at'];

    protected $translatedAttributes = ['meta_title', 'meta_description', 'meta_keywords'];

    protected $translationForeignKey = 'entry_id';

    protected $translationModel = 'Anomaly\Streams\Platform\Model\Pages\PagesTypesEntryTranslationsModel';

    protected $stream = [
'id' => '11',
'namespace' => 'pages',
'slug' => 'types',
'prefix' => 'pages_',
'view_options' => 'a:2:{i:0;s:2:"id";i:1;s:10:"created_at";}',
'title_column' => 'name',
'order_by' => 'id',
'locked' => '0',
'translatable' => '1',
'trashable' => '0',
'assignments' => [
[
'id' => '63',
'sort_order' => '63',
'stream_id' => '11',
'field_id' => '58',
'config' => 'a:0:{}',
'unique' => '1',
'required' => '1',
'translatable' => '0',
'field' => [
'id' => '58',
'namespace' => 'pages',
'slug' => 'name',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => '58',
'field_id' => '58',
'locale' => 'en',
'name' => 'anomaly.module.pages::field.name.name',
],
],
],
'translations' => [
[
'id' => '63',
'assignment_id' => '63',
'locale' => 'en',
'label' => 'anomaly.module.pages::field.name.label',
'placeholder' => 'anomaly.module.pages::field.name.placeholder',
'instructions' => 'anomaly.module.pages::field.name.instructions',
],
],
],
[
'id' => '64',
'sort_order' => '64',
'stream_id' => '11',
'field_id' => '42',
'config' => 'a:2:{s:7:"slugify";s:4:"name";s:4:"type";s:1:"_";}',
'unique' => '1',
'required' => '1',
'translatable' => '0',
'field' => [
'id' => '42',
'namespace' => 'pages',
'slug' => 'slug',
'type' => 'anomaly.field_type.slug',
'config' => 'a:1:{s:7:"slugify";s:5:"title";}',
'locked' => '1',
'translations' => [
[
'id' => '42',
'field_id' => '42',
'locale' => 'en',
'name' => 'anomaly.module.pages::field.slug.name',
],
],
],
'translations' => [
[
'id' => '64',
'assignment_id' => '64',
'locale' => 'en',
'label' => 'anomaly.module.pages::field.slug.label',
'placeholder' => 'anomaly.module.pages::field.slug.placeholder',
'instructions' => 'anomaly.module.pages::field.slug.instructions',
],
],
],
[
'id' => '65',
'sort_order' => '65',
'stream_id' => '11',
'field_id' => '59',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '0',
'translatable' => '0',
'field' => [
'id' => '59',
'namespace' => 'pages',
'slug' => 'description',
'type' => 'anomaly.field_type.textarea',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => '59',
'field_id' => '59',
'locale' => 'en',
'name' => 'anomaly.module.pages::field.description.name',
],
],
],
'translations' => [
[
'id' => '65',
'assignment_id' => '65',
'locale' => 'en',
'label' => 'anomaly.module.pages::field.description.label',
'placeholder' => 'anomaly.module.pages::field.description.placeholder',
'instructions' => 'anomaly.module.pages::field.description.instructions',
],
],
],
[
'id' => '66',
'sort_order' => '66',
'stream_id' => '11',
'field_id' => '51',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '1',
'translatable' => '0',
'field' => [
'id' => '51',
'namespace' => 'pages',
'slug' => 'layout',
'type' => 'anomaly.field_type.editor',
'config' => 'a:2:{s:13:"default_value";s:25:"<h1>{{ page.title }}</h1>";s:4:"mode";s:4:"twig";}',
'locked' => '1',
'translations' => [
[
'id' => '51',
'field_id' => '51',
'locale' => 'en',
'name' => 'anomaly.module.pages::field.layout.name',
],
],
],
'translations' => [
[
'id' => '66',
'assignment_id' => '66',
'locale' => 'en',
'label' => 'anomaly.module.pages::field.layout.label',
'placeholder' => 'anomaly.module.pages::field.layout.placeholder',
'instructions' => 'anomaly.module.pages::field.layout.instructions',
],
],
],
[
'id' => '67',
'sort_order' => '67',
'stream_id' => '11',
'field_id' => '54',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '1',
'translatable' => '0',
'field' => [
'id' => '54',
'namespace' => 'pages',
'slug' => 'theme_layout',
'type' => 'anomaly.field_type.select',
'config' => 'a:1:{s:7:"handler";s:46:"Anomaly\SelectFieldType\Handler\Layouts@handle";}',
'locked' => '1',
'translations' => [
[
'id' => '54',
'field_id' => '54',
'locale' => 'en',
'name' => 'anomaly.module.pages::field.theme_layout.name',
],
],
],
'translations' => [
[
'id' => '67',
'assignment_id' => '67',
'locale' => 'en',
'label' => 'anomaly.module.pages::field.theme_layout.label',
'placeholder' => 'anomaly.module.pages::field.theme_layout.placeholder',
'instructions' => 'anomaly.module.pages::field.theme_layout.instructions',
],
],
],
[
'id' => '68',
'sort_order' => '68',
'stream_id' => '11',
'field_id' => '56',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '1',
'translatable' => '0',
'field' => [
'id' => '56',
'namespace' => 'pages',
'slug' => 'page_handler',
'type' => 'anomaly.field_type.addon',
'config' => 'a:3:{s:4:"type";s:9:"extension";s:6:"search";s:36:"anomaly.module.pages::page_handler.*";s:13:"default_value";s:38:"anomaly.extension.default_page_handler";}',
'locked' => '1',
'translations' => [
[
'id' => '56',
'field_id' => '56',
'locale' => 'en',
'name' => 'anomaly.module.pages::field.page_handler.name',
],
],
],
'translations' => [
[
'id' => '68',
'assignment_id' => '68',
'locale' => 'en',
'label' => 'anomaly.module.pages::field.page_handler.label',
'placeholder' => 'anomaly.module.pages::field.page_handler.placeholder',
'instructions' => 'anomaly.module.pages::field.page_handler.instructions',
],
],
],
[
'id' => '69',
'sort_order' => '69',
'stream_id' => '11',
'field_id' => '45',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '0',
'translatable' => '1',
'field' => [
'id' => '45',
'namespace' => 'pages',
'slug' => 'meta_title',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => '45',
'field_id' => '45',
'locale' => 'en',
'name' => 'anomaly.module.pages::field.meta_title.name',
],
],
],
'translations' => [
[
'id' => '69',
'assignment_id' => '69',
'locale' => 'en',
'label' => 'anomaly.module.pages::field.meta_title.label',
'placeholder' => 'anomaly.module.pages::field.meta_title.placeholder',
'instructions' => 'anomaly.module.pages::field.meta_title.instructions',
],
],
],
[
'id' => '70',
'sort_order' => '70',
'stream_id' => '11',
'field_id' => '46',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '0',
'translatable' => '1',
'field' => [
'id' => '46',
'namespace' => 'pages',
'slug' => 'meta_description',
'type' => 'anomaly.field_type.textarea',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => '46',
'field_id' => '46',
'locale' => 'en',
'name' => 'anomaly.module.pages::field.meta_description.name',
],
],
],
'translations' => [
[
'id' => '70',
'assignment_id' => '70',
'locale' => 'en',
'label' => 'anomaly.module.pages::field.meta_description.label',
'placeholder' => 'anomaly.module.pages::field.meta_description.placeholder',
'instructions' => 'anomaly.module.pages::field.meta_description.instructions',
],
],
],
[
'id' => '71',
'sort_order' => '71',
'stream_id' => '11',
'field_id' => '47',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '0',
'translatable' => '1',
'field' => [
'id' => '47',
'namespace' => 'pages',
'slug' => 'meta_keywords',
'type' => 'anomaly.field_type.tags',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => '47',
'field_id' => '47',
'locale' => 'en',
'name' => 'anomaly.module.pages::field.meta_keywords.name',
],
],
],
'translations' => [
[
'id' => '71',
'assignment_id' => '71',
'locale' => 'en',
'label' => 'anomaly.module.pages::field.meta_keywords.label',
'placeholder' => 'anomaly.module.pages::field.meta_keywords.placeholder',
'instructions' => 'anomaly.module.pages::field.meta_keywords.instructions',
],
],
],
[
'id' => '72',
'sort_order' => '72',
'stream_id' => '11',
'field_id' => '62',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '0',
'translatable' => '0',
'field' => [
'id' => '62',
'namespace' => 'pages',
'slug' => 'additional_parameters',
'type' => 'anomaly.field_type.textarea',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => '62',
'field_id' => '62',
'locale' => 'en',
'name' => 'anomaly.module.pages::field.additional_parameters.name',
],
],
],
'translations' => [
[
'id' => '72',
'assignment_id' => '72',
'locale' => 'en',
'label' => 'anomaly.module.pages::field.additional_parameters.label',
'placeholder' => 'anomaly.module.pages::field.additional_parameters.placeholder',
'instructions' => 'anomaly.module.pages::field.additional_parameters.instructions',
],
],
],
[
'id' => '73',
'sort_order' => '73',
'stream_id' => '11',
'field_id' => '48',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '0',
'translatable' => '0',
'field' => [
'id' => '48',
'namespace' => 'pages',
'slug' => 'ttl',
'type' => 'anomaly.field_type.integer',
'config' => 'a:3:{s:3:"min";i:0;s:4:"step";i:1;s:4:"page";i:5;}',
'locked' => '1',
'translations' => [
[
'id' => '48',
'field_id' => '48',
'locale' => 'en',
'name' => 'anomaly.module.pages::field.ttl.name',
],
],
],
'translations' => [
[
'id' => '73',
'assignment_id' => '73',
'locale' => 'en',
'label' => 'anomaly.module.pages::field.ttl.label',
'placeholder' => 'anomaly.module.pages::field.ttl.placeholder',
'instructions' => 'anomaly.module.pages::field.ttl.instructions',
],
],
],
[
'id' => '74',
'sort_order' => '74',
'stream_id' => '11',
'field_id' => '49',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '0',
'translatable' => '0',
'field' => [
'id' => '49',
'namespace' => 'pages',
'slug' => 'css',
'type' => 'anomaly.field_type.editor',
'config' => 'a:1:{s:4:"mode";s:3:"css";}',
'locked' => '1',
'translations' => [
[
'id' => '49',
'field_id' => '49',
'locale' => 'en',
'name' => 'anomaly.module.pages::field.css.name',
],
],
],
'translations' => [
[
'id' => '74',
'assignment_id' => '74',
'locale' => 'en',
'label' => 'anomaly.module.pages::field.css.label',
'placeholder' => 'anomaly.module.pages::field.css.placeholder',
'instructions' => 'anomaly.module.pages::field.css.instructions',
],
],
],
[
'id' => '75',
'sort_order' => '75',
'stream_id' => '11',
'field_id' => '50',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '0',
'translatable' => '0',
'field' => [
'id' => '50',
'namespace' => 'pages',
'slug' => 'js',
'type' => 'anomaly.field_type.editor',
'config' => 'a:1:{s:4:"mode";s:10:"javascript";}',
'locked' => '1',
'translations' => [
[
'id' => '50',
'field_id' => '50',
'locale' => 'en',
'name' => 'anomaly.module.pages::field.js.name',
],
],
],
'translations' => [
[
'id' => '75',
'assignment_id' => '75',
'locale' => 'en',
'label' => 'anomaly.module.pages::field.js.label',
'placeholder' => 'anomaly.module.pages::field.js.placeholder',
'instructions' => 'anomaly.module.pages::field.js.instructions',
],
],
],
],
'translations' => [
[
'id' => '11',
'stream_id' => '11',
'locale' => 'en',
'name' => 'anomaly.module.pages::stream.types.name',
'description' => 'anomaly.module.pages::stream.types.description',
],
],
];

    
}
