<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2019 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$mod_strings = array(
    'ERR_UW_CANNOT_DETERMINE_GROUP' => 'Não foi possível determinar o grupo',
    'ERR_UW_CANNOT_DETERMINE_USER' => 'Não foi possível determinar o proprietário',
    'ERR_UW_CONFIG_WRITE' => 'Erro ao atualizar config.php com informação da nova versão.',
    'ERR_UW_CONFIG' => 'Por favor, certifique-se que o seu ficheiro config.php é editável e recarregue esta página.',
    'ERR_UW_DIR_NOT_WRITABLE' => 'Diretório não editável.',
    'ERR_UW_FILE_NOT_COPIED' => 'Ficheiro não foi copiado',
    'ERR_UW_FILE_NOT_DELETED' => 'Problema ao remover o pacote ',
    'ERR_UW_FILE_NOT_READABLE' => 'Ficheiro não pode ser lido.',
    'ERR_UW_FILE_NOT_WRITABLE' => 'Arquivo não pode ser movido ou escrito para',
    'ERR_UW_FLAVOR_2' => 'Versão de atualização:',
    'ERR_UW_FLAVOR' => 'Versão de atualização do CRM:',
    'ERR_UW_LOG_FILE_UNWRITABLE' => './upgradeWizard.log não pode ser criado ou editado. Por favor, corrija as permissões no seu diretório SuiteCRM.',
    'ERR_UW_MBSTRING_FUNC_OVERLOAD' => 'mbstring.func_overload configurado para um valor maior que 1. Por favor, modifique isto no seu php.ini e reinicie o servidor web.',
    'ERR_UW_NO_FILE_UPLOADED' => 'Por favor, especifique um ficheiro e tente novamente!',
    'ERR_UW_NO_FILES' => 'Ocorreu um erro: nenhum ficheiro encontrado para verificação.',
    'ERR_UW_NO_MANIFEST' => 'Falta um ficheiro manifest.php ao ficheiro zip. Não é possível prosseguir.',
    'ERR_UW_NO_VIEW' => 'Vista inválida especificada.',
    'ERR_UW_NOT_VALID_UPLOAD' => 'Carregamento inválido.',
    'ERR_UW_NO_CREATE_TMP_DIR' => 'Não é possível criar o diretório temp. Verifique as permissões do ficheiro.',
    'ERR_UW_ONLY_PATCHES' => 'Só é possível carregar correções nesta página.',
    'ERR_UW_PREFLIGHT_ERRORS' => 'Erros encontrados durante a verificação final',
    'ERR_UW_UPLOAD_ERR' => 'Ocorreu um erro ao carregar o ficheiro. Por favor, tente de novo!<br>' . PHP_EOL,
    'ERR_UW_VERSION' => 'SuiteCRM — Versão do sistema: ',
    'ERR_UW_PHP_VERSION' => 'Versão PHP: ',
    'ERR_UW_SUITECRM_VERSION' => 'SuiteCRM — Versão do sistema: ',
    'ERR_UW_WRONG_TYPE' => 'Esta página não se destina a executar ',
    'LBL_BUTTON_BACK' => '< Voltar',
    'LBL_BUTTON_CANCEL' => 'Cancelar',
    'LBL_BUTTON_DELETE' => 'Eliminar pacote',
    'LBL_BUTTON_DONE' => 'Concluído',
    'LBL_BUTTON_EXIT' => 'Sair',
    'LBL_BUTTON_NEXT' => 'Seguinte >',
    'LBL_BUTTON_RECHECK' => 'Verificar novamente',
    'LBL_BUTTON_RESTART' => 'Reiniciar',

    'LBL_UPLOAD_UPGRADE' => 'Carregar um pacote de atualização:',
    'LBL_UW_BACKUP_FILES_EXIST_TITLE' => 'Ficheiro de cópia de segurança',
    'LBL_UW_BACKUP_FILES_EXIST' => 'Cópias de segurança desta atualização podem ser encontrados em',
    'LBL_UW_BACKUP' => 'Ficheiro de cópia de segurança',
    'LBL_UW_CANCEL_DESC' => 'O assistente de atualização foi cancelado. Todos os ficheiros temporários e ficheiros zip enviados foram eliminados.',
    'LBL_UW_CHECK_ALL' => 'Marcar todos',
    'LBL_UW_CHECKLIST' => 'Passos da atualização',
    'LBL_UW_COMMIT_ADD_TASK_DESC_1' => 'As cópias de segurança dos ficheiros sobrescritos estão no seguinte diretório: ' . PHP_EOL,
    'LBL_UW_COMMIT_ADD_TASK_DESC_2' => 'Fundir manualmente os seguintes ficheiros: ' . PHP_EOL,
    'LBL_UW_COMMIT_ADD_TASK_NAME' => 'Processo de atualização: Fundir manualmente os ficheiros',
    'LBL_UW_COMMIT_ADD_TASK_OVERVIEW' => 'Por favor, utilize um método à sua escolha de verificação de diferenças para fundir estes ficheiros. Enquanto não concluir este passo a instalação do SuiteCRM estará num estado indefinido e a atualização estará incompleta.',
    'LBL_UW_COMPLETE' => 'Concluída',
    'LBL_UW_COMPLIANCE_ALL_OK' => 'Todas as exigências de configurações do sistema foram cumpridas',
    'LBL_UW_COMPLIANCE_CALLTIME' => 'Configurações do PHP: Passagem de Tempo da chamada por Referência ',
    'LBL_UW_COMPLIANCE_CURL' => 'Módulo de cURL',
    'LBL_UW_COMPLIANCE_IMAP' => 'Módulo IMAP ',
    'LBL_UW_COMPLIANCE_MBSTRING' => 'Módulo MBStrings ',
    'LBL_UW_COMPLIANCE_MBSTRING_FUNC_OVERLOAD' => 'Parâmetro MBStrings mbstring.func_overload ',
    'LBL_UW_COMPLIANCE_MEMORY' => 'Configurações PHP: Limite de Memória',
    'LBL_UW_COMPLIANCE_STREAM' => 'Configurações PHP: Stream',
    'LBL_UW_COMPLIANCE_DB' => 'Versão mínima para base de dados',
    'LBL_UW_COMPLIANCE_PHP_INI' => 'Localização do php.ini',
    'LBL_UW_COMPLIANCE_PHP_VERSION' => 'Versão mínima do PHP',
    'LBL_UW_COMPLIANCE_SAFEMODE' => 'Definições do PHP: Modo Seguro',
    'LBL_UW_COMPLIANCE_TITLE2' => 'Configurações detetadas',
    'LBL_UW_COMPLIANCE_XML' => 'Análise sintática XML',
    'LBL_UW_COMPLIANCE_ZIPARCHIVE' => 'Suporte a ZIP',
    'LBL_UW_COMPLIANCE_PCRE_VERSION' => 'Versão PCRE',
    'LBL_UW_COPIED_FILES_TITLE' => 'Ficheiros copiados com êxito',

    'LBL_UW_DB_CHOICE1' => 'Assistente de atualização por execução de SQL',
    'LBL_UW_DB_CHOICE2' => 'Queries SQL Manuais',
    'LBL_UW_DB_ISSUES_PERMS' => 'Privilégios da base de dados',
    'LBL_UW_DB_METHOD' => 'Método de atualização da base de dados',
    'LBL_UW_DB_NO_ADD_COLUMN' => 'ALTERAR TABELA [table] ADICIONAR COLUNA [column]',
    'LBL_UW_DB_NO_CHANGE_COLUMN' => 'ALTERAR TABELA [table] MUDAR COLUNA [column]',
    'LBL_UW_DB_NO_CREATE' => 'CRIAR TABELA [table]',
    'LBL_UW_DB_NO_DELETE' => 'ELIMINAR DE [table]',
    'LBL_UW_DB_NO_DROP_COLUMN' => 'ALTERAR TABELA [table] ELIMINAR COLUNA [column]',
    'LBL_UW_DB_NO_DROP_TABLE' => 'ELIMINAR COLUNA [table]',
    'LBL_UW_DB_NO_ERRORS' => 'Todos os privilégios disponíveis',
    'LBL_UW_DB_NO_INSERT' => 'INSERT EM [table]',
    'LBL_UW_DB_NO_SELECT' => 'Selecionar [x] de [table]',
    'LBL_UW_DB_NO_UPDATE' => 'ATUALIZAR [table]',
    'LBL_UW_DB_PERMS' => 'Privilégio necessário',

    'LBL_UW_DESC_MODULES_INSTALLED' => 'Atualizações já instaladas:',
    'LBL_UW_END_LOGOUT_PRE' => 'A atualização foi concluída.',
    'LBL_UW_END_LOGOUT_PRE2' => 'Clique em CONCLUÍDO para sair do assistente de atualizações.',
    'LBL_UW_END_LOGOUT' => 'Deve terminar a sua sessão, e voltar a entrar, antes de aplicar mais alguma correção usando o Assistente de atualizações.',

    'LBL_UW_FILE_DELETED' => ' foi removido.<br>',
    'LBL_UW_FILE_GROUP' => 'Grupo',
    'LBL_UW_FILE_ISSUES_PERMS' => 'Permissões de ficheiros',
    'LBL_UW_FILE_NO_ERRORS' => '<b>Todos os ficheiros estão editáveis</b>',
    'LBL_UW_FILE_OWNER' => 'Proprietário',
    'LBL_UW_FILE_PERMS' => 'Permissões',
    'LBL_UW_FILE_UPLOADED' => ' foi carregado',
    'LBL_UW_FILE' => 'Nome do ficheiro',
    'LBL_UW_FILES_QUEUED' => 'As seguintes atualizações estão prontas para serem instaladas:',
    'LBL_UW_FILES_REMOVED' => 'Os seguintes ficheiros serão removidos do sistema:<br>' . PHP_EOL,
    'LBL_UW_NEXT_TO_UPLOAD' => 'Clique em SEGUINTE para carregar pacotes de atualização.',
    'LBL_UW_FROZEN' => 'Carregue um pacote antes de continuar.',
    'LBL_UW_HIDE_DETAILS' => 'Ocultar detalhes',
    'LBL_UW_IN_PROGRESS' => 'Em curso',
    'LBL_UW_INCLUDING' => 'A incluir',
    'LBL_UW_INCOMPLETE' => 'Incompleto',
    'LBL_UW_MANUAL_MERGE' => 'Fundir ficheiros',
    'LBL_UW_MODULE_READY' => 'O módulo está pronto para ser instalado. Clique em "Aplicar" para proceder à instalação.',
    'LBL_UW_NO_INSTALLED_UPGRADES' => 'Não foi detetada qualquer atualização guardada.',
    'LBL_UW_NONE' => 'Nenhum',
    'LBL_UW_OVERWRITE_DESC' => 'Todos os ficheiros alterados serão sobrescritos - incluindo personalizações do código ou alterações de temas e modelos. Tem a certeza de que deseja continuar?',

    'LBL_UW_PREFLIGHT_ADD_TASK' => 'Criar um item de tarefa para fusão manual?',
    'LBL_UW_PREFLIGHT_EMAIL_REMINDER' => 'Receber um lembrete por email para impressão em série manual?',
    'LBL_UW_PREFLIGHT_FILES_DESC' => 'Os ficheiros abaixo listados foram modificados. Desmarque itens que exijam uma fusão manual. <i>Qualquer alteração de esquema detetado será automaticamente desmarcada; marque as que devem ser sobrescritas.',
    'LBL_UW_PREFLIGHT_NO_DIFFS' => 'Não é necessário fundir ficheiros manualmente.',
    'LBL_UW_PREFLIGHT_NOT_NEEDED' => 'Não necessário.',
    'LBL_UW_PREFLIGHT_PRESERVE_FILES' => 'Ficheiros preservados automaticamente:',
    'LBL_UW_PREFLIGHT_TESTS_PASSED' => 'Aprovado em todos os testes de verificação final.',
    'LBL_UW_PREFLIGHT_TESTS_PASSED2' => 'Clique em SEGUINTE para copiar os ficheiros atualizados para o sistema.',
    'LBL_UW_PREFLIGHT_TESTS_PASSED3' => '<b>Nota: </b> o restante processo de atualização é obrigatório, e se clicar em Seguinte terá de concluir o processo. Se não deseja continuar, clique no botão Cancelar.',
    'LBL_UW_PREFLIGHT_TOGGLE_ALL' => 'Alternar todos os ficheiros',

    'LBL_UW_REBUILD_TITLE' => 'Resultado da reconstrução',
    'LBL_UW_SCHEMA_CHANGE' => 'Alterar Schema',

    'LBL_UW_SHOW_COMPLIANCE' => 'Mostrar configurações detetadas',
    'LBL_UW_SHOW_DB_PERMS' => 'Mostrar permissões da Base de Dados em falta.',
    'LBL_UW_SHOW_DETAILS' => 'Mostrar detalhes',
    'LBL_UW_SHOW_DIFFS' => 'Mostrar ficheiros que impliquem uma fusão manual',
    'LBL_UW_SHOW_NW_FILES' => 'Mostrar ficheiros com Más Permissões',
    'LBL_UW_SHOW_SCHEMA' => 'Mostrar Schema Change Script',
    'LBL_UW_SHOW_SQL_ERRORS' => 'Mostrar Más Queries',
    'LBL_UW_SHOW' => 'Exibir',

    'LBL_UW_SKIPPED_FILES_TITLE' => 'Ficheiros ignorados',
    'LBL_UW_SQL_RUN' => 'Verificar quando o SQL foi executado manualmente',
    'LBL_UW_START_DESC' => 'Bem-vindo ao assistente de atualização do SuiteCRM.',
    'LBL_UW_START_DESC2' => 'Nota: Recomendamos que crie uma cópia integral da instância SuiteCRM que usa em produção e teste o pacote de atualização num servidor local ou paralelo antes de implementar a nova versão. Se antes tiver efetuado alterações ao ficheiro "composer.json", por favor, e após concluir o processo de atualização, execute o comando:<br/><br/><pre>composer install --no-dev</pre>', // Keep the <pre>composer install --no-dev</pre> words at the end of the sentence and do not translate it
    'LBL_UW_START_DESC3' => 'Clique em SEGUINTE para executar uma verificação do sistema e certificar-se de que o sistema está pronto para a atualização. As verificações incluem permissões de ficheiros, privilégios da base de dados e configurações do servidor.',
    'LBL_UW_START_UPGRADED_UW_DESC' => 'O novo assistente de atualização irá agora retomar o processo de atualização. Por favor, continue a sua atualização.',
    'LBL_UW_START_UPGRADED_UW_TITLE' => 'Bem-vindo ao novo assistente de atualização',

    'LBL_UW_TITLE_CANCEL' => 'Cancelar',
    'LBL_UW_TITLE_COMMIT' => 'Aplicar atualização',
    'LBL_UW_TITLE_END' => 'Balanço',
    'LBL_UW_TITLE_PREFLIGHT' => 'Verificação final',
    'LBL_UW_TITLE_START' => 'Bem-vindo',
    'LBL_UW_TITLE_SYSTEM_CHECK' => 'Verificação do sistema',
    'LBL_UW_TITLE_UPLOAD' => 'Carregar pacote',
    'LBL_UW_TITLE' => 'Assistente de atualização',
    'LBL_UW_UNINSTALL' => 'Desinstalar',
    //500 upgrade labels
    'LBL_UW_ACCEPT_THE_LICENSE' => 'Aceitar licença',
    'LBL_UW_CONVERT_THE_LICENSE' => 'Converter licença',

    'LBL_START_UPGRADE_IN_PROGRESS' => 'Início em curso',
    'LBL_SYSTEM_CHECKS_IN_PROGRESS' => 'Verificação do sistema em curso',
    'LBL_LICENSE_CHECK_IN_PROGRESS' => 'Verificação de licença em curso',
    'LBL_PREFLIGHT_CHECK_IN_PROGRESS' => 'Verificação final em curso',
    'LBL_PREFLIGHT_FILE_COPYING_PROGRESS' => 'Cópia de ficheiros em curso',
    'LBL_COMMIT_UPGRADE_IN_PROGRESS' => 'Aplicação de atualização em curso',
    'LBL_UW_COMMIT_DESC' => 'Clique em SEGUINTE para executar scripts de atualização adicionais.',
    'LBL_UPGRADE_SCRIPTS_IN_PROGRESS' => 'Atualização de Scripts em curso',
    'LBL_UPGRADE_SUMMARY_IN_PROGRESS' => 'Resumo da atualização em curso',
    'LBL_UPGRADE_IN_PROGRESS' => 'em curso     ',
    'LBL_UPGRADE_TIME_ELAPSED' => 'Tempo decorrido',
    'LBL_UPGRADE_CANCEL_IN_PROGRESS' => 'Cancelamento e limpeza da atualização em curso',
    'LBL_UPGRADE_TAKES_TIME_HAVE_PATIENCE' => 'A atualização pode demorar algum tempo',
    'LBL_UPLOADE_UPGRADE_IN_PROGRESS' => 'Verificações de carregamento em curso',
    'LBL_UPLOADING_UPGRADE_PACKAGE' => 'A carregar pacote de atualização',
    'LBL_UW_DROP_SCHEMA_UPGRADE_WIZARD' => 'Assistente de atualização remove o antigo 451 schema',
    'LBL_UW_DROP_SCHEMA_MANUAL' => 'Pós-atualização de remoção manual do Schema',
    'LBL_UW_DROP_SCHEMA_METHOD' => 'Método Antigo de Remoção de Schema',
    'LBL_UW_SHOW_OLD_SCHEMA_TO_DROP' => 'Mostrar Schema Antigo que pode ser removido',
    'LBL_UW_SKIPPED_QUERIES_ALREADY_EXIST' => 'Consultas ignoradas',
    'LBL_INCOMPATIBLE_PHP_VERSION' => 'É necessário PHP versão 5 ou acima',
    'ERR_CHECKSYS_PHP_INVALID_VER' => 'A sua versão de PHP não é suportada pelo SuiteCRM. Tem de instalar uma versão que seja compatível com a aplicação SuiteCRM. Por favor, consulte a matriz de compatibilidade nas notas de lançamento sobre versões de PHP suportadas. A sua versão é ',
    'LBL_BACKWARD_COMPATIBILITY_ON' => 'O modo Php Backward Compatibility está ligado. Configure o zend.ze1_compatibility_mode para Desligado para prosseguir ',
    //including some strings from moduleinstall that are used in Upgrade
    'LBL_ML_ACTION' => 'Ação',
    'LBL_ML_CANCEL' => 'Cancelar',
    'LBL_ML_COMMIT' => 'Aplicar',
    'LBL_ML_DESCRIPTION' => 'Descrição',
    'LBL_ML_INSTALLED' => 'Data de instalação',
    'LBL_ML_NAME' => 'Nome',
    'LBL_ML_PUBLISHED' => 'Data de publicação',
    'LBL_ML_TYPE' => 'Tipo',
    'LBL_ML_UNINSTALLABLE' => 'Não Instalável',
    'LBL_ML_VERSION' => 'Versão',
    'LBL_ML_INSTALL' => 'Instalar',
    //adding the string used in tracker. copying from homepage
    'LBL_CURRENT_PHP_VERSION' => 'A sua versão PHP atual é: ',
    'LBL_RECOMMENDED_PHP_VERSION_1' => 'A versão PHP recomendada é ',
    'LBL_RECOMMENDED_PHP_VERSION_2' => ' ou superior.',  // End of a sentence as in Recommended PHP version is version X.Y or above

    'LBL_MODULE_NAME' => 'Assistente de atualização',
    'LBL_UPLOAD_SUCCESS' => 'O pacote de atualização foi carregado com êxito. Clique em SEGUINTE para executar a verificação final.',
    'LBL_UW_TITLE_LAYOUTS' => 'Confirmar esquemas',
    'LBL_LAYOUT_MODULE_TITLE' => 'Esquemas',
    'LBL_LAYOUT_MERGE_DESC' => 'Estão disponíveis novos campos, que foram adicionados como parte desta atualização e podem ser adicionados automaticamente aos seus esquemas de módulo existentes. Para saber mais sobre os novos campos, consulte as notas de lançamento da versão para a qual está a atualizar. <br><br>Se não deseja acrescentar os novos campos, por favor, desmarque o módulo e os seus esquemas personalizados ficarão inalterados. Os campos estarão disponíveis no Estúdio após a atualização. <br><br>',
    'LBL_LAYOUT_MERGE_TITLE' => 'Clique em SEGUINTE para confirmar as alterações e concluir a atualização.',
    'LBL_LAYOUT_MERGE_TITLE2' => 'Clique em SEGUINTE para concluir a atualização.',
    'LBL_UW_CONFIRM_LAYOUTS' => 'Confirmar esquemas',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS' => 'Confirmar resultados do esquema',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS_DESC' => 'Os seguintes esquemas foram fundidos com êxito:',
    'LBL_SELECT_FILE' => 'Selecione um ficheiro:',
    'ERROR_VERSION_INCOMPATIBLE' => 'O ficheiro carregado não é compatível com esta versão do CRM: ',
    'ERROR_PHP_VERSION_INCOMPATIBLE' => 'O ficheiro carregado não é compatível com esta versão do PHP: ',
    'ERROR_SUITECRM_VERSION_INCOMPATIBLE' => 'O ficheiro carregado não é compatível com esta versão do CRM: ',
    'LBL_LANGPACKS' => 'Pacotes de idioma' /*for 508 compliance fix*/,
    'LBL_MODULELOADER' => 'Carregador de módulos' /*for 508 compliance fix*/,
    'LBL_PATCHUPGRADES' => 'Atualizações de segurança' /*for 508 compliance fix*/,
    'LBL_THEMES' => 'Temas' /*for 508 compliance fix*/,
    'LBL_WORKFLOW' => 'Fluxo de trabalho' /*for 508 compliance fix*/,
    'LBL_UPGRADE' => 'Atualizar' /*for 508 compliance fix*/,
    'LBL_PROCESSING' => 'A processar' /*for 508 compliance fix*/,
    'ERROR_NO_VERSION_SET' => 'O ficheiro de manifesto não possui uma versão compatível',
    'LBL_UPGRD_CSTM_CHK' => 'O processo de atualização irá atualizar alguns ficheiros, mas esses ficheiros também podem existir na pasta CUSTOM. Por favor, verifique as alterações antes de continuar:',
    'ERR_UW_PHP_FILE_ERRORS' => array(
        1 => 'O ficheiro carregado excede a directiva upload_max_filesize no php.ini',
        2 => 'O ficheiro carregado excede a directiva MAX_FILE_SIZE que foi especificada no formulário HTML.',
        3 => 'O ficheiro carregado foi apenas parcialmente carregado.',
        4 => 'Nenhum ficheiro carregado.',
        5 => 'Erro desconhecido.',
        6 => 'Pasta temporária em falta.',
        7 => 'Falha ao escrever o ficheiro para o disco.',
        8 => 'Carregamento do ficheiro interrompido por extensão.',
    ),
    'LBL_PASSWORD_EXPIRATON_CHANGED' => 'Alerta: a data de validade da senha não está definida!',
    'LBL_PASSWORD_EXPIRATON_REDIRECT' => 'Por favor, atualize as suas configurações aqui',
);
