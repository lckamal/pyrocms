<?php namespace Anomaly\Streams\Platform\Model\Appearance;

use Anomaly\Streams\Platform\Entry\EntryModel;

class AppearanceVariablesEntryModel extends EntryModel
{

    

    protected $table = 'appearance_variables';

    protected $titleName = 'id';

    public $rules = [
'key' => 'required|unique:appearance_variables,key',
'value' => '',
];

    public $dates = ['created_at', 'updated_at'];

    

    

    

    protected $stream = [
'id' => '1',
'namespace' => 'appearance',
'slug' => 'variables',
'prefix' => 'appearance_',
'view_options' => 'a:2:{i:0;s:2:"id";i:1;s:10:"created_at";}',
'title_column' => 'id',
'order_by' => 'id',
'locked' => '1',
'translatable' => '0',
'trashable' => '0',
'assignments' => [
[
'id' => '1',
'sort_order' => '1',
'stream_id' => '1',
'field_id' => '1',
'config' => 'a:0:{}',
'unique' => '1',
'required' => '1',
'translatable' => '0',
'field' => [
'id' => '1',
'namespace' => 'appearance',
'slug' => 'key',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => '1',
'field_id' => '1',
'locale' => 'en',
'name' => 'anomaly.module.appearance::field.key.name',
],
],
],
'translations' => [
[
'id' => '1',
'assignment_id' => '1',
'locale' => 'en',
'label' => 'anomaly.module.appearance::field.key.label',
'placeholder' => 'anomaly.module.appearance::field.key.placeholder',
'instructions' => 'anomaly.module.appearance::field.key.instructions',
],
],
],
[
'id' => '2',
'sort_order' => '2',
'stream_id' => '1',
'field_id' => '2',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '0',
'translatable' => '0',
'field' => [
'id' => '2',
'namespace' => 'appearance',
'slug' => 'value',
'type' => 'anomaly.field_type.textarea',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => '2',
'field_id' => '2',
'locale' => 'en',
'name' => 'anomaly.module.appearance::field.value.name',
],
],
],
'translations' => [
[
'id' => '2',
'assignment_id' => '2',
'locale' => 'en',
'label' => 'anomaly.module.appearance::field.value.label',
'placeholder' => 'anomaly.module.appearance::field.value.placeholder',
'instructions' => 'anomaly.module.appearance::field.value.instructions',
],
],
],
],
'translations' => [
[
'id' => '1',
'stream_id' => '1',
'locale' => 'en',
'name' => 'anomaly.module.appearance::stream.variables.name',
'description' => 'anomaly.module.appearance::stream.variables.description',
],
],
];

    
}
