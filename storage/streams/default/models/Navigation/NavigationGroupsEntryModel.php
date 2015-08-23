<?php namespace Anomaly\Streams\Platform\Model\Navigation;

use Anomaly\Streams\Platform\Entry\EntryModel;

class NavigationGroupsEntryModel extends EntryModel
{

    

    protected $table = 'navigation_groups';

    protected $titleName = 'name';

    public $rules = [
'name' => 'required|unique:navigation_groups,name',
'slug' => 'required|unique:navigation_groups,slug',
'description' => '',
];

    public $dates = ['created_at', 'updated_at'];

    

    

    

    protected $stream = [
'id' => '8',
'namespace' => 'navigation',
'slug' => 'groups',
'prefix' => 'navigation_',
'view_options' => 'a:2:{i:0;s:2:"id";i:1;s:10:"created_at";}',
'title_column' => 'name',
'order_by' => 'id',
'locked' => '0',
'translatable' => '0',
'trashable' => '0',
'assignments' => [
[
'id' => '35',
'sort_order' => '35',
'stream_id' => '8',
'field_id' => '30',
'config' => 'a:0:{}',
'unique' => '1',
'required' => '1',
'translatable' => '0',
'field' => [
'id' => '30',
'namespace' => 'navigation',
'slug' => 'name',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => '30',
'field_id' => '30',
'locale' => 'en',
'name' => 'anomaly.module.navigation::field.name.name',
],
],
],
'translations' => [
[
'id' => '35',
'assignment_id' => '35',
'locale' => 'en',
'label' => 'anomaly.module.navigation::field.name.label',
'placeholder' => 'anomaly.module.navigation::field.name.placeholder',
'instructions' => 'anomaly.module.navigation::field.name.instructions',
],
],
],
[
'id' => '36',
'sort_order' => '36',
'stream_id' => '8',
'field_id' => '34',
'config' => 'a:0:{}',
'unique' => '1',
'required' => '1',
'translatable' => '0',
'field' => [
'id' => '34',
'namespace' => 'navigation',
'slug' => 'slug',
'type' => 'anomaly.field_type.slug',
'config' => 'a:1:{s:7:"slugify";s:4:"name";}',
'locked' => '1',
'translations' => [
[
'id' => '34',
'field_id' => '34',
'locale' => 'en',
'name' => 'anomaly.module.navigation::field.slug.name',
],
],
],
'translations' => [
[
'id' => '36',
'assignment_id' => '36',
'locale' => 'en',
'label' => 'anomaly.module.navigation::field.slug.label',
'placeholder' => 'anomaly.module.navigation::field.slug.placeholder',
'instructions' => 'anomaly.module.navigation::field.slug.instructions',
],
],
],
[
'id' => '37',
'sort_order' => '37',
'stream_id' => '8',
'field_id' => '32',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '0',
'translatable' => '0',
'field' => [
'id' => '32',
'namespace' => 'navigation',
'slug' => 'description',
'type' => 'anomaly.field_type.textarea',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => '32',
'field_id' => '32',
'locale' => 'en',
'name' => 'anomaly.module.navigation::field.description.name',
],
],
],
'translations' => [
[
'id' => '37',
'assignment_id' => '37',
'locale' => 'en',
'label' => 'anomaly.module.navigation::field.description.label',
'placeholder' => 'anomaly.module.navigation::field.description.placeholder',
'instructions' => 'anomaly.module.navigation::field.description.instructions',
],
],
],
],
'translations' => [
[
'id' => '8',
'stream_id' => '8',
'locale' => 'en',
'name' => 'anomaly.module.navigation::stream.groups.name',
'description' => 'anomaly.module.navigation::stream.groups.description',
],
],
];

    
}
