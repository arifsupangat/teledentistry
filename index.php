<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width , height=device-height , initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0" />
	<title>Counter</title>
	<script type="text/javascript">
		function jamdinding(){
			var now = new Date();
			var jam = now.getHours();
			var mnt = now.getMinutes();
			var sec = now.getSeconds();
			switch(jam < 10){
				case true:
					var pukul = '0'+jam;
					break;
				default:
					var pukul = jam.toString();
					break;
			}

			switch(mnt < 10){
				case true:
					var menit = '0'+mnt;
					break;
				default:
					var menit = mnt.toString();
					break;
			}
			
			switch(sec < 10){
				case true:
					var detik = '0'+sec;
					break;
				default:
					var detik = sec.toString();
					break;
			}
			
			document.getElementById('jam-dinding').innerHTML = pukul+':'+menit+':'+detik;
		}
		
		function addTr(elem,tanggal){
			var now = new Date();
			var counter = new Date(now.getFullYear() , now.getMonth(), now.getDate() , 9 , 0 , 0);
			for(var n=0;n<45;n++){
				var tr = document.createElement('tr');
				var td1 = document.createElement('td');
				var td2 = document.createElement('td');
				var td3 = document.createElement('td');
				var td4 = document.createElement('td');
				var node1 = document.createTextNode('drg #'+(n+1)+' shift '+(Math.floor(n/15)+1)+' '+tanggal);
				td1.appendChild(node1);
				var counterAwal = new Date(counter);
				counterAwal.setTime(counter.getTime() + (((30 * 60 * 1000) + (20 * 1000)) * n ));
				var jamAwal = counterAwal.getHours();
				var mntAwal = counterAwal.getMinutes();
				var secAwal = counterAwal.getSeconds();
				switch(jamAwal < 10){
					case true:
						var pukulAwal = '0'+jamAwal;
						break;
					default:
						var pukulAwal = jamAwal.toString();
						break;
				}

				switch(mntAwal < 10){
					case true:
						var menitAwal = '0'+mntAwal;
						break;
					default:
						var menitAwal = mntAwal.toString();
						break;
				}
				
				switch(secAwal < 10){
					case true:
						var detikAwal = '0'+secAwal;
						break;
					default:
						var detikAwal = secAwal.toString();
						break;
				}
				var node2 = document.createTextNode(pukulAwal+':'+menitAwal+':'+detikAwal);
				td2.appendChild(node2);
				var counterAkhir = new Date(counterAwal)
				counterAkhir.setTime(counterAkhir.getTime() + (30 * 60 * 1000) + (20 * 1000));
				var jamAkhir = counterAkhir.getHours();
				var mntAkhir = counterAkhir.getMinutes();
				var secAkhir = counterAkhir.getSeconds();
				switch(jamAkhir < 10){
					case true:
						var pukulAkhir = '0'+jamAkhir;
						break;
					default:
						var pukulAkhir = jamAkhir.toString();
						break;
				}

				switch(mntAkhir < 10){
					case true:
						var menitAkhir = '0'+mntAkhir;
						break;
					default:
						var menitAkhir = mntAkhir.toString();
						break;
				}
				
				switch(secAkhir < 10){
					case true:
						var detikAkhir = '0'+secAkhir;
						break;
					default:
						var detikAkhir = secAkhir.toString();
						break;
				}
				var node3 = document.createTextNode(pukulAkhir+':'+menitAkhir+':'+detikAkhir);
				td3.appendChild(node3);
				if(now.getTime() >= counterAwal.getTime() && now.getTime < counterAkhir.getTime()){
					var node4 = document.createTextNode("Login");
					td4.appendChild(node4);
					td1.setAttribute("style","background-color:green;");
					td2.setAttribute("style","background-color:green;");
					td3.setAttribute("style","background-color:green;");
					td4.setAttribute("style","background-color:green;");
				}else{
					var node4 = document.createTextNode("Logout");
					td4.appendChild(node4);
				}
				tr.appendChild(td1);
				tr.appendChild(td2);
				tr.appendChild(td3);
				tr.appendChild(td4);
				elem.appendChild(tr);
			}
		}
		
		window.onload = function(){
			//untuk jam dinding
			jamdinding();
			var updateJamdinding = setInterval(jamdinding, 1000);
			//untuk tabel 
			var table17 = document.getElementById('17').getElementsByTagName('tbody')[0];
			addTr(table17 , "17 Des");
			var table18 = document.getElementById('18').getElementsByTagName('tbody')[0];
			addTr(table18 , "18 Des");
			//untuk div
			document.getElementById('div18').style.display = 'none';
			//untuk span
			document.getElementById('span17').style.backgroundColor = 'green';
			document.getElementById('span18').style.cursor = 'pointer';
		}
		
		function toggle17(){
			if(window.getComputedStyle(document.getElementById('div17'), null).getPropertyValue("display") == "none"){
				document.getElementById('div18').style.display = 'none';
				document.getElementById('div17').style.display = 'block';
				document.getElementById('span17').style.backgroundColor = 'green';
				document.getElementById('span18').style.backgroundColor = 'transparent';
				document.getElementById('span18').style.cursor = 'pointer';
				document.getElementById('span17').style.cursor = 'auto';
			}
		}
		
		function toggle18(){
			if(window.getComputedStyle(document.getElementById('div18'), null).getPropertyValue("display") == "none"){
				document.getElementById('div17').style.display = 'none';
				document.getElementById('div18').style.display = 'block';
				document.getElementById('span18').style.backgroundColor = 'green';
				document.getElementById('span17').style.backgroundColor = 'transparent';
				document.getElementById('span17').style.cursor = 'pointer';
				document.getElementById('span18').style.cursor = 'auto';
			}
		}
	</script>
</head>
<body>
	<div id='jam-dinding' style="margin-left:180px;"></div>&nbsp;
	<div>
		____________<span id="span17" onclick="toggle17()">[ 17 Desember ]</span>__<span id="span18" onclick="toggle18()">[ 18 Desember ]</span>____________
	</div>&nbsp;
	<div id="div17">
		<table id="17">
			<colgroup>
				<col style="width:200px"/>
				<col style="width:80px"/>
				<col style="width:80px"/>
				<col style="width:50px"/>
			</colgroup>
			<thead>
				<tr>
					<th>Nama</th>
					<th>Login</th>
					<th>Logout</th>
					<th>Ket</th>
				</tr>
			</thead>
			<tbody>
			</tbody>
		</table>
	</div>
	<div id="div18">
		<table id="18">
			<colgroup>
				<col style="width:200px"/>
				<col style="width:80px"/>
				<col style="width:80px"/>
				<col style="width:50px"/>
			</colgroup>
			<thead>
				<tr>
					<th>Nama</th>
					<th>Login</th>
					<th>Logout</th>
					<th>Ket</th>
				</tr>
			</thead>
			<tbody>
			</tbody>
		</table>
	</div>
</body>
</html>
