<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//varient data form action -- for STORE variant data
Route::post('/varientformaction','CrudController@storeVariant');

//varient table  SHOW data
Route::get('varianttable','CrudController@varientData');

//variant table UPDATE data
Route::get('/variantupdate/{id}','CrudController@updateVariant');

//variant table DELETE data
Route::get('/variantdelete/{id}','CrudController@deleteVariant');

//variant table DELETE by checkbox
Route::get('/variantcheckdelete/{id}','CrudController@deleteByCheckBox');

// bootstarp menu
Route::get('lekrajMenu','CrudController@lekrajMenu');

Route::get('satpalMenu','CrudController@satpalMenu');

// Test my data
Route::get('myData','CrudController@laraveTest');

//CRUD form

Route::get('/crudform','CrudController@formView');

// finel page (for temp action of a form)

Route::post('/finelpage', 'CrudController@store');

//display data on form page.

Route::get('display_data', 'CrudController@getData');

//find data by id by passing id on url(url/{id}).

Route::get('show/{id}', function($id)
{
    $myData=crud::find($id);

    return view('show', compact('myData'));

});

// define function on route page

Route::get('blog',function()

    {

        return view ('show');

    }
);


