<?php namespace Anomaly\Streams\Platform\Model\Files;

use Anomaly\Streams\Platform\Entry\EntryModel;

class FilesDisksEntryModel extends EntryModel
{

    

    protected $table = 'files_disks';

    protected $titleName = 'name';

    public $rules = [
'name' => 'required|unique:files_disks,name',
'slug' => 'required|unique:files_disks,slug',
'adapter' => 'required',
'description' => '',
];

    public $dates = ['created_at', 'updated_at'];

    

    

    

    protected $stream = [
'id' => '5',
'namespace' => 'files',
'slug' => 'disks',
'prefix' => 'files_',
'view_options' => 'a:2:{i:0;s:2:"id";i:1;s:10:"created_at";}',
'title_column' => 'name',
'order_by' => 'id',
'locked' => '1',
'translatable' => '0',
'trashable' => '0',
'assignments' => [
[
'id' => '18',
'sort_order' => '18',
'stream_id' => '5',
'field_id' => '15',
'config' => 'a:0:{}',
'unique' => '1',
'required' => '1',
'translatable' => '0',
'field' => [
'id' => '15',
'namespace' => 'files',
'slug' => 'name',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => '15',
'field_id' => '15',
'locale' => 'en',
'name' => 'anomaly.module.files::field.name.name',
],
],
],
'translations' => [
[
'id' => '18',
'assignment_id' => '18',
'locale' => 'en',
'label' => 'anomaly.module.files::field.name.label',
'placeholder' => 'anomaly.module.files::field.name.placeholder',
'instructions' => 'anomaly.module.files::field.name.instructions',
],
],
],
[
'id' => '19',
'sort_order' => '19',
'stream_id' => '5',
'field_id' => '16',
'config' => 'a:0:{}',
'unique' => '1',
'required' => '1',
'translatable' => '0',
'field' => [
'id' => '16',
'namespace' => 'files',
'slug' => 'slug',
'type' => 'anomaly.field_type.slug',
'config' => 'a:2:{s:4:"type";s:1:"_";s:7:"slugify";s:4:"name";}',
'locked' => '1',
'translations' => [
[
'id' => '16',
'field_id' => '16',
'locale' => 'en',
'name' => 'anomaly.module.files::field.slug.name',
],
],
],
'translations' => [
[
'id' => '19',
'assignment_id' => '19',
'locale' => 'en',
'label' => 'anomaly.module.files::field.slug.label',
'placeholder' => 'anomaly.module.files::field.slug.placeholder',
'instructions' => 'anomaly.module.files::field.slug.instructions',
],
],
],
[
'id' => '20',
'sort_order' => '20',
'stream_id' => '5',
'field_id' => '17',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '1',
'translatable' => '0',
'field' => [
'id' => '17',
'namespace' => 'files',
'slug' => 'adapter',
'type' => 'anomaly.field_type.addon',
'config' => 'a:2:{s:4:"type";s:10:"extensions";s:6:"search";s:31:"anomaly.module.files::adapter.*";}',
'locked' => '1',
'translations' => [
[
'id' => '17',
'field_id' => '17',
'locale' => 'en',
'name' => 'anomaly.module.files::field.adapter.name',
],
],
],
'translations' => [
[
'id' => '20',
'assignment_id' => '20',
'locale' => 'en',
'label' => 'anomaly.module.files::field.adapter.label',
'placeholder' => 'anomaly.module.files::field.adapter.placeholder',
'instructions' => 'anomaly.module.files::field.adapter.instructions',
],
],
],
[
'id' => '21',
'sort_order' => '21',
'stream_id' => '5',
'field_id' => '21',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '0',
'translatable' => '0',
'field' => [
'id' => '21',
'namespace' => 'files',
'slug' => 'description',
'type' => 'anomaly.field_type.textarea',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => '21',
'field_id' => '21',
'locale' => 'en',
'name' => 'anomaly.module.files::field.description.name',
],
],
],
'translations' => [
[
'id' => '21',
'assignment_id' => '21',
'locale' => 'en',
'label' => 'anomaly.module.files::field.description.label',
'placeholder' => 'anomaly.module.files::field.description.placeholder',
'instructions' => 'anomaly.module.files::field.description.instructions',
],
],
],
],
'translations' => [
[
'id' => '5',
'stream_id' => '5',
'locale' => 'en',
'name' => 'anomaly.module.files::stream.disks.name',
'description' => 'anomaly.module.files::stream.disks.description',
],
],
];

    
}
