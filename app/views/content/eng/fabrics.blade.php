@extends('layouts.content')

@section('content')
	<div class="container">
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>Digitalprint fabrics</strong>
                    </h2>
                    <hr>
                    {{HTML::image('img/logod/tropikal.jpg', 'Aavikuemand UÜ logo', array('class' => 'img-responsive img-border img-left', 'style' => 'width:30%'))}}
                    <hr class="visible-xs">
                    <p>We have been selling fabrics and digital printed fabrics from Brook International LTD in Estonia since 1995.
                    Relatively short delivery time and good quality are out main market advantages. 
                    Fabrics that are sold most we also keep in an Estonian warehouse</p>
                    <p>To query about fabrics please call +372 566 70 600 or send an email to Eve@aavikuemand.ee</p>
                    <p>Effective from March 2013 for minimum quantity 1200 running metres </p>
                    <p>Additional information and certificates: <a href="http://www.brookinternational.com/">Brook International</a>  </p>
                </div>
            </div>

            <div class="box">
            	<div class="col-lg-12">
            		<table class="table table-striped table-bordered">
						<tr><th> Brook product </th> <th> Brook products/Artikkel/Reference</th><th>Widths/Laiused</th><th>Weigth/Kaal (gsm) </th><th>Selling price (sqm/m2)</th>
						<tr><td>Display FR 220g with Brook-7</td><td>KDISPLAY</td><td>1.03, 1.53, 3.06</td><td>220</td><td>4.80 €</td></tr>
						<tr><td>Textured Poly FR 205g</td><td>FKPP1 FR</td><td>1.40, 1.53, 1.60, 3.06</td><td>205</td><td>3.94 €</td></tr>
						<tr><td>Textured Poly FR 205g with Brook-7</td><td>FKPD1FR</td><td>1.53, 1.83, 2.03, 3.06</td><td>205</td><td>4.52 €</td></tr>
						<tr><td>Knitted Poly FR 115g</td><td>FKPP FR</td><td>1.53, 3.06</td><td>115</td><td>1.99 €</td></tr>
						<tr><td>Knitted Poly 115g with Brook-7</td><td>FKPD</td><td>"1.03, 1.40, 1.53, 1.60 1.83, 3.06"</td><td>115</td><td>1.99 €</td></tr>
						<tr><td>Knitted Poly FR 115g with Brook-7</td><td>FKPDFR</td><td>1.53, 1.83, 2.03, 3.06</td><td>115</td><td>2.44 €</td></tr>
						<tr><td>Airmesh FR with Brook-7</td><td>FKAMDFR</td><td>3.10</td><td>120</td><td>2.98 €</td></tr>
						<tr><td>Poly Suede FR</td><td>SUEDE</td><td>1.60</td><td>250</td><td>5.31 €</td></tr>
						<tr><td>Voile FR</td><td>VOILE</td><td>1.55, 3.10</td><td>35</td><td>1.48 €</td></tr>
						<tr><td>Mesh FR</td><td>KFR01</td><td>1.40, 3.05</td><td>255</td><td>7.97 €</td></tr>
						<tr><td>Knitted Poly Satin FR with Brook-7</td><td>FKPD3 B7CE</td><td>1.53, 1.83, 3.06</td><td>125</td><td>3.47 €</td></tr>
						<tr><td>Satin Opaque</td><td>KST02</td><td>1.40</td><td>390</td><td>18.44 €</td></tr>
						<tr><td>Heavy Satin FR</td><td>WHSAT</td><td>1.60</td><td>230</td><td>3.52 €</td></tr>
						<tr><td>Woven Blackout FR</td><td>WBLOC</td><td>2.95</td><td>250</td><td>8.62 €</td></tr>
						<tr><td>Taffeta Flag</td><td>POLYTAFF</td><td>1.53</td><td>50</td><td>2.56 €</td></tr>
						<tr><td>Airtex FR</td><td>WPACA</td><td>1.60, 2.50, 3.20, 5.00</td><td>260</td><td>9.05 €</td></tr>
						<tr><td>Rollerblind</td><td>PCRB</td><td>1.83</td><td>120</td><td>3.29 €</td></tr>
						<tr><td>Polyester Matt</td><td>FWPP7</td><td>1.50</td><td>190</td><td>2.80 €</td></tr>
						<tr><td>Artists Canvas 500g</td><td>W.ARTC500</td><td>1.65</td><td>500</td><td>7.82 €</td></tr>
						<tr><td>Artists Canvas 400g</td><td>W.ARTM400</td><td>1.65</td><td>400</td><td>7.55 €</td></tr>
						<tr><td>Artists Canvas 330g</td><td>W.ARTC300</td><td>1.65</td><td>300</td><td>7.98 €</td></tr>
						<tr><td>Woven Backlight FR</td><td>BKLIT300</td><td>2.95</td><td>250</td><td>8.36 €</td></tr>
					</table>
            	</div>
            </div>
        </div>
    </div>
    <!-- /.container -->
@stop