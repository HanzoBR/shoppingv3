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
<style type="text/css">
<!--
.style1 {
	color: #FF0000;
	font-weight: bold;
}
-->
</style>
</head>

<body>
<br>
<br>
<br>
<div id="all">
 
	<div id="banner"></div>

    <div id="menu">
    <ul>
    	<li><a href="?" class="active">P&aacute;gina Principal</a></li>
    </ul>
    </div>
    <div id="aside">
    	<h2 class="header-aside">Painel de Controle</h2>
        <form name="form-login" id="form-login" method="get" action="">
        <label>Login: </label>
            <input type="text" name="userName" id="userName" maxlength="10">
        <label>Senha: </label>
            <input type="password" name="userPwd" id="userPwd" maxlength="10">
        <label>Imagem: </label>
        <img src="modules/captcha.php?<?=mktime();?>" style="border:none;" /><br><br>
        <input type="text" name="captcha" id="captcha" maxlength="8">
        <input type="button" name="btn-login" id="btn-login" class="btn-form" value="Logar-se" onClick="javascript: Verify ('index.php?AjaxFunctions=TRUE&amp;Function=Login&amp;userName='+ document.getElementById('userName').value+'&amp;userPwd='+ document.getElementById('userPwd').value+'&amp;captcha='+ document.getElementById('captcha').value, 'Ajax_Result_Login', 'get');">
        </form>
        <div id="Ajax_Result_Login" class="quadros"></div>
	
		
    </div>
		
  <div id="section">
    	<h2 class="header">Login</h2>
        <br>
    	<p>Seja bem vindo ao shopping v3.<br>
        Aqui voc&ecirc; pode comprar itens <span class="style1">Full</span> para a sua conta entre outros.<br>
        Logue-se no sistema usando ao painel ao lado direto.<br /> 
		<br>
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