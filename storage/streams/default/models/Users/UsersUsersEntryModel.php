<?php namespace Anomaly\Streams\Platform\Model\Users;

use Anomaly\Streams\Platform\Entry\EntryModel;

class UsersUsersEntryModel extends EntryModel
{

    

    protected $table = 'users_users';

    protected $titleName = 'display_name';

    public $rules = [
'email' => 'required|unique:users_users,email',
'username' => 'required|unique:users_users,username',
'password' => 'required',
'roles' => 'required',
'display_name' => 'required',
'first_name' => '',
'last_name' => '',
'avatar' => '',
'permissions' => '',
'remember_token' => '',
'last_login_at' => '',
'last_activity_at' => '',
'ip_address' => '',
];

    public $dates = ['created_at', 'updated_at', 'last_login_at', 'last_activity_at'];

    

    

    

    protected $stream = [
'id' => '20',
'namespace' => 'users',
'slug' => 'users',
'prefix' => 'users_',
'view_options' => 'a:2:{i:0;s:2:"id";i:1;s:10:"created_at";}',
'title_column' => 'display_name',
'order_by' => 'id',
'locked' => '0',
'translatable' => '0',
'trashable' => '0',
'assignments' => [
[
'id' => '130',
'sort_order' => '130',
'stream_id' => '20',
'field_id' => '103',
'config' => 'a:0:{}',
'unique' => '1',
'required' => '1',
'translatable' => '0',
'field' => [
'id' => '103',
'namespace' => 'users',
'slug' => 'email',
'type' => 'anomaly.field_type.email',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => '103',
'field_id' => '103',
'locale' => 'en',
'name' => 'anomaly.module.users::field.email.name',
],
],
],
'translations' => [
[
'id' => '130',
'assignment_id' => '130',
'locale' => 'en',
'label' => 'anomaly.module.users::field.email.label',
'placeholder' => 'anomaly.module.users::field.email.placeholder',
'instructions' => 'anomaly.module.users::field.email.instructions',
],
],
],
[
'id' => '131',
'sort_order' => '131',
'stream_id' => '20',
'field_id' => '104',
'config' => 'a:0:{}',
'unique' => '1',
'required' => '1',
'translatable' => '0',
'field' => [
'id' => '104',
'namespace' => 'users',
'slug' => 'username',
'type' => 'anomaly.field_type.slug',
'config' => 'a:1:{s:4:"type";s:1:"_";}',
'locked' => '1',
'translations' => [
[
'id' => '104',
'field_id' => '104',
'locale' => 'en',
'name' => 'anomaly.module.users::field.username.name',
],
],
],
'translations' => [
[
'id' => '131',
'assignment_id' => '131',
'locale' => 'en',
'label' => 'anomaly.module.users::field.username.label',
'placeholder' => 'anomaly.module.users::field.username.placeholder',
'instructions' => 'anomaly.module.users::field.username.instructions',
],
],
],
[
'id' => '132',
'sort_order' => '132',
'stream_id' => '20',
'field_id' => '105',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '1',
'translatable' => '0',
'field' => [
'id' => '105',
'namespace' => 'users',
'slug' => 'password',
'type' => 'anomaly.field_type.text',
'config' => 'a:1:{s:4:"type";s:8:"password";}',
'locked' => '1',
'translations' => [
[
'id' => '105',
'field_id' => '105',
'locale' => 'en',
'name' => 'anomaly.module.users::field.password.name',
],
],
],
'translations' => [
[
'id' => '132',
'assignment_id' => '132',
'locale' => 'en',
'label' => 'anomaly.module.users::field.password.label',
'placeholder' => 'anomaly.module.users::field.password.placeholder',
'instructions' => 'anomaly.module.users::field.password.instructions',
],
],
],
[
'id' => '133',
'sort_order' => '133',
'stream_id' => '20',
'field_id' => '119',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '1',
'translatable' => '0',
'field' => [
'id' => '119',
'namespace' => 'users',
'slug' => 'roles',
'type' => 'anomaly.field_type.multiple',
'config' => 'a:1:{s:7:"related";s:34:"Anomaly\UsersModule\Role\RoleModel";}',
'locked' => '1',
'translations' => [
[
'id' => '119',
'field_id' => '119',
'locale' => 'en',
'name' => 'anomaly.module.users::field.roles.name',
],
],
],
'translations' => [
[
'id' => '133',
'assignment_id' => '133',
'locale' => 'en',
'label' => 'anomaly.module.users::field.roles.label',
'placeholder' => 'anomaly.module.users::field.roles.placeholder',
'instructions' => 'anomaly.module.users::field.roles.instructions',
],
],
],
[
'id' => '134',
'sort_order' => '134',
'stream_id' => '20',
'field_id' => '112',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '1',
'translatable' => '0',
'field' => [
'id' => '112',
'namespace' => 'users',
'slug' => 'display_name',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => '112',
'field_id' => '112',
'locale' => 'en',
'name' => 'anomaly.module.users::field.display_name.name',
],
],
],
'translations' => [
[
'id' => '134',
'assignment_id' => '134',
'locale' => 'en',
'label' => 'anomaly.module.users::field.display_name.label',
'placeholder' => 'anomaly.module.users::field.display_name.placeholder',
'instructions' => 'anomaly.module.users::field.display_name.instructions',
],
],
],
[
'id' => '135',
'sort_order' => '135',
'stream_id' => '20',
'field_id' => '113',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '0',
'translatable' => '0',
'field' => [
'id' => '113',
'namespace' => 'users',
'slug' => 'first_name',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => '113',
'field_id' => '113',
'locale' => 'en',
'name' => 'anomaly.module.users::field.first_name.name',
],
],
],
'translations' => [
[
'id' => '135',
'assignment_id' => '135',
'locale' => 'en',
'label' => 'anomaly.module.users::field.first_name.label',
'placeholder' => 'anomaly.module.users::field.first_name.placeholder',
'instructions' => 'anomaly.module.users::field.first_name.instructions',
],
],
],
[
'id' => '136',
'sort_order' => '136',
'stream_id' => '20',
'field_id' => '114',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '0',
'translatable' => '0',
'field' => [
'id' => '114',
'namespace' => 'users',
'slug' => 'last_name',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => '114',
'field_id' => '114',
'locale' => 'en',
'name' => 'anomaly.module.users::field.last_name.name',
],
],
],
'translations' => [
[
'id' => '136',
'assignment_id' => '136',
'locale' => 'en',
'label' => 'anomaly.module.users::field.last_name.label',
'placeholder' => 'anomaly.module.users::field.last_name.placeholder',
'instructions' => 'anomaly.module.users::field.last_name.instructions',
],
],
],
[
'id' => '137',
'sort_order' => '137',
'stream_id' => '20',
'field_id' => '106',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '0',
'translatable' => '0',
'field' => [
'id' => '106',
'namespace' => 'users',
'slug' => 'avatar',
'type' => 'anomaly.field_type.file',
'config' => 'a:2:{s:4:"disk";s:6:"public";s:6:"folder";s:20:"Users Module/Avatars";}',
'locked' => '1',
'translations' => [
[
'id' => '106',
'field_id' => '106',
'locale' => 'en',
'name' => 'anomaly.module.users::field.avatar.name',
],
],
],
'translations' => [
[
'id' => '137',
'assignment_id' => '137',
'locale' => 'en',
'label' => 'anomaly.module.users::field.avatar.label',
'placeholder' => 'anomaly.module.users::field.avatar.placeholder',
'instructions' => 'anomaly.module.users::field.avatar.instructions',
],
],
],
[
'id' => '138',
'sort_order' => '138',
'stream_id' => '20',
'field_id' => '111',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '0',
'translatable' => '0',
'field' => [
'id' => '111',
'namespace' => 'users',
'slug' => 'permissions',
'type' => 'anomaly.field_type.checkboxes',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => '111',
'field_id' => '111',
'locale' => 'en',
'name' => 'anomaly.module.users::field.permissions.name',
],
],
],
'translations' => [
[
'id' => '138',
'assignment_id' => '138',
'locale' => 'en',
'label' => 'anomaly.module.users::field.permissions.label',
'placeholder' => 'anomaly.module.users::field.permissions.placeholder',
'instructions' => 'anomaly.module.users::field.permissions.instructions',
],
],
],
[
'id' => '139',
'sort_order' => '139',
'stream_id' => '20',
'field_id' => '107',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '0',
'translatable' => '0',
'field' => [
'id' => '107',
'namespace' => 'users',
'slug' => 'remember_token',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => '107',
'field_id' => '107',
'locale' => 'en',
'name' => 'anomaly.module.users::field.remember_token.name',
],
],
],
'translations' => [
[
'id' => '139',
'assignment_id' => '139',
'locale' => 'en',
'label' => 'anomaly.module.users::field.remember_token.label',
'placeholder' => 'anomaly.module.users::field.remember_token.placeholder',
'instructions' => 'anomaly.module.users::field.remember_token.instructions',
],
],
],
[
'id' => '140',
'sort_order' => '140',
'stream_id' => '20',
'field_id' => '109',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '0',
'translatable' => '0',
'field' => [
'id' => '109',
'namespace' => 'users',
'slug' => 'last_login_at',
'type' => 'anomaly.field_type.datetime',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => '109',
'field_id' => '109',
'locale' => 'en',
'name' => 'anomaly.module.users::field.last_login_at.name',
],
],
],
'translations' => [
[
'id' => '140',
'assignment_id' => '140',
'locale' => 'en',
'label' => 'anomaly.module.users::field.last_login_at.label',
'placeholder' => 'anomaly.module.users::field.last_login_at.placeholder',
'instructions' => 'anomaly.module.users::field.last_login_at.instructions',
],
],
],
[
'id' => '141',
'sort_order' => '141',
'stream_id' => '20',
'field_id' => '110',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '0',
'translatable' => '0',
'field' => [
'id' => '110',
'namespace' => 'users',
'slug' => 'last_activity_at',
'type' => 'anomaly.field_type.datetime',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => '110',
'field_id' => '110',
'locale' => 'en',
'name' => 'anomaly.module.users::field.last_activity_at.name',
],
],
],
'translations' => [
[
'id' => '141',
'assignment_id' => '141',
'locale' => 'en',
'label' => 'anomaly.module.users::field.last_activity_at.label',
'placeholder' => 'anomaly.module.users::field.last_activity_at.placeholder',
'instructions' => 'anomaly.module.users::field.last_activity_at.instructions',
],
],
],
[
'id' => '142',
'sort_order' => '142',
'stream_id' => '20',
'field_id' => '108',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '0',
'translatable' => '0',
'field' => [
'id' => '108',
'namespace' => 'users',
'slug' => 'ip_address',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => '108',
'field_id' => '108',
'locale' => 'en',
'name' => 'anomaly.module.users::field.ip_address.name',
],
],
],
'translations' => [
[
'id' => '142',
'assignment_id' => '142',
'locale' => 'en',
'label' => 'anomaly.module.users::field.ip_address.label',
'placeholder' => 'anomaly.module.users::field.ip_address.placeholder',
'instructions' => 'anomaly.module.users::field.ip_address.instructions',
],
],
],
],
'translations' => [
[
'id' => '20',
'stream_id' => '20',
'locale' => 'en',
'name' => 'anomaly.module.users::stream.users.name',
'description' => 'anomaly.module.users::stream.users.description',
],
],
];

    
public function roles()
{

return $this->getFieldType('roles')->getRelation();
}

public function avatar()
{

return $this->getFieldType('avatar')->getRelation();
}

}
