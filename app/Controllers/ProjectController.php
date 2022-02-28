<?php

namespace App\Controllers;
use App\Models\ProjectModel;
use App\Controllers\BaseController;

class ProjectController extends BaseController
{
    public function index()
    {
        $ProjectModel = new ProjectModel();
        $data['users'] = $ProjectModel->orderBy('project_id', 'DESC')->findAll();
        return view('dashboard', $data);
    }
    public function store() {
        $request = \Config\Services::request();
        $ProjectModel = new ProjectModel();
        $data = [
            'cname' => $request->getVar('name'),
            'cemail'  => $request->getVar('email'),
            'cphone'  => $request->getVar('cphone'),
            'site'  => $request->getVar('site'),
        ];
        $ProjectModel->insert($data);
        return $this->response->redirect(site_url('/'));
    }
   
}
