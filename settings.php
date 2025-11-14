<?php
/*
    @Configuraes do serial
*/
define("countryPreference", 0x02); // Para Brasil 0x01, Estados Unidos da Amrica 0x02
define("autenticationCache", true); // Guarda a chave de segurana em cache para no fazer requisies a cada pagina acessada. 

/*
	@Conexo com o sql [MuServer];
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
	@Codificao de items;
	@Para verses velhas use: OLD
	@Para verses novas use: NEW
*/
define("SYSTEM_ITEMS","OLD");

define("ENCGAMES_S6", false); //Coloque true para verso Season 6 Epi 3 da ENC Games


/*
    Exemplo de como configurar a opo: SYSTEM_DBVERSION
    //1 = (Verses antigas sem personal store), 2 = (Verses antigas com personal store), 3 = (Verses novas com personal store e harmony)  
    
    Para verses 97d, use a opo numero 1;
    Para verses 1.0 use a opo numero 2; 
    Para verses 1.2n ou acima use a opo numero 3; 
*/
define("SYSTEM_DBVERSION", 1); //1 = (Verses antigas sem personal store), 2 = (Verses antigas com personal store), 3 = (Verses novas com personal store e harmony)  

/*
	@Encriptao senha;
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

// Importante: O sistema de arquivos do unix  sensvel a maisculas e minsculas (case sensitive).
// Nesse caso, por exemplo, o arquivo de linguagem deve ter exatamente o nome "pt-br.php" e no "PT-BR.php"

/*
    @Sistema de template;
    @Nome da pasta do template;
*/
define("TEMPLATE", "Default");

/*
    @Nome da sesso;
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
define("LOCK_REPEAT_SOCKET", true); //No permitir que sej vendido item socket com opes repetidas.
define("LOCK_REPEAT_CATEGORIE_SOCKET", false); //No permitir que sej vendido item socket com categorias repetidas.
define("LOCK_REPEAT_SLOT_SOCKET", true); //No permitir que sej vendido item socket com slots repetidos.
define("LOCK_REPEAT_SOCKET_TYPE", true); //No permitir que sej vendido item socket com tipos de sockets repetidos.
define("LOCK_ANCIENT_AND_EXCELLENT", true); //No permitir que sej vendido item com opes excelentes e ancient juntos.
define("LOCK_SOCKET_AND_HARMONY", false); //No permitir que sej vendido item com opes sockets e harmony juntos.
define("LOCK_MAX_LEVEL", 15); //Configure aqui o level mximo que um player pode selecionar na hora de comprar um determinado item.

/*
    @ Sistema de recuperao de itens.
*/
define("RECOVERY_LIMIT_ITEM", 0); // Use essa opo para limitar que todos os itens vendidos possam ser recuperados ate X vezes pelo player. Deixe 0 para ilimitado.
define("RECOVERY_LIMIT_MIN_TIME", 3); //Tempo mnimo a ser aguardado com o player offline para recuperar um item no shopping; Tempo recomendado 15 minutos. (Evitar dupers em verso com personal store)

define("WZ_GETITEMSERIAL", "WZ_GetItemSerial");
define("HIDDEN_TOTAL_BUYS_CATALOG_ITEM", true);
?>
