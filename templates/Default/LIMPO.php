<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta name="Description" content="MuOnline Shop, powered by Leandro Daldegam" />
<meta name="Keywords" content="MuDKT, MuOnline, Private Servers, Mu, MuServer, MuGlobal, MuChina, MuKorea, Mu Servers, Top Servers, Mu Online, Itens, Shop, MuShop, MuOnline Shop" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="Distribution" content="Global" />
<meta name="Author" content="Leandro Daldegam" />
<meta name="Robots" content="index,follow" />
<link rel="stylesheet" href="templates/Default/images/Refresh.css" type="text/css" />
<link href="https://i.imgur.com/38DsYq8.png" rel="shortcut icon" type="image/x-icon" />
<title>{#TITLE}</title>
</head>

<body>
<!-- wrap starts here -->
<div id="wrap">
		
		<!--header -->
		<div id="header"></div>
        
		<!-- menu -->	
		<div id="menu">
			<ul>
                <li id="current"><a href="?cmd=Default">Inicio</a></li>
              	<li><a href="?cmd=CatalogSystem">Produtos</a></li>
              	<li><a href="?cmd=HistorySystem">Histórico</a></li>
              	<li><a href="?cmd=LogoutSystem">Deslogar</a></li>
              	<li><a href="../">Voltar para o site</a></li>
			   
			</ul>
		</div>					
			
		<!-- content-wrap starts here -->
		<div id="content-wrap">
				
			  <div id="sidebar">
    <h2 class="header-aside">Bem-Vindo <b>{#memb_name}</b></h2>
							<div class="left-box">
								<ul class="sidemenu">
									<li>Saldo de <strong>{#Golds_Amount}</strong> <?= GOLDNAME; ?></li>
									<li><a href="?cmd=Default">Inicio</a></li>
									<li><a href="?cmd=CatalogSystem">Ver Produtos</a></li>
									<li><a href="?cmd=HistorySystem">Histórico de compras</a></li>
									<li><a href="?cmd=ConfirmSystem">Confirmar depósitos</a></li>
									<li><a href="?cmd=RecoverLostItemSystem">Recuperar item perdido</a></li>
									<li><a href="?cmd=RecoverBrokenItemSystem">Consertar item quebrado</a></li>
									<li><a href="?cmd=AboutSystem">Sobre o shopping</a></li>	
								</ul>	
							</div>
					  </div>
				
			<div id="main">
                <h1>{#TITLE}</h1>
                Seja bem vindo à página inicial do shopping, escolha uma das opções no menu acima ou no menu lateral para começar a navegar.
            </div>
		
		<!-- content-wrap ends here -->	
		</div>
					
		<!--footer starts here-->
    <div id="footer">
    	<center><p>Copyright &copy; <strong>{#TITLE}</strong> <? echo date("Y"); ?> | Powered By Leandro Daldegam | Design By LucasHP | 
        P&aacute;gina gerada em: {#Time} secs. | <a href="admin/">[AdminSystem]</a></p></center>
    </div>	

<!-- wrap ends here -->
</div>


</body>
</html>