<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Tamu;

class TamuController extends BaseController
{
    // Inheritance
    protected $tamu;

    function __construct()
    {
        $this->tamu = new Tamu();
    }

    // Method Read
    public function index()
    {
        $data['tamu'] = $this->tamu->findAll();
        $data['title'] = 'Daftar Tamu';

        return view('user/tamu', $data);
    }

    // Method Create
    public function tambah()
    {
        $this->tamu->insert([
            'nama_tamu' => $this->request->getPost('nama_tamu'),
            'instansi'  => $this->request->getPost('instansi'),
            'keperluan' => $this->request->getPost('keperluan'),
            'fullname'  => $this->request->getPost('fullname'),
            'tanggal'   => $this->request->getPost('tanggal'),
            'waktu'     => $this->request->getPost('waktu'),
        ]);

        return redirect('tamu')->with('success', 'Data Berhasil Ditambahkan');
    }

    // Method Edit
    public function edit($no)
    {
        $this->tamu->update($no, [
            'nama_tamu' => $this->request->getPost('nama_tamu'),
            'instansi'  => $this->request->getPost('instansi'),
            'keperluan' => $this->request->getPost('keperluan'),
            'fullname'  => $this->request->getPost('fullname'),
            'tanggal'   => $this->request->getPost('tanggal'),
            'waktu'     => $this->request->getPost('waktu'),
        ]);

        return redirect('tamu')->with('success', 'Data Berhasil Diperbarui');
    }

    // Method Delete
    public function hapus($no)
    {
        $this->tamu->delete($no);

        return redirect('tamu')->with('success', 'Data Berhasil Dihapus');
    }

    // add input_tamu form
    public function input_tamu()
    {
        $data['title'] = 'Input Tamu';
        return view('user/input_tamu', $data);
    }

    // insert data
    public function tambah_tamu()
    {
        $data = [
            'nama_tamu' => $this->request->getPost('nama_tamu'),
            'instansi'  => $this->request->getPost('instansi'),
            'keperluan' => $this->request->getPost('keperluan'),
            'fullname'  => $this->request->getPost('fullname'),
            'tanggal'   => $this->request->getPost('tanggal'),
            'waktu'     => $this->request->getPost('waktu')
        ];
        $this->tamu->insert($data);
        return redirect('input_tamu')->with('success', 'Data Berhasil Ditambahkan');
    }

    // Method PrintPdf
    public function printpdf()
    {
        $data['title'] = 'Daftar Tamu';
        $data['tamu'] = $this->tamu->orderBy('no')->findAll();
        $html = view('user/tamu', $data);

        $filename = 'Daftar Tamu';

        // instantiate and use the dompdf class
        $dompdf = new \Dompdf\Dompdf();
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream($filename, array(
            "Attachment" => false
        ));
    }
}
