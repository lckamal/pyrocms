<?php namespace Anomaly\Streams\Platform\Model\Users;

use Anomaly\Streams\Platform\Entry\EntryModel;

class UsersActivationsEntryModel extends EntryModel
{

    

    protected $table = 'users_activations';

    protected $titleName = 'user';

    public $rules = [
'code' => 'unique:users_activations,code',
'user' => 'required|unique:users_activations,user_id',
'completed' => '',
];

    public $dates = ['created_at', 'updated_at'];

    

    

    

    protected $stream = [
'id' => '22',
'namespace' => 'users',
'slug' => 'activations',
'prefix' => 'users_',
'view_options' => 'a:2:{i:0;s:2:"id";i:1;s:10:"created_at";}',
'title_column' => 'user',
'order_by' => 'id',
'locked' => '0',
'translatable' => '0',
'trashable' => '0',
'assignments' => [
[
'id' => '146',
'sort_order' => '146',
'stream_id' => '22',
'field_id' => '116',
'config' => 'a:0:{}',
'unique' => '1',
'required' => '0',
'translatable' => '0',
'field' => [
'id' => '116',
'namespace' => 'users',
'slug' => 'code',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => '116',
'field_id' => '116',
'locale' => 'en',
'name' => 'anomaly.module.users::field.code.name',
],
],
],
'translations' => [
[
'id' => '146',
'assignment_id' => '146',
'locale' => 'en',
'label' => 'anomaly.module.users::field.code.label',
'placeholder' => 'anomaly.module.users::field.code.placeholder',
'instructions' => 'anomaly.module.users::field.code.instructions',
],
],
],
[
'id' => '147',
'sort_order' => '147',
'stream_id' => '22',
'field_id' => '120',
'config' => 'a:0:{}',
'unique' => '1',
'required' => '1',
'translatable' => '0',
'field' => [
'id' => '120',
'namespace' => 'users',
'slug' => 'user',
'type' => 'anomaly.field_type.relationship',
'config' => 'a:1:{s:7:"related";s:34:"Anomaly\UsersModule\User\UserModel";}',
'locked' => '1',
'translations' => [
[
'id' => '120',
'field_id' => '120',
'locale' => 'en',
'name' => 'anomaly.module.users::field.user.name',
],
],
],
'translations' => [
[
'id' => '147',
'assignment_id' => '147',
'locale' => 'en',
'label' => 'anomaly.module.users::field.user.label',
'placeholder' => 'anomaly.module.users::field.user.placeholder',
'instructions' => 'anomaly.module.users::field.user.instructions',
],
],
],
[
'id' => '148',
'sort_order' => '148',
'stream_id' => '22',
'field_id' => '117',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '0',
'translatable' => '0',
'field' => [
'id' => '117',
'namespace' => 'users',
'slug' => 'completed',
'type' => 'anomaly.field_type.boolean',
'config' => 'a:1:{s:13:"default_value";b:0;}',
'locked' => '1',
'translations' => [
[
'id' => '117',
'field_id' => '117',
'locale' => 'en',
'name' => 'anomaly.module.users::field.completed.name',
],
],
],
'translations' => [
[
'id' => '148',
'assignment_id' => '148',
'locale' => 'en',
'label' => 'anomaly.module.users::field.completed.label',
'placeholder' => 'anomaly.module.users::field.completed.placeholder',
'instructions' => 'anomaly.module.users::field.completed.instructions',
],
],
],
],
'translations' => [
[
'id' => '22',
'stream_id' => '22',
'locale' => 'en',
'name' => 'anomaly.module.users::stream.activations.name',
'description' => 'anomaly.module.users::stream.activations.description',
],
],
];

    
public function user()
{

return $this->getFieldType('user')->getRelation();
}

}
