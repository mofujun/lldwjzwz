
<?php
header("Access-Control-Allow-Origin: *");
echo <<<EOT
{
"records":[
{"Name":"Alfreds Futterkiste","City":"Berlin","Country":"Germany"},
{"Name":"Ana Trujillo Emparedados y helados","City":"Msxico D.F.","Country":"Mexico"},
{"Name":"Antonio Moreno Taquersa","City":"Msxico D.F.","Country":"Mexico"},
{"Name":"Around the Horn","City":"London","Country":"UK"},
{"Name":"B's Beverages","City":"London","Country":"UK"},
{"Name":"Berglunds snabbkp","City":"Lule?","Country":"Sweden"},
{"Name":"Blauer See Delikatessen","City":"Mannheim","Country":"Germany"},
{"Name":"Blondel pkre et fils","City":"Strasbourg","Country":"France"},
{"Name":"Bslido Comidas preparadas","City":"Madrid","Country":"Spain"},
{"Name":"Bon app'","City":"Marseille","Country":"France"},
{"Name":"Bottom-Dollar Marketse","City":"Tsawassen","Country":"Canada"},
{"Name":"Cactus Comidas para llevar","City":"Buenos Aires","Country":"Argentina"},
{"Name":"Centro comercial Moctezuma","City":"Msxico D.F.","Country":"Mexico"},
{"Name":"Chop-suey Chinese","City":"Bern","Country":"Switzerland"},
{"Name":"Comsrcio Mineiro","City":"S?o Paulo","Country":"Brazil"}
]
}
EOT;
?>
