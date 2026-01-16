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
    'LBL_MODULE_NAME' => 'Entrada',
    'LBL_NEW_FORM_TITLE' => 'Novo contacto',
    'LBL_FIRST_NAME' => 'Nome próprio:',
    'LBL_LAST_NAME' => 'Apelido:',
    'LBL_LIST_LAST_NAME' => 'Apelido',
    'LBL_PHONE' => 'Telefone:',
    'LBL_EMAIL_ADDRESS' => 'Email:',
    'LBL_MY_PIPELINE_FORM_TITLE' => 'Meu processo de vendas',
    'LBL_PIPELINE_FORM_TITLE' => 'Processo de vendas por fase da venda',
    'LBL_RGraph_PIPELINE_FORM_TITLE' => 'Processo de vendas por fase da venda',
    'LNK_NEW_CONTACT' => 'Criar contacto',
    'LNK_NEW_ACCOUNT' => 'Criar conta',
    'LNK_NEW_OPPORTUNITY' => 'Criar oportunidade',
    'LNK_NEW_LEAD' => 'Criar pista',
    'LNK_NEW_CASE' => 'Criar ocorrência',
    'LNK_NEW_NOTE' => 'Criar nota ou anexo',
    'LNK_NEW_CALL' => 'Registar telefonema',
    'LNK_NEW_EMAIL' => 'Arquivar email',
    'LNK_NEW_MEETING' => 'Agendar reunião',
    'LNK_NEW_TASK' => 'Criar tarefa',
    'LNK_NEW_BUG' => 'Indicar anomalia',
    'LNK_NEW_SEND_EMAIL' => 'Escrever email',
    'LBL_NO_ACCESS' => 'Não tem acesso a esta área. Por favor, contacte o administrador do sítio para obter acesso',
    'LBL_NO_RESULTS_IN_MODULE' => '-- Sem resultados --',
    'LBL_NO_RESULTS' => '<h2>Não foram encontrados quaisquer resultados. Por favor, pesquise novamente.</h2><br>',
    'LBL_NO_RESULTS_TIPS' => '<h3>Sugestões de pesquisa:</h3><ul><li>Certifique-se que tem as categorias acima devidamente selecionadas</li><li>Aumente a abrangência dos seus critérios de pesquisa.</li><li>Se mesmo assim não obteve resultados tente a opção de pesquisa avançada.</li></ul>',

    'LBL_ADD_DASHLETS' => 'Adicionar miniaplicações',
    'LBL_WEBSITE_TITLE' => 'Sítio Internet',
    'LBL_RSS_TITLE' => 'Sinal web',
    'LBL_CLOSE_DASHLETS' => 'Fechar',
    'LBL_OPTIONS' => 'Opções',
    // dashlet search fields
    'LBL_TODAY' => 'Hoje',
    'LBL_YESTERDAY' => 'Ontem',
    'LBL_TOMORROW' => 'Amanhã',
    'LBL_NEXT_WEEK' => 'Semana seguinte',
    'LBL_LAST_7_DAYS' => 'Últimos 7 Dias',
    'LBL_NEXT_7_DAYS' => 'Próximos 7 dias',
    'LBL_LAST_MONTH' => 'Último mês',
    'LBL_NEXT_MONTH' => 'Próximo mês',
    'LBL_LAST_YEAR' => 'Último ano',
    'LBL_NEXT_YEAR' => 'Ano seguinte',
    'LBL_LAST_30_DAYS' => 'Últimos 30 dias',
    'LBL_NEXT_30_DAYS' => 'Próximos 30 dias',
    'LBL_THIS_MONTH' => 'Este mês',
    'LBL_THIS_YEAR' => 'Este ano',

    'LBL_MODULES' => 'Módulos',
    'LBL_CHARTS' => 'Gráficos',
    'LBL_TOOLS' => 'Ferramentas',
    'LBL_WEB' => 'Internet',
    'LBL_SEARCH_RESULTS' => 'Resultados da pesquisa',

    // Dashlet Categories
    'dashlet_categories_dom' => array(
        'Module Views' => 'Vistas dos módulos',
        'Portal' => 'Portal',
        'Charts' => 'Gráficos',
        'Tools' => 'Ferramentas',
        'Miscellaneous' => 'Diversos'
    ),
    'LBL_ADDING_DASHLET' => 'A adicionar miniaplicação...',
    'LBL_ADDED_DASHLET' => 'Miniaplicação adicionada',
    'LBL_REMOVE_DASHLET_CONFIRM' => 'Tem a certeza de que pretende remover a miniaplicação?',
    'LBL_REMOVING_DASHLET' => 'A remover miniaplicação...',
    'LBL_REMOVED_DASHLET' => 'Miniaplicação removida',
    'LBL_DASHLET_CONFIGURE_GENERAL' => 'Geral',
    'LBL_DASHLET_CONFIGURE_FILTERS' => 'Filtros',
    'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'Apenas os meus itens',
    'LBL_DASHLET_CONFIGURE_TITLE' => 'Título',
    'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'Exibir linhas',

    'LBL_DASHLET_DELETE' => 'Eliminar miniaplicação',
    'LBL_DASHLET_REFRESH' => 'Atualizar miniaplicação',
    'LBL_DASHLET_EDIT' => 'Editar miniaplicação',

    // Default out-of-box names for tabs
    'LBL_HOME_PAGE_1_NAME' => 'O meu CRM',
    'LBL_CLOSE_SITEMAP' => 'Fechar',

    'LBL_SEARCH' => 'Pesquisar',
    'LBL_CLEAR' => 'Limpar',

    'LBL_BASIC_CHARTS' => 'Gráficos básicos',

    'LBL_DASHLET_SEARCH' => 'Encontrar miniaplicações',

//ABOUT page
    'LBL_VERSION' => 'Versão',
    'LBL_BUILD' => 'Sub-versão',

    'LBL_SOURCE_SUGAR' => 'SugarCRM Inc — fornecedores da framework CE',

    'LBL_DASHLET_TITLE' => 'Meus sítios',
    'LBL_DASHLET_OPT_TITLE' => 'Título',
    'LBL_DASHLET_INCORRECT_URL' => 'Foi especificada uma localização incorreta para o sítio web',
    'LBL_DASHLET_OPT_URL' => 'Localização do sítio web',
    'LBL_DASHLET_OPT_HEIGHT' => 'Altura da miniaplicação (em píxeis)',
    'LBL_DASHLET_SUITE_NEWS' => 'Notícias SuiteCRM',
    'LBL_DASHLET_DISCOVER_SUITE' => 'Descobrir o SuiteCRM',
    'LBL_BASIC_SEARCH' => 'Filtro rápido' /*for 508 compliance fix*/,
    'LBL_ADVANCED_SEARCH' => 'Filtro avançado' /*for 508 compliance fix*/,
    'LBL_TOUR_HOME' => 'Ícone de entrada',
    'LBL_TOUR_HOME_DESCRIPTION' => 'Retornar rapidamente ao painel de Entrada com um clique.',
    'LBL_TOUR_MODULES' => 'Módulos',
    'LBL_TOUR_MODULES_DESCRIPTION' => 'Todos os seus módulos importantes estão aqui.',
    'LBL_TOUR_MORE' => 'Mais módulos',
    'LBL_TOUR_MORE_DESCRIPTION' => 'Os seus módulos restantes estão aqui.',
    'LBL_TOUR_SEARCH' => 'Pesquisa em texto integral',
    'LBL_TOUR_SEARCH_DESCRIPTION' => 'A pesquisa tornou-se agora muito melhor.',
    'LBL_TOUR_NOTIFICATIONS' => 'Notificações',
    'LBL_TOUR_NOTIFICATIONS_DESCRIPTION' => 'Notificações do SuiteCRM serão exibidas aqui.',
    'LBL_TOUR_PROFILE' => 'Perfil',
    'LBL_TOUR_PROFILE_DESCRIPTION' => 'Perfil de acesso , configurações e terminar sessão.',
    'LBL_TOUR_QUICKCREATE' => 'Criação rápida',
    'LBL_TOUR_QUICKCREATE_DESCRIPTION' => 'Criar registos rapidamente sem sair da sua posição atual.',
    'LBL_TOUR_FOOTER' => 'Rodapé contraível',
    'LBL_TOUR_FOOTER_DESCRIPTION' => 'Expandir e contrair o rodapé facilmente.',
    'LBL_TOUR_CUSTOM' => 'Aplicações personalizadas',
    'LBL_TOUR_CUSTOM_DESCRIPTION' => 'Colocar aqui integrações personalizadas.',
    'LBL_TOUR_BRAND' => 'A sua marca',
    'LBL_TOUR_BRAND_DESCRIPTION' => 'O seu logótipo será colocado aqui. Passe o rato sobre o logótipo, para obter mais informações.',
    'LBL_TOUR_WELCOME' => 'Bem-vindo ao CRM!',
    'LBL_TOUR_WATCH' => 'Veja as novidades do SuiteCRM',
    'LBL_TOUR_FEATURES' => '<ul style=""><li class="icon-ok">Nova barra de navegação simplificada</li><li class="icon-ok">Novo rodapé contraível</li><li class="icon-ok">Pesquisa melhorada</li><li class="icon-ok">Menu de ações atualizado</li></ul><p>e muito mais!</p>',
    'LBL_TOUR_VISIT' => 'Para obter mais informações, visite a nossa aplicação',
    'LBL_TOUR_DONE' => 'Concluído!',
    'LBL_TOUR_REFERENCE_1' => 'Poderá sempre fazer referência à nossa',
    'LBL_TOUR_REFERENCE_2' => 'através da ligação "Fórum de ajuda" no menu de perfil.',
    'LNK_TOUR_DOCUMENTATION' => 'documentação',
    'LBL_TOUR_CALENDAR_URL_1' => 'Partilha o seu calendário SuiteCRM com aplicações de terceiros, tais como o Microsoft Outlook ou Exchange? Se assim for, tem agora um novo URL. Este novo URL é mais seguro e inclui uma chave pessoal que irá impedir a publicação não autorizada do seu calendário.',
    'LBL_TOUR_CALENDAR_URL_2' => 'Obtenha o URL do seu novo calendário partilhado.',
    'LBL_CONTRIBUTORS' => 'Colaboradores',
    'LBL_ABOUT_SUITE' => 'Sobre SuiteCRM',
    'LBL_PARTNERS' => 'Parceiros',
    'LBL_FEATURING' => 'Os módulos AOS, AOW, AOR, AOP, AOE e Reagendamento foram criados por SalesAgility.',
    'LBL_EDIT_ALL_RECURRENCES' => 'Editar todas as recorrências',
    'LBL_REMOVE_ALL_RECURRENCES' => 'Eliminar todas as recorrências',
    'LBL_CONFIRM_REMOVE' => 'Tem certeza de que pretende remover o registo?',

    'LBL_CONTRIBUTOR_SUITECRM' => 'SuiteCRM — CRM em código aberto',
    'LBL_CONTRIBUTOR_SECURITY_SUITE' => 'SecuritySuite por Jason Eggers',
    'LBL_CONTRIBUTOR_JJW_GMAPS' => 'JJWDesign Google mapas por Jeffrey J. Walters',
    'LBL_CONTRIBUTOR_CONSCIOUS' => 'Logótipo SuiteCRM criado por Conscious Solutions',
    'LBL_CONTRIBUTOR_RESPONSETAP' => 'Contribuição para a versão 7.3 SuiteCRM por ResponseTap',
    'LBL_CONTRIBUTOR_GMBH' => 'Campos calculados de fluxo de trabalho disponibilizados por Diligent - technology & business consulting GmbH',

    'LBL_LANGUAGE_ABOUT' => 'Sobre as traduções do SuiteCRM',
    'LBL_LANGUAGE_COMMUNITY_ABOUT' => 'Tradução colaborativa pela comunidade SuiteCRM',
    'LBL_LANGUAGE_COMMUNITY_PACKS' => 'Tradução criada utilizando o Crowdin',

    'LBL_ABOUT_SUITE_2' => 'SuiteCRM é publicado sob uma licença de código aberto — AGPLv3',
    'LBL_ABOUT_SUITE_4' => 'Todo o código gerido e desenvolvido pelo projeto SuiteCRM será publicado como Código Aberto — AGPLv3',
    'LBL_ABOUT_SUITE_5' => 'Apoio ao SuiteCRM está disponível em modo gratuito ou pago',

    'LBL_SUITE_PARTNERS' => 'Temos parceiros SuiteCRM leais e apaixonados pelo código aberto. Para visualizar a lista completa, consulte o nosso sítio.',

    'LBL_SAVE_BUTTON' => 'Guardar',
    'LBL_DELETE_BUTTON' => 'Eliminar',
    'LBL_APPLY_BUTTON' => 'Aplicar',
    'LBL_SEND_INVITES' => 'Guardar e enviar convites',
    'LBL_CANCEL_BUTTON' => 'Cancelar',
    'LBL_CLOSE_BUTTON' => 'Fechar',

    'LBL_CREATE_NEW_RECORD' => 'Criar atividade',
    'LBL_CREATE_CALL' => 'Registar telefonema',
    'LBL_CREATE_MEETING' => 'Agendar reunião',

    'LBL_GENERAL_TAB' => 'Detalhes',
    'LBL_PARTICIPANTS_TAB' => 'Convidados',
    'LBL_REPEAT_TAB' => 'Recorrência',

    'LBL_REPEAT_TYPE' => 'Repetir',
    'LBL_REPEAT_INTERVAL' => 'Cada',
    'LBL_REPEAT_END' => 'Final',
    'LBL_REPEAT_END_AFTER' => 'Depois',
    'LBL_REPEAT_OCCURRENCES' => 'recorrências',
    'LBL_REPEAT_END_BY' => 'Por',
    'LBL_REPEAT_DOW' => 'Em',
    'LBL_REPEAT_UNTIL' => 'Repetir até',
    'LBL_REPEAT_COUNT' => 'Número de recorrências',
    'LBL_REPEAT_LIMIT_ERROR' => 'O seu pedido iria criar mais de $limit reuniões.',

    //Events
    'LNK_EVENT' => 'Evento',
    'LNK_EVENT_VIEW' => 'Ver evento',
    'LBL_DATE' => 'Data: ',
    'LBL_DURATION' => 'Duração: ',
    'LBL_NAME' => 'Título:',
    'LBL_HOUR_ABBREV' => 'hora',
    'LBL_HOURS_ABBREV' => ' horas',
    'LBL_MINSS_ABBREV' => 'minutos',
    'LBL_LOCATION' => 'Local:',
    'LBL_STATUS' => 'Situação:',
    'LBL_DESCRIPTION' => 'Descrição:',
    //End Events

    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH_INVALID_REQUEST' => 'Ocorreu um erro ao executar a pesquisa. A sintaxe da consulta pode não ser válida.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH_ENGINE_NOT_FOUND' => 'Não foi possível encontrar o motor de pesquisa solicitado. Tente executar a pesquisa novamente.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_NO_NODES_AVAILABLE' => 'Falha a ligar ao servidor Elasticsearch.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH' => 'Ocorreu um erro interno na pesquisa.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_DEFAULT' => 'Ocorreu um erro desconhecido ao executar a pesquisa.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_END_MESSAGE' => 'Se o problema persistir, contacte um administrador. Mais informações disponíveis nos historiais.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_MISSING_INDEX' => 'O índice de pesquisa para um ou mais módulos não foi encontrado. Certifique-se de que o serviço Crontab esteja configurado e em execução, abra a configuração do Elasticsearch e clique em "Agendar indexação completa". Considere criar um trabalho de agendador para "Indexador Elasticsearch", caso não exista já.',

    'LBL_ELASTIC_SEARCH_DEFAULT' => 'Nenhum resultado correspondente ao seu critério. Tente alargar a sua pesquisa.',

    'LNK_TASK_VIEW' => 'Ver tarefa',
);
