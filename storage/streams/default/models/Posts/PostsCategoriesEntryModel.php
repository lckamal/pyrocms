<?php namespace Anomaly\Streams\Platform\Model\Posts;

use Anomaly\Streams\Platform\Entry\EntryModel;

class PostsCategoriesEntryModel extends EntryModel
{

    

    protected $table = 'posts_categories';

    protected $titleName = 'name';

    public $rules = [
'name' => 'required|unique:posts_categories,name',
'slug' => 'required|unique:posts_categories,slug',
'description' => '',
];

    public $dates = ['created_at', 'updated_at'];

    protected $translatedAttributes = ['name', 'description'];

    protected $translationForeignKey = 'entry_id';

    protected $translationModel = 'Anomaly\Streams\Platform\Model\Posts\PostsCategoriesEntryTranslationsModel';

    protected $stream = [
'id' => '14',
'namespace' => 'posts',
'slug' => 'categories',
'prefix' => 'posts_',
'view_options' => 'a:2:{i:0;s:2:"id";i:1;s:10:"created_at";}',
'title_column' => 'name',
'order_by' => 'id',
'locked' => '0',
'translatable' => '1',
'trashable' => '0',
'assignments' => [
[
'id' => '88',
'sort_order' => '88',
'stream_id' => '14',
'field_id' => '72',
'config' => 'a:0:{}',
'unique' => '1',
'required' => '1',
'translatable' => '1',
'field' => [
'id' => '72',
'namespace' => 'posts',
'slug' => 'name',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => '72',
'field_id' => '72',
'locale' => 'en',
'name' => 'anomaly.module.posts::field.name.name',
],
],
],
'translations' => [
[
'id' => '88',
'assignment_id' => '88',
'locale' => 'en',
'label' => 'anomaly.module.posts::field.name.label',
'placeholder' => 'anomaly.module.posts::field.name.placeholder',
'instructions' => 'anomaly.module.posts::field.name.instructions',
],
],
],
[
'id' => '89',
'sort_order' => '89',
'stream_id' => '14',
'field_id' => '74',
'config' => 'a:1:{s:7:"slugify";s:4:"name";}',
'unique' => '1',
'required' => '1',
'translatable' => '0',
'field' => [
'id' => '74',
'namespace' => 'posts',
'slug' => 'slug',
'type' => 'anomaly.field_type.slug',
'config' => 'a:1:{s:7:"slugify";s:5:"title";}',
'locked' => '1',
'translations' => [
[
'id' => '74',
'field_id' => '74',
'locale' => 'en',
'name' => 'anomaly.module.posts::field.slug.name',
],
],
],
'translations' => [
[
'id' => '89',
'assignment_id' => '89',
'locale' => 'en',
'label' => 'anomaly.module.posts::field.slug.label',
'placeholder' => 'anomaly.module.posts::field.slug.placeholder',
'instructions' => 'anomaly.module.posts::field.slug.instructions',
],
],
],
[
'id' => '90',
'sort_order' => '90',
'stream_id' => '14',
'field_id' => '78',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '0',
'translatable' => '1',
'field' => [
'id' => '78',
'namespace' => 'posts',
'slug' => 'description',
'type' => 'anomaly.field_type.textarea',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => '78',
'field_id' => '78',
'locale' => 'en',
'name' => 'anomaly.module.posts::field.description.name',
],
],
],
'translations' => [
[
'id' => '90',
'assignment_id' => '90',
'locale' => 'en',
'label' => 'anomaly.module.posts::field.description.label',
'placeholder' => 'anomaly.module.posts::field.description.placeholder',
'instructions' => 'anomaly.module.posts::field.description.instructions',
],
],
],
],
'translations' => [
[
'id' => '14',
'stream_id' => '14',
'locale' => 'en',
'name' => 'anomaly.module.posts::stream.categories.name',
'description' => 'anomaly.module.posts::stream.categories.description',
],
],
];

    
}
