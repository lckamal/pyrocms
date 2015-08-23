<?php namespace Anomaly\Streams\Platform\Model\Settings;

use Anomaly\Streams\Platform\Entry\EntryModel;

class SettingsSettingsEntryModel extends EntryModel
{

    

    protected $table = 'settings_settings';

    protected $titleName = 'id';

    public $rules = [
'key' => 'required|unique:settings_settings,key',
'value' => '',
];

    public $dates = ['created_at', 'updated_at'];

    

    

    

    protected $stream = [
'id' => '19',
'namespace' => 'settings',
'slug' => 'settings',
'prefix' => 'settings_',
'view_options' => 'a:2:{i:0;s:2:"id";i:1;s:10:"created_at";}',
'title_column' => 'id',
'order_by' => 'id',
'locked' => '0',
'translatable' => '0',
'trashable' => '0',
'assignments' => [
[
'id' => '128',
'sort_order' => '128',
'stream_id' => '19',
'field_id' => '101',
'config' => 'a:0:{}',
'unique' => '1',
'required' => '1',
'translatable' => '0',
'field' => [
'id' => '101',
'namespace' => 'settings',
'slug' => 'key',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => '101',
'field_id' => '101',
'locale' => 'en',
'name' => 'anomaly.module.settings::field.key.name',
],
],
],
'translations' => [
[
'id' => '128',
'assignment_id' => '128',
'locale' => 'en',
'label' => 'anomaly.module.settings::field.key.label',
'placeholder' => 'anomaly.module.settings::field.key.placeholder',
'instructions' => 'anomaly.module.settings::field.key.instructions',
],
],
],
[
'id' => '129',
'sort_order' => '129',
'stream_id' => '19',
'field_id' => '102',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '0',
'translatable' => '0',
'field' => [
'id' => '102',
'namespace' => 'settings',
'slug' => 'value',
'type' => 'anomaly.field_type.textarea',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => '102',
'field_id' => '102',
'locale' => 'en',
'name' => 'anomaly.module.settings::field.value.name',
],
],
],
'translations' => [
[
'id' => '129',
'assignment_id' => '129',
'locale' => 'en',
'label' => 'anomaly.module.settings::field.value.label',
'placeholder' => 'anomaly.module.settings::field.value.placeholder',
'instructions' => 'anomaly.module.settings::field.value.instructions',
],
],
],
],
'translations' => [
[
'id' => '19',
'stream_id' => '19',
'locale' => 'en',
'name' => 'anomaly.module.settings::stream.settings.name',
'description' => 'anomaly.module.settings::stream.settings.description',
],
],
];

    
}
