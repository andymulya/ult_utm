<?php

namespace App\Livewire\Forms;

use App\Models\InformasiKouta;
use Livewire\Attributes\Locked;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\Form;

class InformasiKoutaForm extends Form
{
    #[Locked]
    public $id;

    #[Validate('required')]
    public $tanggal_kunjungan;

    #[Validate('required')]
    public $sisa_kouta;

    #[Validate('required')]
    public $tujuan_kunjungan;

    #[Validate('required')]
    public $warna_tulisan;

    #[Validate('required')]
    public $warna_latar_belakang;

    public function load(int $id)
    {
        $ik = InformasiKouta::find($id);
        $this->id = $ik->id;
        $this->tanggal_kunjungan = $ik->tanggal_kunjungan;
        $this->sisa_kouta = $ik->sisa_kouta;
        $this->tujuan_kunjungan = $ik->tujuan_kunjungan;
        $this->warna_tulisan = $ik->warna_tulisan;
        $this->warna_latar_belakang = $ik->warna_latar_belakang;

    }

    public function clear()
    {
        $this->id = 0;
        $this->tanggal_kunjungan = null;
        $this->sisa_kouta = 0;
        $this->tujuan_kunjungan = '';
        $this->warna_tulisan = '#ffffff';
        $this->warna_latar_belakang = '#ffffff';
    }

    public function post()
    {
        $this->validate();
        return InformasiKouta::updateOrCreate(['id' => $this->id], $this->all());
    }
}