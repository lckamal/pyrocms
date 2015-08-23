<?php namespace Anomaly\Streams\Platform\Model\Blocks;

use Anomaly\Streams\Platform\Entry\EntryModel;

class BlocksGroupsEntryModel extends EntryModel
{

    

    protected $table = 'blocks_groups';

    protected $titleName = 'name';

    public $rules = [
'name' => 'required|unique:blocks_groups,name',
'slug' => 'required|unique:blocks_groups,slug',
'description' => '',
];

    public $dates = ['created_at', 'updated_at'];

    

    

    

    protected $stream = [
'id' => '3',
'namespace' => 'blocks',
'slug' => 'groups',
'prefix' => 'blocks_',
'view_options' => 'a:2:{i:0;s:2:"id";i:1;s:10:"created_at";}',
'title_column' => 'name',
'order_by' => 'id',
'locked' => '1',
'translatable' => '0',
'trashable' => '0',
'assignments' => [
[
'id' => '12',
'sort_order' => '12',
'stream_id' => '3',
'field_id' => '4',
'config' => 'a:0:{}',
'unique' => '1',
'required' => '1',
'translatable' => '0',
'field' => [
'id' => '4',
'namespace' => 'blocks',
'slug' => 'name',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => '4',
'field_id' => '4',
'locale' => 'en',
'name' => 'anomaly.module.blocks::field.name.name',
],
],
],
'translations' => [
[
'id' => '12',
'assignment_id' => '12',
'locale' => 'en',
'label' => 'anomaly.module.blocks::field.name.label',
'placeholder' => 'anomaly.module.blocks::field.name.placeholder',
'instructions' => 'anomaly.module.blocks::field.name.instructions',
],
],
],
[
'id' => '13',
'sort_order' => '13',
'stream_id' => '3',
'field_id' => '7',
'config' => 'a:1:{s:4:"type";s:1:"_";}',
'unique' => '1',
'required' => '1',
'translatable' => '0',
'field' => [
'id' => '7',
'namespace' => 'blocks',
'slug' => 'slug',
'type' => 'anomaly.field_type.slug',
'config' => 'a:1:{s:7:"slugify";s:4:"name";}',
'locked' => '1',
'translations' => [
[
'id' => '7',
'field_id' => '7',
'locale' => 'en',
'name' => 'anomaly.module.blocks::field.slug.name',
],
],
],
'translations' => [
[
'id' => '13',
'assignment_id' => '13',
'locale' => 'en',
'label' => 'anomaly.module.blocks::field.slug.label',
'placeholder' => 'anomaly.module.blocks::field.slug.placeholder',
'instructions' => 'anomaly.module.blocks::field.slug.instructions',
],
],
],
[
'id' => '14',
'sort_order' => '14',
'stream_id' => '3',
'field_id' => '5',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '0',
'translatable' => '0',
'field' => [
'id' => '5',
'namespace' => 'blocks',
'slug' => 'description',
'type' => 'anomaly.field_type.textarea',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => '5',
'field_id' => '5',
'locale' => 'en',
'name' => 'anomaly.module.blocks::field.description.name',
],
],
],
'translations' => [
[
'id' => '14',
'assignment_id' => '14',
'locale' => 'en',
'label' => 'anomaly.module.blocks::field.description.label',
'placeholder' => 'anomaly.module.blocks::field.description.placeholder',
'instructions' => 'anomaly.module.blocks::field.description.instructions',
],
],
],
],
'translations' => [
[
'id' => '3',
'stream_id' => '3',
'locale' => 'en',
'name' => 'anomaly.module.blocks::stream.groups.name',
'description' => 'anomaly.module.blocks::stream.groups.description',
],
],
];

    
}
