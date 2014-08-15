<?php
/**
 * Created by PhpStorm.
 * User: Jeremy
 * Date: 5/30/2014
 * Time: 5:40 AM
 */

class PagesController extends BaseController{

    function home(){
        $name = "Jeremy McKay";
        return View::make('hello')->with('name', $name);
    }

    function about(){
        return View::make('about');
    }

} 