<?php namespace Anomaly\Streams\Platform\Model\Partials;

use Anomaly\Streams\Platform\Entry\EntryModel;

class PartialsPartialsEntryModel extends EntryModel
{

    

    protected $table = 'partials_partials';

    protected $titleName = 'name';

    public $rules = [
'name' => 'required',
'slug' => 'required|unique:partials_partials,slug',
'type' => 'required',
'entry' => 'required',
'css' => '',
'js' => '',
];

    public $dates = ['created_at', 'updated_at'];

    

    

    

    protected $stream = [
'id' => '12',
'namespace' => 'partials',
'slug' => 'partials',
'prefix' => 'partials_',
'view_options' => 'a:2:{i:0;s:2:"id";i:1;s:10:"created_at";}',
'title_column' => 'name',
'order_by' => 'id',
'locked' => '0',
'translatable' => '0',
'trashable' => '0',
'assignments' => [
[
'id' => '76',
'sort_order' => '76',
'stream_id' => '12',
'field_id' => '63',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '1',
'translatable' => '0',
'field' => [
'id' => '63',
'namespace' => 'partials',
'slug' => 'name',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => '63',
'field_id' => '63',
'locale' => 'en',
'name' => 'anomaly.module.partials::field.name.name',
],
],
],
'translations' => [
[
'id' => '76',
'assignment_id' => '76',
'locale' => 'en',
'label' => 'anomaly.module.partials::field.name.label',
'placeholder' => 'anomaly.module.partials::field.name.placeholder',
'instructions' => 'anomaly.module.partials::field.name.instructions',
],
],
],
[
'id' => '77',
'sort_order' => '77',
'stream_id' => '12',
'field_id' => '65',
'config' => 'a:0:{}',
'unique' => '1',
'required' => '1',
'translatable' => '0',
'field' => [
'id' => '65',
'namespace' => 'partials',
'slug' => 'slug',
'type' => 'anomaly.field_type.slug',
'config' => 'a:1:{s:7:"slugify";s:4:"name";}',
'locked' => '1',
'translations' => [
[
'id' => '65',
'field_id' => '65',
'locale' => 'en',
'name' => 'anomaly.module.partials::field.slug.name',
],
],
],
'translations' => [
[
'id' => '77',
'assignment_id' => '77',
'locale' => 'en',
'label' => 'anomaly.module.partials::field.slug.label',
'placeholder' => 'anomaly.module.partials::field.slug.placeholder',
'instructions' => 'anomaly.module.partials::field.slug.instructions',
],
],
],
[
'id' => '78',
'sort_order' => '78',
'stream_id' => '12',
'field_id' => '69',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '1',
'translatable' => '0',
'field' => [
'id' => '69',
'namespace' => 'partials',
'slug' => 'type',
'type' => 'anomaly.field_type.relationship',
'config' => 'a:1:{s:7:"related";s:37:"Anomaly\PartialsModule\Type\TypeModel";}',
'locked' => '1',
'translations' => [
[
'id' => '69',
'field_id' => '69',
'locale' => 'en',
'name' => 'anomaly.module.partials::field.type.name',
],
],
],
'translations' => [
[
'id' => '78',
'assignment_id' => '78',
'locale' => 'en',
'label' => 'anomaly.module.partials::field.type.label',
'placeholder' => 'anomaly.module.partials::field.type.placeholder',
'instructions' => 'anomaly.module.partials::field.type.instructions',
],
],
],
[
'id' => '79',
'sort_order' => '79',
'stream_id' => '12',
'field_id' => '70',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '1',
'translatable' => '0',
'field' => [
'id' => '70',
'namespace' => 'partials',
'slug' => 'entry',
'type' => 'anomaly.field_type.polymorphic',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => '70',
'field_id' => '70',
'locale' => 'en',
'name' => 'anomaly.module.partials::field.entry.name',
],
],
],
'translations' => [
[
'id' => '79',
'assignment_id' => '79',
'locale' => 'en',
'label' => 'anomaly.module.partials::field.entry.label',
'placeholder' => 'anomaly.module.partials::field.entry.placeholder',
'instructions' => 'anomaly.module.partials::field.entry.instructions',
],
],
],
[
'id' => '80',
'sort_order' => '80',
'stream_id' => '12',
'field_id' => '66',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '0',
'translatable' => '0',
'field' => [
'id' => '66',
'namespace' => 'partials',
'slug' => 'css',
'type' => 'anomaly.field_type.editor',
'config' => 'a:1:{s:4:"mode";s:3:"css";}',
'locked' => '1',
'translations' => [
[
'id' => '66',
'field_id' => '66',
'locale' => 'en',
'name' => 'anomaly.module.partials::field.css.name',
],
],
],
'translations' => [
[
'id' => '80',
'assignment_id' => '80',
'locale' => 'en',
'label' => 'anomaly.module.partials::field.css.label',
'placeholder' => 'anomaly.module.partials::field.css.placeholder',
'instructions' => 'anomaly.module.partials::field.css.instructions',
],
],
],
[
'id' => '81',
'sort_order' => '81',
'stream_id' => '12',
'field_id' => '67',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '0',
'translatable' => '0',
'field' => [
'id' => '67',
'namespace' => 'partials',
'slug' => 'js',
'type' => 'anomaly.field_type.editor',
'config' => 'a:1:{s:4:"mode";s:10:"javascript";}',
'locked' => '1',
'translations' => [
[
'id' => '67',
'field_id' => '67',
'locale' => 'en',
'name' => 'anomaly.module.partials::field.js.name',
],
],
],
'translations' => [
[
'id' => '81',
'assignment_id' => '81',
'locale' => 'en',
'label' => 'anomaly.module.partials::field.js.label',
'placeholder' => 'anomaly.module.partials::field.js.placeholder',
'instructions' => 'anomaly.module.partials::field.js.instructions',
],
],
],
],
'translations' => [
[
'id' => '12',
'stream_id' => '12',
'locale' => 'en',
'name' => 'anomaly.module.partials::stream.partials.name',
'description' => 'anomaly.module.partials::stream.partials.description',
],
],
];

    
public function type()
{

return $this->getFieldType('type')->getRelation();
}

public function entry()
{

return $this->getFieldType('entry')->getRelation();
}

}
