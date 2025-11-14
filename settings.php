<?php
/*
    @Configura��es do serial
*/
define("countryPreference", 0x02); // Para Brasil 0x01, Estados Unidos da Am�rica 0x02
define("autenticationCache", true); // Guarda a chave de seguran�a em cache para n�o fazer requisi��es a cada pagina acessada. 

/*
	@Conex�o com o sql [MuServer];
*/
define("HOST_SQL", "127.0.0.1");
define("DATABASE_SQL", "MuOnline");
define("USER_SQL", "sa");
define("PWD_SQL", "d3l3t3.S");

/*
	@Banco de dados [Shopping]
*/
define("DB_SHOP_SQL", "RvTShopping");

/*
usar SQL=0 usar MySQL=1
padrao=0
*/
define("DBMODE", "0");

/*
	@Codifica��o de items;
	@Para vers�es velhas use: OLD
	@Para vers�es novas use: NEW
*/
define("SYSTEM_ITEMS","OLD");

define("ENCGAMES_S6", false); //Coloque true para vers�o Season 6 Epi 3 da ENC Games


/*
    Exemplo de como configurar a op��o: SYSTEM_DBVERSION
    //1 = (Vers�es antigas sem personal store), 2 = (Vers�es antigas com personal store), 3 = (Vers�es novas com personal store e harmony)  
    
    Para vers�es 97d, use a op��o numero 1;
    Para vers�es 1.0 use a op��o numero 2; 
    Para vers�es 1.2n ou acima use a op��o numero 3; 
*/
define("SYSTEM_DBVERSION", 1); //1 = (Vers�es antigas sem personal store), 2 = (Vers�es antigas com personal store), 3 = (Vers�es novas com personal store e harmony)  

/*
	@Encripta��o senha;
*/
define("HASHMD5", FALSE);

/*
	@Colunas e tabelas no SQL;
*/
define("GOLDNAME", "Cash"); #Nome da moeda
define("GOLDTABLE", "MEMB_INFO"); #Tabela onde fica a coluna da moeda
define("GOLDCOLUMN", "Cash"); #Nome da coluna da moeda
define("GOLDMEMBIDENT", "memb___id"); #Coluna identificadora da moeda            
                             
/*
    @Linguagem do sistema;
    @De acordo com o conteudo da pasta: languages
*/
define("LANGUAGE", "pt-br");

// Importante: O sistema de arquivos do unix � sens�vel a mai�sculas e min�sculas (case sensitive).
// Nesse caso, por exemplo, o arquivo de linguagem deve ter exatamente o nome "pt-br.php" e n�o "PT-BR.php"

/*
    @Sistema de template;
    @Nome da pasta do template;
*/
define("TEMPLATE", "Default");

/*
    @Nome da sess�o;
*/
define("SESSION_NAME_SHOP", "iwuhf98f4fv");
                               
/*
    @ Sistema de socket item.
    @ Selecione o seu muserver abaixo
    
    LEGENDA:
       
       0 = Sistema da Webzen original (TNS Games, Diel, Eduardo (welcomevoce, phpnuke))  
       1 = Sistema da SCF / SCFMT (MuMaker)
*/
define("SOCKET_USE_LIB", 0);
define("LOCK_REPEAT_SOCKET", true); //N�o permitir que sej� vendido item socket com op��es repetidas.
define("LOCK_REPEAT_CATEGORIE_SOCKET", false); //N�o permitir que sej� vendido item socket com categorias repetidas.
define("LOCK_REPEAT_SLOT_SOCKET", true); //N�o permitir que sej� vendido item socket com slots repetidos.
define("LOCK_REPEAT_SOCKET_TYPE", true); //N�o permitir que sej� vendido item socket com tipos de sockets repetidos.
define("LOCK_ANCIENT_AND_EXCELLENT", true); //N�o permitir que sej� vendido item com op��es excelentes e ancient juntos.
define("LOCK_SOCKET_AND_HARMONY", false); //N�o permitir que sej� vendido item com op��es sockets e harmony juntos.
define("LOCK_MAX_LEVEL", 15); //Configure aqui o level m�ximo que um player pode selecionar na hora de comprar um determinado item.

/*
    @ Sistema de recupera��o de itens.
*/
define("RECOVERY_LIMIT_ITEM", 0); // Use essa op��o para limitar que todos os itens vendidos possam ser recuperados ate X vezes pelo player. Deixe 0 para ilimitado.
define("RECOVERY_LIMIT_MIN_TIME", 3); //Tempo m�nimo a ser aguardado com o player offline para recuperar um item no shopping; Tempo recomendado 15 minutos. (Evitar dupers em vers�o com personal store)

define("WZ_GETITEMSERIAL", "WZ_GetItemSerial");
define("HIDDEN_TOTAL_BUYS_CATALOG_ITEM", true);
?>