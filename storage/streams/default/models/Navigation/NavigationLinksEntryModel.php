<?php namespace Anomaly\Streams\Platform\Model\Navigation;

use Anomaly\Streams\Platform\Entry\EntryModel;

class NavigationLinksEntryModel extends EntryModel
{

    

    protected $table = 'navigation_links';

    protected $titleName = 'id';

    public $rules = [
'group' => 'required',
'type' => 'required',
'entry' => 'required',
'target' => 'required',
'class' => '',
'parent' => '',
'allowed_roles' => '',
];

    public $dates = ['created_at', 'updated_at'];

    

    

    

    protected $stream = [
'id' => '9',
'namespace' => 'navigation',
'slug' => 'links',
'prefix' => 'navigation_',
'view_options' => 'a:2:{i:0;s:2:"id";i:1;s:10:"created_at";}',
'title_column' => 'id',
'order_by' => 'id',
'locked' => '0',
'translatable' => '0',
'trashable' => '0',
'assignments' => [
[
'id' => '38',
'sort_order' => '38',
'stream_id' => '9',
'field_id' => '35',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '1',
'translatable' => '0',
'field' => [
'id' => '35',
'namespace' => 'navigation',
'slug' => 'group',
'type' => 'anomaly.field_type.relationship',
'config' => 'a:1:{s:7:"related";s:41:"Anomaly\NavigationModule\Group\GroupModel";}',
'locked' => '1',
'translations' => [
[
'id' => '35',
'field_id' => '35',
'locale' => 'en',
'name' => 'anomaly.module.navigation::field.group.name',
],
],
],
'translations' => [
[
'id' => '38',
'assignment_id' => '38',
'locale' => 'en',
'label' => 'anomaly.module.navigation::field.group.label',
'placeholder' => 'anomaly.module.navigation::field.group.placeholder',
'instructions' => 'anomaly.module.navigation::field.group.instructions',
],
],
],
[
'id' => '39',
'sort_order' => '39',
'stream_id' => '9',
'field_id' => '38',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '1',
'translatable' => '0',
'field' => [
'id' => '38',
'namespace' => 'navigation',
'slug' => 'type',
'type' => 'anomaly.field_type.addon',
'config' => 'a:2:{s:4:"type";s:9:"extension";s:6:"search";s:38:"anomaly.module.navigation::link_type.*";}',
'locked' => '1',
'translations' => [
[
'id' => '38',
'field_id' => '38',
'locale' => 'en',
'name' => 'anomaly.module.navigation::field.type.name',
],
],
],
'translations' => [
[
'id' => '39',
'assignment_id' => '39',
'locale' => 'en',
'label' => 'anomaly.module.navigation::field.type.label',
'placeholder' => 'anomaly.module.navigation::field.type.placeholder',
'instructions' => 'anomaly.module.navigation::field.type.instructions',
],
],
],
[
'id' => '40',
'sort_order' => '40',
'stream_id' => '9',
'field_id' => '33',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '1',
'translatable' => '0',
'field' => [
'id' => '33',
'namespace' => 'navigation',
'slug' => 'entry',
'type' => 'anomaly.field_type.polymorphic',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => '33',
'field_id' => '33',
'locale' => 'en',
'name' => 'anomaly.module.navigation::field.entry.name',
],
],
],
'translations' => [
[
'id' => '40',
'assignment_id' => '40',
'locale' => 'en',
'label' => 'anomaly.module.navigation::field.entry.label',
'placeholder' => 'anomaly.module.navigation::field.entry.placeholder',
'instructions' => 'anomaly.module.navigation::field.entry.instructions',
],
],
],
[
'id' => '41',
'sort_order' => '41',
'stream_id' => '9',
'field_id' => '39',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '1',
'translatable' => '0',
'field' => [
'id' => '39',
'namespace' => 'navigation',
'slug' => 'target',
'type' => 'anomaly.field_type.select',
'config' => 'a:2:{s:14:"default_option";s:5:"_self";s:7:"options";a:2:{s:5:"_self";s:51:"anomaly.module.navigation::field.target.option.self";s:6:"_blank";s:52:"anomaly.module.navigation::field.target.option.blank";}}',
'locked' => '1',
'translations' => [
[
'id' => '39',
'field_id' => '39',
'locale' => 'en',
'name' => 'anomaly.module.navigation::field.target.name',
],
],
],
'translations' => [
[
'id' => '41',
'assignment_id' => '41',
'locale' => 'en',
'label' => 'anomaly.module.navigation::field.target.label',
'placeholder' => 'anomaly.module.navigation::field.target.placeholder',
'instructions' => 'anomaly.module.navigation::field.target.instructions',
],
],
],
[
'id' => '42',
'sort_order' => '42',
'stream_id' => '9',
'field_id' => '31',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '0',
'translatable' => '0',
'field' => [
'id' => '31',
'namespace' => 'navigation',
'slug' => 'class',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => '31',
'field_id' => '31',
'locale' => 'en',
'name' => 'anomaly.module.navigation::field.class.name',
],
],
],
'translations' => [
[
'id' => '42',
'assignment_id' => '42',
'locale' => 'en',
'label' => 'anomaly.module.navigation::field.class.label',
'placeholder' => 'anomaly.module.navigation::field.class.placeholder',
'instructions' => 'anomaly.module.navigation::field.class.instructions',
],
],
],
[
'id' => '43',
'sort_order' => '43',
'stream_id' => '9',
'field_id' => '36',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '0',
'translatable' => '0',
'field' => [
'id' => '36',
'namespace' => 'navigation',
'slug' => 'parent',
'type' => 'anomaly.field_type.relationship',
'config' => 'a:1:{s:7:"related";s:39:"Anomaly\NavigationModule\Link\LinkModel";}',
'locked' => '1',
'translations' => [
[
'id' => '36',
'field_id' => '36',
'locale' => 'en',
'name' => 'anomaly.module.navigation::field.parent.name',
],
],
],
'translations' => [
[
'id' => '43',
'assignment_id' => '43',
'locale' => 'en',
'label' => 'anomaly.module.navigation::field.parent.label',
'placeholder' => 'anomaly.module.navigation::field.parent.placeholder',
'instructions' => 'anomaly.module.navigation::field.parent.instructions',
],
],
],
[
'id' => '44',
'sort_order' => '44',
'stream_id' => '9',
'field_id' => '37',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '0',
'translatable' => '0',
'field' => [
'id' => '37',
'namespace' => 'navigation',
'slug' => 'allowed_roles',
'type' => 'anomaly.field_type.multiple',
'config' => 'a:1:{s:7:"related";s:34:"Anomaly\UsersModule\Role\RoleModel";}',
'locked' => '1',
'translations' => [
[
'id' => '37',
'field_id' => '37',
'locale' => 'en',
'name' => 'anomaly.module.navigation::field.allowed_roles.name',
],
],
],
'translations' => [
[
'id' => '44',
'assignment_id' => '44',
'locale' => 'en',
'label' => 'anomaly.module.navigation::field.allowed_roles.label',
'placeholder' => 'anomaly.module.navigation::field.allowed_roles.placeholder',
'instructions' => 'anomaly.module.navigation::field.allowed_roles.instructions',
],
],
],
],
'translations' => [
[
'id' => '9',
'stream_id' => '9',
'locale' => 'en',
'name' => 'anomaly.module.navigation::stream.links.name',
'description' => 'anomaly.module.navigation::stream.links.description',
],
],
];

    
public function group()
{

return $this->getFieldType('group')->getRelation();
}

public function entry()
{

return $this->getFieldType('entry')->getRelation();
}

public function parent()
{

return $this->getFieldType('parent')->getRelation();
}

public function allowedRoles()
{

return $this->getFieldType('allowed_roles')->getRelation();
}

}
