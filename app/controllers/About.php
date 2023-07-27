<?php

class About extends Controller {
    public function index($nama = 'Aizan', $kerja = 'Ngoding')
    {
        $data['nama'] = $nama;
        $data['kerja'] = $kerja;
        $data['judul'] = 'about/index';
        $this->view('template/header', $data);
        $this->view('about/index', $data);
        $this->view('template/footer');
    } 
    public function page()
    {
        $data['judul'] = 'about/page';
        $this->view('template/header', $data);
        $this->view('about/page');
        $this->view('template/footer');
    }
}