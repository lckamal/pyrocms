<?php namespace Anomaly\Streams\Platform\Model\PageLinkType;

use Anomaly\Streams\Platform\Entry\EntryModel;

class PageLinkTypePagesEntryModel extends EntryModel
{

    

    protected $table = 'page_link_type_pages';

    protected $titleName = 'title';

    public $rules = [
'title' => 'required',
'page' => 'required',
'description' => '',
];

    public $dates = ['created_at', 'updated_at'];

    protected $translatedAttributes = ['title', 'description'];

    protected $translationForeignKey = 'entry_id';

    protected $translationModel = 'Anomaly\Streams\Platform\Model\PageLinkType\PageLinkTypePagesEntryTranslationsModel';

    protected $stream = [
'id' => '27',
'namespace' => 'page_link_type',
'slug' => 'pages',
'prefix' => 'page_link_type_',
'view_options' => 'a:2:{i:0;s:2:"id";i:1;s:10:"created_at";}',
'title_column' => 'title',
'order_by' => 'id',
'locked' => '0',
'translatable' => '1',
'trashable' => '0',
'assignments' => [
[
'id' => '154',
'sort_order' => '154',
'stream_id' => '27',
'field_id' => '123',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '1',
'translatable' => '1',
'field' => [
'id' => '123',
'namespace' => 'page_link_type',
'slug' => 'title',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => '123',
'field_id' => '123',
'locale' => 'en',
'name' => 'anomaly.extension.page_link_type::field.title.name',
],
],
],
'translations' => [
[
'id' => '154',
'assignment_id' => '154',
'locale' => 'en',
'label' => 'anomaly.extension.page_link_type::field.title.label',
'placeholder' => 'anomaly.extension.page_link_type::field.title.placeholder',
'instructions' => 'anomaly.extension.page_link_type::field.title.instructions',
],
],
],
[
'id' => '155',
'sort_order' => '155',
'stream_id' => '27',
'field_id' => '124',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '1',
'translatable' => '0',
'field' => [
'id' => '124',
'namespace' => 'page_link_type',
'slug' => 'page',
'type' => 'anomaly.field_type.relationship',
'config' => 'a:1:{s:7:"related";s:34:"Anomaly\PagesModule\Page\PageModel";}',
'locked' => '1',
'translations' => [
[
'id' => '124',
'field_id' => '124',
'locale' => 'en',
'name' => 'anomaly.extension.page_link_type::field.page.name',
],
],
],
'translations' => [
[
'id' => '155',
'assignment_id' => '155',
'locale' => 'en',
'label' => 'anomaly.extension.page_link_type::field.page.label',
'placeholder' => 'anomaly.extension.page_link_type::field.page.placeholder',
'instructions' => 'anomaly.extension.page_link_type::field.page.instructions',
],
],
],
[
'id' => '156',
'sort_order' => '156',
'stream_id' => '27',
'field_id' => '125',
'config' => 'a:0:{}',
'unique' => '0',
'required' => '0',
'translatable' => '1',
'field' => [
'id' => '125',
'namespace' => 'page_link_type',
'slug' => 'description',
'type' => 'anomaly.field_type.textarea',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => '125',
'field_id' => '125',
'locale' => 'en',
'name' => 'anomaly.extension.page_link_type::field.description.name',
],
],
],
'translations' => [
[
'id' => '156',
'assignment_id' => '156',
'locale' => 'en',
'label' => 'anomaly.extension.page_link_type::field.description.label',
'placeholder' => 'anomaly.extension.page_link_type::field.description.placeholder',
'instructions' => 'anomaly.extension.page_link_type::field.description.instructions',
],
],
],
],
'translations' => [
[
'id' => '27',
'stream_id' => '27',
'locale' => 'en',
'name' => 'anomaly.extension.page_link_type::stream.pages.name',
'description' => 'anomaly.extension.page_link_type::stream.pages.description',
],
],
];

    
public function page()
{

return $this->getFieldType('page')->getRelation();
}

}
