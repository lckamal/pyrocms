<?php namespace Anomaly\Streams\Platform\Model\Users;

use Anomaly\Streams\Platform\Entry\EntryModel;

class UsersRolesEntryModel extends EntryModel
{

    

    protected $table = 'users_roles';

    protected $titleName = 'name';

    public $rules = [
'name' => 'required',
'slug' => 'required|unique:users_roles,slug',
'permissions' => '',
];

    public $dates = ['created_at', 'updated_at'];

    protected $translatedAttributes = ['name'];

    protected $translationForeignKey = 'entry_id';

    protected $translationModel = 'Anomaly\Streams\Platform\Model\Users\UsersRolesEntryTranslationsModel';

    protected $stream = [
'id' => '21',
'namespace' => 'users',
'slug' => 'roles',
'prefix' => 'users_',
'view_options' => 'a:2:{i:0;s:2:"id";i:1;s:10:"created_at";}',
'title_column' => 'name',
'order_by' => 'id',
'locked' => '0',
'translatable' => '1',
'trashable' => '0',
'assignments' => [
[
'id' => '143',
'sort_order' => '143',
'stream_id' => '21',
'field_id' => '115',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '1',
'translatable' => '1',
'field' => [
'id' => '115',
'namespace' => 'users',
'slug' => 'name',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => '115',
'field_id' => '115',
'locale' => 'en',
'name' => 'anomaly.module.users::field.name.name',
],
],
],
'translations' => [
[
'id' => '143',
'assignment_id' => '143',
'locale' => 'en',
'label' => 'anomaly.module.users::field.name.label',
'placeholder' => 'anomaly.module.users::field.name.placeholder',
'instructions' => 'anomaly.module.users::field.name.instructions',
],
],
],
[
'id' => '144',
'sort_order' => '144',
'stream_id' => '21',
'field_id' => '118',
'config' => 'a:0:{}',
'unique' => '1',
'required' => '1',
'translatable' => '0',
'field' => [
'id' => '118',
'namespace' => 'users',
'slug' => 'slug',
'type' => 'anomaly.field_type.slug',
'config' => 'a:1:{s:7:"slugify";s:4:"name";}',
'locked' => '1',
'translations' => [
[
'id' => '118',
'field_id' => '118',
'locale' => 'en',
'name' => 'anomaly.module.users::field.slug.name',
],
],
],
'translations' => [
[
'id' => '144',
'assignment_id' => '144',
'locale' => 'en',
'label' => 'anomaly.module.users::field.slug.label',
'placeholder' => 'anomaly.module.users::field.slug.placeholder',
'instructions' => 'anomaly.module.users::field.slug.instructions',
],
],
],
[
'id' => '145',
'sort_order' => '145',
'stream_id' => '21',
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
'id' => '145',
'assignment_id' => '145',
'locale' => 'en',
'label' => 'anomaly.module.users::field.permissions.label',
'placeholder' => 'anomaly.module.users::field.permissions.placeholder',
'instructions' => 'anomaly.module.users::field.permissions.instructions',
],
],
],
],
'translations' => [
[
'id' => '21',
'stream_id' => '21',
'locale' => 'en',
'name' => 'anomaly.module.users::stream.roles.name',
'description' => 'anomaly.module.users::stream.roles.description',
],
],
];

    
}
