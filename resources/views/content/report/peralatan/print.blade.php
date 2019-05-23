<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="{{ asset('print/customPrint.css') }}">
    <style media="screen">
      body {
        background: rgb(204,204,204);
      }
      page {
        background: white;
        display: block;
        margin: 0 auto;
        margin-bottom: 0.5cm;
        box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
      }
      page[size="A4"] {
        width: 21cm;
        height: 29.7cm;
      }
      page[size="A4"][layout="landscape"] {
        width: 29.7cm;
        height: 21cm;
      }
      page[size="A3"] {
        width: 29.7cm;
        height: 42cm;
      }
      page[size="A3"][layout="landscape"] {
        width: 42cm;
        height: 29.7cm;
      }
      page[size="A5"] {
        width: 14.8cm;
        height: 21cm;
      }
      page[size="A5"][layout="landscape"] {
        width: 21cm;
        height: 14.8cm;
      }
      @media print {
        body, page {
          margin: 0;
          box-shadow: 0;
        }
      }
    </style>
  </head>
  <body>
    <page size="A4" layout="landscape">

      <article>
        <img src="{{ asset('print/aps.png') }}" align="right">
        &nbsp;
      </article>

      <article class="row-title">
        <div class="judulPeralatan">
          CHECKLIST PERAWATAN MESIN
        </div>
        <div class="tabel">
          <div class="customTable">
            <table id="asd" style="margin-bottom:10px" border="0">
              @php
                $ambilPeralatan = App\Peralatan::where('id', $getPeralatan)->first();
              @endphp
              <tr id="asd">
                <td style="width:55px" id="asd"></td>
                <td id="asd" style="width:300px;text-align:left">Nama Mesin</td>
                <td id="asd" style="width:400px;text-align:left"> : <b>{{ $ambilPeralatan->nama_peralatan }}</b></td>
                <td id="asd" style="width:50px"></td>
                <td id="asd" style="width:50px"></td>
                <td id="asd" style="width:50px"></td>
                <td id="asd" style="width:50px;text-align:left">Area</td>
                <td id="asd" style="text-align:left"> : </td>
              </tr>
              <tr id="asd">
                <td id="asd" style="width:55px"></td>
                <td id="asd" style="width:300px;text-align:left">Type</td>
                <td id="asd" style="width:400px;text-align:left"> : {{ $ambilPeralatan->type }}</td>
                <td id="asd" style="width:50px"></td>
                <td id="asd" style="width:50px"></td>
                <td id="asd" style="width:50px"></td>
                <td id="asd" style="width:50px;text-align:left">Site Card</td>
                <td id="asd" style="text-align:left"> : </td>
              </tr>
              <tr id="asd">
                <td id="asd" style="width:55px"></td>
                <td id="asd" style="width:300px;text-align:left">No. Mesin</td>
                <td id="asd" style="width:400px;text-align:left"> : {{ $ambilPeralatan->no_mesin }}</td>
                <td id="asd" style="width:50px"></td>
                <td id="asd" style="width:50px"></td>
                <td id="asd" style="width:50px"></td>
                <td id="asd" style="width:50px;text-align:left">TL/SPV</td>
                <td id="asd" style="text-align:left"> : </td>
              </tr>
              <tr id="asd">
                <td id="asd" style="width:55px"></td>
                <td id="asd" style="width:300px;text-align:left">Nama Teknisi</td>
                <td id="asd" style="width:400px;text-align:left"> : </td>
                <td id="asd" style="width:50px"></td>
                <td id="asd" style="width:50px"></td>
                <td id="asd" style="width:50px"></td>
                <td id="asd" style="width:50px;text-align:left">Bulan</td>
                <td id="asd" style="text-align:left"> : </td>
              </tr>
            </table>
          </div>
          <table>
            <tr>
              <td rowspan="2" style="width:55px"><b>No</b></td>
              <td rowspan="2" style="width:300px"><b>Item Pemeriksaan</b></td>
              <td rowspan="2" style="width:400px"><b>Kondisi Standard</b></td>
              <td colspan="5"><b>Minggu<b></td>
              <td rowspan="2"><b>Keterangan</b></td>
            </tr>
            <tr>
              <td style="width:50px"><b>I</b></td>
              <td style="width:50px"><b>II</b></td>
              <td style="width:50px"><b>III</b></td>
              <td style="width:50px"><b>IV</b></td>
              <td style="width:50px"><b>V</b></td>
            </tr>
            @php
              $no = 0;
              use Illuminate\Support\Facades\DB;
            @endphp
            {{-- Kondisi Peralatan --}}
            @foreach ($kondisiPeralatan as $key)
              <tr>
                <td style="height:15px">{{ $no=$no+1 }}</td>
                <td style="text-align:left">{{ $key->item_pemeriksaan }}</td>
                <td style="text-align:left">{{ $key->kondisi_standard }}</td>
                @php
                  $ceklist = App\CeklistPeralatan::where('peralatan_id', $key->peralatan_id)->get();
                @endphp
                @php
                  $minggu1 = App\UploadCeklistPeralatan::where('peralatan_kondisi_id', $key->id)->where('kondisi', 'LIKE', '%'.'Minggu 1'.'%')->first();
                  $minggu2 = App\UploadCeklistPeralatan::where('peralatan_kondisi_id', $key->id)->where('kondisi', 'LIKE', '%'.'Minggu 2'.'%')->first();
                  $minggu3 = App\UploadCeklistPeralatan::where('peralatan_kondisi_id', $key->id)->where('kondisi', 'LIKE', '%'.'Minggu 3'.'%')->first();
                  $minggu4 = App\UploadCeklistPeralatan::where('peralatan_kondisi_id', $key->id)->where('kondisi', 'LIKE', '%'.'Minggu 4'.'%')->first();
                  $minggu5 = App\UploadCeklistPeralatan::where('peralatan_kondisi_id', $key->id)->where('kondisi', 'LIKE', '%'.'Minggu 5'.'%')->first();
                @endphp
                {{-- Minggu 1 --}}
                <td>
                  @if ($minggu1 === NULL)
                  @else
                    {{ substr($minggu1->kondisi, 9,10) }}
                  @endif
                </td>
                {{-- Minggu 2 --}}
                <td>
                  @if ($minggu2 === NULL)
                  @else
                    {{ substr($minggu2->kondisi, 9,10) }}
                  @endif
                </td>
                {{-- Minggu 3 --}}
                <td>
                  @if ($minggu3 === NULL)
                  @else
                    {{ substr($minggu3->kondisi, 9,10) }}
                  @endif
                </td>
                {{-- Minggu 4 --}}
                <td>
                  @if ($minggu4 === NULL)
                  @else
                    {{ substr($minggu4->kondisi, 9,10) }}
                  @endif
                </td>
                {{-- Minggu 5 --}}
                <td>
                  @if ($minggu5 === NULL)
                  @else
                    {{ substr($minggu5->kondisi, 9,10) }}
                  @endif
                </td>
                <td></td>
              </tr>
            @endforeach
          </table>
          <br>
          <table style="width:200px" align="left">
            <tr>
              <th>FRM-APS-FSD-01-02-05, Rev.0</th>
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
              <th>SUPERVISOR PROJECT</th>
              <th>KEPALA UNIT PELAKSANA</th>
            </tr>
          </table>
        </div>
      </article>
    </page>
  </body>
</html>
