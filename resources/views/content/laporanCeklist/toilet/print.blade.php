<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>A4 landscape</title>

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
          <tr>
            <td>{{ date("d-m-Y h:m:s", strtotime($data->created_at)) }}</td>
            <td>{{ $data->shift }}</td>
            @php
              $keharuman = App\UploadCeklistToilet::where('ceklist_toilet_id', $data->id)->where('nama_ceklist', 'Keharuman')->first();
              $lantai = App\UploadCeklistToilet::where('ceklist_toilet_id', $data->id)->where('nama_ceklist', 'Lantai')->first();
              $toiletBowl = App\UploadCeklistToilet::where('ceklist_toilet_id', $data->id)->where('nama_ceklist', 'Toilet Bowl')->first();
              $dinding = App\UploadCeklistToilet::where('ceklist_toilet_id', $data->id)->where('nama_ceklist', 'Dinding')->first();
              $tempatSampah = App\UploadCeklistToilet::where('ceklist_toilet_id', $data->id)->where('nama_ceklist', 'Tempat Sampah')->first();
              $cermin = App\UploadCeklistToilet::where('ceklist_toilet_id', $data->id)->where('nama_ceklist', 'Cermin')->first();
              $washbasin = App\UploadCeklistToilet::where('ceklist_toilet_id', $data->id)->where('nama_ceklist', 'Washbasin')->first();
              $sabunCuciTangan = App\UploadCeklistToilet::where('ceklist_toilet_id', $data->id)->where('nama_ceklist', 'Sabun Cuci Tangan')->first();
              $kloset = App\UploadCeklistToilet::where('ceklist_toilet_id', $data->id)->where('nama_ceklist', 'Kloset')->first();
              $tissueRoll = App\UploadCeklistToilet::where('ceklist_toilet_id', $data->id)->where('nama_ceklist', 'Tissue Roll')->first();
              $urinal = App\UploadCeklistToilet::where('ceklist_toilet_id', $data->id)->where('nama_ceklist', 'Urinal')->first();
              $handdryer = App\UploadCeklistToilet::where('ceklist_toilet_id', $data->id)->where('nama_ceklist', 'Handdryer')->first();
              $pintu = App\UploadCeklistToilet::where('ceklist_toilet_id', $data->id)->where('nama_ceklist', 'Pintu')->first();
              $janitor = App\UploadCeklistToilet::where('ceklist_toilet_id', $data->id)->where('nama_ceklist', 'Janitor')->first();
            @endphp

            {{-- Keharuman --}}
            <td>@if ($keharuman === null)@else @if ($keharuman->status_wanita == NULL) @elseif ($keharuman->status_wanita == "Wangi") &#10003; @else &#10007; @endif @endif</td>
            <td>@if ($keharuman === null)@else @if ($keharuman->status_pria == NULL) @elseif ($keharuman->status_pria == "Wangi") &#10003; @else &#10007; @endif @endif</td>
            {{-- Lantai --}}
            <td>@if ($lantai === null)@else @if ($lantai->status_wanita == NULL) @elseif ($lantai->status_wanita == "Bersih") &#10003; @else &#10007; @endif @endif</td>
            <td>@if ($lantai === null)@else @if ($lantai->status_pria == NULL) @elseif ($lantai->status_pria == "Bersih") &#10003; @else &#10007; @endif @endif</td>
            {{-- Toilet Bowl --}}
            <td>@if ($toiletBowl === null)@else @if ($toiletBowl->status_wanita == NULL) @elseif ($toiletBowl->status_wanita == "Bersih") &#10003; @else &#10007; @endif @endif</td>
            <td>@if ($toiletBowl === null)@else @if ($toiletBowl->status_pria == NULL) @elseif ($toiletBowl->status_pria == "Bersih") &#10003; @else &#10007; @endif @endif</td>
            {{-- Dinding --}}
            <td>@if ($dinding === null)@else @if ($dinding->status_wanita == NULL) @elseif ($dinding->status_wanita == "Bersih") &#10003; @else &#10007; @endif @endif</td>
            <td>@if ($dinding === null)@else @if ($dinding->status_pria == NULL) @elseif ($dinding->status_pria == "Bersih") &#10003; @else &#10007; @endif @endif</td>
            {{-- Tempat Sampah --}}
            <td>@if ($tempatSampah === null)@else @if ($tempatSampah->status_wanita == NULL) @elseif ($tempatSampah->status_wanita == "Bersih") &#10003; @else &#10007; @endif @endif</td>
            <td>@if ($tempatSampah === null)@else @if ($tempatSampah->status_pria == NULL) @elseif ($tempatSampah->status_pria == "Bersih") &#10003; @else &#10007; @endif @endif</td>
            {{-- Cermin --}}
            <td>@if ($cermin === null)@else @if ($cermin->status_wanita == NULL) @elseif ($cermin->status_wanita == "Bersih") &#10003; @else &#10007; @endif @endif</td>
            <td>@if ($cermin === null)@else @if ($cermin->status_pria == NULL) @elseif ($cermin->status_pria == "Bersih") &#10003; @else &#10007; @endif @endif</td>
            {{-- Washbasin --}}
            <td>@if ($washbasin === null)@else @if ($washbasin->status_wanita == NULL) @elseif ($washbasin->status_wanita == "Bersih") &#10003; @else &#10007; @endif @endif</td>
            <td>@if ($washbasin === null)@else @if ($washbasin->status_pria == NULL) @elseif ($washbasin->status_pria == "Bersih") &#10003; @else &#10007; @endif @endif</td>
            {{-- Sabun Cuci Tangan --}}
            <td>@if ($sabunCuciTangan === null)@else @if ($sabunCuciTangan->status_wanita == NULL) @elseif ($sabunCuciTangan->status_wanita == "Ada") &#10003; @else &#10007; @endif @endif</td>
            <td>@if ($sabunCuciTangan === null)@else @if ($sabunCuciTangan->status_pria == NULL) @elseif ($sabunCuciTangan->status_pria == "Ada") &#10003; @else &#10007; @endif @endif</td>
            {{-- Kloset --}}
            <td>@if ($kloset === null)@else @if ($kloset->status_wanita == NULL) @elseif ($kloset->status_wanita == "Bersih") &#10003; @else &#10007; @endif @endif</td>
            <td>@if ($kloset === null)@else @if ($kloset->status_pria == NULL) @elseif ($kloset->status_pria == "Bersih") &#10003; @else &#10007; @endif @endif</td>
            {{-- Tissue Roll --}}
            <td>@if ($tissueRoll === null)@else @if ($tissueRoll->status_wanita == NULL) @elseif ($tissueRoll->status_wanita == "Ada") &#10003; @else &#10007; @endif @endif</td>
            <td>@if ($tissueRoll === null)@else @if ($tissueRoll->status_pria == NULL) @elseif ($tissueRoll->status_pria == "Ada") &#10003; @else &#10007; @endif @endif</td>
            {{-- Urinal --}}
            <td>@if ($urinal === null)@else @if ($urinal->status_wanita == NULL) @elseif ($urinal->status_wanita == "Bersih") &#10003; @else &#10007; @endif @endif</td>
            <td>@if ($urinal === null)@else @if ($urinal->status_pria == NULL) @elseif ($urinal->status_pria == "Bersih") &#10003; @else &#10007; @endif @endif</td>
            {{-- Handdryer --}}
            <td>@if ($handdryer === null)@else @if ($handdryer->status_wanita == NULL) @elseif ($handdryer->status_wanita == "Ada") &#10003; @else &#10007; @endif @endif</td>
            <td>@if ($handdryer === null)@else @if ($handdryer->status_pria == NULL) @elseif ($handdryer->status_pria == "Ada") &#10003; @else &#10007; @endif @endif</td>
            {{-- Pintu --}}
            <td>@if ($pintu === null)@else @if ($pintu->status_wanita == NULL) @elseif ($pintu->status_wanita == "Bersih") &#10003; @else &#10007; @endif @endif</td>
            <td>@if ($pintu === null)@else @if ($pintu->status_pria == NULL) @elseif ($pintu->status_pria == "Bersih") &#10003; @else &#10007; @endif @endif</td>
            {{-- Janitor --}}
            <td>@if ($janitor === null)@else @if ($janitor->status_wanita == NULL) @elseif ($janitor->status_wanita == "Bersih") &#10003; @else &#10007; @endif @endif</td>
            <td>@if ($janitor === null)@else @if ($janitor->status_pria == NULL) @elseif ($janitor->status_pria == "Bersih") &#10003; @else &#10007; @endif @endif</td>
            <td>{{ $data->petugas }}</td>
            <td></td>
          </tr>
          @for ($i=1; $i <= 31; $i++)
            <tr>
              <td>&nbsp;</td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
          @endfor
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
