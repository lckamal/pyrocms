<?php namespace Anomaly\Streams\Platform\Model\Preferences;

use Anomaly\Streams\Platform\Entry\EntryModel;

class PreferencesPreferencesEntryModel extends EntryModel
{

    

    protected $table = 'preferences_preferences';

    protected $titleName = 'id';

    public $rules = [
'user' => 'required',
'key' => 'required',
'value' => '',
];

    public $dates = ['created_at', 'updated_at'];

    

    

    

    protected $stream = [
'id' => '17',
'namespace' => 'preferences',
'slug' => 'preferences',
'prefix' => 'preferences_',
'view_options' => 'a:2:{i:0;s:2:"id";i:1;s:10:"created_at";}',
'title_column' => 'id',
'order_by' => 'id',
'locked' => '0',
'translatable' => '0',
'trashable' => '0',
'assignments' => [
[
'id' => '121',
'sort_order' => '121',
'stream_id' => '17',
'field_id' => '94',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '1',
'translatable' => '0',
'field' => [
'id' => '94',
'namespace' => 'preferences',
'slug' => 'user',
'type' => 'anomaly.field_type.user',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => '94',
'field_id' => '94',
'locale' => 'en',
'name' => 'anomaly.module.preferences::field.user.name',
],
],
],
'translations' => [
[
'id' => '121',
'assignment_id' => '121',
'locale' => 'en',
'label' => 'anomaly.module.preferences::field.user.label',
'placeholder' => 'anomaly.module.preferences::field.user.placeholder',
'instructions' => 'anomaly.module.preferences::field.user.instructions',
],
],
],
[
'id' => '122',
'sort_order' => '122',
'stream_id' => '17',
'field_id' => '95',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '1',
'translatable' => '0',
'field' => [
'id' => '95',
'namespace' => 'preferences',
'slug' => 'key',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => '95',
'field_id' => '95',
'locale' => 'en',
'name' => 'anomaly.module.preferences::field.key.name',
],
],
],
'translations' => [
[
'id' => '122',
'assignment_id' => '122',
'locale' => 'en',
'label' => 'anomaly.module.preferences::field.key.label',
'placeholder' => 'anomaly.module.preferences::field.key.placeholder',
'instructions' => 'anomaly.module.preferences::field.key.instructions',
],
],
],
[
'id' => '123',
'sort_order' => '123',
'stream_id' => '17',
'field_id' => '96',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '0',
'translatable' => '0',
'field' => [
'id' => '96',
'namespace' => 'preferences',
'slug' => 'value',
'type' => 'anomaly.field_type.textarea',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => '96',
'field_id' => '96',
'locale' => 'en',
'name' => 'anomaly.module.preferences::field.value.name',
],
],
],
'translations' => [
[
'id' => '123',
'assignment_id' => '123',
'locale' => 'en',
'label' => 'anomaly.module.preferences::field.value.label',
'placeholder' => 'anomaly.module.preferences::field.value.placeholder',
'instructions' => 'anomaly.module.preferences::field.value.instructions',
],
],
],
],
'translations' => [
[
'id' => '17',
'stream_id' => '17',
'locale' => 'en',
'name' => 'anomaly.module.preferences::stream.preferences.name',
'description' => 'anomaly.module.preferences::stream.preferences.description',
],
],
];

    
public function user()
{

return $this->getFieldType('user')->getRelation();
}

}
