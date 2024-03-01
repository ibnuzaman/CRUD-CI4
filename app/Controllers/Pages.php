<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home Banget'
        ];
        // echo view('layout/template', $data);
        echo view('pages/home', $data);
        // echo view('layout/template');
    }

    public function about()
    {
        $data = [
            'title' => 'About Banget'
        ];
        // echo view('layout/template', $data);
        echo view('pages/about', $data);
        // echo view('layout/template');
    }

    public function contact()
    {
        $data = [
            'title' => 'Kontak Banget'
        ];

        echo view('pages/contact', $data);
    }
}
