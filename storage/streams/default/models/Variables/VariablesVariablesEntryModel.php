<?php namespace Anomaly\Streams\Platform\Model\Variables;

use Anomaly\Streams\Platform\Entry\EntryModel;

class VariablesVariablesEntryModel extends EntryModel
{

    

    protected $table = 'variables_variables';

    protected $titleName = 'id';

    public $rules = [
];

    public $dates = ['created_at', 'updated_at'];

    

    

    

    protected $stream = [
'slug' => 'variables',
'namespace' => 'variables',
'order_by' => 'id',
'title_column' => 'id',
'locked' => '',
'trashable' => '',
'translatable' => '',
'prefix' => 'variables_',
'view_options' => 'a:2:{i:0;s:2:"id";i:1;s:10:"created_at";}',
'id' => '25',
'assignments' => [
],
'translations' => [
[
'id' => '25',
'stream_id' => '25',
'locale' => 'en',
'name' => 'anomaly.module.variables::stream.variables.name',
'description' => 'anomaly.module.variables::stream.variables.description',
],
],
];

    
}
