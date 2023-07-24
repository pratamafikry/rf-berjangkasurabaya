@extends('layout.main')
@section('container')
<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Ilustrasi Transaksi</h2>
          <ol>
            <li><a href="/">Home</a></li>
            <li>Ilustrasi Transaksi</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page">
      <div class="container">
        <h3>TRANSAKSI INDEX SAHAM & EMAS LOCO LONDON</h3>

        <p style="line-height: 22px;"><strong>Rumus Perhitungan Transaksi :</strong></p>
        <p style="line-height: 22px;"><strong>[ ( Selling Price – Buying Price ) x Contract Size x n Lot ] – [ ( Facility Fee + VAT ) x n Lot ]</strong></p>
        <div style="text-align: justify"><strong>Keterangan :</strong></div>
        <article>
            <ul style="list-style-type: square;">
                <li>
                    <p><span style="line-height: 22px; text-align: justify; font-size: 10pt; color: #000000;">Contract Size (nilai kontrak) : sebesar US $ 5 per poin untuk kontrak gulir berkala indeks saham, 100 troy ounce untuk kontak gulir harian emas Loco London dan 100.000 untuk kontrak gulir harian spot mata uang (Forex).</span></p>
                    </li>
                    <li>
                    <p><span style="color: #000000; font-size: 10pt;">n Lot : n adalah banyaknya lot yang ditransaksikan.</span></p>
                    </li>
                    <li>
                    <p><span style="color: #000000; font-size: 10pt;">Facility Fee (biaya komisi) : sebesar US $ 15 per lot per sisi (beli atau jual).</span></p>
                    </li>
                    <li>
                    <p><span style="color: #000000; font-size: 10pt;">Total biaya komisi sebesar US $ 30 untuk 1 lot settlement.</span></p>
                    </li>
                    <li>
                    <p><span style="color: #000000; font-size: 10pt;">VAT (Value Added Tax / Pajak Pertambahan Nilai) : sebesar 11% dari biaya&nbsp;komisi yaitu US $ 1.65/lot/side.&nbsp;</span></p>
                    </li>
                    <li style="text-align: justify;">
                    <p style="line-height: 22px;"><span style="color: #000000; font-size: 10pt;">Total biaya VAT sebesar US $ 3.3 untuk 1 lot settlement.</span></p>
                    </li>
                    <li style="text-align: justify;">
                    <p style="line-height: 22px;"><span style="color: #000000; font-size: 10pt;"><span style=""></span><span style="">Apabila penyelesaian transaksi dilakukan lebih dari satu hari (overnight) maka setiap lot transaksi akan dikenakan biaya inap / roll over. (Dapat dilihat pada tabel perdagangan)</span></span></p>
                    </li>

            </ul>
        </article>
        <div class="article-content" style="padding: 0px; margin: 0px; font-size: 11px; font-family: Tahoma,Arial,sans-serif; line-height: 16.5px;">
            <p><span style="font-family: 'Open Sans',sans-serif; color: #000000;"></span></p>
            <p>&nbsp;</p>
            <p style="padding: 0px; margin-top: 12px; margin-bottom: 12px;"><span style="font-size: 10pt; color: #000000;"><strong style="padding: 0px; margin: 0px;">Contoh 1 (HKK5U_BBJ)</strong></span></p>
            <p><span style="font-size: 10pt; color: #000000;">Seorang investor mengambil transaksi HKK5U_BBJ pada angka 18,000 sebanyak 2 lot (Open Buy 2 lots), yang dia prediksi bahwa harga akan bergerak lebih tinggi. Di sesi perdagangan siang hari, harga bergerak naik ke level 18,400 dan ia melikuidasi semua posisinya pada level 18,300 (Closed Sell 2 lots)<strong>.</strong><br /></span></p>
            <p style="padding: 0px; margin-top: 12px; margin-bottom: 12px;"><span style="color: #000000;"><strong><span style="font-size: 10pt;">Formula Perhitungan :</span></strong></span></p>
            <p style="padding: 0px; margin-top: 12px; margin-bottom: 12px;"><span style="font-size: 10pt; color: #000000;">P/L = [(18,300-18,000) pts x US$5 x 2 lots] - [(US30 + US$3.3) x 2 lots]</span></p>
            <p style="padding: 0px; margin-top: 12px; margin-bottom: 12px;"><span style="font-size: 10pt; color: #000000;">P/L = (300 pts x US$10) - US$66.6</span></p>
            <p style="padding: 0px; margin-top: 12px; margin-bottom: 12px;"><span style="font-size: 10pt; color: #000000;">P/L = US$2,933.4</span></p>
            <p style="padding: 0px; margin-top: 12px; margin-bottom: 12px;"><span style="font-size: 10pt; color: #000000;">Keuntungan bersih investor adalah&nbsp;<strong style="padding: 0px; margin: 0px;"><span style="color: #008000;">US$2,933.4</span></strong></span></p>
            <p style="padding: 0px; margin-top: 12px; margin-bottom: 12px;"><span style="font-size: 10pt; color: #000000;"><strong style="padding: 0px; margin: 0px;">Catatan </strong><strong>:</strong> P = Profit, L = Loss</span></p>
            <p style="padding: 0px; margin-top: 12px; margin-bottom: 12px;"><span style="font-size: 10pt; color: #000000;"></span></p>
            <p>&nbsp;</p>
            <p style="padding: 0px; margin-top: 12px; margin-bottom: 12px;"><span style="font-size: 10pt; color: #000000;"><strong style="padding: 0px; margin: 0px;">Contoh 2 (JPK5U_BBJ)</strong></span></p>
            <p><span style="font-size: 10pt; color: #000000;">Seorang investor menganalisa bahwa produk JPK5U_BBJ akan mengalami penurunan harga, dan pada saat itu investor tersebut segera mengambil posisi jual pada level 14,850 sebanyak 2 lot. Dua hari kemudian investor itu menutup posisinya ketika harga berada pada level 14,650.</span></p>
            <p style="padding-top: 0px; padding-right: 0px; padding-bottom: 0px; margin-top: 12px; margin-bottom: 12px;"><span style="font-size: 10pt; color: #000000;"><strong style="padding: 0px; margin: 0px;">Formula Perhitungan :<br /></strong></span></p>
            <p style="padding: 0px 0px 0px 30px; margin-top: 12px; margin-bottom: 12px;"><span style="font-size: 10pt; color: #000000;">P/L = [(Selling Price - Buying Price) x Contract Size x n Lot] - [(Fee US$30 + VAT) x n Lot]</span></p>
            <p style="padding: 0px 0px 0px 30px; margin-top: 12px; margin-bottom: 12px;"><span style="font-size: 10pt; color: #000000;">P/L&nbsp;= [(14,850-14,650) x US$ 5 x 2 lots] - [(US$ 30 + US$ 3.3) x 2 lots]</span></p>
            <p style="padding: 0px 0px 0px 30px; margin-top: 12px; margin-bottom: 12px;"><span style="font-size: 10pt; color: #000000;">P/L&nbsp;= (200 points x $ 5 x 2 lots) - (US$ 33 x 2 lots) = US$2,000 - US$66.6</span></p>
            <p style="padding: 0px 0px 0px 30px; margin-top: 12px; margin-bottom: 12px;"><span style="font-size: 10pt; color: #000000;">P/L&nbsp;= US$1,933.4 (gross profit)</span></p>
            <p><span style="font-size: 10pt; color: #000000;">Karena transaksi dilaksanakan lebih dari satu malam (overnight), maka dikenakan biaya menginap (roll over) sebesar US$8 (US$2 x 2 lot x 2 malam), sehingga keuntungan bersih investor adalah US$ 1,933.4 - US$8 = <strong><span style="color: #008000;">US$1,925.4</span></strong></span></p>
            <p style="padding: 0px; margin-top: 12px; margin-bottom: 12px;"><span style="font-size: 10pt; color: #000000;"></span></p>
            <p>&nbsp;</p>
            <p style="padding: 0px; margin-top: 12px; margin-bottom: 12px;"><span style="color: #000000;">&nbsp;<span style="font-size: 10pt;"><strong style="padding: 0px; margin: 0px;">Contoh 3 (XULF)</strong></span></span></p>
            <p><span style="font-size: 10pt; color: #000000;">Seorang investor memprediksi harga emas Loco London ada dalam trend positif dan dia merencanakan untuk mengambil posisi beli. Ketika dalam pengambilan posisi dia mendapatkan harga pada level $1,175.30 / troy ounce sebanyak 2 lot. Meskipun demikian, harga telah jatuh ke level $1,160.65 / troy ounce, dan dia harus menglikuidasi pada posisi 1,165.30 / troy ounce sebanyak 1 lot. Pada keesokan harinya dia menglikuidasi sisanya saat harga berada pada level $1,190.20 / troy ounce.</span></p>
            <p style="padding: 0px; margin-top: 12px; margin-bottom: 12px;"><span style="color: #000000;"><strong><span style="font-size: 10pt;">Formula Perhitungan :</span></strong></span></p>
            <p style="padding: 0px 0px 0px 30px; margin-top: 12px; margin-bottom: 12px;"><span style="padding: 0px; margin: 0px; text-decoration: underline; font-size: 10pt; color: #000000;">Hari Pertama</span></p>
            <p style="padding: 0px 0px 0px 30px; margin-top: 12px; margin-bottom: 12px;"><span style="font-size: 10pt; color: #000000;">P/L &nbsp;= [US$(1165.30 - 1175.30) / troy ounce x 100 troy ounce x 1 lot] - [US$(30 + 3.3) x 1 lot]</span></p>
            <p style="padding: 0px 0px 0px 30px; margin-top: 12px; margin-bottom: 12px;"><span style="font-size: 10pt; color: #000000;">P/L &nbsp;= - US$1000 - US$33.3 = - US$1,033.3</span></p>
            <p style="padding: 0px 0px 0px 30px; margin-top: 12px; margin-bottom: 12px;"><span style="padding: 0px; margin: 0px; text-decoration: underline; font-size: 10pt; color: #000000;">Hari Kedua</span></p>
            <p style="padding: 0px 0px 0px 30px; margin-top: 12px; margin-bottom: 12px;"><span style="font-size: 10pt; color: #000000;">P/L &nbsp;= [US$(1190.20 to 1175.30) / troy ounce troy ounce x 100 x 1 lot] - [US$ (30 + 3.3) x 1 lot]</span></p>
            <p style="padding: 0px 0px 0px 30px; margin-top: 12px; margin-bottom: 12px;"><span style="font-size: 10pt; color: #000000;">P/L &nbsp;= US$1,490 - US$33.3 = US$1,456.7</span></p>
            <p style="padding: 0px 0px 0px 30px; margin-top: 12px; margin-bottom: 12px;"><span style="font-size: 10pt; color: #000000;">Dikarnakan transaksi dilakukan lebih dari 1 hari maka dikenakan biaya roll over sebesar:</span></p>
            <p style="padding: 0px 0px 0px 30px; margin-top: 12px; margin-bottom: 12px;"><span style="font-size: 10pt; color: #000000;">US$5 x 1 lot x 1 night = US$5</span></p>
            <p style="padding: 0px 0px 0px 30px; margin-top: 12px; margin-bottom: 12px;"><span style="font-size: 10pt; color: #000000;">Net profit investor itu sebesar -US$1,033.3 + US$1,456.7 - US$ 5 = <strong><span style="color: #008000;">US$418.4</span></strong></span></p>
            <p><span style="color: #000000;"></span></p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p><span style="font-size: 14pt; color: #000000;"><strong>TRANSAKSI FOREX</strong></span></p>
            <p>&nbsp;</p>
            <p lang="en" style="padding: 0px; margin-top: 12px; margin-bottom: 0in; font-family: Tahoma,Arial,sans-serif; font-size: 11px; line-height: 16.5px;"><span style="padding: 0px; margin: 0px; font-size: medium; font-family: 'Open Sans',sans-serif; color: #000000;"><strong style="padding: 0px; margin: 0px;">KODE &amp; TIPE KONTRAK</strong></span></p>
            <table class=" cke_show_border" style="padding: 0px; margin: 0px; color: #333333; font-family: Tahoma,Arial,sans-serif; font-size: 11px; line-height: 16.5px; width: 80%; background-color: #ffffff;" cellspacing="0" cellpadding="7"><colgroup style="padding: 0px; margin: 0px;"> <col style="padding: 0px; margin: 0px;" width="95" /> <col style="padding: 0px; margin: 0px;" width="78" /> <col style="padding: 0px; margin: 0px;" width="90" /> <col style="padding: 0px; margin: 0px;" width="291" /> </colgroup>
            <tbody style="padding: 0px; margin: 0px;">
            <tr style="padding: 0px; margin: 0px;">
            <td style="padding: 0in 0.08in; margin: 0px; border: 1px solid #00000a;" width="95" height="7">
            <p lang="en" style="padding: 0px; margin-top: 12px; margin-bottom: 12px; text-align: center;"><span style="font-family: 'Open Sans',sans-serif; font-size: 10pt; color: #000000;"><strong style="padding: 0px; margin: 0px;">KODE KONTRAK</strong></span></p>
            </td>
            <td style="padding: 0in 0.08in; margin: 0px; border: 1px solid #00000a;" width="78">
            <p lang="en" style="padding: 0px; margin-top: 12px; margin-bottom: 12px; text-align: center;"><span style="font-family: 'Open Sans',sans-serif; font-size: 10pt; color: #000000;"><strong style="padding: 0px; margin: 0px;">DASAR</strong></span></p>
            </td>
            <td style="padding: 0in 0.08in; margin: 0px; border: 1px solid #00000a;" width="90">
            <p style="padding: 0px; margin-top: 12px; margin-bottom: 12px; text-align: center;"><span style="font-family: 'Open Sans',sans-serif; color: #000000;"><span style="font-size: 13.3333px;"><strong>KATEGORI</strong></span></span></p>
            </td>
            <td style="padding: 0in 0.08in; margin: 0px; border: 1px solid #00000a;" width="291">
            <p lang="en" style="padding: 0px; margin-top: 12px; margin-bottom: 12px; text-align: center;"><span style="font-family: 'Open Sans',sans-serif; font-size: 10pt; color: #000000;"><strong style="padding: 0px; margin: 0px;">TIPE KONTRAK</strong></span></p>
            </td>
            </tr>
            <tr style="padding: 0px; margin: 0px;">
            <td style="padding: 0in 0.08in; margin: 0px; border: 1px solid #00000a; text-align: center;" width="95" height="8">
            <p style="padding: 0px; margin-top: 12px; margin-bottom: 12px;"><span style="font-family: 'Open Sans',sans-serif; font-size: 10pt; color: #000000;">GU1010_BBJ &amp; GU10F_BBJ<br /></span></p>
            </td>
            <td style="padding: 0in 0.08in; margin: 0px; border: 1px solid #00000a; text-align: center;" width="78">
            <p style="padding: 0px; margin-top: 12px; margin-bottom: 12px;"><span style="font-family: 'Open Sans',sans-serif; font-size: 10pt; color: #000000;">GBP/USD</span></p>
            </td>
            <td style="padding: 0in 0.08in; margin: 0px; border: 1px solid #00000a; text-align: center;" width="90">
            <p style="padding: 0px; margin-top: 12px; margin-bottom: 12px;"><span style="font-family: 'Open Sans',sans-serif; font-size: 10pt; color: #000000;">DIRECT</span></p>
            </td>
            <td style="padding: 0in 0.08in; margin: 0px; border: 1px solid #00000a;" width="291">
            <p lang="en" style="padding: 0px; margin-top: 12px; margin-bottom: 12px;"><span style="font-family: 'Open Sans',sans-serif; font-size: 10pt; color: #000000;">Kontrak Gulir Harian Spot Great Britain Pound Sterling (GBP) Terhadap US Dollar (USD)</span></p>
            </td>
            </tr>
            <tr style="padding: 0px; margin: 0px;">
            <td style="padding: 0in 0.08in; margin: 0px; border: 1px solid #00000a; text-align: center;" width="95" height="8">
            <p style="padding: 0px; margin-top: 12px; margin-bottom: 12px;"><span style="font-family: 'Open Sans',sans-serif; font-size: 10pt; color: #000000;">EU1010_BBJ &amp; EU10F_BBJ<br /></span></p>
            </td>
            <td style="padding: 0in 0.08in; margin: 0px; border: 1px solid #00000a; text-align: center;" width="78">
            <p style="padding: 0px; margin-top: 12px; margin-bottom: 12px;"><span style="font-family: 'Open Sans',sans-serif; font-size: 10pt; color: #000000;">EUR/USD</span></p>
            </td>
            <td style="padding: 0in 0.08in; margin: 0px; border: 1px solid #00000a; text-align: center;" width="90">
            <p style="padding: 0px; margin-top: 12px; margin-bottom: 12px;"><span style="font-family: 'Open Sans',sans-serif; font-size: 10pt; color: #000000;">DIRECT</span></p>
            </td>
            <td style="padding: 0in 0.08in; margin: 0px; border: 1px solid #00000a;" width="291">
            <p lang="en" style="padding: 0px; margin-top: 12px; margin-bottom: 12px;"><span style="font-family: 'Open Sans',sans-serif; font-size: 10pt; color: #000000;"><span style="font-family: 'Open Sans',sans-serif; font-size: 10pt; color: #000000;">Kontrak Gulir Harian Spot </span>Euro (EUR) Terhadap US Dolar (USD)</span></p>
            </td>
            </tr>
            <tr style="padding: 0px; margin: 0px;">
            <td style="padding: 0in 0.08in; margin: 0px; border: 1px solid #00000a; text-align: center;" width="95" height="8">
            <p style="padding: 0px; margin-top: 12px; margin-bottom: 12px;"><span style="font-family: 'Open Sans',sans-serif; font-size: 10pt; color: #000000;">AU1010_BBJ &amp; AU10F_BBJ<br /></span></p>
            </td>
            <td style="padding: 0in 0.08in; margin: 0px; border: 1px solid #00000a; text-align: center;" width="78">
            <p style="padding: 0px; margin-top: 12px; margin-bottom: 12px;"><span style="font-family: 'Open Sans',sans-serif; font-size: 10pt; color: #000000;">AUD/USD</span></p>
            </td>
            <td style="padding: 0in 0.08in; margin: 0px; border: 1px solid #00000a; text-align: center;" width="90">
            <p style="padding: 0px; margin-top: 12px; margin-bottom: 12px;"><span style="font-family: 'Open Sans',sans-serif; font-size: 10pt; color: #000000;">DIRECT</span></p>
            </td>
            <td style="padding: 0in 0.08in; margin: 0px; border: 1px solid #00000a;" width="291">
            <p lang="en" style="padding: 0px; margin-top: 12px; margin-bottom: 12px;"><span style="font-family: 'Open Sans',sans-serif; font-size: 10pt; color: #000000;"><span style="font-family: 'Open Sans',sans-serif; font-size: 10pt; color: #000000;">Kontrak Gulir Harian Spot </span> Australian Dollar (AUD) Terhadap US Dolar (USD)</span></p>
            </td>
            </tr>
            <tr style="padding: 0px; margin: 0px;">
            <td style="padding: 0in 0.08in; margin: 0px; border: 1px solid #00000a; text-align: center;" width="95" height="8">
            <p style="padding: 0px; margin-top: 12px; margin-bottom: 12px;"><span style="font-family: 'Open Sans',sans-serif; font-size: 10pt; color: #000000;">UC1010_BBJ &amp; UC10F_BBJ<br /></span></p>
            </td>
            <td style="padding: 0in 0.08in; margin: 0px; border: 1px solid #00000a; text-align: center;" width="78">
            <p style="padding: 0px; margin-top: 12px; margin-bottom: 12px;"><span style="font-family: 'Open Sans',sans-serif; font-size: 10pt; color: #000000;">USD/CHF</span></p>
            </td>
            <td style="padding: 0in 0.08in; margin: 0px; border: 1px solid #00000a; text-align: center;" width="90">
            <p style="padding: 0px; margin-top: 12px; margin-bottom: 12px;"><span style="font-family: 'Open Sans',sans-serif; font-size: 10pt; color: #000000;">INDIRECT</span></p>
            </td>
            <td style="padding: 0in 0.08in; margin: 0px; border: 1px solid #00000a;" width="291">
            <p lang="en" style="padding: 0px; margin-top: 12px; margin-bottom: 12px;"><span style="font-family: 'Open Sans',sans-serif; font-size: 10pt; color: #000000;"><span style="font-family: 'Open Sans',sans-serif; font-size: 10pt; color: #000000;">Kontrak Gulir Harian Spot </span> US Dollar (USD) Terhadap Swiss Franc (CHF)</span></p>
            </td>
            </tr>
            <tr style="padding: 0px; margin: 0px;">
            <td style="padding: 0in 0.08in; margin: 0px; border: 1px solid #00000a; text-align: center;" width="95" height="7">
            <p style="padding: 0px; margin-top: 12px; margin-bottom: 12px;"><span style="font-family: 'Open Sans',sans-serif; font-size: 10pt; color: #000000;">UJ1010_BBJ &amp; UJ10F_BBJ<br /></span></p>
            </td>
            <td style="padding: 0in 0.08in; margin: 0px; border: 1px solid #00000a; text-align: center;" width="78">
            <p style="padding: 0px; margin-top: 12px; margin-bottom: 12px;"><span style="font-family: 'Open Sans',sans-serif; font-size: 10pt; color: #000000;">USD/JPY</span></p>
            </td>
            <td style="padding: 0in 0.08in; margin: 0px; border: 1px solid #00000a; text-align: center;" width="90">
            <p style="padding: 0px; margin-top: 12px; margin-bottom: 12px;"><span style="font-family: 'Open Sans',sans-serif; font-size: 10pt; color: #000000;">INDIRECT</span></p>
            </td>
            <td style="padding: 0in 0.08in; margin: 0px; border: 1px solid #00000a;" width="291">
            <p lang="en" style="padding: 0px; margin-top: 12px; margin-bottom: 12px;"><span style="font-family: 'Open Sans',sans-serif; font-size: 10pt; color: #000000;"><span style="font-family: 'Open Sans',sans-serif; font-size: 10pt; color: #000000;">Kontrak Gulir Harian Spot </span>US Dollar (USD) Terhadap Japanese Yen (JPY)</span></p>
            </td>
            </tr>
            </tbody>
            </table>
            <p><span style="color: #000000;"></span></p>
            <p><span style="color: #000000;"></span></p>
            <p>&nbsp;</p>
            <p lang="en" style="padding: 0px; margin-top: 12px; margin-bottom: 0in; font-family: Tahoma,Arial,sans-serif; font-size: 11px; line-height: 16.5px;"><span style="font-family: 'Open Sans',sans-serif; color: #000000;"><span style="padding: 0px; margin: 0px; font-size: medium;"><strong style="padding: 0px; margin: 0px;">Rumus Perhitungan Transaksi Forex</strong></span><span style="padding: 0px; margin: 0px; font-size: medium;"> <br /></span></span></p>
            <p style="padding: 0px 0px 0px 30px; margin-top: 12px; margin-bottom: 0in; font-family: Tahoma,Arial,sans-serif; font-size: 11px; line-height: 16.5px;"><span lang="en" style="padding: 0px; margin: 0px; font-size: 10pt; font-family: 'Open Sans',sans-serif; color: #000000;"></span><em><span style="font-size: 10pt; font-family: 'Open Sans',sans-serif; color: #000000;"><span lang="en" style="padding: 0px; margin: 0px;">Katagori</span> <strong style="padding: 0px; margin: 0px;">DIRECT RATES</strong></span></em></p>
            <p lang="en" style="padding: 0px 0px 0px 30px; margin-top: 12px; margin-bottom: 0in; font-family: Tahoma,Arial,sans-serif; font-size: 11px; line-height: 16.5px;"><span style="padding: 0px; margin: 0px; color: #000000; font-size: 10pt; font-family: 'Open Sans',sans-serif;"><span style="padding: 0px; margin: 0px;"><strong style="padding: 0px; margin: 0px;"><span style="font-size: 10pt; font-family: 'Open Sans',sans-serif; color: #000000;"><strong>P / L = [ ( Selling Price &ndash; Buying Price ) x Contract Size x n Lot ] &ndash; [ ( Facility Fee + VAT ) x n Lot ]</strong></span></strong></span></span></p>
            <p style="padding: 0px 0px 0px 30px; margin-top: 12px; margin-bottom: 0in; font-family: Tahoma,Arial,sans-serif; font-size: 11px; line-height: 16.5px;"><em><span style="font-size: 10pt; font-family: 'Open Sans',sans-serif; color: #000000;">Katagori <strong style="padding: 0px; margin: 0px;">INDIRECT RATES</strong></span></em></p>
            <p style="padding: 0px 0px 0px 30px; margin-top: 12px; margin-bottom: 0in; font-family: Tahoma,Arial,sans-serif; font-size: 11px; line-height: 16.5px;"><span style="padding: 0px; margin: 0px; color: #000000; font-size: 10pt; font-family: 'Open Sans',sans-serif;"><span style="padding: 0px; margin: 0px;"><span lang="en" style="padding: 0px; margin: 0px;"><strong style="padding: 0px; margin: 0px;">P / L = (Selling Price-Purchase Price) / Liquidation Price x Contract Size x Number of Lots<br /><br /><br /></strong></span></span> </span></p>
            </div>
            <div><span style="font-family: 'Open Sans',sans-serif; color: #000000;"></span></div>
            <div style="padding-left: 30px;"><span style="font-family: 'Open Sans',sans-serif; color: #000000;"><strong>Contoh 1 : Transaksi EU1010_BBJ</strong><strong style="padding: 0px; margin: 0px;"> (</strong><em style="padding: 0px; margin: 0px;"><strong style="padding: 0px; margin: 0px;"><a href="http://www.rf-berjangka.com/index.php/Illustrasi-Perhitungan-Transaksi.html#99507425" class="iggulqdynt" style="padding: 0px; margin: 0px; color: #000000; text-decoration: underline;" title="Click to Continue &gt; by eDeals">Daytrade</a></strong></em><strong style="padding: 0px; margin: 0px;">)<br /><br /></strong></span></div>
            <ol>
            <li class="article-content" style="padding: 0px; margin: 0px; font-size: 11px; font-family: Tahoma,Arial,sans-serif; line-height: 16.5px;">
            <p lang="en" style="padding: 0px; margin-top: 12px; margin-bottom: 0in; font-family: Tahoma,Arial,sans-serif; font-size: 11px; line-height: 16.5px;"><span style="font-size: 10pt; font-family: 'Open Sans',sans-serif; color: #000000;">Investor memprediksi harga spot dari EUR/USD akan naik, kemudian dia mengambil posisi beli (buy) di harga 1.3530 sebanyak 2 lot. Tidak lama kemudian dia menglikuidasi di harga 1.3540 sebanyak 2 lot (clear position). besaran yang didapat si investor sebesar :</span></p>
            <p style="padding: 0px; margin-top: 12px; margin-bottom: 0in; font-family: Tahoma,Arial,sans-serif; font-size: 11px; line-height: 16.5px;"><span style="font-size: 10pt; font-family: 'Open Sans',sans-serif; color: #000000;">P/L = <span style="padding: 0px; margin: 0px; color: #000000; font-size: 10pt; font-family: 'Open Sans',sans-serif;"><span style="padding: 0px; margin: 0px;"><span style="font-size: 10pt; font-family: 'Open Sans',sans-serif; color: #000000;">[ ( Selling Price &ndash; Buying Price ) x Contract Size x n Lot ] &ndash; [ ( Facility Fee + VAT ) x n Lot ]</span></span></span><br /></span></p>
            <p style="padding: 0px; margin-top: 12px; margin-bottom: 0in; font-family: Tahoma,Arial,sans-serif; font-size: 11px; line-height: 16.5px;"><span style="font-size: 10pt; font-family: 'Open Sans',sans-serif; color: #000000;">P/L = [ (<span style="font-size: 10pt; color: #000000;"></span>1.3540-1.3530) x 100.000 x 2 lot ] - [ (<span style="font-size: 10pt; color: #000000;">US$</span>30 + <span style="font-size: 10pt; color: #000000;">US$</span>3.3) x 2 lot ]<br /></span></p>
            <p style="padding: 0px; margin-top: 12px; margin-bottom: 0in; font-family: Tahoma,Arial,sans-serif; font-size: 11px; line-height: 16.5px;"><span style="font-size: 10pt; font-family: 'Open Sans',sans-serif; color: #000000;">P/L = (0,0010 x 100.000 x 2) - <span style="font-size: 10pt; color: #000000;">US$</span>66.6<br /></span></p>
            <p style="padding: 0px; margin-top: 12px; margin-bottom: 0in; font-family: Tahoma,Arial,sans-serif; font-size: 11px; line-height: 16.5px;"><span style="font-size: 10pt; font-family: 'Open Sans',sans-serif; color: #000000;">P/L = <span style="font-size: 10pt; color: #000000;">US$</span>200 - <span style="font-size: 10pt; color: #000000;">US$</span>66.6 = <span style="font-size: 10pt; color: #000000;">US$</span>133.4<br /><br /></span></p>
            <p style="padding: 0px; margin-top: 12px; margin-bottom: 0in; font-family: Tahoma,Arial,sans-serif; font-size: 11px; line-height: 16.5px;"><span style="font-size: 10pt; font-family: 'Open Sans',sans-serif; color: #000000;"><span lang="en" style="padding: 0px; margin: 0px;">Investor mendapatkan keuntungan sebesar </span><span style="padding: 0px; margin: 0px; color: #008000;"><strong style="padding: 0px; margin: 0px;">Rp 1.334.000,00</strong></span> </span><strong><span style="color: #000000;"><span style="font-size: 10pt; font-family: 'Open Sans',sans-serif;">(</span><span style="font-size: 10pt; font-family: 'Open Sans',sans-serif;"><em>fixed rate <span style="font-size: 10pt;">US$</span>1 = Rp 10.000,00</em>)</span></span></strong></p>
            <p lang="en" style="padding: 0px; margin-top: 12px; margin-bottom: 0in; font-family: Tahoma,Arial,sans-serif; font-size: 11px; line-height: 16.5px;"><span style="font-size: 10pt; font-family: 'Open Sans',sans-serif; color: #000000;">Namun apabila posisi tersebut dilikuidasi pada harga 1.3525 maka perhitungannya :</span></p>
            <p lang="en" style="padding: 0px; margin-top: 12px; margin-bottom: 0in; font-family: Tahoma,Arial,sans-serif; font-size: 11px; line-height: 16.5px;"><span style="font-family: 'Open Sans',sans-serif; color: #000000;"><span style="font-size: 10pt;"></span><span style="font-size: 10pt;">P/L = [ (1.3525-1.3530) x 100.000 x 2 lot ] - <span style="font-size: 10pt; font-family: 'Open Sans',sans-serif; color: #000000;">[ (<span style="font-size: 10pt; color: #000000;">US$</span>30 + <span style="font-size: 10pt; color: #000000;">US$</span>3.3) x 2 lot ]</span><br /></span></span></p>
            <p style="padding: 0px; margin-top: 12px; margin-bottom: 0in; font-family: Tahoma,Arial,sans-serif; font-size: 11px; line-height: 16.5px;"><span style="font-size: 10pt; font-family: 'Open Sans',sans-serif; color: #000000;">P/L = (-0,0005 x 100.000 x 2 lot) - US$33.3<br /></span></p>
            <p style="padding: 0px; margin-top: 12px; margin-bottom: 0in; font-family: Tahoma,Arial,sans-serif; font-size: 11px; line-height: 16.5px;"><span style="font-size: 10pt; font-family: 'Open Sans',sans-serif; color: #000000;">P/L = - US$133.3</span></p>
            <p style="padding: 0px; margin-top: 12px; margin-bottom: 0in; font-family: Tahoma,Arial,sans-serif; font-size: 11px; line-height: 16.5px;"><span style="font-size: 10pt; font-family: 'Open Sans',sans-serif; color: #000000;"><span lang="en" style="padding: 0px; margin: 0px;">Maka investor tersebut mendapatkan kerugian sebesar </span><span style="padding: 0px; margin: 0px; color: #ff0000;"><strong style="padding: 0px; margin: 0px;">Rp 1.333.000,00</strong></span> <strong><span style="color: #000000;"><span style="font-size: 10pt; font-family: 'Open Sans',sans-serif;">(</span><span style="font-size: 10pt; font-family: 'Open Sans',sans-serif;"><em>fixed rate <span style="font-size: 10pt;">US$</span>1 = Rp 10.000,00</em>)</span></span></strong><br /><br /><br /></span></p>
            </li>
            </ol>
            <div style="padding-left: 30px;"><span style="font-family: 'Open Sans',sans-serif; color: #000000;">&nbsp;<strong><span style="font-family: 'Open Sans',sans-serif; color: #000000;"><strong>Contoh 2 : Transaksi UJ1010_BBJ</strong><strong style="padding: 0px; margin: 0px;"> (</strong><em style="padding: 0px; margin: 0px;"><strong style="padding: 0px; margin: 0px;"><a href="http://www.rf-berjangka.com/index.php/Illustrasi-Perhitungan-Transaksi.html#99507425" class="iggulqdynt" style="padding: 0px; margin: 0px; color: #000000; text-decoration: underline;" title="Click to Continue &gt; by eDeals">Daytrade</a></strong></em><strong style="padding: 0px; margin: 0px;">)</strong></span><br /><br /></strong></span></div>
            <ol>
            <li class="article-content" style="padding: 0px; margin: 0px; font-size: 11px; font-family: Tahoma,Arial,sans-serif; line-height: 16.5px;">
            <p lang="en" style="padding: 0px; margin-top: 12px; margin-bottom: 0in; font-family: Tahoma,Arial,sans-serif; font-size: 11px; line-height: 16.5px;"><span style="font-size: 10pt; font-family: 'Open Sans',sans-serif; color: #000000;">Seorang investor memprediksi harga spot dari USD/JPY akan jatuh kemudian dia memutuskan untuk mengambill posisi jual pada produk UJ1010_BBJ di level 102.20 sebanyak 1 lot. Beberapa jam kemudian dia melikuidasi transaksinya diharga 102.12. Maka perhitungannya sebagai berikut:</span></p>
            <p style="padding: 0px; margin-top: 12px; margin-bottom: 0in; font-family: Tahoma,Arial,sans-serif; font-size: 11px; line-height: 16.5px;"><span style="font-size: 10pt; font-family: 'Open Sans',sans-serif; color: #000000;">P/L&nbsp;= [ (102.20-102.12)/102.12 x 100.000 x 1 lot ] - <span style="font-size: 10pt; font-family: 'Open Sans',sans-serif; color: #000000;">[ (<span style="font-size: 10pt; color: #000000;">US$</span>30 + <span style="font-size: 10pt; color: #000000;">US$</span>3.3) x 1 lot ]</span> <br /></span></p>
            <p style="padding: 0px; margin-top: 12px; margin-bottom: 0in; font-family: Tahoma,Arial,sans-serif; font-size: 11px; line-height: 16.5px;"><span style="font-size: 10pt; font-family: 'Open Sans',sans-serif; color: #000000;">P/L = (0.0007834 x 100.000 x 1) - <span style="font-size: 10pt; font-family: 'Open Sans',sans-serif; color: #000000;"><span style="font-size: 10pt; font-family: 'Open Sans',sans-serif; color: #000000;"><span style="font-size: 10pt; color: #000000;">US$</span>33.3</span></span><br /></span></p>
            <p style="padding: 0px; margin-top: 12px; margin-bottom: 0in; font-family: Tahoma,Arial,sans-serif; font-size: 11px; line-height: 16.5px;"><span style="font-size: 10pt; font-family: 'Open Sans',sans-serif; color: #000000;">P/L = <span style="font-size: 10pt; font-family: 'Open Sans',sans-serif; color: #000000;"><span style="font-size: 10pt; font-family: 'Open Sans',sans-serif; color: #000000;"><span style="font-size: 10pt; font-family: 'Open Sans',sans-serif; color: #000000;"><span style="font-size: 10pt; color: #000000;">US$</span></span></span></span>45.04<br /><br /></span></p>
            <p style="padding: 0px; margin-top: 12px; margin-bottom: 0in; font-family: Tahoma,Arial,sans-serif; font-size: 11px; line-height: 16.5px;"><span style="font-size: 10pt; font-family: 'Open Sans',sans-serif; color: #000000;"><span lang="en" style="padding: 0px; margin: 0px;">Keuntungan yang diperoleh oleh investor adalah <span style="color: #008000;"><strong>Rp. </strong></span></span><span style="color: #008000;"><strong><span style="padding: 0px; margin: 0px;">450.400,00</span></strong></span> <strong><span style="color: #000000;"><span style="font-size: 10pt; font-family: 'Open Sans',sans-serif;">(</span><span style="font-size: 10pt; font-family: 'Open Sans',sans-serif;"><em>fixed rate <span style="font-size: 10pt;">US$</span>1 = Rp 10.000,00</em>)</span></span></strong><br /></span></p>
            <p lang="en" style="padding: 0px; margin-top: 12px; margin-bottom: 0in; font-family: Tahoma,Arial,sans-serif; font-size: 11px; line-height: 16.5px;"><span style="font-size: 10pt; font-family: 'Open Sans',sans-serif; color: #000000;">Akan tetapi jika harga spot dari USD/JPY berada di posisi 102.27 dan dilikuidasi pada posisi harga yang sama maka :</span></p>
            <p style="padding: 0px; margin-top: 12px; margin-bottom: 0in; font-family: Tahoma,Arial,sans-serif; font-size: 11px; line-height: 16.5px;"><span style="font-size: 10pt; font-family: 'Open Sans',sans-serif; color: #000000;">P/L = [(102.20-102.27)/102.27 x 100.000 x 1 lot ] - <span style="font-size: 10pt; font-family: 'Open Sans',sans-serif; color: #000000;"><span style="font-size: 10pt; font-family: 'Open Sans',sans-serif; color: #000000;">[ (<span style="font-size: 10pt; color: #000000;">US$</span>30 + <span style="font-size: 10pt; color: #000000;">US$</span>3.3) x 1 lot ]</span></span><br /></span></p>
            <p style="padding: 0px; margin-top: 12px; margin-bottom: 0in; font-family: Tahoma,Arial,sans-serif; font-size: 11px; line-height: 16.5px;"><span style="font-size: 10pt; font-family: 'Open Sans',sans-serif; color: #000000;">P/L = (-0.0006844 x 100.000 x 1 lot) - US$33.3<br /></span></p>
            <p style="padding: 0px; margin-top: 12px; margin-bottom: 0in; font-family: Tahoma,Arial,sans-serif; font-size: 11px; line-height: 16.5px;"><span style="font-size: 10pt; font-family: 'Open Sans',sans-serif; color: #000000;">P/L =&nbsp;<span style="padding: 0px; margin: 0px;">- US$68.44 - US$33.3 = - US$101.74<strong style="padding: 0px; margin: 0px;"><br /><br /></strong></span></span></p>
            <p style="padding: 0px; margin-top: 12px; margin-bottom: 0in; font-family: Tahoma,Arial,sans-serif; font-size: 11px; line-height: 16.5px;"><span style="font-size: 10pt; font-family: 'Open Sans',sans-serif; color: #000000;"><span lang="en" style="padding: 0px; margin: 0px;"></span><span style="font-size: 10pt; font-family: 'Open Sans',sans-serif; color: #000000;"><span lang="en" style="padding: 0px; margin: 0px;">Maka investor tersebut mendapatkan kerugian sebesar </span><span style="padding: 0px; margin: 0px; color: #ff0000;"><strong style="padding: 0px; margin: 0px;">Rp 1.017.400,00</strong></span> <strong><span style="color: #000000;"><span style="font-size: 10pt; font-family: 'Open Sans',sans-serif;">(</span><span style="font-size: 10pt; font-family: 'Open Sans',sans-serif;"><em>fixed rate <span style="font-size: 10pt;">US$</span>1 = Rp 10.000,00</em>)</span></span></strong></span><br /></span></p>
            </li>
      </div>
      
    </section>

  </main><!-- End #main -->
@endsection