<?php namespace Anomaly\Streams\Platform\Model\Posts;

use Anomaly\Streams\Platform\Entry\EntryModel;

class PostsPostsEntryModel extends EntryModel
{

    

    protected $table = 'posts_posts';

    protected $titleName = 'title';

    public $rules = [
'str_id' => 'required|unique:posts_posts,str_id',
'title' => 'required',
'slug' => 'required|unique:posts_posts,slug',
'type' => 'required',
'publish_at' => 'required',
'author' => 'required',
'entry' => 'required',
'meta_title' => '',
'meta_description' => '',
'meta_keywords' => '',
'allow_comments' => '',
'category' => '',
'featured' => '',
'summary' => '',
'live' => '',
'tags' => '',
'ttl' => '',
'css' => '',
'js' => '',
];

    public $dates = ['created_at', 'updated_at', 'publish_at'];

    protected $translatedAttributes = ['title', 'meta_title', 'meta_description', 'meta_keywords'];

    protected $translationForeignKey = 'entry_id';

    protected $translationModel = 'Anomaly\Streams\Platform\Model\Posts\PostsPostsEntryTranslationsModel';

    protected $stream = [
'id' => '15',
'namespace' => 'posts',
'slug' => 'posts',
'prefix' => 'posts_',
'view_options' => 'a:2:{i:0;s:2:"id";i:1;s:10:"created_at";}',
'title_column' => 'title',
'order_by' => 'id',
'locked' => '0',
'translatable' => '1',
'trashable' => '0',
'assignments' => [
[
'id' => '91',
'sort_order' => '91',
'stream_id' => '15',
'field_id' => '71',
'config' => 'a:0:{}',
'unique' => '1',
'required' => '1',
'translatable' => '0',
'field' => [
'id' => '71',
'namespace' => 'posts',
'slug' => 'str_id',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => '71',
'field_id' => '71',
'locale' => 'en',
'name' => 'anomaly.module.posts::field.str_id.name',
],
],
],
'translations' => [
[
'id' => '91',
'assignment_id' => '91',
'locale' => 'en',
'label' => 'anomaly.module.posts::field.str_id.label',
'placeholder' => 'anomaly.module.posts::field.str_id.placeholder',
'instructions' => 'anomaly.module.posts::field.str_id.instructions',
],
],
],
[
'id' => '92',
'sort_order' => '92',
'stream_id' => '15',
'field_id' => '73',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '1',
'translatable' => '1',
'field' => [
'id' => '73',
'namespace' => 'posts',
'slug' => 'title',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => '73',
'field_id' => '73',
'locale' => 'en',
'name' => 'anomaly.module.posts::field.title.name',
],
],
],
'translations' => [
[
'id' => '92',
'assignment_id' => '92',
'locale' => 'en',
'label' => 'anomaly.module.posts::field.title.label',
'placeholder' => 'anomaly.module.posts::field.title.placeholder',
'instructions' => 'anomaly.module.posts::field.title.instructions',
],
],
],
[
'id' => '93',
'sort_order' => '93',
'stream_id' => '15',
'field_id' => '74',
'config' => 'a:0:{}',
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
'id' => '93',
'assignment_id' => '93',
'locale' => 'en',
'label' => 'anomaly.module.posts::field.slug.label',
'placeholder' => 'anomaly.module.posts::field.slug.placeholder',
'instructions' => 'anomaly.module.posts::field.slug.instructions',
],
],
],
[
'id' => '94',
'sort_order' => '94',
'stream_id' => '15',
'field_id' => '75',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '1',
'translatable' => '0',
'field' => [
'id' => '75',
'namespace' => 'posts',
'slug' => 'type',
'type' => 'anomaly.field_type.relationship',
'config' => 'a:1:{s:7:"related";s:34:"Anomaly\PostsModule\Type\TypeModel";}',
'locked' => '1',
'translations' => [
[
'id' => '75',
'field_id' => '75',
'locale' => 'en',
'name' => 'anomaly.module.posts::field.type.name',
],
],
],
'translations' => [
[
'id' => '94',
'assignment_id' => '94',
'locale' => 'en',
'label' => 'anomaly.module.posts::field.type.label',
'placeholder' => 'anomaly.module.posts::field.type.placeholder',
'instructions' => 'anomaly.module.posts::field.type.instructions',
],
],
],
[
'id' => '95',
'sort_order' => '95',
'stream_id' => '15',
'field_id' => '79',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '1',
'translatable' => '0',
'field' => [
'id' => '79',
'namespace' => 'posts',
'slug' => 'publish_at',
'type' => 'anomaly.field_type.datetime',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => '79',
'field_id' => '79',
'locale' => 'en',
'name' => 'anomaly.module.posts::field.publish_at.name',
],
],
],
'translations' => [
[
'id' => '95',
'assignment_id' => '95',
'locale' => 'en',
'label' => 'anomaly.module.posts::field.publish_at.label',
'placeholder' => 'anomaly.module.posts::field.publish_at.placeholder',
'instructions' => 'anomaly.module.posts::field.publish_at.instructions',
],
],
],
[
'id' => '96',
'sort_order' => '96',
'stream_id' => '15',
'field_id' => '82',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '1',
'translatable' => '0',
'field' => [
'id' => '82',
'namespace' => 'posts',
'slug' => 'author',
'type' => 'anomaly.field_type.user',
'config' => 'a:1:{s:10:"permission";s:33:"anomaly.module.posts::posts.write";}',
'locked' => '1',
'translations' => [
[
'id' => '82',
'field_id' => '82',
'locale' => 'en',
'name' => 'anomaly.module.posts::field.author.name',
],
],
],
'translations' => [
[
'id' => '96',
'assignment_id' => '96',
'locale' => 'en',
'label' => 'anomaly.module.posts::field.author.label',
'placeholder' => 'anomaly.module.posts::field.author.placeholder',
'instructions' => 'anomaly.module.posts::field.author.instructions',
],
],
],
[
'id' => '97',
'sort_order' => '97',
'stream_id' => '15',
'field_id' => '81',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '1',
'translatable' => '0',
'field' => [
'id' => '81',
'namespace' => 'posts',
'slug' => 'entry',
'type' => 'anomaly.field_type.polymorphic',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => '81',
'field_id' => '81',
'locale' => 'en',
'name' => 'anomaly.module.posts::field.entry.name',
],
],
],
'translations' => [
[
'id' => '97',
'assignment_id' => '97',
'locale' => 'en',
'label' => 'anomaly.module.posts::field.entry.label',
'placeholder' => 'anomaly.module.posts::field.entry.placeholder',
'instructions' => 'anomaly.module.posts::field.entry.instructions',
],
],
],
[
'id' => '98',
'sort_order' => '98',
'stream_id' => '15',
'field_id' => '87',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '0',
'translatable' => '1',
'field' => [
'id' => '87',
'namespace' => 'posts',
'slug' => 'meta_title',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => '87',
'field_id' => '87',
'locale' => 'en',
'name' => 'anomaly.module.posts::field.meta_title.name',
],
],
],
'translations' => [
[
'id' => '98',
'assignment_id' => '98',
'locale' => 'en',
'label' => 'anomaly.module.posts::field.meta_title.label',
'placeholder' => 'anomaly.module.posts::field.meta_title.placeholder',
'instructions' => 'anomaly.module.posts::field.meta_title.instructions',
],
],
],
[
'id' => '99',
'sort_order' => '99',
'stream_id' => '15',
'field_id' => '88',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '0',
'translatable' => '1',
'field' => [
'id' => '88',
'namespace' => 'posts',
'slug' => 'meta_description',
'type' => 'anomaly.field_type.textarea',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => '88',
'field_id' => '88',
'locale' => 'en',
'name' => 'anomaly.module.posts::field.meta_description.name',
],
],
],
'translations' => [
[
'id' => '99',
'assignment_id' => '99',
'locale' => 'en',
'label' => 'anomaly.module.posts::field.meta_description.label',
'placeholder' => 'anomaly.module.posts::field.meta_description.placeholder',
'instructions' => 'anomaly.module.posts::field.meta_description.instructions',
],
],
],
[
'id' => '100',
'sort_order' => '100',
'stream_id' => '15',
'field_id' => '89',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '0',
'translatable' => '1',
'field' => [
'id' => '89',
'namespace' => 'posts',
'slug' => 'meta_keywords',
'type' => 'anomaly.field_type.tags',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => '89',
'field_id' => '89',
'locale' => 'en',
'name' => 'anomaly.module.posts::field.meta_keywords.name',
],
],
],
'translations' => [
[
'id' => '100',
'assignment_id' => '100',
'locale' => 'en',
'label' => 'anomaly.module.posts::field.meta_keywords.label',
'placeholder' => 'anomaly.module.posts::field.meta_keywords.placeholder',
'instructions' => 'anomaly.module.posts::field.meta_keywords.instructions',
],
],
],
[
'id' => '101',
'sort_order' => '101',
'stream_id' => '15',
'field_id' => '80',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '0',
'translatable' => '0',
'field' => [
'id' => '80',
'namespace' => 'posts',
'slug' => 'allow_comments',
'type' => 'anomaly.field_type.boolean',
'config' => 'a:1:{s:13:"default_value";b:0;}',
'locked' => '1',
'translations' => [
[
'id' => '80',
'field_id' => '80',
'locale' => 'en',
'name' => 'anomaly.module.posts::field.allow_comments.name',
],
],
],
'translations' => [
[
'id' => '101',
'assignment_id' => '101',
'locale' => 'en',
'label' => 'anomaly.module.posts::field.allow_comments.label',
'placeholder' => 'anomaly.module.posts::field.allow_comments.placeholder',
'instructions' => 'anomaly.module.posts::field.allow_comments.instructions',
],
],
],
[
'id' => '102',
'sort_order' => '102',
'stream_id' => '15',
'field_id' => '84',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '0',
'translatable' => '0',
'field' => [
'id' => '84',
'namespace' => 'posts',
'slug' => 'category',
'type' => 'anomaly.field_type.relationship',
'config' => 'a:1:{s:7:"related";s:42:"Anomaly\PostsModule\Category\CategoryModel";}',
'locked' => '1',
'translations' => [
[
'id' => '84',
'field_id' => '84',
'locale' => 'en',
'name' => 'anomaly.module.posts::field.category.name',
],
],
],
'translations' => [
[
'id' => '102',
'assignment_id' => '102',
'locale' => 'en',
'label' => 'anomaly.module.posts::field.category.label',
'placeholder' => 'anomaly.module.posts::field.category.placeholder',
'instructions' => 'anomaly.module.posts::field.category.instructions',
],
],
],
[
'id' => '103',
'sort_order' => '103',
'stream_id' => '15',
'field_id' => '86',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '0',
'translatable' => '0',
'field' => [
'id' => '86',
'namespace' => 'posts',
'slug' => 'featured',
'type' => 'anomaly.field_type.boolean',
'config' => 'a:1:{s:13:"default_value";b:0;}',
'locked' => '1',
'translations' => [
[
'id' => '86',
'field_id' => '86',
'locale' => 'en',
'name' => 'anomaly.module.posts::field.featured.name',
],
],
],
'translations' => [
[
'id' => '103',
'assignment_id' => '103',
'locale' => 'en',
'label' => 'anomaly.module.posts::field.featured.label',
'placeholder' => 'anomaly.module.posts::field.featured.placeholder',
'instructions' => 'anomaly.module.posts::field.featured.instructions',
],
],
],
[
'id' => '104',
'sort_order' => '104',
'stream_id' => '15',
'field_id' => '77',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '0',
'translatable' => '0',
'field' => [
'id' => '77',
'namespace' => 'posts',
'slug' => 'summary',
'type' => 'anomaly.field_type.textarea',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => '77',
'field_id' => '77',
'locale' => 'en',
'name' => 'anomaly.module.posts::field.summary.name',
],
],
],
'translations' => [
[
'id' => '104',
'assignment_id' => '104',
'locale' => 'en',
'label' => 'anomaly.module.posts::field.summary.label',
'placeholder' => 'anomaly.module.posts::field.summary.placeholder',
'instructions' => 'anomaly.module.posts::field.summary.instructions',
],
],
],
[
'id' => '105',
'sort_order' => '105',
'stream_id' => '15',
'field_id' => '85',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '0',
'translatable' => '0',
'field' => [
'id' => '85',
'namespace' => 'posts',
'slug' => 'live',
'type' => 'anomaly.field_type.boolean',
'config' => 'a:1:{s:13:"default_value";b:0;}',
'locked' => '1',
'translations' => [
[
'id' => '85',
'field_id' => '85',
'locale' => 'en',
'name' => 'anomaly.module.posts::field.live.name',
],
],
],
'translations' => [
[
'id' => '105',
'assignment_id' => '105',
'locale' => 'en',
'label' => 'anomaly.module.posts::field.live.label',
'placeholder' => 'anomaly.module.posts::field.live.placeholder',
'instructions' => 'anomaly.module.posts::field.live.instructions',
],
],
],
[
'id' => '106',
'sort_order' => '106',
'stream_id' => '15',
'field_id' => '76',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '0',
'translatable' => '0',
'field' => [
'id' => '76',
'namespace' => 'posts',
'slug' => 'tags',
'type' => 'anomaly.field_type.tags',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => '76',
'field_id' => '76',
'locale' => 'en',
'name' => 'anomaly.module.posts::field.tags.name',
],
],
],
'translations' => [
[
'id' => '106',
'assignment_id' => '106',
'locale' => 'en',
'label' => 'anomaly.module.posts::field.tags.label',
'placeholder' => 'anomaly.module.posts::field.tags.placeholder',
'instructions' => 'anomaly.module.posts::field.tags.instructions',
],
],
],
[
'id' => '107',
'sort_order' => '107',
'stream_id' => '15',
'field_id' => '90',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '0',
'translatable' => '0',
'field' => [
'id' => '90',
'namespace' => 'posts',
'slug' => 'ttl',
'type' => 'anomaly.field_type.integer',
'config' => 'a:3:{s:3:"min";i:0;s:4:"step";i:1;s:4:"page";i:5;}',
'locked' => '1',
'translations' => [
[
'id' => '90',
'field_id' => '90',
'locale' => 'en',
'name' => 'anomaly.module.posts::field.ttl.name',
],
],
],
'translations' => [
[
'id' => '107',
'assignment_id' => '107',
'locale' => 'en',
'label' => 'anomaly.module.posts::field.ttl.label',
'placeholder' => 'anomaly.module.posts::field.ttl.placeholder',
'instructions' => 'anomaly.module.posts::field.ttl.instructions',
],
],
],
[
'id' => '108',
'sort_order' => '108',
'stream_id' => '15',
'field_id' => '91',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '0',
'translatable' => '0',
'field' => [
'id' => '91',
'namespace' => 'posts',
'slug' => 'css',
'type' => 'anomaly.field_type.editor',
'config' => 'a:1:{s:4:"mode";s:3:"css";}',
'locked' => '1',
'translations' => [
[
'id' => '91',
'field_id' => '91',
'locale' => 'en',
'name' => 'anomaly.module.posts::field.css.name',
],
],
],
'translations' => [
[
'id' => '108',
'assignment_id' => '108',
'locale' => 'en',
'label' => 'anomaly.module.posts::field.css.label',
'placeholder' => 'anomaly.module.posts::field.css.placeholder',
'instructions' => 'anomaly.module.posts::field.css.instructions',
],
],
],
[
'id' => '109',
'sort_order' => '109',
'stream_id' => '15',
'field_id' => '92',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '0',
'translatable' => '0',
'field' => [
'id' => '92',
'namespace' => 'posts',
'slug' => 'js',
'type' => 'anomaly.field_type.editor',
'config' => 'a:1:{s:4:"mode";s:10:"javascript";}',
'locked' => '1',
'translations' => [
[
'id' => '92',
'field_id' => '92',
'locale' => 'en',
'name' => 'anomaly.module.posts::field.js.name',
],
],
],
'translations' => [
[
'id' => '109',
'assignment_id' => '109',
'locale' => 'en',
'label' => 'anomaly.module.posts::field.js.label',
'placeholder' => 'anomaly.module.posts::field.js.placeholder',
'instructions' => 'anomaly.module.posts::field.js.instructions',
],
],
],
],
'translations' => [
[
'id' => '15',
'stream_id' => '15',
'locale' => 'en',
'name' => 'anomaly.module.posts::stream.posts.name',
'description' => 'anomaly.module.posts::stream.posts.description',
],
],
];

    
public function type()
{

return $this->getFieldType('type')->getRelation();
}

public function author()
{

return $this->getFieldType('author')->getRelation();
}

public function entry()
{

return $this->getFieldType('entry')->getRelation();
}

public function category()
{

return $this->getFieldType('category')->getRelation();
}

}
