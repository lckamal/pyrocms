<?php namespace Anomaly\Streams\Platform\Model\Posts;

use Anomaly\Streams\Platform\Entry\EntryModel;

class PostsTypesEntryModel extends EntryModel
{

    

    protected $table = 'posts_types';

    protected $titleName = 'name';

    public $rules = [
'name' => 'required|unique:posts_types,name',
'slug' => 'required|unique:posts_types,slug',
'description' => '',
'layout' => 'required',
'theme_layout' => 'required',
'meta_title' => '',
'meta_description' => '',
'meta_keywords' => '',
'ttl' => '',
'css' => '',
'js' => '',
];

    public $dates = ['created_at', 'updated_at'];

    protected $translatedAttributes = ['meta_title', 'meta_description', 'meta_keywords'];

    protected $translationForeignKey = 'entry_id';

    protected $translationModel = 'Anomaly\Streams\Platform\Model\Posts\PostsTypesEntryTranslationsModel';

    protected $stream = [
'id' => '16',
'namespace' => 'posts',
'slug' => 'types',
'prefix' => 'posts_',
'view_options' => 'a:2:{i:0;s:2:"id";i:1;s:10:"created_at";}',
'title_column' => 'name',
'order_by' => 'id',
'locked' => '0',
'translatable' => '1',
'trashable' => '0',
'assignments' => [
[
'id' => '110',
'sort_order' => '110',
'stream_id' => '16',
'field_id' => '72',
'config' => 'a:0:{}',
'unique' => '1',
'required' => '1',
'translatable' => '0',
'field' => [
'id' => '72',
'namespace' => 'posts',
'slug' => 'name',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => '72',
'field_id' => '72',
'locale' => 'en',
'name' => 'anomaly.module.posts::field.name.name',
],
],
],
'translations' => [
[
'id' => '110',
'assignment_id' => '110',
'locale' => 'en',
'label' => 'anomaly.module.posts::field.name.label',
'placeholder' => 'anomaly.module.posts::field.name.placeholder',
'instructions' => 'anomaly.module.posts::field.name.instructions',
],
],
],
[
'id' => '111',
'sort_order' => '111',
'stream_id' => '16',
'field_id' => '74',
'config' => 'a:2:{s:7:"slugify";s:4:"name";s:4:"type";s:1:"_";}',
'unique' => '1',
'required' => '1',
'translatable' => '0',
'field' => [
'id' => '74',
'namespace' => 'posts',
'slug' => 'slug',
'type' => 'anomaly.field_type.slug',
'config' => 'a:1:{s:7:"slugify";s:5:"title";}',
'locked' => '1',
'translations' => [
[
'id' => '74',
'field_id' => '74',
'locale' => 'en',
'name' => 'anomaly.module.posts::field.slug.name',
],
],
],
'translations' => [
[
'id' => '111',
'assignment_id' => '111',
'locale' => 'en',
'label' => 'anomaly.module.posts::field.slug.label',
'placeholder' => 'anomaly.module.posts::field.slug.placeholder',
'instructions' => 'anomaly.module.posts::field.slug.instructions',
],
],
],
[
'id' => '112',
'sort_order' => '112',
'stream_id' => '16',
'field_id' => '78',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '0',
'translatable' => '0',
'field' => [
'id' => '78',
'namespace' => 'posts',
'slug' => 'description',
'type' => 'anomaly.field_type.textarea',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => '78',
'field_id' => '78',
'locale' => 'en',
'name' => 'anomaly.module.posts::field.description.name',
],
],
],
'translations' => [
[
'id' => '112',
'assignment_id' => '112',
'locale' => 'en',
'label' => 'anomaly.module.posts::field.description.label',
'placeholder' => 'anomaly.module.posts::field.description.placeholder',
'instructions' => 'anomaly.module.posts::field.description.instructions',
],
],
],
[
'id' => '113',
'sort_order' => '113',
'stream_id' => '16',
'field_id' => '83',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '1',
'translatable' => '0',
'field' => [
'id' => '83',
'namespace' => 'posts',
'slug' => 'layout',
'type' => 'anomaly.field_type.editor',
'config' => 'a:2:{s:13:"default_value";s:55:"<h1>{{ post.title }} - {{ post.entry.field_slug }}</h1>";s:4:"mode";s:4:"twig";}',
'locked' => '1',
'translations' => [
[
'id' => '83',
'field_id' => '83',
'locale' => 'en',
'name' => 'anomaly.module.posts::field.layout.name',
],
],
],
'translations' => [
[
'id' => '113',
'assignment_id' => '113',
'locale' => 'en',
'label' => 'anomaly.module.posts::field.layout.label',
'placeholder' => 'anomaly.module.posts::field.layout.placeholder',
'instructions' => 'anomaly.module.posts::field.layout.instructions',
],
],
],
[
'id' => '114',
'sort_order' => '114',
'stream_id' => '16',
'field_id' => '93',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '1',
'translatable' => '0',
'field' => [
'id' => '93',
'namespace' => 'posts',
'slug' => 'theme_layout',
'type' => 'anomaly.field_type.select',
'config' => 'a:1:{s:7:"handler";s:39:"Anomaly\SelectFieldType\Handler\Layouts";}',
'locked' => '1',
'translations' => [
[
'id' => '93',
'field_id' => '93',
'locale' => 'en',
'name' => 'anomaly.module.posts::field.theme_layout.name',
],
],
],
'translations' => [
[
'id' => '114',
'assignment_id' => '114',
'locale' => 'en',
'label' => 'anomaly.module.posts::field.theme_layout.label',
'placeholder' => 'anomaly.module.posts::field.theme_layout.placeholder',
'instructions' => 'anomaly.module.posts::field.theme_layout.instructions',
],
],
],
[
'id' => '115',
'sort_order' => '115',
'stream_id' => '16',
'field_id' => '87',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '0',
'translatable' => '1',
'field' => [
'id' => '87',
'namespace' => 'posts',
'slug' => 'meta_title',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => '87',
'field_id' => '87',
'locale' => 'en',
'name' => 'anomaly.module.posts::field.meta_title.name',
],
],
],
'translations' => [
[
'id' => '115',
'assignment_id' => '115',
'locale' => 'en',
'label' => 'anomaly.module.posts::field.meta_title.label',
'placeholder' => 'anomaly.module.posts::field.meta_title.placeholder',
'instructions' => 'anomaly.module.posts::field.meta_title.instructions',
],
],
],
[
'id' => '116',
'sort_order' => '116',
'stream_id' => '16',
'field_id' => '88',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '0',
'translatable' => '1',
'field' => [
'id' => '88',
'namespace' => 'posts',
'slug' => 'meta_description',
'type' => 'anomaly.field_type.textarea',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => '88',
'field_id' => '88',
'locale' => 'en',
'name' => 'anomaly.module.posts::field.meta_description.name',
],
],
],
'translations' => [
[
'id' => '116',
'assignment_id' => '116',
'locale' => 'en',
'label' => 'anomaly.module.posts::field.meta_description.label',
'placeholder' => 'anomaly.module.posts::field.meta_description.placeholder',
'instructions' => 'anomaly.module.posts::field.meta_description.instructions',
],
],
],
[
'id' => '117',
'sort_order' => '117',
'stream_id' => '16',
'field_id' => '89',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '0',
'translatable' => '1',
'field' => [
'id' => '89',
'namespace' => 'posts',
'slug' => 'meta_keywords',
'type' => 'anomaly.field_type.tags',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => '89',
'field_id' => '89',
'locale' => 'en',
'name' => 'anomaly.module.posts::field.meta_keywords.name',
],
],
],
'translations' => [
[
'id' => '117',
'assignment_id' => '117',
'locale' => 'en',
'label' => 'anomaly.module.posts::field.meta_keywords.label',
'placeholder' => 'anomaly.module.posts::field.meta_keywords.placeholder',
'instructions' => 'anomaly.module.posts::field.meta_keywords.instructions',
],
],
],
[
'id' => '118',
'sort_order' => '118',
'stream_id' => '16',
'field_id' => '90',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '0',
'translatable' => '0',
'field' => [
'id' => '90',
'namespace' => 'posts',
'slug' => 'ttl',
'type' => 'anomaly.field_type.integer',
'config' => 'a:3:{s:3:"min";i:0;s:4:"step";i:1;s:4:"page";i:5;}',
'locked' => '1',
'translations' => [
[
'id' => '90',
'field_id' => '90',
'locale' => 'en',
'name' => 'anomaly.module.posts::field.ttl.name',
],
],
],
'translations' => [
[
'id' => '118',
'assignment_id' => '118',
'locale' => 'en',
'label' => 'anomaly.module.posts::field.ttl.label',
'placeholder' => 'anomaly.module.posts::field.ttl.placeholder',
'instructions' => 'anomaly.module.posts::field.ttl.instructions',
],
],
],
[
'id' => '119',
'sort_order' => '119',
'stream_id' => '16',
'field_id' => '91',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '0',
'translatable' => '0',
'field' => [
'id' => '91',
'namespace' => 'posts',
'slug' => 'css',
'type' => 'anomaly.field_type.editor',
'config' => 'a:1:{s:4:"mode";s:3:"css";}',
'locked' => '1',
'translations' => [
[
'id' => '91',
'field_id' => '91',
'locale' => 'en',
'name' => 'anomaly.module.posts::field.css.name',
],
],
],
'translations' => [
[
'id' => '119',
'assignment_id' => '119',
'locale' => 'en',
'label' => 'anomaly.module.posts::field.css.label',
'placeholder' => 'anomaly.module.posts::field.css.placeholder',
'instructions' => 'anomaly.module.posts::field.css.instructions',
],
],
],
[
'id' => '120',
'sort_order' => '120',
'stream_id' => '16',
'field_id' => '92',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '0',
'translatable' => '0',
'field' => [
'id' => '92',
'namespace' => 'posts',
'slug' => 'js',
'type' => 'anomaly.field_type.editor',
'config' => 'a:1:{s:4:"mode";s:10:"javascript";}',
'locked' => '1',
'translations' => [
[
'id' => '92',
'field_id' => '92',
'locale' => 'en',
'name' => 'anomaly.module.posts::field.js.name',
],
],
],
'translations' => [
[
'id' => '120',
'assignment_id' => '120',
'locale' => 'en',
'label' => 'anomaly.module.posts::field.js.label',
'placeholder' => 'anomaly.module.posts::field.js.placeholder',
'instructions' => 'anomaly.module.posts::field.js.instructions',
],
],
],
],
'translations' => [
[
'id' => '16',
'stream_id' => '16',
'locale' => 'en',
'name' => 'anomaly.module.posts::stream.types.name',
'description' => 'anomaly.module.posts::stream.types.description',
],
],
];

    
}
