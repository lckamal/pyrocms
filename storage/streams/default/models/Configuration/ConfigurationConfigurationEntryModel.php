<?php namespace Anomaly\Streams\Platform\Model\Configuration;

use Anomaly\Streams\Platform\Entry\EntryModel;

class ConfigurationConfigurationEntryModel extends EntryModel
{

    

    protected $table = 'configuration_configuration';

    protected $titleName = 'id';

    public $rules = [
'scope' => 'required',
'key' => 'required',
'value' => '',
];

    public $dates = ['created_at', 'updated_at'];

    

    

    

    protected $stream = [
'id' => '4',
'namespace' => 'configuration',
'slug' => 'configuration',
'prefix' => 'configuration_',
'view_options' => 'a:2:{i:0;s:2:"id";i:1;s:10:"created_at";}',
'title_column' => 'id',
'order_by' => 'id',
'locked' => '1',
'translatable' => '0',
'trashable' => '0',
'assignments' => [
[
'id' => '15',
'sort_order' => '15',
'stream_id' => '4',
'field_id' => '12',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '1',
'translatable' => '0',
'field' => [
'id' => '12',
'namespace' => 'configuration',
'slug' => 'scope',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => '12',
'field_id' => '12',
'locale' => 'en',
'name' => 'anomaly.module.configuration::field.scope.name',
],
],
],
'translations' => [
[
'id' => '15',
'assignment_id' => '15',
'locale' => 'en',
'label' => 'anomaly.module.configuration::field.scope.label',
'placeholder' => 'anomaly.module.configuration::field.scope.placeholder',
'instructions' => 'anomaly.module.configuration::field.scope.instructions',
],
],
],
[
'id' => '16',
'sort_order' => '16',
'stream_id' => '4',
'field_id' => '13',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '1',
'translatable' => '0',
'field' => [
'id' => '13',
'namespace' => 'configuration',
'slug' => 'key',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => '13',
'field_id' => '13',
'locale' => 'en',
'name' => 'anomaly.module.configuration::field.key.name',
],
],
],
'translations' => [
[
'id' => '16',
'assignment_id' => '16',
'locale' => 'en',
'label' => 'anomaly.module.configuration::field.key.label',
'placeholder' => 'anomaly.module.configuration::field.key.placeholder',
'instructions' => 'anomaly.module.configuration::field.key.instructions',
],
],
],
[
'id' => '17',
'sort_order' => '17',
'stream_id' => '4',
'field_id' => '14',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '0',
'translatable' => '0',
'field' => [
'id' => '14',
'namespace' => 'configuration',
'slug' => 'value',
'type' => 'anomaly.field_type.textarea',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => '14',
'field_id' => '14',
'locale' => 'en',
'name' => 'anomaly.module.configuration::field.value.name',
],
],
],
'translations' => [
[
'id' => '17',
'assignment_id' => '17',
'locale' => 'en',
'label' => 'anomaly.module.configuration::field.value.label',
'placeholder' => 'anomaly.module.configuration::field.value.placeholder',
'instructions' => 'anomaly.module.configuration::field.value.instructions',
],
],
],
],
'translations' => [
[
'id' => '4',
'stream_id' => '4',
'locale' => 'en',
'name' => 'anomaly.module.configuration::stream.configuration.name',
'description' => 'anomaly.module.configuration::stream.configuration.description',
],
],
];

    
}
