<?php namespace Anomaly\Streams\Platform\Model\Users;

use Anomaly\Streams\Platform\Entry\EntryModel;

class UsersResetsEntryModel extends EntryModel
{

    

    protected $table = 'users_resets';

    protected $titleName = 'user';

    public $rules = [
'user' => 'required|unique:users_resets,user_id',
'code' => 'required|unique:users_resets,code',
];

    public $dates = ['created_at', 'updated_at'];

    

    

    

    protected $stream = [
'id' => '24',
'namespace' => 'users',
'slug' => 'resets',
'prefix' => 'users_',
'view_options' => 'a:2:{i:0;s:2:"id";i:1;s:10:"created_at";}',
'title_column' => 'user',
'order_by' => 'id',
'locked' => '0',
'translatable' => '0',
'trashable' => '0',
'assignments' => [
[
'id' => '150',
'sort_order' => '150',
'stream_id' => '24',
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
'id' => '150',
'assignment_id' => '150',
'locale' => 'en',
'label' => 'anomaly.module.users::field.user.label',
'placeholder' => 'anomaly.module.users::field.user.placeholder',
'instructions' => 'anomaly.module.users::field.user.instructions',
],
],
],
[
'id' => '151',
'sort_order' => '151',
'stream_id' => '24',
'field_id' => '116',
'config' => 'a:0:{}',
'unique' => '1',
'required' => '1',
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
'id' => '151',
'assignment_id' => '151',
'locale' => 'en',
'label' => 'anomaly.module.users::field.code.label',
'placeholder' => 'anomaly.module.users::field.code.placeholder',
'instructions' => 'anomaly.module.users::field.code.instructions',
],
],
],
],
'translations' => [
[
'id' => '24',
'stream_id' => '24',
'locale' => 'en',
'name' => 'anomaly.module.users::stream.resets.name',
'description' => 'anomaly.module.users::stream.resets.description',
],
],
];

    
public function user()
{

return $this->getFieldType('user')->getRelation();
}

}
