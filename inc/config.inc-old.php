<?php
	//Conexão ao banco de dados
	$sqlserver = "remote.myvnc.com"; //Instância do SQL
	$account = "sb"; //Usuário do SQL
	$password = "123456"; //Senha do SQL
	$dbSOD = "Vietnames"; //Define a database que seu SQL.dll conecta para salvar os pontos de SoD. => SodDB ou SoD2DB <= (SQL.dll do gregooverse.net por padrão salva na SodDB)
	
	//Caminhos
	$IPhost = "149.56.78.95"; //IP do host onde está hospedado seu servidor
	$PortaServer = "5112"; //Porta de conexão do seu servidor
	$DiretorioFiles = "C:/ServidorPT/"; //Diretório da sua Server Files (sempre deixar com "/" no final do caminho. EX: C:/Sever/)
	$UrlClanContent = "http://149.56.78.95/ClanContent/"; //Url da sua pasta ClanContent (sempre deixar com "/" no final do caminho. EX: http://127.0.0.1/ClanContent/)
	$Website = "http://seu link/"; //URL do site do seu servidor (irá redirecionar caso alguém tente acessar a pasta dos scrips)
	
	//Remove personagens do ranking
	$player1 = "ADMProg"; //Nick do jogador
	$player2 = "ADMDarge";
	$player3 = "ADMDargee";
	$player4 = "Priss";
	$player5 = "OBlak";
	$player6 = "Rules";
	$player7 = "GMClasH";
	$player8 = "PRS";
	$player9 = "SaCiDePaTiNeTi";
	$player10 = "Porronca";
	$player11 = "";
	$player12 = "Zeldris";
	$player13 = "";
	$player14 = "Harumi";
	$player15 = "";
	$player16 = "Putaa";
	$player17 = "Maconho";
	$player18 = "";
	$player19 = "PorroncaMT";
	$player20 = "XMarginal";
	
	//Remove Clan da Equipe do Ranking
	$ClanEquipe = " ";
	
	//Definições de layout
	$larguratop10lvl = "99%"; //Define a largura da tabela do ranking top 10 level. Exemplo: 200px ou 95%
	$largurarankplayer = "99%"; //Define a largura da tabela do ranking player. Exemplo: 200px ou 95%
	$largurasodclan = "99%"; //Define a largura da tabela do ranking SoD Clan. Exemplo: 200px ou 95%
	$larguraclanlist = "99%"; //Define a largura da tabela do ranking SoD Clan. Exemplo: 200px ou 95%
	$largurasodplayer = "99%"; //Define a largura da tabela do ranking SoD Clan. Exemplo: 200px ou 95%
	$Atualiza = 5; //Define em segundos a troca entre membros e pontos no script Lider BC
?>