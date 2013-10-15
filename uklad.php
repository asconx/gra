<?php
	if(isset($_GET['nick']))
	{
		$nick = trim($_GET['nick']);
			if($nick == '')
				{
				die;
				}
			if(!preg_match('/.*\d.*\d.*\d/', $_GET['nick']))
				{
				die;
				}
	} else {
		die;
	}
?><!DOCTYPE html>
<html>
	<head>
		<title>Refeks Mandelejewa</title>
		<meta charset="utf-8" />
		<link media="all" type="text/css" href="style1.css" rel="stylesheet">
	</head>
	<body>
		<div id="wrapper2">
		
			<div id="menu">
			<p> Wybierz zakres temperatur topnienia:</p>
			<tr>
				<td><a id="b1" href="temp1.html">0-200°C</a></td>
				<td><a id="b1" href="temp2.html">200-500°C</a></td>
				<td><a id="b1" href="temp3.html">500-900°C</a></td>
				<td><a id="b1" href="temp4.html">900-1300°C</a></td>
				<td><a id="b1" href="temp5.html">1300-2000°C</a></td>
				<td><a id="b1" href="temp6.html">2000-3600°C</a></td>
			</tr>
			</div>
			
		
		<div id="t1">
			<table  frame="box: void;" cellpadding="2">
				<tr>
					<td class="orange"><p>H</p>Wodór</td>
				</tr>
			</table>
		</div>
		
		<div id="t2">
			<table frame="box: void;" cellpadding="2">
				<tr>
					<td class="pink"><p>He</p>Hel</td>
				</tr>
			</table>
		</div>
		
		<div id="t3">
			<table frame="box: void;" cellpadding="2">
				<tr>
					<td class="yellow"><p>Li</p>Lit</td>
					<td class="gren"><p>Be</p>Beryl</td>
				</tr>
				<tr>
					<td class="yellow"><p>Na</p>Sód</td>
					<td class="gren"><p>Mg</p>Magnez</td>
				</tr>
			</table>
		</div>
		
		<div id="t4">
			<table frame="box: void;" cellpadding="2" cellspacing="3">
				<tr>
					<td class="violet"><p>B</p>Bor</td>
					<td class="orange"><p>C</p>Węgiel</td>
					<td class="orange"><p>N</p>Azot</td>
					<td class="orange"><p>O</p>Tlen</td>
					<td class="red"><p>F</p>Fluor</td>
					<td class="pink"><p>Ne</p>Neon</td>
				</tr>
				<tr>
					<td class="blue"><p>Al</p>Glin</td>
					<td class="violet"><p>Si</p>Krzem</td>
					<td class="orange"><p>P</p>Fosfor</td>
					<td class="orange"><p>S</p>Siarka</td>
					<td class="red"><p>Cl</p>Chlor</td>
					<td class="pink" ><p>Ar</p>Argon</td>
				</tr>
			</table>
		</div>
		
		<div id="t5">	
			<table class="tt5" frame="box: void;" cellpadding="2">
				<tr>
					<td class="yellow"><p>K</p>Potas</td>
					<td class="gren"><p>Ca</p>Wapń</td>
					<td class="oceanic"><p>Sc</p>Skand</td>
					<td class="oceanic"><p>Ti</p>Tytan</td>
					<td class="oceanic"><p>V</p>Wanad</td>
					<td class="oceanic"><p>Cr</p>Chrom</td>
					<td class="oceanic"><p>Mn</p>Mangan</td>
					<td class="oceanic"><p>Fe</p>Żelazo</td>
					<td class="oceanic"><p>Co</p>Kobalt</td>
					<td class="oceanic"><p>Ni</p>Nikiel</td>
					<td class="oceanic"><p>Cu</p>Miedź</td>
					<td class="oceanic"><p>Zn</p>Cynk</td>
					<td class="blue"><p>Ga</p>Gal</td>
					<td class="violet"><p>Ge</p>German</td>
					<td class="violet"><p>As</p>Arsen</td>
					<td class="orange"><p>Se</p>Selen</td>
					<td  class="red"><p>Br</p>Brom</td>
					<td class="pink"><p>Kr</p>Krypton</td>
				</tr>
				<tr>
					<td class="yellow"><p>Rb</p>Rubid</td>
					<td class="gren"><p>Sr</p>Stront</td>
					<td class="oceanic"><p>Y</p>Itr</td>
					<td class="oceanic"><p>Zr</p>Cyrkon</td>
					<td class="oceanic"><p>Nb</p>Niob</td>
					<td class="oceanic"><p>Mo</p>Molibden</td>
					<td class="oceanic"><p>Tc</p>Technet</td>
					<td class="oceanic"><p>Ru</p>Ruten</td>
					<td class="oceanic"><p>Rh</p>Rod</td>
					<td class="oceanic"><p>Pd</p>Pallad</td>
					<td class="oceanic"><p>Ag</p>Srebro</td>
					<td class="oceanic"><p>Cd</p>Kadm</td>
					<td class="blue"><p>In</p>Ind</td>
					<td class="blue"><p>Sn</p>Cyna</td>
					<td class="violet"><p>Sb</p>Antymon</td>
					<td class="violet"><p>Te</p>Tellur</td>
					<td  class="red"><p>I</p>Jod</td>
					<td class="pink"><p>Xe</p>Ksenon</td>
				</tr>
				<tr>
					<td class="yellow"><p>Cs</p>Cez</td>
					<td class="gren"><p>Ba</p>Bar</td>
					<td class="lantan"><p>La</p>Lantan</td>
					<td class="oceanic"><p>Hf</p>Hafn</td>
					<td class="oceanic"><p>Ta</p>Tantal</td>
					<td class="oceanic"><p>W</p>Wolfram</td>
					<td class="oceanic"><p>Re</p>Ren</td>
					<td class="oceanic"><p>Os</p>Osm</td>
					<td class="oceanic"><p>Ir</p>Iryd</td>
					<td class="oceanic"><p>Pt</p>Platyna</td>
					<td class="oceanic"><p>Au</p>Złoto</td>
					<td class="oceanic"><p>Hg</p>Rtęć</td>
					<td class="blue"><p>Tl</p>Tal</td>
					<td class="blue"><p>Pb</p>Ołów</td>
					<td class="blue"><p>Bi</p>Bizmut</td>
					<td class="violet"><p>Po</p>Polon</td>
					<td  class="red"><p>At</p>Astat</td>
					<td class="pink"><p>Rn</p>Radon</td>
				</tr>
				<tr>
					<td  class="yellow"><p>Fr</p>Frans</td>
					<td class="gren"><p>Ra</p>Rad</td>
					<td class="aktyn"><p>Ac</p>Aktyn</td>
					<td class="oceanic"><p>Rf</p>-</td>
					<td class="oceanic"><p>Db</p>-</td>
					<td class="oceanic"><p>Sg</p>-</td>
					<td class="oceanic"><p>Bh</p>Bohr</td>
					<td class="oceanic"><p>Hs</p>Has</td>
					<td class="oceanic"><p>Mt</p>Meitner</td>
					<td class="oceanic"><p>Ds</p>-</td>
					<td class="oceanic"><p>Rg</p>-</td>
					<td class="oceanic"><p>Cn</p>-</td>
					<td class="blue"><p>Uut</p>-</td>
					<td class="blue"><p>Fl</p>-</td>
					<td class="blue"><p>Uup</p>-</td>
					<td class="blue"><p>Lv</p>-</td>
					<td  class="red"><p>Uus</p>-</td>
					<td class="pink"><p>Uuo</p>-</td>
				</tr>				
			</table>
		</div>
			<a id="arrowright" href="runda1.html"><img src="img/graj.png" alt="" /></a>
			
			<div id="legenda">
			<table frame="box: void;" cellpadding="1" cellspacing="8">
			<tr>
				<td class="box1" >&nbsp &nbsp &nbsp &nbsp </td><td>Metale alkaiczne</td>
				<td class="box2" >&nbsp &nbsp &nbsp &nbsp </td><td>Gazy szlachetne</td>
				<td class="box3" >&nbsp &nbsp &nbsp &nbsp </td><td>Metale przejściowe</td>
				<td class="box4" >&nbsp &nbsp &nbsp &nbsp </td><td>Półmetale</td>
				<td class="box5" >&nbsp &nbsp &nbsp &nbsp </td><td>Aktynowce</td>
			</tr>
			<tr>
				<td class="box6" >&nbsp &nbsp &nbsp &nbsp </td><td>Metale ziem alkaicznych</td>
				<td class="box7" >&nbsp &nbsp &nbsp &nbsp </td><td>Halogeny</td>
				<td class="box8" >&nbsp &nbsp &nbsp &nbsp </td><td>Metale bloku p</td>
				<td class="box9" >&nbsp &nbsp &nbsp &nbsp </td><td>Niemetale</td>
				<td class="box10" >&nbsp &nbsp &nbsp &nbsp </td><td>Lantanowce</td>
			</tr>
			</table>
			</div>
		</div>
	</body>
</html>