<?php namespace Anomaly\Streams\Platform\Model\Files;

use Anomaly\Streams\Platform\Entry\EntryModel;

class FilesFilesEntryModel extends EntryModel
{

    

    protected $table = 'files_files';

    protected $titleName = 'id';

    public $rules = [
'name' => 'required',
'disk' => 'required',
'extension' => 'required',
'size' => 'required',
'mime_type' => 'required',
'description' => '',
'downloads' => '',
'keywords' => '',
'folder' => '',
'alt' => '',
];

    public $dates = ['created_at', 'updated_at'];

    

    

    

    protected $stream = [
'id' => '7',
'namespace' => 'files',
'slug' => 'files',
'prefix' => 'files_',
'view_options' => 'a:2:{i:0;s:2:"id";i:1;s:10:"created_at";}',
'title_column' => 'id',
'order_by' => 'id',
'locked' => '1',
'translatable' => '0',
'trashable' => '0',
'assignments' => [
[
'id' => '25',
'sort_order' => '25',
'stream_id' => '7',
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
'id' => '25',
'assignment_id' => '25',
'locale' => 'en',
'label' => 'anomaly.module.files::field.name.label',
'placeholder' => 'anomaly.module.files::field.name.placeholder',
'instructions' => 'anomaly.module.files::field.name.instructions',
],
],
],
[
'id' => '26',
'sort_order' => '26',
'stream_id' => '7',
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
'id' => '26',
'assignment_id' => '26',
'locale' => 'en',
'label' => 'anomaly.module.files::field.disk.label',
'placeholder' => 'anomaly.module.files::field.disk.placeholder',
'instructions' => 'anomaly.module.files::field.disk.instructions',
],
],
],
[
'id' => '27',
'sort_order' => '27',
'stream_id' => '7',
'field_id' => '22',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '1',
'translatable' => '0',
'field' => [
'id' => '22',
'namespace' => 'files',
'slug' => 'extension',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => '22',
'field_id' => '22',
'locale' => 'en',
'name' => 'anomaly.module.files::field.extension.name',
],
],
],
'translations' => [
[
'id' => '27',
'assignment_id' => '27',
'locale' => 'en',
'label' => 'anomaly.module.files::field.extension.label',
'placeholder' => 'anomaly.module.files::field.extension.placeholder',
'instructions' => 'anomaly.module.files::field.extension.instructions',
],
],
],
[
'id' => '28',
'sort_order' => '28',
'stream_id' => '7',
'field_id' => '28',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '1',
'translatable' => '0',
'field' => [
'id' => '28',
'namespace' => 'files',
'slug' => 'size',
'type' => 'anomaly.field_type.integer',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => '28',
'field_id' => '28',
'locale' => 'en',
'name' => 'anomaly.module.files::field.size.name',
],
],
],
'translations' => [
[
'id' => '28',
'assignment_id' => '28',
'locale' => 'en',
'label' => 'anomaly.module.files::field.size.label',
'placeholder' => 'anomaly.module.files::field.size.placeholder',
'instructions' => 'anomaly.module.files::field.size.instructions',
],
],
],
[
'id' => '29',
'sort_order' => '29',
'stream_id' => '7',
'field_id' => '27',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '1',
'translatable' => '0',
'field' => [
'id' => '27',
'namespace' => 'files',
'slug' => 'mime_type',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => '27',
'field_id' => '27',
'locale' => 'en',
'name' => 'anomaly.module.files::field.mime_type.name',
],
],
],
'translations' => [
[
'id' => '29',
'assignment_id' => '29',
'locale' => 'en',
'label' => 'anomaly.module.files::field.mime_type.label',
'placeholder' => 'anomaly.module.files::field.mime_type.placeholder',
'instructions' => 'anomaly.module.files::field.mime_type.instructions',
],
],
],
[
'id' => '30',
'sort_order' => '30',
'stream_id' => '7',
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
'id' => '30',
'assignment_id' => '30',
'locale' => 'en',
'label' => 'anomaly.module.files::field.description.label',
'placeholder' => 'anomaly.module.files::field.description.placeholder',
'instructions' => 'anomaly.module.files::field.description.instructions',
],
],
],
[
'id' => '31',
'sort_order' => '31',
'stream_id' => '7',
'field_id' => '29',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '0',
'translatable' => '0',
'field' => [
'id' => '29',
'namespace' => 'files',
'slug' => 'downloads',
'type' => 'anomaly.field_type.integer',
'config' => 'a:1:{s:13:"default_value";i:0;}',
'locked' => '1',
'translations' => [
[
'id' => '29',
'field_id' => '29',
'locale' => 'en',
'name' => 'anomaly.module.files::field.downloads.name',
],
],
],
'translations' => [
[
'id' => '31',
'assignment_id' => '31',
'locale' => 'en',
'label' => 'anomaly.module.files::field.downloads.label',
'placeholder' => 'anomaly.module.files::field.downloads.placeholder',
'instructions' => 'anomaly.module.files::field.downloads.instructions',
],
],
],
[
'id' => '32',
'sort_order' => '32',
'stream_id' => '7',
'field_id' => '23',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '0',
'translatable' => '0',
'field' => [
'id' => '23',
'namespace' => 'files',
'slug' => 'keywords',
'type' => 'anomaly.field_type.tags',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => '23',
'field_id' => '23',
'locale' => 'en',
'name' => 'anomaly.module.files::field.keywords.name',
],
],
],
'translations' => [
[
'id' => '32',
'assignment_id' => '32',
'locale' => 'en',
'label' => 'anomaly.module.files::field.keywords.label',
'placeholder' => 'anomaly.module.files::field.keywords.placeholder',
'instructions' => 'anomaly.module.files::field.keywords.instructions',
],
],
],
[
'id' => '33',
'sort_order' => '33',
'stream_id' => '7',
'field_id' => '19',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '0',
'translatable' => '0',
'field' => [
'id' => '19',
'namespace' => 'files',
'slug' => 'folder',
'type' => 'anomaly.field_type.relationship',
'config' => 'a:1:{s:7:"related";s:38:"Anomaly\FilesModule\Folder\FolderModel";}',
'locked' => '1',
'translations' => [
[
'id' => '19',
'field_id' => '19',
'locale' => 'en',
'name' => 'anomaly.module.files::field.folder.name',
],
],
],
'translations' => [
[
'id' => '33',
'assignment_id' => '33',
'locale' => 'en',
'label' => 'anomaly.module.files::field.folder.label',
'placeholder' => 'anomaly.module.files::field.folder.placeholder',
'instructions' => 'anomaly.module.files::field.folder.instructions',
],
],
],
[
'id' => '34',
'sort_order' => '34',
'stream_id' => '7',
'field_id' => '24',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '0',
'translatable' => '0',
'field' => [
'id' => '24',
'namespace' => 'files',
'slug' => 'alt',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => '24',
'field_id' => '24',
'locale' => 'en',
'name' => 'anomaly.module.files::field.alt.name',
],
],
],
'translations' => [
[
'id' => '34',
'assignment_id' => '34',
'locale' => 'en',
'label' => 'anomaly.module.files::field.alt.label',
'placeholder' => 'anomaly.module.files::field.alt.placeholder',
'instructions' => 'anomaly.module.files::field.alt.instructions',
],
],
],
],
'translations' => [
[
'id' => '7',
'stream_id' => '7',
'locale' => 'en',
'name' => 'anomaly.module.files::stream.files.name',
'description' => 'anomaly.module.files::stream.files.description',
],
],
];

    
public function disk()
{

return $this->getFieldType('disk')->getRelation();
}

public function folder()
{

return $this->getFieldType('folder')->getRelation();
}

}
