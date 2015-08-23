<?php namespace Anomaly\Streams\Platform\Model\Pages;

use Anomaly\Streams\Platform\Entry\EntryModel;

class PagesDefaultPagesEntryModel extends EntryModel
{

    

    protected $table = 'pages_default_pages';

    protected $titleName = 'id';

    public $rules = [
'content' => '',
];

    public $dates = ['created_at', 'updated_at'];

    

    protected $translationForeignKey = 'entry_id';

    protected $translationModel = 'Anomaly\Streams\Platform\Model\Pages\PagesDefaultPagesEntryTranslationsModel';

    protected $stream = [
'id' => '29',
'namespace' => 'pages',
'slug' => 'default_pages',
'prefix' => 'pages_',
'view_options' => 'a:2:{i:0;s:2:"id";i:1;s:10:"created_at";}',
'title_column' => 'id',
'order_by' => 'id',
'locked' => '0',
'translatable' => '1',
'trashable' => '0',
'assignments' => [
[
'id' => '169',
'sort_order' => '163',
'stream_id' => '29',
'field_id' => '129',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '0',
'translatable' => '0',
'field' => [
'id' => '129',
'namespace' => 'pages',
'slug' => 'content',
'type' => 'anomaly.field_type.wysiwyg',
'config' => 'a:4:{s:7:"buttons";a:13:{i:0;s:4:"html";i:1;s:10:"formatting";i:2;s:4:"bold";i:3;s:6:"italic";i:4;s:7:"deleted";i:5;s:13:"unorderedlist";i:6;s:11:"orderedlist";i:7;s:7:"outdent";i:8;s:6:"indent";i:9;s:4:"link";i:10;s:9:"alignment";i:11;s:14:"horizontalrule";i:12;s:9:"underline";}s:7:"plugins";a:1:{i:0;s:10:"fullscreen";}s:6:"height";s:3:"300";s:11:"line_breaks";b:0;}',
'locked' => '0',
'translations' => [
[
'id' => '129',
'field_id' => '129',
'locale' => 'en',
'name' => 'Content',
],
],
],
'translations' => [
[
'id' => '172',
'assignment_id' => '169',
'locale' => 'en',
'label' => '',
'placeholder' => '',
'instructions' => '',
],
[
'id' => '173',
'assignment_id' => '169',
'locale' => 'fr',
'label' => '',
'placeholder' => '',
'instructions' => '',
],
],
],
],
'translations' => [
[
'id' => '29',
'stream_id' => '29',
'locale' => 'en',
'name' => 'Default',
'description' => '',
],
],
];

    
}
