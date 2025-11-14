<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta name="Description" content="MuOnline Shop, powered by Leandro Daldegam" />
<meta name="Keywords" content="MuDKT, MuOnline, Private Servers, Mu, MuServer, MuGlobal, MuChina, MuKorea, Mu Servers, Top Servers, Mu Online, Itens, Shop, MuShop, MuOnline Shop" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="Distribution" content="Global" />
<meta name="Author" content="Leandro Daldegam" />
<meta name="Robots" content="index,follow" />
<link rel="stylesheet" href="templates/Default/styles/Default.css" type="text/css" />
<script type="text/javascript" src="modules/ajax.js"></script>
<link href="https://i.imgur.com/38DsYq8.png" rel="shortcut icon" type="image/x-icon" />
<title>{#TITLE}</title>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
</head>

<body>
<br>
<br>
<br>
<div id="all">

	<div id="banner"></div>
    <div id="menu">
    <ul>
    	<li><a href="?cmd=Default">P&aacute;gina principal</a></li>
		<li><a href="?cmd=CatalogSystem">Produtos</a></li>
		<li><a href="?cmd=HistorySystem" class="active">Histórico</a></li>

		<li><a href="?cmd=LogoutSystem">Deslogar</a></li>
		<li><a href="../">Voltar para o site</a></li>
    </ul>
    </div>
    <div id="aside">
    <h2 class="header-aside">Bem-Vindo <b>{#memb_name}</b></h2>
		<div class="left-box">

			<ul class="list">
				<li>&raquo; Saldo de <strong>{#Golds_Amount}</strong> <?= GOLDNAME; ?></li>
				<li>&raquo; <a href="?cmd=Default">Inicio</a></li>
				<li>&raquo; <a href="?cmd=CatalogSystem">Ver Produtos</a></li>

				<li>&raquo; <a href="?cmd=HistorySystem">Histórico de compras</a></li>
				<li>&raquo; <a href="?cmd=ConfirmSystem">Confirmar depósitos</a></li>
				<li>&raquo; <a href="?cmd=RecoverLostItemSystem">Recuperar item perdido</a></li>
				<li>&raquo; <a href="?cmd=RecoverBrokenItemSystem">Consertar item quebrado</a></li>
				<li>&raquo; <a href="?cmd=AboutSystem">Sobre o shopping</a></li>	
			</ul>

            <br>
		</div>
    </div>
	<div id="section">
    	<h2 class="header">Minhas Compras</h2>
        <br>
    	<div class="quadros">
                <em>Total de itens comprados:</em> <strong>{#TOTAL_BUYS}</strong> <a href="?cmd=HistorySystem&amp;Type=buys">[ver itens]</a><br />

                <em>Total de kits comprados:</em> <strong>{#TOTAL_BUYSKITS}</strong> <a href="?cmd=HistorySystem&amp;Type=buysKits">[ver itens]</a><br />
                <em>Total de confirmações de depósitos:</em> <strong>{#TOTAL_CONFIRMS}</strong> <a href="?cmd=HistorySystem&amp;Type=confirms">[ver confirmações]</a>
                </div>              
                {#LIST_BOX_ITENS}
                {#LIST_CONFIRMS}
			
                
        <br><br>

    </div>
    <div id="footer">
    	<center><p>Copyright &copy; <strong>{#TITLE}</strong> <? echo date("Y"); ?> | Powered By Leandro Daldegam | Design By LucasHP | 
        P&aacute;gina gerada em: {#Time} secs. | <a href="admin/">[AdminSystem]</a></p></center>
    </div>
</div>
</body>

</html>
<!-- MuShopping v.3.1.14 - Powered by Leandro Daldegam -->