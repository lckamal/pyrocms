<?php namespace Anomaly\Streams\Platform\Model\Files;

use Anomaly\Streams\Platform\Entry\EntryModel;

class FilesFoldersEntryModel extends EntryModel
{

    

    protected $table = 'files_folders';

    protected $titleName = 'id';

    public $rules = [
'name' => 'required',
'disk' => 'required',
'parent' => '',
];

    public $dates = ['created_at', 'updated_at'];

    

    

    

    protected $stream = [
'id' => '6',
'namespace' => 'files',
'slug' => 'folders',
'prefix' => 'files_',
'view_options' => 'a:2:{i:0;s:2:"id";i:1;s:10:"created_at";}',
'title_column' => 'id',
'order_by' => 'id',
'locked' => '1',
'translatable' => '0',
'trashable' => '0',
'assignments' => [
[
'id' => '22',
'sort_order' => '22',
'stream_id' => '6',
'field_id' => '15',
'config' => 'a:0:{}',
'unique' => '0',
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
'id' => '22',
'assignment_id' => '22',
'locale' => 'en',
'label' => 'anomaly.module.files::field.name.label',
'placeholder' => 'anomaly.module.files::field.name.placeholder',
'instructions' => 'anomaly.module.files::field.name.instructions',
],
],
],
[
'id' => '23',
'sort_order' => '23',
'stream_id' => '6',
'field_id' => '20',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '1',
'translatable' => '0',
'field' => [
'id' => '20',
'namespace' => 'files',
'slug' => 'disk',
'type' => 'anomaly.field_type.relationship',
'config' => 'a:1:{s:7:"related";s:34:"Anomaly\FilesModule\Disk\DiskModel";}',
'locked' => '1',
'translations' => [
[
'id' => '20',
'field_id' => '20',
'locale' => 'en',
'name' => 'anomaly.module.files::field.disk.name',
],
],
],
'translations' => [
[
'id' => '23',
'assignment_id' => '23',
'locale' => 'en',
'label' => 'anomaly.module.files::field.disk.label',
'placeholder' => 'anomaly.module.files::field.disk.placeholder',
'instructions' => 'anomaly.module.files::field.disk.instructions',
],
],
],
[
'id' => '24',
'sort_order' => '24',
'stream_id' => '6',
'field_id' => '18',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '0',
'translatable' => '0',
'field' => [
'id' => '18',
'namespace' => 'files',
'slug' => 'parent',
'type' => 'anomaly.field_type.relationship',
'config' => 'a:1:{s:7:"related";s:38:"Anomaly\FilesModule\Folder\FolderModel";}',
'locked' => '1',
'translations' => [
[
'id' => '18',
'field_id' => '18',
'locale' => 'en',
'name' => 'anomaly.module.files::field.parent.name',
],
],
],
'translations' => [
[
'id' => '24',
'assignment_id' => '24',
'locale' => 'en',
'label' => 'anomaly.module.files::field.parent.label',
'placeholder' => 'anomaly.module.files::field.parent.placeholder',
'instructions' => 'anomaly.module.files::field.parent.instructions',
],
],
],
],
'translations' => [
[
'id' => '6',
'stream_id' => '6',
'locale' => 'en',
'name' => 'anomaly.module.files::stream.folders.name',
'description' => 'anomaly.module.files::stream.folders.description',
],
],
];

    
public function disk()
{

return $this->getFieldType('disk')->getRelation();
}

public function parent()
{

return $this->getFieldType('parent')->getRelation();
}

}
