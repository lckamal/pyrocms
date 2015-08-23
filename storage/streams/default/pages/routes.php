<?php

Route::any('/', array (
  'uses' => 'Anomaly\\PagesModule\\Http\\Controller\\PagesController@view',
  'streams::addon' => 'anomaly.module.pages',
  'anomaly.module.pages::page' => 2,
))->where(array (
));
