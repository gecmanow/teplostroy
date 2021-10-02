<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Service;
use Illuminate\Support\Facades\Session;
use Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();

        return View::make('admin.services.index')
            ->with('services', $services);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all('id', 'category_name');

        return View::make('admin.services.create', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'service_name'      => 'required',
            'service_url'       => 'required',
            'category_id'       => 'required|numeric',
            'short_description' => 'required',
            'description'       => 'required',
            'keywords'          => 'required',
            'content'           => 'required'
        );
        $validator = Validator::make(Request::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('admin/services/create')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $service = new Service;
            $service->service_name      = Request::get('service_name');
            $service->service_url       = Request::get('service_url');
            $service->category_id       = Request::get('category_id');
            $service->short_description = Request::get('short_description');
            $service->description       = Request::get('description');
            $service->keywords          = Request::get('keywords');
            $service->content           = Request::get('content');
            $service->save();

            // redirect
            Session::flash('message', 'Услуга успешно создана!');
            return Redirect::to('admin/services');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        $result = Service::all()->find($service);
        return View::make('admin.services.show', ['service' => $result]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        $category = Category::all()->find($service);
        $result = Service::all()->find($service);

        // show the edit form and pass the nerd
        return View::make('admin.services.edit', ['service' => $result])
            /*->with('service', $result)*/->with('category', $category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'name'       => 'required',
            'email'      => 'required|email',
            'nerd_level' => 'required|numeric'
        );
        $validator = Validator::make(Request::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('admin/services/' . $service . '/edit')
                ->withErrors($validator)
                ->withInput(Request::except('password'));
        } else {
            // store
            $service = Service::all()->find($service);
            $service->service_name      = Request::get('service_name');
            $service->service_url       = Request::get('service_url');
            $service->category_id       = Request::get('category_id');
            $service->short_description = Request::get('short_description');
            $service->description       = Request::get('description');
            $service->keywords          = Request::get('keywords');
            $service->content           = Request::get('content');
            $service->save();

            // redirect
            Session::flash('message', 'Услуга успешно обнавлена!');
            return Redirect::to('admin/services');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        // delete
        $service = Service::all()->find($service);
        $service->delete();

        // redirect
        Session::flash('message', 'Услуга успешно удалена!');
        return Redirect::to('admin/services');
    }
}
