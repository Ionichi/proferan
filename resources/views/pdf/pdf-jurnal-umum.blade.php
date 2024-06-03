<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests" />

    <title>Laporan Jurnal Umum - {{ $dataUsaha['nama'] }}</title>
</head>
<style>
@font-face {
    font-family: 'Poppins';
    font-style: normal;
    font-weight: 400;
    font-display: swap;
    src: url(https://fonts.gstatic.com/s/poppins/v21/pxiEyp8kv8JHgFVrJJfecg.woff2) format('woff2');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
body {
    font-family: Poppins, sans-serif;
}
.header {
    text-align: center;
    margin-bottom: 50px;
    font-size: 18px;
}
.namaUsaha {
    font-size: 50px;
    font-weight: bold;
}
table {
    width: 100%;
    border-collapse: collapse;
    font-size: 16px;
}
table thead tr th {
    padding: 8px;
}
table tbody tr td {
    padding-bottom: 20px;
}
th {
    background: #000;
    color: #fff;
}
.even {
    background: #f2f2f2;
}
.text-center {
    text-align: center;
}
</style>
<body>
    <div class="header">
        <span class="namaUsaha">{{ $dataUsaha['nama'] }}</span>
        <br>
        <span>Bukti Jurnal Umum</span>
        <br>
        <span>Dari {{ $dataUsaha['startDate'] }} ke {{ $dataUsaha['endDate'] }}</span>
    </div>

    <table>
        <thead>
            <tr>
                <th>Tanggal</th>
                <th>Nama Akun</th>
                <th>Debet</th>
                <th>Kredit</th>
                <th style="width: 35%;">Keterangan</th>
            </tr>
        </thead>
        <tbody>
            @php $i = 0 @endphp
            @forelse ($data as $item)
                @if ($i % 2 == 0)    
                    @php $i++ @endphp
                    <tr>
                        <td rowspan="2" class="text-center">{{ $item['tgl'] }}</td>
                        <td>{{ $item['nama_akun_debit'] }}</td>
                        <td class="text-center">{{ $item['nominal_debit'] }}</td>
                        <td>&nbsp;</td>
                        <td rowspan="2">{{ $item['keterangan'] }}</td>
                    </tr>
                    <tr>
                        <td>
                            <span style="float: right;">{{ $item['nama_akun_kredit'] }}</span>
                        </td>
                        <td>&nbsp;</td>
                        <td class="text-center">{{ $item['nominal_kredit'] }}</td>
                    </tr>

                    @if (!empty($item['potongan']))
                        @php $i++ @endphp
                        <tr class="even">
                            <td rowspan="2" class="text-center">{{ $item['potongan']['tgl'] }}</td>
                            <td>{{ $item['potongan']['nama_akun_debit'] }}</td>
                            <td class="text-center">{{ $item['potongan']['nominal_debit'] }}</td>
                            <td>&nbsp;</td>
                            <td rowspan="2">{{ $item['potongan']['keterangan'] }}</td>
                        </tr>
                        <tr class="even">
                            <td>
                                <span style="float: right;">{{ $item['potongan']['nama_akun_kredit'] }}</span>
                            </td>
                            <td>&nbsp;</td>
                            <td class="text-center">{{ $item['potongan']['nominal_kredit'] }}</td>
                        </tr>
                    @endif
                @else
                    @php $i++ @endphp
                    <tr class="even">
                        <td rowspan="2" class="text-center">{{ $item['tgl'] }}</td>
                        <td>{{ $item['nama_akun_debit'] }}</td>
                        <td class="text-center">{{ $item['nominal_debit'] }}</td>
                        <td>&nbsp;</td>
                        <td rowspan="2">{{ $item['keterangan'] }}</td>
                    </tr>
                    <tr class="even">
                        <td>
                            <span style="float: right;">{{ $item['nama_akun_kredit'] }}</span>
                        </td>
                        <td>&nbsp;</td>
                        <td class="text-center">{{ $item['nominal_kredit'] }}</td>
                    </tr>

                    @if (!empty($item['potongan']))
                        @php $i++ @endphp
                        <tr>
                            <td rowspan="2" class="text-center">{{ $item['potongan']['tgl'] }}</td>
                            <td>{{ $item['potongan']['nama_akun_debit'] }}</td>
                            <td class="text-center">{{ $item['potongan']['nominal_debit'] }}</td>
                            <td>&nbsp;</td>
                            <td rowspan="2">{{ $item['potongan']['keterangan'] }}</td>
                        </tr>
                        <tr>
                            <td>
                                <span style="float: right;">{{ $item['potongan']['nama_akun_kredit'] }}</span>
                            </td>
                            <td>&nbsp;</td>
                            <td class="text-center">{{ $item['potongan']['nominal_kredit'] }}</td>
                        </tr>
                    @endif
                @endif
            @empty
                <tr>
                    <td colspan="5" class="text-center">
                        <h3>Tidak ada data</h3>
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>