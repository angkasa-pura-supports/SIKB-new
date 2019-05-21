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
  @php
    use Illuminate\Support\Facades\Input;
    $data = App\CeklistToilet::where('id', 1)->first();
    $report = App\UploadCeklistToilet::whereBetween('created_at', [Input::get('start'), date("Y-m-d", strtotime(Input::get('end')."+1 days"))])->get();
  @endphp

  <!-- Each sheet element should have the class "sheet" -->
  <!-- "padding-**mm" is optional: you can set 10, 15, 20 or 25 -->
  <section class="sheet">
    <!-- Write HTML just like a web page -->
    <article>
      <img src="{{ asset('print/aps.png') }}" align="right">
    </article>
    <article class="row-title">
      <div class="judul">
        CHECKLIST INSPEKSI TOILET
      </div>
      <div class="tabel">
        <table>
          <tr>
            <td rowspan="4" style="width:180px">TANGGAL<br>&<br>JAM</td>
          </tr>
          <tr>
            <td style="height:35px;width:50px" rowspan="2">INSPEKSI</td>
            <td colspan="2"><img src="{{ asset('print/toilet/keharuman.png') }}" height="35px"></td>
            <td colspan="2"><img src="{{ asset('print/toilet/lantai.png') }}" height="35px"></td>
            <td colspan="2"><img src="{{ asset('print/toilet/toiletbowl.png') }}" height="35px"></td>
            <td colspan="2"><img src="{{ asset('print/toilet/dinding.png') }}" height="35px"></td>
            <td colspan="2"><img src="{{ asset('print/toilet/tempatsampah.png') }}" height="35px"></td>
            <td colspan="2"><img src="{{ asset('print/toilet/cermin.png') }}" height="35px"></td>
            <td colspan="2"><img src="{{ asset('print/toilet/washbasin.png') }}" height="35px"></td>
            <td colspan="2"><img src="{{ asset('print/toilet/sabuncucitangan.png') }}" height="35px"></td>
            <td colspan="2"><img src="{{ asset('print/toilet/kloset.png') }}" height="35px"></td>
            <td colspan="2"><img src="{{ asset('print/toilet/tissueroll.png') }}" height="35px"></td>
            <td colspan="2"><img src="{{ asset('print/toilet/urinal.png') }}" height="35px"></td>
            <td colspan="2"><img src="{{ asset('print/toilet/handryer.png') }}" height="35px"></td>
            <td colspan="2"><img src="{{ asset('print/toilet/pintu.png') }}" height="35px"></td>
            <td colspan="2"><img src="{{ asset('print/toilet/janitor.png') }}" height="35px"></td>
            <td style="width:35px" rowspan="3">NAMA</td>
            <td style="width:35px" rowspan="3">TTD</td>
          </tr>
          <tr>
            <td colspan="2">Keharuman</td>
            <td colspan="2">Lantai</td>
            <td colspan="2"><i>Toilet Bowl</i></td>
            <td colspan="2">Dinding</td>
            <td colspan="2">Tempat Sampah</td>
            <td colspan="2">Cermin</td>
            <td colspan="2"><i>Washbasin</i></td>
            <td colspan="2">Sabun Cuci<br> Tangan</td>
            <td colspan="2">Kloset</td>
            <td colspan="2">Tissue Roll</td>
            <td colspan="2">Urinal</td>
            <td colspan="2"><i>Handdryer</i></td>
            <td colspan="2">Pintu</td>
            <td colspan="2">Janitor</td>
          </tr>
          <tr>
            <td>SHIFT</td>
            <td style="width:35px">Wanita</td>
            <td style="width:35px">Pria</td>
            <td style="width:35px">Wanita</td>
            <td style="width:35px">Pria</td>
            <td style="width:35px">Wanita</td>
            <td style="width:35px">Pria</td>
            <td style="width:35px">Wanita</td>
            <td style="width:35px">Pria</td>
            <td style="width:35px">Wanita</td>
            <td style="width:35px">Pria</td>
            <td style="width:35px">Wanita</td>
            <td style="width:35px">Pria</td>
            <td style="width:35px">Wanita</td>
            <td style="width:35px">Pria</td>
            <td style="width:35px">Wanita</td>
            <td style="width:35px">Pria</td>
            <td style="width:35px">Wanita</td>
            <td style="width:35px">Pria</td>
            <td style="width:35px">Wanita</td>
            <td style="width:35px">Pria</td>
            <td style="width:35px">Wanita</td>
            <td style="width:35px">Pria</td>
            <td style="width:35px">Wanita</td>
            <td style="width:35px">Pria</td>
            <td style="width:35px">Wanita</td>
            <td style="width:35px">Pria</td>
            <td style="width:35px">Wanita</td>
            <td style="width:35px">Pria</td>

          </tr>
          {{-- Ceklist : &#10003;
          X : &#10007; --}}

          @foreach ($report as $key)
            <tr>
              <td>{{ $key->created_at }}</td>
              <td>{{ $key->ceklistToilet->shift }}</td>

              <td>{{ $key->ceklistToilet->petugas }}</td>
            </tr>
          @endforeach
          <tr>
            <td colspan="32">&nbsp;</td>
          </tr>
        </table>
        <br>
        <table style="width:200px" align="left">
          <tr>
            <th>FRM-APS-FSD-01-12-01, Rev.0</th>
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
            <th>PETUGAS FACILITY CARE</th>
            <th>TEAM LEADER</th>
            <th>SUPERVISOR PROJECT</th>
          </tr>
        </table>
      </div>
    </article>

  </section>

</body>

</html>
