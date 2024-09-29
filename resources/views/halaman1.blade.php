<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>PW4 - Halaman 1 - 220712081</title>

        <style>
            img {
                width: 150px;
            }
            legend {
                font-size: 30px;
            }
            td,
            th {
                padding: 5px;
                border: 1px solid;
            }
        </style>
    </head>
    <body>
        <ul style="list-style-type: square">
            <li><a href="{{ url('halaman1') }}">Page 1</a></li>
            <li><a href="{{ url('halaman2') }}">Page 2</a></li>
        </ul>
        <fieldset>
            <legend>Profil</legend>
            <hr style="border: dotted" />
            <table style="width: auto; margin: 0 auto">
                <tr>
                    <th colspan="5">kontak orang Keren</th>
                </tr>

                <tr>
                    <th>Photo</th>
                    <th>Nama</th>
                    <th>Telp</th>
                    <th>Tanggal lahir</th>
                </tr>

                <tr>
                    <td>
                        <img src="{{asset('images/download.jpg')}}" alt="ini gambar 1.1" />
                    </td>
                    <td>Marsella Adinda Oktaviani - 220712081</td>
                    <td>085702143676</td>
                    <td>30-10-2004</td>
                </tr>
            </table>
        </fieldset>
    </body>
</html>