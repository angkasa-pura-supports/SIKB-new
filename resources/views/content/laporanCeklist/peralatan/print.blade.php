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
      <div class="judul">
      
      </div>
      <div class="tabel">
        <table>

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
          {{-- Ceklist : &#10003;
          X : &#10007; --}}
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
