<?php namespace Anomaly\Streams\Platform\Model\Blocks;

use Anomaly\Streams\Platform\Entry\EntryModel;

class BlocksBlocksEntryModel extends EntryModel
{

    

    protected $table = 'blocks_blocks';

    protected $titleName = 'name';

    public $rules = [
'name' => 'required|unique:blocks_blocks,name',
'slug' => 'required|unique:blocks_blocks,slug',
'type' => 'required',
'entry' => 'required',
'description' => '',
'group' => '',
'title' => '',
'css' => '',
'js' => '',
];

    public $dates = ['created_at', 'updated_at'];

    

    

    

    protected $stream = [
'id' => '2',
'namespace' => 'blocks',
'slug' => 'blocks',
'prefix' => 'blocks_',
'view_options' => 'a:2:{i:0;s:2:"id";i:1;s:10:"created_at";}',
'title_column' => 'name',
'order_by' => 'id',
'locked' => '1',
'translatable' => '0',
'trashable' => '0',
'assignments' => [
[
'id' => '3',
'sort_order' => '3',
'stream_id' => '2',
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
'id' => '3',
'assignment_id' => '3',
'locale' => 'en',
'label' => 'anomaly.module.blocks::field.name.label',
'placeholder' => 'anomaly.module.blocks::field.name.placeholder',
'instructions' => 'anomaly.module.blocks::field.name.instructions',
],
],
],
[
'id' => '4',
'sort_order' => '4',
'stream_id' => '2',
'field_id' => '7',
'config' => 'a:0:{}',
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
'id' => '4',
'assignment_id' => '4',
'locale' => 'en',
'label' => 'anomaly.module.blocks::field.slug.label',
'placeholder' => 'anomaly.module.blocks::field.slug.placeholder',
'instructions' => 'anomaly.module.blocks::field.slug.instructions',
],
],
],
[
'id' => '5',
'sort_order' => '5',
'stream_id' => '2',
'field_id' => '8',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '1',
'translatable' => '0',
'field' => [
'id' => '8',
'namespace' => 'blocks',
'slug' => 'type',
'type' => 'anomaly.field_type.addon',
'config' => 'a:2:{s:4:"type";s:10:"extensions";s:6:"search";s:30:"anomaly.module.blocks::block.*";}',
'locked' => '1',
'translations' => [
[
'id' => '8',
'field_id' => '8',
'locale' => 'en',
'name' => 'anomaly.module.blocks::field.type.name',
],
],
],
'translations' => [
[
'id' => '5',
'assignment_id' => '5',
'locale' => 'en',
'label' => 'anomaly.module.blocks::field.type.label',
'placeholder' => 'anomaly.module.blocks::field.type.placeholder',
'instructions' => 'anomaly.module.blocks::field.type.instructions',
],
],
],
[
'id' => '6',
'sort_order' => '6',
'stream_id' => '2',
'field_id' => '6',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '1',
'translatable' => '0',
'field' => [
'id' => '6',
'namespace' => 'blocks',
'slug' => 'entry',
'type' => 'anomaly.field_type.polymorphic',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => '6',
'field_id' => '6',
'locale' => 'en',
'name' => 'anomaly.module.blocks::field.entry.name',
],
],
],
'translations' => [
[
'id' => '6',
'assignment_id' => '6',
'locale' => 'en',
'label' => 'anomaly.module.blocks::field.entry.label',
'placeholder' => 'anomaly.module.blocks::field.entry.placeholder',
'instructions' => 'anomaly.module.blocks::field.entry.instructions',
],
],
],
[
'id' => '7',
'sort_order' => '7',
'stream_id' => '2',
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
'id' => '7',
'assignment_id' => '7',
'locale' => 'en',
'label' => 'anomaly.module.blocks::field.description.label',
'placeholder' => 'anomaly.module.blocks::field.description.placeholder',
'instructions' => 'anomaly.module.blocks::field.description.instructions',
],
],
],
[
'id' => '8',
'sort_order' => '8',
'stream_id' => '2',
'field_id' => '9',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '0',
'translatable' => '0',
'field' => [
'id' => '9',
'namespace' => 'blocks',
'slug' => 'group',
'type' => 'anomaly.field_type.relationship',
'config' => 'a:1:{s:7:"related";s:37:"Anomaly\BlocksModule\Group\GroupModel";}',
'locked' => '1',
'translations' => [
[
'id' => '9',
'field_id' => '9',
'locale' => 'en',
'name' => 'anomaly.module.blocks::field.group.name',
],
],
],
'translations' => [
[
'id' => '8',
'assignment_id' => '8',
'locale' => 'en',
'label' => 'anomaly.module.blocks::field.group.label',
'placeholder' => 'anomaly.module.blocks::field.group.placeholder',
'instructions' => 'anomaly.module.blocks::field.group.instructions',
],
],
],
[
'id' => '9',
'sort_order' => '9',
'stream_id' => '2',
'field_id' => '3',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '0',
'translatable' => '0',
'field' => [
'id' => '3',
'namespace' => 'blocks',
'slug' => 'title',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => '3',
'field_id' => '3',
'locale' => 'en',
'name' => 'anomaly.module.blocks::field.title.name',
],
],
],
'translations' => [
[
'id' => '9',
'assignment_id' => '9',
'locale' => 'en',
'label' => 'anomaly.module.blocks::field.title.label',
'placeholder' => 'anomaly.module.blocks::field.title.placeholder',
'instructions' => 'anomaly.module.blocks::field.title.instructions',
],
],
],
[
'id' => '10',
'sort_order' => '10',
'stream_id' => '2',
'field_id' => '10',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '0',
'translatable' => '0',
'field' => [
'id' => '10',
'namespace' => 'blocks',
'slug' => 'css',
'type' => 'anomaly.field_type.editor',
'config' => 'a:1:{s:4:"mode";s:3:"css";}',
'locked' => '1',
'translations' => [
[
'id' => '10',
'field_id' => '10',
'locale' => 'en',
'name' => 'anomaly.module.blocks::field.css.name',
],
],
],
'translations' => [
[
'id' => '10',
'assignment_id' => '10',
'locale' => 'en',
'label' => 'anomaly.module.blocks::field.css.label',
'placeholder' => 'anomaly.module.blocks::field.css.placeholder',
'instructions' => 'anomaly.module.blocks::field.css.instructions',
],
],
],
[
'id' => '11',
'sort_order' => '11',
'stream_id' => '2',
'field_id' => '11',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '0',
'translatable' => '0',
'field' => [
'id' => '11',
'namespace' => 'blocks',
'slug' => 'js',
'type' => 'anomaly.field_type.editor',
'config' => 'a:1:{s:4:"mode";s:10:"javascript";}',
'locked' => '1',
'translations' => [
[
'id' => '11',
'field_id' => '11',
'locale' => 'en',
'name' => 'anomaly.module.blocks::field.js.name',
],
],
],
'translations' => [
[
'id' => '11',
'assignment_id' => '11',
'locale' => 'en',
'label' => 'anomaly.module.blocks::field.js.label',
'placeholder' => 'anomaly.module.blocks::field.js.placeholder',
'instructions' => 'anomaly.module.blocks::field.js.instructions',
],
],
],
],
'translations' => [
[
'id' => '2',
'stream_id' => '2',
'locale' => 'en',
'name' => 'anomaly.module.blocks::stream.blocks.name',
'description' => 'anomaly.module.blocks::stream.blocks.description',
],
],
];

    
public function entry()
{

return $this->getFieldType('entry')->getRelation();
}

public function group()
{

return $this->getFieldType('group')->getRelation();
}

}
