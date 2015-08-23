<?php namespace Anomaly\Streams\Platform\Model\DemoBlock;

use Anomaly\Streams\Platform\Entry\EntryModel;

class DemoBlockDemoBlocksEntryModel extends EntryModel
{

    

    protected $table = 'demo_block_demo_blocks';

    protected $titleName = 'title';

    public $rules = [
'title' => 'required',
'content' => 'required',
];

    public $dates = ['created_at', 'updated_at'];

    protected $translatedAttributes = ['title', 'content'];

    protected $translationForeignKey = 'entry_id';

    protected $translationModel = 'Anomaly\Streams\Platform\Model\DemoBlock\DemoBlockDemoBlocksEntryTranslationsModel';

    protected $stream = [
'id' => '26',
'namespace' => 'demo_block',
'slug' => 'demo_blocks',
'prefix' => 'demo_block_',
'view_options' => 'a:2:{i:0;s:2:"id";i:1;s:10:"created_at";}',
'title_column' => 'title',
'order_by' => 'id',
'locked' => '0',
'translatable' => '1',
'trashable' => '0',
'assignments' => [
[
'id' => '152',
'sort_order' => '152',
'stream_id' => '26',
'field_id' => '121',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '1',
'translatable' => '1',
'field' => [
'id' => '121',
'namespace' => 'demo_block',
'slug' => 'title',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => '121',
'field_id' => '121',
'locale' => 'en',
'name' => 'anomaly.extension.demo_block::field.title.name',
],
],
],
'translations' => [
[
'id' => '152',
'assignment_id' => '152',
'locale' => 'en',
'label' => 'anomaly.extension.demo_block::field.title.label',
'placeholder' => 'anomaly.extension.demo_block::field.title.placeholder',
'instructions' => 'anomaly.extension.demo_block::field.title.instructions',
],
],
],
[
'id' => '153',
'sort_order' => '153',
'stream_id' => '26',
'field_id' => '122',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '1',
'translatable' => '1',
'field' => [
'id' => '122',
'namespace' => 'demo_block',
'slug' => 'content',
'type' => 'anomaly.field_type.wysiwyg',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => '122',
'field_id' => '122',
'locale' => 'en',
'name' => 'anomaly.extension.demo_block::field.content.name',
],
],
],
'translations' => [
[
'id' => '153',
'assignment_id' => '153',
'locale' => 'en',
'label' => 'anomaly.extension.demo_block::field.content.label',
'placeholder' => 'anomaly.extension.demo_block::field.content.placeholder',
'instructions' => 'anomaly.extension.demo_block::field.content.instructions',
],
],
],
],
'translations' => [
[
'id' => '26',
'stream_id' => '26',
'locale' => 'en',
'name' => 'anomaly.extension.demo_block::stream.demo_blocks.name',
'description' => 'anomaly.extension.demo_block::stream.demo_blocks.description',
],
],
];

    
}
