<?php namespace Anomaly\Streams\Platform\Model\Users;

use Anomaly\Streams\Platform\Entry\EntryModel;

class UsersSuspensionsEntryModel extends EntryModel
{

    

    protected $table = 'users_suspensions';

    protected $titleName = 'user';

    public $rules = [
'user' => 'required|unique:users_suspensions,user_id',
];

    public $dates = ['created_at', 'updated_at'];

    

    

    

    protected $stream = [
'id' => '23',
'namespace' => 'users',
'slug' => 'suspensions',
'prefix' => 'users_',
'view_options' => 'a:2:{i:0;s:2:"id";i:1;s:10:"created_at";}',
'title_column' => 'user',
'order_by' => 'id',
'locked' => '0',
'translatable' => '0',
'trashable' => '0',
'assignments' => [
[
'id' => '149',
'sort_order' => '149',
'stream_id' => '23',
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
'id' => '149',
'assignment_id' => '149',
'locale' => 'en',
'label' => 'anomaly.module.users::field.user.label',
'placeholder' => 'anomaly.module.users::field.user.placeholder',
'instructions' => 'anomaly.module.users::field.user.instructions',
],
],
],
],
'translations' => [
[
'id' => '23',
'stream_id' => '23',
'locale' => 'en',
'name' => 'anomaly.module.users::stream.suspensions.name',
'description' => 'anomaly.module.users::stream.suspensions.description',
],
],
];

    
public function user()
{

return $this->getFieldType('user')->getRelation();
}

}
