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
<link href="https://i.imgur.com/38DsYq8.png" rel="shortcut icon" type="image/x-icon" />
<title>{#TITLE}</title>
</head>

<body>
<br>
<br>
<br>
<div id="all">
 
	<div id="banner"></div>

    <div id="menu">
    <ul>
    	<li><a href="?cmd=Default" class="active">P&aacute;gina Principal</a></li>
		<li><a href="?cmd=CatalogSystem">Produtos</a></li>
		<li><a href="?cmd=HistorySystem">Histórico</a></li>
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
    
    <h2 class="header">{#TITLE}</h2>
        <br>
    	<p>Seja bem vindo &agrave; p&aacute;gina inicial do shopping, escolha uma das op&ccedil;&otilde;es no menu 
        acima ou no menu lateral para come&ccedil;ar a navegar.
		
		<br>
		Obs : Abra o Seu Bau antes de Adquirir qualquer item do Nosso Shopping !<br />
		<br>
        Aproveite nossas promo&ccedil;&otilde;es em nosso Servidor, veja todos os detalhers em nosso F&oacute;rum , Acesse agora Mesmo e Fique por Dentro de Tudo<br />
        <br>
		<span class="style1"><a href="http://forum.seudominio.com.br/index.php?"><b>Clique Aqui !</b></a><a href="http://forum.seudominio.com.br"></a></span><br />
    	  
		<br>Atenciosamente: <font color="red"><b>Equipe - MuOnline.</b></font><br />
		<b>Projetando e Construindo a Sua Divers&atilde;o </b><br />
        </p>
		<p><img src="https://i.imgur.com/1zoH69v.png" width="549" height="128" /></a><br>
        <br>
    </p>
  </div>

    <div id="footer">
    	<center><p>Copyright &copy; <strong>{#TITLE}</strong> <? echo date("Y"); ?> | Powered By Leandro Daldegam | Design By LucasHP | 
        P&aacute;gina gerada em: {#Time} secs. | <a href="admin/">[AdminSystem]</a></p></center>
    </div>
</div>
</body>
</html>
<!-- MuShopping v.3.1.14 - Powered by Leandro Daldegam -->