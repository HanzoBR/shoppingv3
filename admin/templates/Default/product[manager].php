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
<title>{#TITLE} - Administração</title>
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
    	<li><a href="?cmd=Default" class="active">P&aacute;gina Principal</a></li>
		<li><a href="?cmd=LogoutSystem">Deslogar</a></li>
		<li><a href="../">Voltar para o site</a></li>	
    </ul>
    </div>
    <div id="aside">
    <h2 class="header-aside">Painel Administrativo</h2>
		<div class="left-box">
			<ul class="list">
				<li>&raquo; <a href="?cmd=Product::[Manager]">Produtos [Gerenciar]</a></li>
				<li>&raquo; <a href="?cmd=Coupons::[Manager]">Cupons [Gerenciar]</a></li>
				<li>&raquo; <a href="?cmd=Logs::[ItemsBuys]">Logs [Compra de itens]</a></li>
				<li>&raquo; <a href="?cmd=Logs::[KitsBuys]">Logs [Compra de kits]</a></li>
				<li>&raquo; <a href="?cmd=Payments::[InProgress]">Pagamentos [Andamento]</a></li>
				<li>&raquo; <a href="?cmd=Payments::[Completed]">Pagamentos [Concluidos]</a></li>
				<li>&raquo; <a href="?cmd=Payments::[Rejected]">Pagamentos [Rejeitados]</a></li>
                <li>&raquo; <a href="?cmd=Reports">Relatórios Financeiros</a></li>
                <li>&raquo; <a href="?cmd=Logins::[Manager]">Gerenciador de Logins</a></li>
                <li>&raquo; <a href="?cmd=ItemFind">Buscar Itens (Serial)</a></li>

				
			</ul>
            <br>
		</div>
    </div>
	
			<div id="section">
                <h2 class="header">Gerenciar Produtos</h2> 
                <script type="text/javascript">
                    /**
                    * Find a photo
                    */
                    function find_photo(url)
                    {
                        popup(url, 500, 500, '_managerphoto');
                        return false;
                    } 
                    /**
                    * Window popup
                    */
                    function popup(url, width, height, name)
                    {
                        if (!name)
                        {
                            name = '_popup';
                        }

                        window.open(url.replace(/&amp;/g, '&'), name, 'height=' + height + ',resizable=no,scrollbars=yes, width=' + width);
                        return false;
                    }
                </script>      
                <div class="quadros">                              
                    <p>
                        <input value="Cadastrar Itens" type="button" class="button" onclick="Verify('?AjaxFunctions=true&Function=managerProducts&module=includeProduct', 'content', 'GET');" />
                        <input value="Modificar Itens" type="button" class="button" onclick="Verify('?AjaxFunctions=true&Function=managerProducts&module=alterProduct', 'content', 'GET');" />
                        <input value="Deletar Itens" type="button" class="button" onclick="Verify('?AjaxFunctions=true&Function=managerProducts&module=removeProduct', 'content', 'GET');" />
                        <input value="Cadastrar Kits" type="button" class="button" onclick="Verify('?AjaxFunctions=true&Function=managerProducts&module=includeKits', 'content', 'GET');" />
                        <input value="Modificar Kits" type="button" class="button" onclick="Verify('?AjaxFunctions=true&Function=managerProducts&module=alterKits', 'content', 'GET');" />
                        <input value="Deletar Kits" type="button" class="button" onclick="Verify('?AjaxFunctions=true&Function=managerProducts&module=removeKits', 'content', 'GET');" />
                    </p>
					<br>
					<br>  					
                    <div id="content"></div>                                                                       
                </div>                                      
            </div>
		
					
    <div id="footer">
    	<center><p>Copyright &copy; <strong>{#TITLE}</strong> <? echo date("Y"); ?> | Powered By Leandro Daldegam | Design By LucasHP | 
        P&aacute;gina gerada em: {#Time} secs. | <a href="/ShopGolds/">[PlayerSystem]</a></p></center>
    </div>
</div>
</body>
</html>
<!-- MuShopping v.3.1.14 - Powered by Leandro Daldegam -->