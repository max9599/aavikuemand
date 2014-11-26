@extends('layouts.content')

@section('content')
<div class="container">
    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">
                    <strong>Müük</strong>
                </h2>
                <hr>
				<p>
					Müügiplats Kersalu külas on avatud kokkuleppel, palume kindlasti ette helistada. Kohapeal saab tasuda sularahas või internetipanga kaudu, 1.maist 30.septembrini saab maksta ka kaardiga. Kõiki veebipoes olevaid taimi ei pruugi müügiplatsil olla, sest nomenklatuur muutub kogu aeg. Sama vastupidi, müügiplatsil võib olla üksikuid haruldusi oma aiast, mis veebipoodi ei jõuagi.
				</p>
				<p>
					Tellimine veebipoes: olles oma valiku teinud, tuleb tellimuse kinnitus teie meilile. Palun ärge tasuge tellimuse eest enne, kui olete saanud arve, millel on ka transpordikulud. Pakume taimede transpordiks järgmisi võimalusi:
					<div class="row">
						<div class="col-md-10">
						<ul>
							<li>Smartpost</li>
							<li>DPD kuller (kuni 31,5kg kaaluv pakk 8 eurot)</li>
						</ul>
					</div>
						<div class="col-md-2">
							{{HTML::image('img/logod/dpd.gif', 'DPD logo', array('class' => 'img-responsive img-border img-left', 'style' => 'width:100%;max-width:200px;'))}}
						</div>
					</div>
					
					 
				</p>
				<p>
					Pakume oma taimi ka taimelaatadel, kindlasti Luige laadal, Türi Lillelaadal.
				</p>
				<p>
					Kui aga valikut veel teha ei suuda või tahaks taime kinkida hoopis sõbrale, pole aga veendunud, mida sõber eelistaks, on kindlasti abiks meie kinkekaart. Kinkekaarte on väärtusega 10, 15, 20 ja 25 eurot. Kinkekaarte saadame ka postiga, postikulu 0.50 senti. Tellimused palume meilile.Taimi ja muid kaupu saab kinkekaardi eest lunastada nii meie postimüügis kui ka müügiplatsil Kersalus.
				</p>
	     DPD logo
			</div>
		</div>
	</div>
</div>
@stop