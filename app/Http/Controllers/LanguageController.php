<?php

namespace App\Http\Controllers;

use App\Models\Language;
use App\Services\ApiResponse;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function status()
    {
        return ApiResponse::success('API is running');
    }

    public function languages()
    {
        return ApiResponse::success(Language::all());
    }

    public function addLanguage(Request $request)
    {
        //validate the request
        $request->validate(
            [
                'name'          => 'required|unique:languages',
                'description'   => 'required',
                'paradigm'      => 'required',
                'image'         => 'required',
                'firstappeared' => 'required'
            ]
        );

        //add a new language in the database
        $language = Language::create($request->all());

        return ApiResponse::success($language);
    }

    public function showLanguage(String $id)
    {
        //show language details
        $language = Language::find($id);

        //return a response
        if($language) {
            return ApiResponse::success($language);
        } else {
            return ApiResponse::error('Language not found');
        }
    }

    public function updateLanguage(Request $request, String $id)
    {
        //validate the request
        $request->validate(
            [
                'name'          => 'required|unique:languages',
                'description'   => 'required',
                'paradigm'      => 'required',
                'image'         => 'required',
                'firstappeared' => 'required'
            ]
        );

        //update language in the database
        $language = Language::find($id);
        if($language) {
            $language->update($request->all());
            return ApiResponse::success($language);
        } else {
            return ApiResponse::error('Language not found');
        }
    }

    public function deletelanguage(String $id)
    {
        //delete the language
        $language = Language::find($id);
        if($language) {
            $language->delete();
            return ApiResponse::success('Language deleted successfully');
        } else {
            return ApiResponse::error('Language not found');
        }
    }
}
