<?php

namespace App\Controllers;
use App\Models\ValuesModel;

class Home extends BaseController
{
    public function index()
    {
        return view('dashboard');
    }
    public function test()
    {
        return view('enq');
    }
    public function test2()
    {
        return view('Output');
    }
    public function masterlead()
    {
        return view('masterlead');
    }
    public function attributes()
    {
        $leadsource = new ValuesModel();
        $data['users'] = $leadsource->findAll();
        return view('attributes', $data);
    }
    public function insertattributes(){
        if (! $this->validate([
            'countvalue' => 'required',
        ])){
            return $this->response->redirect(site_url('attributes'));
        }else{
        $request = \Config\Services::request();
        $valueModel = new ValuesModel();
        // $id = $request->getVar('id');
        $data = [
            'countvalue' => $request->getVar('countvalue'),
        ];
        $valueModel->insert($data);
        return $this->response->redirect(site_url('attributes'));
    }
    }
    public function Deletelead($id = null){
        $NameModel = new ValuesModel();
        $data['user'] = $NameModel->where('id', $id)->delete($id);
        return $this->response->redirect(site_url('attributes'));
    } 
}
