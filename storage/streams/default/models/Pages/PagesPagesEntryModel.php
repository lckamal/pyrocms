<?php namespace Anomaly\Streams\Platform\Model\Pages;

use Anomaly\Streams\Platform\Entry\EntryModel;

class PagesPagesEntryModel extends EntryModel
{

    

    protected $table = 'pages_pages';

    protected $titleName = 'title';

    public $rules = [
'str_id' => 'required',
'title' => 'required',
'slug' => '',
'type' => 'required',
'ttl' => '',
'entry' => '',
'parent' => '',
'live' => '',
'home' => '',
'meta_title' => '',
'meta_description' => '',
'meta_keywords' => '',
'route_suffix' => '',
'route_constraints' => '',
'additional_parameters' => '',
'allowed_roles' => '',
'css' => '',
'js' => '',
];

    public $dates = ['created_at', 'updated_at'];

    protected $translatedAttributes = ['title', 'meta_title', 'meta_description', 'meta_keywords'];

    protected $translationForeignKey = 'entry_id';

    protected $translationModel = 'Anomaly\Streams\Platform\Model\Pages\PagesPagesEntryTranslationsModel';

    protected $stream = [
'id' => '10',
'namespace' => 'pages',
'slug' => 'pages',
'prefix' => 'pages_',
'view_options' => 'a:2:{i:0;s:2:"id";i:1;s:10:"created_at";}',
'title_column' => 'title',
'order_by' => 'id',
'locked' => '0',
'translatable' => '1',
'trashable' => '0',
'assignments' => [
[
'id' => '45',
'sort_order' => '45',
'stream_id' => '10',
'field_id' => '40',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '1',
'translatable' => '0',
'field' => [
'id' => '40',
'namespace' => 'pages',
'slug' => 'str_id',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => '40',
'field_id' => '40',
'locale' => 'en',
'name' => 'anomaly.module.pages::field.str_id.name',
],
],
],
'translations' => [
[
'id' => '45',
'assignment_id' => '45',
'locale' => 'en',
'label' => 'anomaly.module.pages::field.str_id.label',
'placeholder' => 'anomaly.module.pages::field.str_id.placeholder',
'instructions' => 'anomaly.module.pages::field.str_id.instructions',
],
],
],
[
'id' => '46',
'sort_order' => '46',
'stream_id' => '10',
'field_id' => '41',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '1',
'translatable' => '1',
'field' => [
'id' => '41',
'namespace' => 'pages',
'slug' => 'title',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => '41',
'field_id' => '41',
'locale' => 'en',
'name' => 'anomaly.module.pages::field.title.name',
],
],
],
'translations' => [
[
'id' => '46',
'assignment_id' => '46',
'locale' => 'en',
'label' => 'anomaly.module.pages::field.title.label',
'placeholder' => 'anomaly.module.pages::field.title.placeholder',
'instructions' => 'anomaly.module.pages::field.title.instructions',
],
],
],
[
'id' => '47',
'sort_order' => '47',
'stream_id' => '10',
'field_id' => '42',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '0',
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
'id' => '47',
'assignment_id' => '47',
'locale' => 'en',
'label' => 'anomaly.module.pages::field.slug.label',
'placeholder' => 'anomaly.module.pages::field.slug.placeholder',
'instructions' => 'anomaly.module.pages::field.slug.instructions',
],
],
],
[
'id' => '48',
'sort_order' => '48',
'stream_id' => '10',
'field_id' => '55',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '1',
'translatable' => '0',
'field' => [
'id' => '55',
'namespace' => 'pages',
'slug' => 'type',
'type' => 'anomaly.field_type.relationship',
'config' => 'a:1:{s:7:"related";s:34:"Anomaly\PagesModule\Type\TypeModel";}',
'locked' => '1',
'translations' => [
[
'id' => '55',
'field_id' => '55',
'locale' => 'en',
'name' => 'anomaly.module.pages::field.type.name',
],
],
],
'translations' => [
[
'id' => '48',
'assignment_id' => '48',
'locale' => 'en',
'label' => 'anomaly.module.pages::field.type.label',
'placeholder' => 'anomaly.module.pages::field.type.placeholder',
'instructions' => 'anomaly.module.pages::field.type.instructions',
],
],
],
[
'id' => '49',
'sort_order' => '49',
'stream_id' => '10',
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
'id' => '49',
'assignment_id' => '49',
'locale' => 'en',
'label' => 'anomaly.module.pages::field.ttl.label',
'placeholder' => 'anomaly.module.pages::field.ttl.placeholder',
'instructions' => 'anomaly.module.pages::field.ttl.instructions',
],
],
],
[
'id' => '50',
'sort_order' => '50',
'stream_id' => '10',
'field_id' => '57',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '0',
'translatable' => '0',
'field' => [
'id' => '57',
'namespace' => 'pages',
'slug' => 'entry',
'type' => 'anomaly.field_type.polymorphic',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => '57',
'field_id' => '57',
'locale' => 'en',
'name' => 'anomaly.module.pages::field.entry.name',
],
],
],
'translations' => [
[
'id' => '50',
'assignment_id' => '50',
'locale' => 'en',
'label' => 'anomaly.module.pages::field.entry.label',
'placeholder' => 'anomaly.module.pages::field.entry.placeholder',
'instructions' => 'anomaly.module.pages::field.entry.instructions',
],
],
],
[
'id' => '51',
'sort_order' => '51',
'stream_id' => '10',
'field_id' => '53',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '0',
'translatable' => '0',
'field' => [
'id' => '53',
'namespace' => 'pages',
'slug' => 'parent',
'type' => 'anomaly.field_type.relationship',
'config' => 'a:1:{s:7:"related";s:34:"Anomaly\PagesModule\Page\PageModel";}',
'locked' => '1',
'translations' => [
[
'id' => '53',
'field_id' => '53',
'locale' => 'en',
'name' => 'anomaly.module.pages::field.parent.name',
],
],
],
'translations' => [
[
'id' => '51',
'assignment_id' => '51',
'locale' => 'en',
'label' => 'anomaly.module.pages::field.parent.label',
'placeholder' => 'anomaly.module.pages::field.parent.placeholder',
'instructions' => 'anomaly.module.pages::field.parent.instructions',
],
],
],
[
'id' => '52',
'sort_order' => '52',
'stream_id' => '10',
'field_id' => '43',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '0',
'translatable' => '0',
'field' => [
'id' => '43',
'namespace' => 'pages',
'slug' => 'live',
'type' => 'anomaly.field_type.boolean',
'config' => 'a:1:{s:13:"default_value";b:0;}',
'locked' => '1',
'translations' => [
[
'id' => '43',
'field_id' => '43',
'locale' => 'en',
'name' => 'anomaly.module.pages::field.live.name',
],
],
],
'translations' => [
[
'id' => '52',
'assignment_id' => '52',
'locale' => 'en',
'label' => 'anomaly.module.pages::field.live.label',
'placeholder' => 'anomaly.module.pages::field.live.placeholder',
'instructions' => 'anomaly.module.pages::field.live.instructions',
],
],
],
[
'id' => '53',
'sort_order' => '53',
'stream_id' => '10',
'field_id' => '44',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '0',
'translatable' => '0',
'field' => [
'id' => '44',
'namespace' => 'pages',
'slug' => 'home',
'type' => 'anomaly.field_type.boolean',
'config' => 'a:1:{s:13:"default_value";b:0;}',
'locked' => '1',
'translations' => [
[
'id' => '44',
'field_id' => '44',
'locale' => 'en',
'name' => 'anomaly.module.pages::field.home.name',
],
],
],
'translations' => [
[
'id' => '53',
'assignment_id' => '53',
'locale' => 'en',
'label' => 'anomaly.module.pages::field.home.label',
'placeholder' => 'anomaly.module.pages::field.home.placeholder',
'instructions' => 'anomaly.module.pages::field.home.instructions',
],
],
],
[
'id' => '54',
'sort_order' => '54',
'stream_id' => '10',
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
'id' => '54',
'assignment_id' => '54',
'locale' => 'en',
'label' => 'anomaly.module.pages::field.meta_title.label',
'placeholder' => 'anomaly.module.pages::field.meta_title.placeholder',
'instructions' => 'anomaly.module.pages::field.meta_title.instructions',
],
],
],
[
'id' => '55',
'sort_order' => '55',
'stream_id' => '10',
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
'id' => '55',
'assignment_id' => '55',
'locale' => 'en',
'label' => 'anomaly.module.pages::field.meta_description.label',
'placeholder' => 'anomaly.module.pages::field.meta_description.placeholder',
'instructions' => 'anomaly.module.pages::field.meta_description.instructions',
],
],
],
[
'id' => '56',
'sort_order' => '56',
'stream_id' => '10',
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
'id' => '56',
'assignment_id' => '56',
'locale' => 'en',
'label' => 'anomaly.module.pages::field.meta_keywords.label',
'placeholder' => 'anomaly.module.pages::field.meta_keywords.placeholder',
'instructions' => 'anomaly.module.pages::field.meta_keywords.instructions',
],
],
],
[
'id' => '57',
'sort_order' => '57',
'stream_id' => '10',
'field_id' => '60',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '0',
'translatable' => '0',
'field' => [
'id' => '60',
'namespace' => 'pages',
'slug' => 'route_suffix',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => '60',
'field_id' => '60',
'locale' => 'en',
'name' => 'anomaly.module.pages::field.route_suffix.name',
],
],
],
'translations' => [
[
'id' => '57',
'assignment_id' => '57',
'locale' => 'en',
'label' => 'anomaly.module.pages::field.route_suffix.label',
'placeholder' => 'anomaly.module.pages::field.route_suffix.placeholder',
'instructions' => 'anomaly.module.pages::field.route_suffix.instructions',
],
],
],
[
'id' => '58',
'sort_order' => '58',
'stream_id' => '10',
'field_id' => '61',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '0',
'translatable' => '0',
'field' => [
'id' => '61',
'namespace' => 'pages',
'slug' => 'route_constraints',
'type' => 'anomaly.field_type.textarea',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => '61',
'field_id' => '61',
'locale' => 'en',
'name' => 'anomaly.module.pages::field.route_constraints.name',
],
],
],
'translations' => [
[
'id' => '58',
'assignment_id' => '58',
'locale' => 'en',
'label' => 'anomaly.module.pages::field.route_constraints.label',
'placeholder' => 'anomaly.module.pages::field.route_constraints.placeholder',
'instructions' => 'anomaly.module.pages::field.route_constraints.instructions',
],
],
],
[
'id' => '59',
'sort_order' => '59',
'stream_id' => '10',
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
'id' => '59',
'assignment_id' => '59',
'locale' => 'en',
'label' => 'anomaly.module.pages::field.additional_parameters.label',
'placeholder' => 'anomaly.module.pages::field.additional_parameters.placeholder',
'instructions' => 'anomaly.module.pages::field.additional_parameters.instructions',
],
],
],
[
'id' => '60',
'sort_order' => '60',
'stream_id' => '10',
'field_id' => '52',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '0',
'translatable' => '0',
'field' => [
'id' => '52',
'namespace' => 'pages',
'slug' => 'allowed_roles',
'type' => 'anomaly.field_type.multiple',
'config' => 'a:1:{s:7:"related";s:34:"Anomaly\UsersModule\Role\RoleModel";}',
'locked' => '1',
'translations' => [
[
'id' => '52',
'field_id' => '52',
'locale' => 'en',
'name' => 'anomaly.module.pages::field.allowed_roles.name',
],
],
],
'translations' => [
[
'id' => '60',
'assignment_id' => '60',
'locale' => 'en',
'label' => 'anomaly.module.pages::field.allowed_roles.label',
'placeholder' => 'anomaly.module.pages::field.allowed_roles.placeholder',
'instructions' => 'anomaly.module.pages::field.allowed_roles.instructions',
],
],
],
[
'id' => '61',
'sort_order' => '61',
'stream_id' => '10',
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
'id' => '61',
'assignment_id' => '61',
'locale' => 'en',
'label' => 'anomaly.module.pages::field.css.label',
'placeholder' => 'anomaly.module.pages::field.css.placeholder',
'instructions' => 'anomaly.module.pages::field.css.instructions',
],
],
],
[
'id' => '62',
'sort_order' => '62',
'stream_id' => '10',
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
'id' => '62',
'assignment_id' => '62',
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
'id' => '10',
'stream_id' => '10',
'locale' => 'en',
'name' => 'anomaly.module.pages::stream.pages.name',
'description' => 'anomaly.module.pages::stream.pages.description',
],
],
];

    
public function type()
{

return $this->getFieldType('type')->getRelation();
}

public function entry()
{

return $this->getFieldType('entry')->getRelation();
}

public function parent()
{

return $this->getFieldType('parent')->getRelation();
}

public function allowedRoles()
{

return $this->getFieldType('allowed_roles')->getRelation();
}

}
