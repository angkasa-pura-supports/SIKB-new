<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Print Laporan Ceklist Toilet</title>

  <!-- Normalize or reset CSS with your favorite library -->
  <link rel="stylesheet" href="{{ asset('print/normalize.min.css') }}">

  <!-- Load paper.css for happy printing -->
  <link rel="stylesheet" href="{{ asset('print/paper.css') }}">
  <link rel="stylesheet" href="{{ asset('print/customPrint.css') }}">

  <!-- Set page size here: A5, A4 or A3 -->
  <!-- Set also "landscape" if you need -->
  <style>@page { size: A4 landscape }</style>
</head>

<!-- Set "A5", "A4" or "A3" for class name -->
<!-- Set also "landscape" if you need -->
<body class="A4 landscape">

  <!-- Each sheet element should have the class "sheet" -->
  <!-- "padding-**mm" is optional: you can set 10, 15, 20 or 25 -->
  <section class="sheet">
    <!-- Write HTML just like a web page -->
    <article>
      <img src="{{ asset('print/aps.png') }}" align="right">
    </article>
    <article class="row-title">
      <div class="judul-sca">
        STANDARD CLEANLINESS AREA (SCA)
        <p>AREA BANDARA</p>
      </div>
      <div class="area">
        Tanggal : {{ date('d-m-Y', strtotime($data->tanggal_input)) }}<br>
        Area : {{ $data->area->nama_area }}
      </div>
      <div class="tabel">
        <table>
          <tr>
            {{-- background-color:#fca503 --}}
            <th rowspan="2" style="width:20px;height:35px;">NO</th>
            <th rowspan="2" style="width:115px">AREA</th>
            <th rowspan="2" style="width:130px">MATERIAL</th>
            <th rowspan="2" style="width:250px">STANDARD AREA</th>
            <th colspan="2">TINJAUAN</th>
            <th colspan="3">PERBAIKAN</th>
            <th rowspan="2" style="width:100px">HASIL</th>
          </tr>
          <tr>
            <th style="width:50px">KODE</th>
            <th style="width:100px">PENJELASAN</th>
            <th style="width:100px">TINDAK LANJUT</th>
            <th style="width:100px">OLEH</th>
            <th style="width:100px">WAKTU</th>
          </tr>
          {{-- Ceklist : &#10003;
          X : &#10007; --}}
          @php
            $no=0;
          @endphp
          @foreach ($ceklist as $value)
            <tr>
              <td style="text-align:center">{{ $no=$no+1 }}</td>
              <td>{{ $value->ceklistSca->area->nama_area }}</td>
              <td>{{ $value->sca->material }}</td>
              <td>{{ $value->sca->standard_area }}</td>
              <td>
                @if ($value->kode == 1)
                  &#10003;
                @else
                  &#10007;
                @endif
              </td>
              <td>{{ $value->penjelasan }}</td>
              <td>{{ $value->tindak_lanjut }}</td>
              <td>{{ $value->oleh }}</td>
              <td>{{ date('h:i', strtotime($value->waktu)) }}</td>
              <td>{{ $value->hasil }}</td>
            </tr>
          @endforeach
        </table>
        <br>
        <table style="width:200px" align="left">
          <tr>
            <th>FRM-APS-FSD-01-01-02, Rev.0</th>
          </tr>
        </table>
        <table style="width:500px" align="right">
          <tr>
            <th style="width:150px">Disusun Oleh</th>
            <th style="width:150px">Diperiksa Oleh</th>
            <th style="width:150px">Disetujui oleh</th>
          </tr>
          <tr>
            <td style="height:40px">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
          </tr>
          <tr>
            <th>TEAM LEADER</th>
            <th>SPV PROJECT</th>
            <th>KEPALA UNIT PELAKSANA</th>
          </tr>
        </table>
      </div>
    </article>

  </section>

</body>

</html>
