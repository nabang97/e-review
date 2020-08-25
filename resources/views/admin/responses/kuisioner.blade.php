{{-- @php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Rekap kuisioner PKA ".date('Y-m').".xls");
@endphp --}}
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<!-- saved from url=(0074)http://s3.pdfconvertonline.com/convert/p3r68-cdx67/n2ygl-5wnaj.html#table1 -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">


	<title></title>
	<meta name="generator" content="LibreOffice 5.4.7.2 (Linux)">
	<meta name="author" content="Lenovo iD">
	<meta name="created" content="2020-08-23T05:03:02">
	<meta name="changedby" content="Lenovo iD">
	<meta name="changed" content="2020-08-23T05:36:59">
	<meta name="AppVersion" content="16.0300">
	<meta name="DocSecurity" content="0">
	<meta name="HyperlinksChanged" content="false">
	<meta name="LinksUpToDate" content="false">
	<meta name="ScaleCrop" content="false">
	<meta name="ShareDoc" content="false">

	<style type="text/css">
		body,div,table,thead,tbody,tfoot,tr,th,td,p { font-family:"Calibri"; font-size:x-small }
		a.comment-indicator:hover + comment { background:#ffd; position:absolute; display:block; border:1px solid black; padding:0.5em;  }
		a.comment-indicator { background:red; display:inline-block; border:1px solid black; width:0.5em; height:0.5em;  }
		comment { display:none;  }
	</style>

</head>

<body>
<hr>
	<p></p><center>
		<h1>Rekapitulasi Kuisioner Pelatihan Kepemimpinan dan Administrator</h1>

	</center><p></p>
<hr>
@foreach($kategori as $data_kategori)
<a name="table0"><h1>Sheet {{ $loop->iteration }}: <em>{{ $data_kategori->nama_kategori_kuisioner }}</em></h1></a>
<table cellspacing="0" border="0">
	<colgroup width="121"></colgroup>
	<colgroup width="136"></colgroup>
	<colgroup width="161"></colgroup>
	<colgroup width="127"></colgroup>
	<colgroup width="143"></colgroup>
	<colgroup width="134"></colgroup>
	<colgroup width="121"></colgroup>
	<colgroup width="168"></colgroup>
	<tbody>
    <tr>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="149" align="center" valign="middle" bgcolor="#D6DCE5"><b><font size="3" color="#000000">NIP</font></b></td>
        @foreach($data_kategori->kuisioner as $pertanyaan)
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign="top" bgcolor="#D6DCE5"><b><font color="#000000">{{ $pertanyaan->pertanyaan }}</font></b></td>
        @endforeach
	</tr>
    @foreach($responden as $peserta)
    <tr>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="19" align="right" valign="top" sdval="1.23456788901234E+018" sdnum="1033;"><font color="#000000">{{ $peserta->nip_email }}</font></td>
        @foreach($data_kategori->kuisioner as $jawaban)
        <?php
        $detail = App\Detail_kuisioner::where('nip',$peserta->nip_email)->where('kuisioner_id',$jawaban->id)->where('tahun','2020')->first();
        if($detail)
        {
        ?>
            @foreach($detail->isi as $isi)
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign="top" sdval="60" sdnum="1033;"><font color="#000000">{{ $isi }}</font></td>
            @endforeach
        <?php
        }
        else
        {
        ?>
            <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign="top" sdval="60" sdnum="1033;"><font color="#000000">0</font></td>
        <?php
        }
        ?>
        @endforeach
    </tr>
    @endforeach
	<tr>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="19" align="left" valign="top" bgcolor="#D6DCE5"><b><font color="#000000">TOTAL</font></b></td>
        @foreach($data_kategori->kuisioner as $total)
        @if($total->tipe == "angka")
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign="top" bgcolor="#D6DCE5" sdval="720" sdnum="1033;"><b><font color="#000000">720</font></b></td>
        @endif
        @endforeach
	</tr>
	<tr>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="19" align="left" valign="top" bgcolor="#D6DCE5"><b><font color="#FF0000">RATA-RATA</font></b></td>
        @foreach($data_kategori->kuisioner as $rata_rata)
        @if($total->tipe == "angka")
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign="top" bgcolor="#D6DCE5" sdval="60" sdnum="1033;"><b><font color="#FF0000">60</font></b></td>
        @endif
        @endforeach
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="19" align="left" valign="top" bgcolor="#D6DCE5"><b><font color="#000000">HASIL</font></b></td>
        @foreach($data_kategori->kuisioner as $hasil)
        @if($total->tipe == "angka")
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign="top" bgcolor="#D6DCE5"><font color="#000000">Kurang Memuaskan</font></td>
        @endif
        @endforeach
	</tr>
    </tbody>
</table>
<hr>
@endforeach
<!-- ************************************************************************** -->


</body>
</html>
