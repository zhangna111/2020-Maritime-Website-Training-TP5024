<?php
namespace app\index\controller;

class Index
{
    public function index()
    {
        return view();
    }
    
    public function login(){
    	return view('login');
    }
    
    public function register(){
    	return view('register');
    }
}