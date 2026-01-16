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
    'LBL_LOADING' => 'A carregar' /*for 508 compliance fix*/,
    'LBL_HIDEOPTIONS' => 'Ocultar opções' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Eliminar' /*for 508 compliance fix*/,
    'help' => array(
        'package' => array(
            'create' => 'Introduza um <b>Nome</b> para o pacote. O nome a introduzir deverá ser alfanumérico e não deverá conter espaços. (Exemplo: HR_Management)<br/><br/> Poderá inserir o <b>Autor</b> e uma <b>Descrição</b> como informação adicional.<br/><br/>Clique<b>Guardar</b> para criar o pacote.',
            'modify' => 'As propriedades e as ações possíveis para o <b>Pacote</b> serão exibidas aqui.<br><br>Poderá modificar o <b>Nome</b>, <b>Autor</b> e a <b>Descrição</b> do pacote, bem como visualizar e personalizar todos os módulos contidos no pacote.<br><br>Clique em <b>Novo módulo</b> para criar um módulo para o pacote.<br><br>Se o pacote contiver pelo menos um módulo, poderá <b>publicar</b> e <b>implementar</b> o pacote, assim como <b>exportar</b> as personalizações efetuadas no pacote.',
            'name' => 'Este é o <b>Nome</b> do pacote atual. <br/><br/>O nome a introduzir deverá ser alfanumérico, começar com uma letra e não pode conter espaços. (Exemplo: HR_Management )',
            'author' => 'Este é o <b>Autor</b> que é exibido durante a instalação, como o nome da entidade que criou o pacote.<br><br>O autor poderá ser um indivíduo ou uma empresa.',
            'description' => 'Esta é a <b>Descrição</b> do pacote que será exibido durante a instalação.',
            'publishbtn' => 'Clique em <b>Publicar</b> para guardar todos os dados inseridos e criar um ficheiro .zip, que corresponde a uma versão instalável do pacote.<br><br>Utilize o<b>Carregador Módulos</b>para carregar o ficheiro .zip e instalar o pacote.',
            'deploybtn' => 'Clique em <b>Implementar</b> para guardar todos os dados inseridos e instalar o pacote, incluindo todos os módulos, na instância atual.',
            'duplicatebtn' => 'Clique em <b>Duplicar</b> para copiar o conteúdo do pacote para um novo pacote e mostrar o novo pacote. <br/><br/>Para o novo pacote, será gerado automaticamente um novo nome, juntando um número no final do nome do pacote utilizado para criar o novo. Poderá alterar o nome do novo pacote, introduzindo um novo <b>Nome</b> e clicando em <b>Guardar</b>.',
            'exportbtn' => 'Clique em <b>Exportar</b> para criar um ficheiro .zip contendo as personalizações efetuadas no pacote.<br><br> O ficheiro gerado não é uma versão instalável do pacote.<br><br>Utilize o <b>Carregador de módulos</b> para importar o ficheiro .zip e ter o pacote, incluindo as personalizações, disponíveis no Construtor de Módulos.',
            'deletebtn' => 'Clique em <b>Eliminar</b> para apagar este pacote e todos os ficheiros a ele relacionados.',
            'savebtn' => 'Clique em <b>Guardar</b> para guardar todos os dados inseridos e relacionados com o pacote.',
            'existing_module' => 'Clique no ícone do <b>Módulo</b> para editar as propriedades e personalizar os campos, relacionamentos e esquemas associados ao módulo.',
            'new_module' => 'Clique em <b>Novo módulo</b> para criar um novo módulo para este pacote.',
            'key' => 'Esta <b>Chave</b> alfanumérica de 5 letras será utilizada colocar como prefixo de todos os diretórios, nomes de classes e tabelas da base de dados, para todos os módulos no pacote atual.<br><br>A chave é utilizada num esforço de garantir a exclusividade nos nomes das tabelas.',
            'readme' => 'Clique para adicionar texto <b>Leia-me</b> para este pacote.<br><br>O texto Leia-me ficará disponível no momento da instalação.',

        ),
        'main' => array(),
        'module' => array(
            'create' => 'Indique um <b>Nome</b> para o módulo. O <b>rótulo</b> que fornecer será exibido na aba de navegação.<br/><br/>Marque a opção <b>Aba de navegação</b> para que seja exibido uma aba de navegação no módulo.<br/><br/>Em seguida, escolha o tipo de módulo que pretende criar. <br/><br/>Selecione um tipo de modelo. Cada modelo contém um conjunto específico de campos, assim como esquemas predefinidos, para utilizar como base no seu módulo. <br/><br/>Clique em<b>Guardar</b> para criar o módulo.',
            'modify' => 'Pode alterar as propriedades do módulo ou personalizar os <b>campos</b>,<b>relacionamentos</b> e <b>esquemas</b> relacionados com o módulo.',
            'importable' => 'Ao selecionar a caixa de seleção <b>importável</ b> permitirá a importação neste módulo.<br><br> Uma ligação para o assistente de importação irá surgir no painel de atalhos do módulo. O assistente facilitará a importação de dados de fontes externas para o módulo personalizado.',
            'team_security' => 'Ao assinalar a caixa de seleção <b>Segurança de Equipa</b> irá ativar a segurança de equipa para este módulo. <br/><br/>Se a segurança de equipa estiver ativada, o campo de seleção da Equipa aparecerá nos registos no módulo ',
            'reportable' => 'Ao assinalar esta opção vai permitir a execução de relatórios para este módulo.',
            'assignable' => 'Ao assinalar esta opção irá permitir que um registo neste módulo, seja atribuído a um utilizador selecionado.',
            'has_tab' => 'Selecionar <b>Aba de navegação</b> irá ativar uma aba de navegação para este módulo.',
            'acl' => 'Assinalar esta opção irá permitir Controles de Acesso neste módulo, incluindo Segurança ao Nível do Campo.',
            'studio' => 'Assinalar esta opção irá permitir que os administradores personalizem este módulo no Estúdio.',
            'audit' => 'Assinalar esta opção irá ativar a auditoria para este módulo. Serão registadas alterações a determinados campos para que os administradores possam analisar o histórico de alterações.',
            'viewfieldsbtn' => 'Clicar em <b>Ver Campos</b> para visualizar os campos associados ao módulo e para criar e editar campos personalizados.',
            'viewrelsbtn' => 'Clicar em <b>Ver relacionamentos</b> para visualizar os relacionamentos associados a este módulo e para criar novos relacionamentos.',
            'viewlayoutsbtn' => 'Clicar em <b>Ver esquemas</b> para visualizar esquemas do módulo e personalizar a arrumação dos campos dentro dos esquemas.',
            'duplicatebtn' => 'Clique em <b>Duplicar</b> para copiar as propriedades do módulo para um novo módulo e exibir o novo módulo. <br/><br/>Para o novo módulo, um novo nome será gerado automaticamente, juntando um número ao final do nome do módulo utilizado para criar o novo.',
            'deletebtn' => 'Clique em <b>Eliminar</b> para apagar este módulo.',
            'name' => 'Este é o <b>Nome</b> do módulo atual .<br/><br/>O nome deve ser alfanumérico, começar com uma letra e não pode conter espaços. (Exemplo: HR_Management )',
            'label' => 'Este é o <b>rótulo</b> que será exibido na aba de navegação do módulo. ',
            'savebtn' => 'Clique em <b>Guardar</b> para guardar todos os dados inseridos, relacionados com o módulo.',
            'type_basic' => 'O tipo de modelo <b>Básico</b> disponibiliza campos básicos, tais como o Nome, Atribuído a, Equipa, Data de criação e Descrição.',
            'type_company' => 'O tipo de modelo <b>Empresa</b> fornece campos específicos a cada organização, tais como Nome da empresa, Área de atividade e Endereço de faturação.<br/><br/>Utilize este modelo para criar módulos que sejam semelhantes ao módulo de Contas padrão.',
            'type_issue' => 'O tipo de modelo <b>Problema</b> fornece campos específicos para anomalias e ocorrências, como o número, situação, prioridade e descrição.<br/><br/>Utilize este modelo para criar módulos que sejam semelhantes aos módulos padrão de ocorrências e anomalias.',
            'type_person' => 'O tipo de modelo <b>Pessoa</b> fornece campos individuais específicos, tais como Saudação, Título, Nome, Endereço e Número de telefone.<br/><br/>Utilize este modelo para criar módulos que sejam semelhantes aos módulos Contactos e Pistas padrão.',
            'type_sale' => 'O modelo <b>Venda</b> fornece campos específicos de oportunidades, tais como a Origem da Pista, Fase, Valor e Probabilidade.<br/><br/>Utilize este modelo para criar módulos que sejam semelhantes ao módulo Oportunidades padrão.',
            'type_file' => 'O modelo <b>Ficheiro</b> fornece campos específicos de documentos, tais como Nome do ficheiro, Tipo de documento e Data de publicação.<br><br>Utilize este modelo para criar módulos que sejam semelhantes ao módulo de documentos padrão.',

        ),
        'dropdowns' => array(
            'default' => 'Todas as <b>Listas de seleção</b> da aplicação são aqui exibidas.<br><br>As listas podem ser utilizadas em campos do tipo listas de seleção em qualquer módulo.<br><br>Para efetuar alterações numa lista existente, clique sobre o nome da lista de seleção.<br><br> Clique em <b>Adicionar lista de seleção</b> para criar uma nova lista de seleção.',
            'editdropdown' => 'As listas de seleção podem ser utilizadas ​​em campos de seleção padrão ou personalizados, em qualquer módulo.<br><br>Indique um <b>Nome</b> para a lista de seleção.<br><br>Se algum pacote de idiomas estiver instalado na aplicação, pode selecionar o <b>Idioma</b> para utilizar nos itens da lista.<br><br>No campo <b>Nome do Item</b>, introduza um nome para a opção na lista de seleção. Esse nome não irá aparecer na lista de seleção que é visível aos utilizadores.<br><br>No campo <b>Rótulo de exibição</b> introduza um rótulo que será visível aos utilizadores.<br><br>Depois de introduzir o nome do item e o rótulo de exibição, clicar em <b>Adicionar</b> para adicionar o item à lista de seleção.<br><br>Para reordenar os itens na lista, arrastar e largar os itens nas posições desejadas.<br><br>Para editar o rótulo de exibição de um item, clicar no botão <b>Editar Ícone</b>, e introduzir um novo rótulo. Para eliminar um item da lista de seleção, clicar no ícone <b>Apagar ícone</b>.<br><br>Para desfazer uma alteração efetuada a um rótulo de exibição, clicar em <b>Desfazer</b>. Para refazer uma alteração que foi desfeita, clicar em <b>Desfazer</b>.<br><br>Clicar em <b>Guardar</b> para guardar a lista de seleção.',

        ),
        'subPanelEditor' => array(
            'modify' => 'Todos os campos que podem ser mostrados no <b>Subpainel</b> são exibidos aqui.<br><br>A coluna <b>Padrão</b> contém os campos que são exibidos no subpainel.<br/><br/>A coluna <b>Oculto</b> contém os campos que podem ser adicionados à coluna Padrão.'
        ,
            'savebtn' => 'Clique em <b>Guardar e implementar</b> para guardar as alterações efetuadas e torná-las ativas no módulo.',
            'historyBtn' => 'Clique em <b>Ver histórico</b> para visualizar e restaurar, a partir do histórico, um esquema guardado anteriormente.',
            'historyDefault' => 'Clicar em <b>Restaurar Padrão</b> para repor a vista para o seu esquema original.',
            'Hidden' => 'Os campos <b>ocultos</b> não aparecem no subpainel.',
            'Default' => 'Campos <b>Predefinidos</b> aparecem no subpainel.',

        ),
        'listViewEditor' => array(
            'modify' => 'Todos os campos que podem ser exibidos na <b>Vista de Lista</b> são exibidos aqui.<br><br>A coluna <b>Padrão</b> contém os campos que são exibidos, por padrão, na Vista de Lista.<br/><br/> A coluna <b>Disponível</b> contém campos que um utilizador pode selecionar na Pesquisa, para criar uma Vista de Lista personalizada. <br/><br/> A coluna <b>Oculto</b> contém campos que podem ser adicionados à coluna Padrão ou à Disponível.'
        ,
            'savebtn' => 'Clique em <b>Guardar e implementar</b> para guardar as alterações efetuadas e torná-las ativas no módulo.',
            'historyBtn' => 'Clique em <b>Ver histórico</b> para exibir e restaurar, a partir do histórico, um esquema guardado anteriormente.<br><br><b>Restaurar</b> a partir do <b>Ver histórico</b> restaura o posicionamento do campo dentro dos esquemas guardados anteriormente. Para alterar as etiquetas de campos, clique no ícone Editar junto a cada campo.',
            'historyDefault' => 'Clicar em <b>Restaurar predefinição</b> para repor a vista para o seu esquema original.<br><br><b>Restaurar predefinição</b> só repõe o posicionamento dos campos no esquema original. Para alterar rótulos dos campos, clique no ícone EDITAR junto a cada um dos campos.',
            'Hidden' => 'Os campos marcados com <b>Oculto</b> não estão atualmente disponíveis para serem visualizados pelos utilizadores nas Vistas de lista.',
            'Available' => 'Os campos marcados com <b>Disponível</b> não são exibidos por padrão, mas podem ser adicionados às vistas de lista pelos utilizadores.',
            'Default' => 'Os campos <b>Padrão</b> são exibidos na Vista de Listas que não são personalizados pelos utilizadores.'
        ),
        'popupListViewEditor' => array(
            'modify' => 'Todos os campos que podem ser exibidos na <b>Vista de Lista</b> são exibidos aqui.<br><br>A coluna <b>Padrão</b> contém os campos que são exibidos, por padrão, na Vista de Lista.<br/><br/>A coluna <b>Oculto</b> contém campos que podem ser adicionados à coluna Padrão ou de Disponível.'
        ,
            'savebtn' => 'Clique em <b>Guardar e implementar</b> para guardar as alterações efetuadas e torná-las ativas no módulo.',
            'historyBtn' => 'Clique em <b>Ver histórico</b> para exibir e restaurar, a partir do histórico, um esquema guardado anteriormente.<br><br><b>Restaurar</b> a partir do <b>Ver histórico</b> restaura o posicionamento do campo dentro dos esquemas guardados anteriormente. Para alterar as etiquetas de campos, clique no ícone Editar junto a cada campo.',
            'historyDefault' => 'Clicar em <b>Restaurar predefinição</b> para repor a vista para o seu esquema original.<br><br><b>Restaurar predefinição</b> só repõe o posicionamento dos campos no esquema original. Para alterar rótulos dos campos, clique no ícone EDITAR junto a cada um dos campos.',
            'Hidden' => 'Os campos marcados com <b>Oculto</b> não estão atualmente disponíveis para serem visualizados pelos utilizadores nas Vistas de lista.',
            'Default' => 'Os campos <b>Padrão</b> são exibidos na Vista de Listas que não são personalizados pelos utilizadores.'
        ),
        'searchViewEditor' => array(
            'modify' => 'Todos os campos que podem ser exibidos no formulário de <b>Filtros</b> aparecem aqui.<br><br>A coluna <b>Padrão</b> contém os campos que serão exibidos no formulário de filtros.<br/><br/>A coluna <b>Oculto</b> contém os campos disponíveis para que, como administrador, os possa adicionar ao formulário de filtros.'
        ,
            'savebtn' => 'Ao clicar em <b>Guardar e implementar</b> irá guardar todas as alterações e torná-las ativas',
            'Hidden' => 'Campos <b>ocultos</b> não aparecem na pesquisa.',
            'historyBtn' => 'Clique em <b>Ver histórico</b> para exibir e restaurar, a partir do histórico, um esquema guardado anteriormente.<br><br><b>Restaurar</b> a partir do <b>Ver histórico</b> restaura o posicionamento do campo dentro dos esquemas guardados anteriormente. Para alterar as etiquetas de campos, clique no ícone Editar junto a cada campo.',
            'historyDefault' => 'Clicar em <b>Restaurar predefinição</b> para repor a vista para o seu esquema original.<br><br><b>Restaurar predefinição</b> só repõe o posicionamento dos campos no esquema original. Para alterar rótulos dos campos, clique no ícone EDITAR junto a cada um dos campos.',
            'Default' => 'Campos <b>Predefinidos</b> aparecem na pesquisa.'
        ),
        'layoutEditor' => array(
            'defaultdetailview' => 'A área de <b>esquemas</b> contém os campos que são exibidos atualmente na <b>vista de detalhe</b>.<br/><br/>A <b>caixa de ferramentas</b> contém a <b>reciclagem</b> e os campos e elementos de esquema que podem ser adicionados ao esquema.<br><br>Efetue alterações ao esquema, arrastando e soltando elementos e campos entre a <b>caixa de ferramentas</b> e o <b>esquema</b> e dentro do próprio esquema.<br><br> Para remover um campo do esquema, arraste o campo para a <b>reciclagem</b>. O campo ficará então disponível na caixa de Ferramentas para ser adicionado ao esquema.',
            'defaultquickcreate' => 'A área de <b>esquemas</b> contém os campos que são exibidos atualmente no formulário de <b>criação rápida</b>.<br><br>O formulário de criação rápida é exibido nos subpainéis do módulo quando o botão Criar for clicado.<br/><br/>A <b>caixa de ferramentas</b> contém a <b>reciclagem</b> e os campos e elementos de esquema que podem ser adicionados ao esquema.<br><br>Efetue alterações ao esquema, arrastando e soltando elementos e campos entre a <b>caixa de ferramentas</b> e o <b>esquema</b> e dentro do próprio esquema.<br><br> Para remover um campo do esquema, arraste o campo para a <b>reciclagem</b>. O campo ficará então disponível na caixa de Ferramentas para ser adicionado ao esquema.',
            //this default will be used for edit view
            'default' => 'A área de <b>esquemas</b> contém os campos que são exibidos atualmente na <b>Vista de edição</b>.<br/><br/>A <b>caixa de ferramentas</b> contém a <b>reciclagem</b> e os campos e elementos de esquema que podem ser adicionados ao esquema.<br><br>Efetue alterações ao esquema, arrastando e soltando elementos e campos entre a <b>caixa de ferramentas</b> e o <b>esquema</b> e dentro do próprio esquema.<br><br> Para remover um campo do esquema, arraste o campo para a <b>reciclagem</b>. O campo ficará então disponível na caixa de Ferramentas para ser adicionado ao esquema.',
            'saveBtn' => 'Clicar em <b>Guardar</b> para guardar as alterações efetuadas ao esquema, desde a última gravação efetuada.<br><br>As alterações não serão exibidas no módulo até implementar as alterações guardadas.',
            'historyBtn' => 'Clique em <b>Ver histórico</b> para exibir e restaurar, a partir do histórico, um esquema guardado anteriormente.<br><br><b>Restaurar</b> a partir do <b>Ver histórico</b> restaura o posicionamento do campo dentro dos esquemas guardados anteriormente. Para alterar as etiquetas de campos, clique no ícone Editar junto a cada campo.',
            'historyDefault' => 'Clicar em <b>Restaurar predefinição</b> para repor a vista para o seu esquema original.<br><br><b>Restaurar predefinição</b> só repõe o posicionamento dos campos no esquema original. Para alterar rótulos dos campos, clique no ícone EDITAR junto a cada um dos campos.',
            'publishBtn' => 'Clicar em <b>Guardar e implementar</b> para guardar todas as alterações efetuadas ao esquema desde a última gravação efetuada e tornar ativas as mudanças efetuadas no módulo.<br><br>O esquema será exibido imediatamente no módulo.',
            'toolbox' => 'A <b>Caixa de ferramentas</b> contém a <b>Reciclagem</b>, elementos adicionais do esquema e o conjunto de campos disponíveis para adicionar ao esquema.<br/><br/>Os elementos do esquema e os campos na caixa de ferramentas podem ser arrastados e largados no esquema, assim como os elementos do esquema e os campos podem ser arrastados e largados na caixa de ferramentas a partir do esquema.<br><br>Os elementos do esquema são os <b>Painéis</b> e as <b>Linhas</b>. Ao adicionar uma nova linha ou um novo painel ao esquema está a fornecer localizações adicionais para campos, no esquema.<br/><br/>Para trocar o posicionamento de dois campos, arrastar e largar qualquer um dos campos na caixa de ferramentas ou no esquema numa posição de campo ocupada.<br/><br/>O campo <b>Preencher</b> cria espaços em branco no esquema, no local onde é colocado.',
            'panels' => 'A área de <b>esquema</b> oferece uma visualização da forma como o esquema aparecerá no módulo, quando as alterações feitas ao esquema forem implementadas.<br/><br/>Pode reposicionar campos, linhas e painéis arrastando e largando-os no local desejado.<br/><br/>Remover os elementos arrastando e largando-os na <b>reciclagem</b>, na caixa de ferramentas, ou adicionar novos elementos e campos, arrastando-os a partir da <b>caixa de ferramentas</b> e largando-os no local desejado no esquema.',
            'delete' => 'Arrastar e largar aqui um qualquer elemento para o remover do esquema',
            'property' => 'Editar o rótulo exibido para este campo. <br/> A <b>ordem de tabulação</b> controla a ordem com que a tecla TAB alterna entre campos.',
        ),
        'fieldsEditor' => array(
            'default' => 'Os <b>Campos</b> disponíveis para o módulo, são exibidos aqui, ordenados por Nome de campo.<br><br>Os campos personalizados criados para o módulo aparecem acima dos campos que estão, por padrão, disponíveis para o módulo.<br><br>Para editar um campo, clique em <b>Nome Campo</b>.<br/><br/>Para criar um novo campo, clique em <b>Adicionar Campo</b>.',
            'mbDefault' => 'Os <b>Campos</b> que estão disponíveis para o módulo, são exibidos aqui, ordenados por Nome do campo.<br><br>Para configurar as propriedades de um campo, clique no nome do campo.<br><br>Para criar um novo campo, clique em <b>Adicionar campo</b>. A etiqueta, juntamente com as outras propriedades do novo campo, pode ser editada após a criação, clicando no nome do campo.<br><br>Depois do módulo ser implementado, os novos campos criados no módulo Construtor de módulos, são considerados como campos padrão no módulo implementado no Estúdio.',
            'addField' => 'Selecionar um <b>Tipo de dados</b> para o novo campo. O tipo selecionado determina o tipo de caracteres que podem ser introduzidos no campo. Por exemplo, apenas os números inteiros podem ser introduzidos em campos que são do tipo de dados inteiro.<br><br> Introduzir um <b>nome</b> para o campo. O nome deve ser alfanumérico e não deve conter espaços. Os sobtraços são válidos.<br><br> O <b> Exibir rótulo</b> é o rótulo que será exibido para os campos nos visuais dos módulos. O <b>Rótulo de sistema</b> é utilizado para referir-se ao campo no código.<br><br>Dependendo do tipo de dados selecionado para o campo, algumas ou todas as seguintes propriedades podem ser definidas para o campo:<br><br><b>Ajuda</b> aparece temporariamente enquanto o utilizador paira o rato sobre o campo e pode ser utilizado para solicitar ao utilizador o tipo de entrada de dados desejada.<br><br><b>Texto de comentário</b> só é visualizado dentro do Studio e/ou Construtor de módulos, e pode ser utilizado para descrever o campo aos administradores.<br><br><b>Valor predefinido</b> será exibido no campo. Os utilizadores podem introduzir um novo valor no campo ou utilizar o valor predefinido.<br><br> Selecionar a caixa de seleção <b>Atualização em lote</b>, para poder utilizar a funcionalidade de atualização em lote no campo.<br><br>O <b>Tamanho máximo</b> determina o número máximo de caracteres que podem ser introduzidos no campo.<br><br>Selecionar a caixa de seleção <b>Campo obrigatório</b> para tornar o campo obrigatório. Deve ser fornecido um valor para o campo, de forma a poder guardar o registo que contenha o campo.<br><br>Selecionar a caixa de seleção <b>Reportável</b> para permitir que o campo possa ser utilizado para filtrar e exibir dados nos Relatórios.<br><br>Selecionar a caixa de seleção <b>Auditoria</b> para poder controlar as alterações efetuadas ao campo no registo de alterações.<br><br>Selecionar uma opção no campo <b>Importável</b> no Assistente de importação, para permitir, proibir ou exigir que o campo seja importado.<br><br>Selecionar uma opção no campo <b>Fundir duplicados</b> campo para ativar ou desativar as funcionalidades de fundir duplicados, ou encontrar duplicados.<br><br>Propriedades adicionais podem ser definidas para determinados tipos de dados.',
            'editField' => 'As propriedades deste campo podem ser personalizadas.<br><br>Clique em <b>Clonar</ b> para criar um campo novo, com as mesmas propriedades',
            'mbeditField' => 'Pode personalizar o <b>Rótulo</b> de um campo do modelo. As outras propriedades do campo não podem ser personalizadas.<br><br>Clicar em <b>Clonar</b> para criar um novo campo com as mesmas propriedades.<br><br> Para remover um campo do modelo, para que não seja exibido no módulo, deverá remover o campo do <b>esquema</b> apropriado.'

        ),
        'exportcustom' => array(
            'exportHelp' => 'Exportar as personalizações efetuadas no Estúdio, criando pacotes que podem ser carregados noutras instâncias do SuiteCRM através do <b>Carregador de Módulos</b>.<br><br>Em primeiro lugar, deverá introduzir um <b>Nome de pacote</b>. Poderá ainda fornecer informação sobre o <b>Autor</b> e uma <b>Descrição</b> do pacote.<br><br> Selecione os módulos que contenham as personalizações que deseja exportar. Apenas serão exibidos os módulos com personalizações.<br><br> Em seguida, clique em <b>Exportar</b> para criar um pacote .zip contendo as personalizações.',
            'exportCustomBtn' => 'Clique em <b>Exportar</b> para criar um ficheiro .zip para o pacote que contém as personalizações que deseja exportar.',
            'name' => 'Este é o <b>Nome</b> do pacote. Esse nome será exibido durante a instalação.',
            'author' => 'Este é o <b>Autor</b> que é apresentado durante a instalação, como o nome da entidade que criou o pacote. O autor pode ser um indivíduo ou uma empresa.',
            'description' => 'Esta é a <b>Descrição</b> do pacote que será exibido durante a instalação.',
        ),
        'studioWizard' => array(
            'mainHelp' => 'Bem-vindo à área das <b>Ferramentas de programador</b>. <br/><br/>Utilize as ferramentas desta área para criar e gerir campos e módulos padrão ou personalizados.',
            'studioBtn' => 'Utilizar o <b>Estúdio</b> para personalizar módulos implementados.',
            'mbBtn' => 'Usar o <b>Construtor de módulos</b> para criar novos módulos.',
            'sugarPortalBtn' => 'Utilize o <b>Editor do portal CRM</b> para gerir e personalizar o portal do CRM.',
            'dropDownEditorBtn' => 'Utilizar o <b>Editor de listas seleção</b> para adicionar e editar listas globais em campos do tipo listas de seleção.',
            'appBtn' => 'O modo de aplicação corresponde ao local onde pode personalizar várias propriedades do programa, tais como o número de relatórios TPS que são exibidas na página inicial',
            'backBtn' => 'Retornar à etapa anterior.',
            'studioHelp' => 'Utilizar o <b>Estúdio</b> para definir a informação a exibir e o modo como esta será apresentada nos módulos.',
            'moduleBtn' => 'Clique para editar este módulo.',
            'moduleHelp' => 'Os componentes que pode personalizar para que o módulo apareça aqui.<br><br>Clique num ícone para selecionar o componente a editar.<br><br>Clique em<b>Repor módulo</b> para remover personalizações e restaurar para o estado original.',
            'fieldsBtn' => 'Criar e personalizar os <b>Campos</b> para armazenar informações no módulo.',
            'labelsBtn' => 'Editar as <b>Etiquetas</b> que serão exibidas para os campos e outros títulos no módulo.',
            'relationshipsBtn' => 'Criar ou visualizar <b>Relacionamentos</b> existentes para o módulo.',
            'layoutsBtn' => 'Personalizar <b>esquema</b> do módulo. Os esquemas são as diferentes vistas do módulo contendo campos.<br><br>Pode determinar quais os campos que aparecem e como os mesmos estão organizados em cada esquema.',
            'subpanelBtn' => 'Defina quais os campos a serem exibidos nos <b>subpainéis</b> do módulo.',
            'portalBtn' => 'Personalizar os <b>esquemas</b> de módulo que aparecem no <b>portal do CRM</b>.',
            'layoutsHelp' => 'Os <b>esquemas</b> de módulos que podem ser personalizados são exibidos aqui.<br><br>Os esquemas exibem campos e dados dos campos.<br><br> Clique num ícone para selecionar o esquema a editar.',
            'subpanelHelp' => 'Os <b>subpainéis</b> no módulo, que possam ser personalizados são exibidos aqui.<br><br>Clique num ícone para selecionar o módulo a editar.',
            'newPackage' => 'Clique em <b>Novo pacote</b> para criar um novo pacote.',
            'exportBtn' => 'Clique em <b>Exportar personalizações</b> para criar e carregar um pacote contendo as personalizações efetuadas no Estúdio para módulos específicos.',
            'mbHelp' => 'Utilize o <b>Construtor de módulos</b> para criar pacotes contendo módulos personalizados baseados em objetos padrão ou personalizados.',
            'viewBtnEditView' => 'Personalizar o esquema <b>Vista de edição</b> do módulo.<br><br>A vista de edição é o formulário que contém os campos de entrada para a captura de dados introduzidos pelo utilizador.',
            'viewBtnDetailView' => 'Personalizar o esquema <b>Vista de detalhe</b> do módulo.<br><br>A vista de detalhe exibe os dados dos campos inseridos pelo utilizador.',
            'viewBtnDashlet' => 'Personalizar o módulo das <b>miniaplicações SuiteCRM</b>, incluindo as miniaplicações Vista de lista e Pesquisar.<br><br>A miniaplicação do SuiteCRM estará disponível para adicionar às páginas no módulo de entrada.',
            'viewBtnListView' => 'Personalizar o esquema <b>Vista de lista</b> do módulo.<br><br>Os resultados das pesquisas são exibidos na vista de lista.',
            'searchBtn' => 'Personalizar o esquema <b>Pesquisa</b> do módulo.<br><br>Defina quais os campos que podem ser utilizados ​para filtrar registos que apareçam na vista de lista.',
            'viewBtnQuickCreate' => 'Personalizar o esquema <b>Criação rápida</b> do módulo.<br><br>O formulário de criação rápida é exibido nos subpaineis e no módulo de emails.',
            'addLayoutHelp' => "Para criar um esquema personalizado para um grupo de segurança, selecionar o grupo de segurança adequado e o esquema a partir do qual pretende copiar, e que servirá como ponto de partida.",
            'searchHelp' => 'Os formulários de <b>Pesquisa</b> que possam ser personalizados são aqui exibidos.<br><br>Os formulários de pesquisa contêm campos para filtrar os registos.<br><br>Clique num ícone para selecionar o esquema de pesquisa a editar.',
            'dashletHelp' => 'Os esquemas das <b>miniaplicações do CRM</b>, que possam ser personalizadas, são exibidas aqui.<br><br>As miniaplicações do CRM estarão disponíveis para serem adicionadas às páginas no módulo de entrada.',
            'DashletListViewBtn' => 'A <b>Vista de Lista das miniaplicações do CRM</b> exibe registos com base nos filtros da miniaplicação de pesquisa do CRM.',
            'DashletSearchViewBtn' => 'A <b>miniaplicação de pesquisa</b> filtra os registos para a vista de lista de miniaplicações do CRM.',
            'popupHelp' => 'Os esquemas dos <b>Popup</b> que podem ser personalizados são exibidos aqui.<br>',
            'PopupListViewBtn' => 'O <b>Popup da vista de lista</b> exibe os registos com base nas vistas de pesquisa de Popup.',
            'PopupSearchViewBtn' => 'A <b>Pesquisa Popup</b> exibe registos para a vista de lista Popup.',
            'BasicSearchBtn' => 'Personalizar o formulário de <b>Filtro rápido</b> que é exibido na aba Filtro rápido na área de pesquisa do módulo.',
            'AdvancedSearchBtn' => 'Personalizar o formulário de <b>Filtro avançado</b> que é exibido na aba de pesquisa avançada na área de pesquisa do módulo.',
            'portalHelp' => 'Gerir e personalizar o <b>Portal do CRM</b>.',
            'SPUploadCSS' => 'Carregar uma <b>folha de estilo</b> para o portal do CRM.',
            'SPSync' => '<b>Sincronizar</b> personalizações com a instância do portal SuiteCRM.',
            'Layouts' => 'Personalizar os <b>esquemas</b> dos módulos do portal do CRM.',
            'portalLayoutHelp' => 'Os módulos no Portal SuiteCRM são exibidos nesta área.<br><br>Selecione um módulo para editar o seu <b>esquema visual</b>.',
            'relationshipsHelp' => 'Todos os <b>relacionamentos</b> existentes entre o módulo e outros módulos instalados são exibidas aqui.<br><br>O <b>Nome</b> do relacionamento é o nome gerado pelo sistema para o relacionamento.<br><br>O <b>módulo principal</b> é o módulo proprietário dos relacionamentos. Por exemplo, todas as propriedades dos relacionamentos para as quais o módulo Contas é o módulo principal, são armazenadas nas tabelas da base de dados para as contas.<br><br>O <b>tipo</b> é o tipo de relacionamento que existe entre o módulo principal e o <b>módulo relacionado</b>.<br><br>Clique num título de coluna para ordenar pela coluna.<br><br>Clique numa linha na tabela do relacionamento para exibir as propriedades associadas ao relacionamento.<br><br>Clique em <b>adicionar relacionamento</b> para criar um novo relacionamento.<br><br>Os relacionamentos podem ser criados entre quaisquer dois módulos implementados.',
            'relationshipHelp' => 'Os <b>relacionamentos</b> podem ser criados entre o módulo e outro módulo instalado.<br><br>Os relacionamentos são visualmente expressos através de subpainéis e relacionam campos nos registos do módulo.<br><br>Selecionar um dos seguintes <b>Tipos</b> de relacionamentos para o módulo:<br><br> <b>Um-para-um</b> - Os registos de ambos os módulos conterão campos relacionados.<br><br> <b>Um-para-muitos</b> - O módulo de registo principal conterá um subpainel, e o registo do módulo relacionado irá conter um campo relacionado.<br><br> <b>Muitos-para-muitos</b> - Os registos de ambos os módulos irão exibir subpainéis.<br><br>Selecionar os <b>Módulos relacionados</b> para o relacionamento.<br><br>Se o tipo de relacionamento envolver subpainéis, selecionar a vista de subpainel para os módulos apropriados.<br><br>Clicar em <b>Guardar</b> para criar o relacionamento.',
            'convertLeadHelp' => 'Aqui pode adicionar módulos ao ecrã de conversão de esquema e modificar os esquemas dos existentes.<br/>
Pode reordenar os módulos arrastando as linhas correspondentes na tabela.<br/><br/>
<b>Módulo:</b> o nome do módulo.<br/><br/>
<b>Obrigatório:</b> os módulos obrigatórios devem ser criados ou selecionados antes que a pista possa ser convertida.<br/><br/>
<b>Copiar dados:</b> se estiverem selecionados, os campos de uma pista serão copiados para os campos com o mesmo nome nos registos recém-criados.<br/><br/>
<b>Permitir seleção:</b> os módulos com um campo relacionado em contactos podem ser selecionados em vez de serem criados durante o processo de conversão de pistas.<br/><br/>
<b>Editar:</b> Modificar o esquema de conversão para este módulo.<br/><br/>
<b>Eliminar:</b> Eliminar este módulo do esquema de conversão.<br/><br/>',


            'editDropDownBtn' => 'Editar uma lista de seleção global',
            'addDropDownBtn' => 'Adicionar nova lista de seleção global',
        ),
        'fieldsHelp' => array(
            'default' => 'Os <b>campos</b> no módulo estão listados aqui e ordenados por nome do campo.<br><br>O modelo do módulo inclui um conjunto pré-determinado de campos.<br><br>Para criar um novo campo, clicar em <b>Adicionar campo</b>.<br><br>Para editar um campo, clicar no botão <b>Nome do campo</b>.<br/><br/> Depois de implementar o módulo, os novos campos criados no Construtor de módulos, juntamente com os campos do modelo, serão considerados como campos padrão no Estúdio.',
        ),
        'relationshipsHelp' => array(
            'default' => 'Os <b>Relacionamentos</b> que foram criados entre o módulo e outros módulos, são exibidos aqui.<br><br>O <b>Nome</b> do relacionamento corresponde ao nome gerado pelo sistema para o relacionamento.<br><br>O <b>Módulo principal</b> é o módulo proprietário dos relacionamentos. As propriedades dos relacionamentos são guardadas nas tabelas da base de dados que pertencem ao módulo principal.<br><br> O <b>Tipo</b> corresponde ao tipo de relação existente entre o módulo principal e o <b>Módulo relacionado</b>.<br><br>Clicar num título de coluna para ordenar pela coluna.<br><br>Clicar numa linha da tabela de relacionamentos para visualizar e editar as propriedades associadas ao relacionamento.<br><br>Clicar em <b>Adicionar relacionamento</b> para criar um novo relacionamento.',
            'addrelbtn' => 'passe o rato sobre a ajuda para adicionar relacionamento...',
            'addRelationship' => 'Os <b>relacionamentos</b> podem ser criados entre o módulo e outro módulo personalizado ou implementado.<br><br>Os relacionamentos são visualmente expressos através de subpainéis e relacionam campos nos registos do módulo.<br><br>Selecionar um dos seguintes <b>tipos</b> de relacionamentos para o módulo:<br><br> <b>Um-para-um</b> - Os registos de ambos os módulos conterão campos relacionados.<br><br> <b>Um-para-muitos</b> - O módulo de registo principal conterá um subpainel, e o registo do módulo relacionado irá conter um campo relacionado.<br><br> <b>Muitos-para-muitos</b> - Os registos de ambos os módulos irão exibir subpainéis.<br><br>Selecionar os <b>Módulos relacionados</b> para o relacionamento.<br><br>Se o tipo de relacionamento envolver subpainéis, selecionar a vista de subpainel para os módulos apropriados.<br><br>Clicar em <b>Guardar</b> para criar a relação.',
        ),
        'labelsHelp' => array(
            'default' => 'Os <b>Rótulos</b> para os campos e outros títulos no módulo, podem ser alterados.<br><br>Editar o rótulo clicando no campo, introduzir um novo rótulo e clicar em <b>Guardar</b>.<br><br>Se os pacotes de idiomas estiverem instalados na aplicação, pode selecionar o <b>Idioma</b> a utilizar nos rótulos.',
            'saveBtn' => 'Clique em <b>Guardar</b> para guardar todas as alterações.',
            'publishBtn' => 'Clique em <b>Guardar e implementar</b> para guardar todas as alterações e torná-las ativas.',
        ),
        'portalSync' => array(
            'default' => 'Introduzir o <b>URL do Portal do CRM</b> da instância de portal a atualizar e clicar em <b>Ir</b>.<br><br>Em seguida, introduzir um nome de utilizador e senha SuiteCRM válidas e clicar em <b>Iniciar sincronização</b>.<br><br> As personalizações efetuadas aos <b>esquemas</b> do portal, juntamente com a <b>folha de estilos</b>, caso alguma tenha sido carregada, serão transferidas para a instância do portal especificada.',
        ),
        'portalStyle' => array(
            'default' => 'Pode personalizar a aparência do Portal SuiteCRM, utilizando uma folha de estilos.<br><br>Selecione uma <b>Folha de estilos</b> para carregar.<br><br>A folha de estilos será implementada no Portal SuiteCRM, na próxima vez que for executada uma sincronização.',
        ),
    ),

    'assistantHelp' => array(
        'package' => array(
            //custom begin
            'nopackages' => 'Para começar um projeto, clicar em <b>Novo Pacote</b> para criar um novo pacote, que irá conter o(s) seu(s) módulo (s) personalizado(s).<br/><br/>Cada pacote pode conter um ou mais módulos.<br/><br/>Por exemplo, pode querer criar um pacote contendo um módulo personalizado que esteja relacionado com o módulo padrão Contas. Ou, pode querer criar um pacote contendo vários novos módulos que funcionam juntos, como um projeto, e que estão relacionados entre si e com outros módulos na aplicação.',
            'somepackages' => 'O <b>pacote</b> funciona como um contentor para os módulos personalizados, os quais fazem parte de um projeto. O pacote pode conter um ou mais <b>módulos</b> personalizados que podem ser relacionados entre si ou com outros módulos da aplicação.<br/><br/>Depois de criar um pacote para o seu projeto, pode criar imediatamente módulos para o pacote, ou pode voltar ao Construtor de módulos, num momento posterior para completar o projeto.<br><br>Quando o projeto estiver completo, pode <b>Implementar</b> o pacote, para instalar os módulos personalizados na aplicação.',
            'afterSave' => 'O novo pacote deve conter, pelo menos, um módulo. Pode criar um ou mais módulos personalizados para o pacote.<br/><br/>Clicar em <b>Novo módulo</b> para criar um módulo personalizado para este pacote.<br/><br/>Depois de criar, pelo menos um módulo, pode publicar ou implementar o pacote para o tornar disponível na sua ou noutras instâncias.<br/><br/>Para implementar o pacote, em apenas um passo, na sua instância SuiteCRM, clicar em <b>Implementar</b>.<br><br>Clicar em <b>Publicar</b> para guardar o pacote como um ficheiro .zip. Após o ficheiro .zip ter sido guardado no seu sistema, utilize o <b>Carregador de módulos</b> para carregar e instalar o pacote na sua instância SuiteCRM.<br/><br/>Pode distribuir o ficheiro a outros utilizadores, de forma a poderem carregar e instalar nas suas próprias instâncias SuiteCRM.',
            'create' => 'Um <b>pacote</b> funciona como um contentor para os módulos personalizados que  fazem parte de um projeto. O pacote pode conter um ou mais <b>módulos</b> personalizados que podem ser relacionados entre si ou com outros módulos da aplicação.<br/><br/>Depois de criar um pacote para o seu projeto, pode criar módulos para o pacote imediatamente, ou pode voltar para o Construtor Módulos, num momento posterior, para concluir o projeto.',
        ),
        'main' => array(
            'welcome' => 'Utilize as <b>Ferramentas de programador</b> para criar e gerir módulos e campos padrão e personalizados. <br/><br/>Para gerir módulos na aplicação, clicar em <b>Estúdio</b>. <br/><br/>Para criar módulos personalizados, clicar em <b>Construtor Módulos</b>.',
            'studioWelcome' => 'Todos os módulos instalados atualmente, incluindo os objetos padrão e carregados pelos através dos módulos, são personalizáveis no Estúdio.'
        ),
        'module' => array(
            'somemodules' => "Dado que o pacote atual contém pelo menos um módulo, pode <b>Implementar</b> os módulos do pacote na sua instância SuiteCRM ou <b>Publicar</b> o pacote para ser instalado nesta ou noutras instâncias SuiteCRM utilizando o <b>Carregador de módulos</b>.<br/><br/>Para instalar o pacote diretamente na sua instância SuiteCRM, clicar em <b>Implementar</b>.<br><br>Para criar um ficheiro .zip de pacote, que possa ser carregado e instalado nesta ou noutras instâncias SuiteCRM utilizando o <b>Carregador de módulos</b>, clicar em <b>Publicar</b>.<br/><br/>Pode construir os módulos deste pacote em etapas, e publicar ou implementar quando estiver pronto para o fazer.<br/><br/>Depois de publicar ou implementar um pacote, pode efetuar alterações às propriedades do pacote e personalizar mais os módulos. Em seguida, deverá reimplementar ou reinstalar o pacote para aplicar as alterações.",
            'editView' => 'Aqui pode editar os campos existentes. Pode remover qualquer um dos campos existentes ou adicionar campos disponíveis no painel da esquerda.',
            'create' => 'Ao escolher o tipo de módulo <b>Tipo</b> que deseja criar, tenha em conta os tipos de campos que gostaria de ter no módulo.<br/><br/>Cada modelo de módulo contém um conjunto de campos pertencentes ao tipo de módulo descrito pelo título.<br/><br/><b>Básico</b> - Fornece campos básicos que aparecem nos módulos padrão, tais como o nome, atribuído a, equipa, data de criação e descrição.<br/><br/> <b>Empresa</b> - Fornece campos específicos para as organizações, tais como o nome da empresa, indústria e endereço de faturação. Utilize este modelo para criar módulos semelhantes ao módulo padrão de contas.<br/><br/> <b>Pessoa</b> - Fornece campos individuais específicos, tais como a saudação, título, nome, endereço e número de telefone. Utilize este modelo para criar módulos semelhantes aos módulos padrão de contactos e pistas padrão.<br/><br/><b>Problema</b> - Fornece campos específicos de ocorrências e erros, tais como o número, situação, prioridade e descrição. Utilize este modelo para criar módulos semelhantes aos módulos padrão de ocorrências e anomalias.<br/><br/>Nota: Após criar o módulo, pode editar os rótulos dos campos fornecidos pelo modelo, bem como criar campos personalizados para adicionar aos esquemas dos módulos.',
            'afterSave' => 'Personaliza o módulo para atender às suas necessidades de edição e criação de campos, estabelecendo relacionamentos com outros módulos e organizando os campos dentro dos esquemas.<br/><br/>Para visualizar os campos do modelo e gerir os campos personalizados dentro do módulo, clicar em <b>Ver campos</b>.<br/><br/>Para criar e gerir os relacionamentos entre o módulo e outros módulos, quer os módulos estejam presentes na aplicação ou outros módulos personalizados dentro do mesmo pacote, clicar em <b>Ver relacionamentos</b>.<br/><br/>Para editar os esquemas do módulo, clicar em <b>Ver visuais</b>. Pode alterar os esquemas da Vista de detalhes, Vista de edição e Vista de lista para o módulo, tal como faria para os módulos já presentes na aplicação através do Estúdio.<br/><br/> Para criar um módulo com as mesmas propriedades do módulo atual, clicar em <b>Duplicar</b>. Pode personalizar ainda mais o novo módulo.',
            'viewfields' => 'Os campos no módulo podem ser personalizados para atender às suas necessidades.<br/><br/>Não pode eliminar campos padrão, mas pode removê-los a partir dos esquemas apropriados nas páginas de esquemas.<br/><br/>Pode criar rapidamente novos campos que tenham propriedades semelhantes às dos campos existentes, clicando em <b>Clonar</b> no formulário das <b>Propriedades</b>. Introduzir quaisquer novas propriedades, e em seguida, clicar em <b>Guardar</b>.<br/><br/>É recomendado a definição de todas as propriedades para os campos padrão e campos personalizados antes de publicar e instalar o pacote contendo o módulo personalizado.',
            'viewrelationships' => 'Pode criar relacionamentos do tipo muitos-para-muitos entre o módulo atual e outros módulos no pacote, e/ou entre o módulo atual e os módulos já instalados na aplicação.<br><br> Para criar relacionamentos de um-para-muitos e de um-para-um, deverá criar campos <b>Relação</b> e <b>Relação flexível</b> para os módulos.',
            'viewlayouts' => 'Pode controlar os campos que estão disponíveis para a recolha de dados dentro da <b>Vista de edição</b>. Pode também controlar quais os dados que são exibidos na <b>Vista de detalhe</b>. As vistas não têm que corresponder entre elas. <br/><br/>O formulário de Criação rápida é exibido quando o botão <b>Criar</b> for clicado num subpainel do módulo. Por padrão, o esquema do formulário <b>Criação rápida</b> é o mesmo que o esquema padrão da <b>Vista de edição</b>. Pode personalizar o formulário Criação rápida, de forma a que contenha menos e/ou campos diferentes do que os campos presentes no esquema da vista de edição.<br><br>Pode determinar a segurança do módulo utilizando a personalização do esquema, juntamente com a <b>gestão de funções</b>.<br><br>',
            'existingModule' => 'Depois de criar e personalizar este módulo, pode criar módulos adicionais ou retornar ao pacote para o <b>publicar</b> ou <b>implementar</b> o pacote.<br><br>Para criar módulos adicionais, clicar em <b>Duplicar</b> para criar um módulo com as mesmas características que o módulo atual, ou navegar de volta para o pacote, e clicar em <b> Novo módulo</b>.<br><br> Se estiver pronto a <b>publicar</b> ou <b>implementar</b> o pacote que contém este módulo, deverá navegar de volta para o pacote, para executar essas funções. Pode publicar e implementar pacotes que contenham pelo menos um módulo.',
            'labels' => 'Os rótulos dos campos padrão, assim como os campos personalizados podem ser alteradas. Alterar os rótulos dos campos não irá afetar os dados guardados nos campos.',
        ),
        'listViewEditor' => array(
            'modify' => 'Existem três colunas exibidas à esquerda. A coluna "Padrão" contém os campos que são exibidos numa exibição de vista de lista padrão, a coluna "Disponível" contém campos que um utilizador pode escolher e utilizar para criar uma vista de lista personalizada, e a coluna "Oculto" que contém campos disponíveis para que, como administrador, os possa adicionar às colunas Padrão ou Disponível, para posterior utilização pelos utilizadores, mas que estão, de momento, desativados.',
            'savebtn' => 'Ao clicar em <b>Guardar</b>, irá guardar todas as alterações e torná-las ativas.',
            'Hidden' => 'Os campos ocultos são campos que não estão atualmente disponíveis para que os utilizadores os utilizem em vistas de lista.',
            'Available' => 'Os campos disponíveis são campos que não são exibidos por padrão, mas que podem ser ativados pelos utilizadores.',
            'Default' => 'Os campos padrão são exibidos a utilizadores que não criaram configurações personalizadas de vistas de lista.'
        ),

        'searchViewEditor' => array(
            'modify' => 'Existem duas colunas exibidas à esquerda. A coluna "Padrão" contém os campos que serão exibidos na vista de pesquisa, e a coluna "Oculto" contém os campos disponíveis para que, enquanto administrador, as possa adicionar à vista.',
            'savebtn' => 'Ao clicar em <b>Guardar e implementar</b> irá guardar todas as alterações e torná-las ativas.',
            'Hidden' => 'Os campos ocultos são campos que não serão exibidos na vista de pesquisa.',
            'Default' => 'Campos padrão serão mostrados na vista das pesquisas.'
        ),
        'layoutEditor' => array(
            'default' => 'Existem duas colunas exibidas à esquerda. A coluna da direita, designada por esquema atual ou pré-visualização de esquema, é onde pode alterar o esquema do módulo. A coluna da esquerda, designada caixa de ferramentas, contem elementos e ferramentas úteis para utilizar durante a edição do esquema.<br/><br/>Se a área do esquema tiver como título Esquema atual, então está a trabalhar numa cópia do esquema em utilização pelo módulo para exibição. <br/><br/>Se o título da área for Pré-visualização de visual, então está a trabalhar numa cópia criada anteriormente, através do botão Guardar. Note que o esquema poderá já ter sido alterado em relação à versão visualizada pelos utilizadores deste módulo.',
            'saveBtn' => 'Ao clicar neste botão, o esquema é guardado, para que possa manter as suas alterações. Quando retornar a este módulo, vai começar a partir deste esquema alterado. O seu esquema, no entanto, não será visualizado pelos utilizadores do módulo até clicar no botão Guardar e publicar.',
            'publishBtn' => 'Clicar neste botão para implementar o esquema. Isto significa que, este esquema será imediatamente visualizado pelos utilizadores deste módulo.',
            'toolbox' => 'A caixa de ferramentas contém uma variedade de funcionalidades úteis para a edição dos esquemas, incluindo uma área de lixeira, um conjunto de elementos adicionais e um conjunto de campos disponíveis. Qualquer destes itens pode ser arrastado e largado no esquema.',
            'panels' => 'Esta área mostra como o esquema irá surgir aos utilizadores deste módulo quando o mesmo for implementado.<br/><br/>Pode reposicionar elementos, tais como campos, linhas e painéis, arrastando e largando-os; eliminar elementos, arrastando-os e largando-os na lixeira, na caixa de ferramentas, ou adicionar novos elementos, arrastando-os da caixa de ferramentas e largando-os nas posições desejadas do esquema.'
        ),
        'dropdownEditor' => array(
            'default' => 'Existem duas colunas exibidas à esquerda. A coluna da direita, designada por esquema atual ou pré-visualização de esquema, é onde pode alterar o esquema do módulo. A coluna da esquerda, designada caixa de ferramentas, contem elementos e ferramentas úteis para utilizar durante a edição do esquema.<br/><br/>Se a área do esquema tiver como título Esquema atual, então está a trabalhar numa cópia do esquema em utilização pelo módulo para exibição. <br/><br/>Se o título da área for Pré-visualização de visual, então está a trabalhar numa cópia criada anteriormente, através do botão Guardar. Note que o esquema poderá já ter sido alterado em relação à versão visualizada pelos utilizadores deste módulo.',
            'dropdownaddbtn' => 'Ao clicar neste botão adiciona um novo item à lista de seleção.',

        ),
        'exportcustom' => array(
            'exportHelp' => 'As personalizações efetuadas pelo Estúdio nesta instância do CRM, podem ser empacotadas e instaladas noutra instância.<br><br>Indique um <b>Nome para o pacote</b>. Pode fornecer informação sobre o <b>autor</b> e a <b>descrição</b> do pacote.<br><br> Selecione o(s) módulo(s ) que contenham as personalizações a exportar (apenas serão exibidos os módulos que contenham personalizações para que os possa selecionar).<br><br>Clique em <b>Exportar</b> para criar um ficheiro .zip com o pacote de personalizações. O ficheiro .zip pode ser carregado noutra instância através do <b>Carregador de módulos</b>.',
            'exportCustomBtn' => 'Clique em <b>Exportar</b> para criar um ficheiro .zip para o pacote que contém as personalizações que deseja exportar.',
            'name' => 'O <b>Nome</b> do pacote será exibido no Carregador de módulos após o carregamento do pacote para instalação no Estúdio.',
            'author' => 'O <b>Autor</b> é o nome da entidade que criou o pacote. O autor pode ser um indivíduo ou uma empresa.<br><br>O Autor será exibido no Carregador Módulos após o carregamento do pacote para instalação no Estúdio.',
            'description' => 'A <b>Descrição</b> do pacote será exibida no Carregador Módulos após o carregamento do pacote para instalação no Estúdio.',
        ),
        'studioWizard' => array(
            'mainHelp' => 'Bem-vindo à área das <b>Ferramentas de programador</b>. <br/><br/>Utilize as ferramentas desta área para criar e gerir campos e módulos padrão ou personalizados.',
            'studioBtn' => 'Utilizar o <b>Estúdio</b> para personalizar os módulos instalados, alterando o posicionamento dos campos, selecionando os que estão disponíveis campos e criando campos de dados personalizados.',
            'mbBtn' => 'Usar o <b>Construtor de módulos</b> para criar novos módulos.',
            'appBtn' => 'Utilizar o modo de aplicação para personalizar várias propriedades do programa, tais como o número de relatórios TPS que serão exibidos na página inicial',
            'backBtn' => 'Retornar à etapa anterior.',
            'studioHelp' => 'Utilize o<b>Estúdio</b> para personalizar os módulos instalados.',
            'moduleBtn' => 'Clique para editar este módulo.',
            'moduleHelp' => 'Selecione o componente do módulo que gostaria de editar',
            'fieldsBtn' => 'Editar a informação a ser armazenada no módulo, controlando os <b>Campos</b> no módulo.<br/><br/>Aqui pode editar e criar campos personalizados.',
            'labelsBtn' => 'Clique em <b>Guardar</b> para guardar os seus rótulos personalizados.',
            'layoutsBtn' => 'Personalize os <b>esquemas</b> das vistas de edição, detalhe, lista e pesquisa.',
            'subpanelBtn' => 'Editar a informação que é exibida nestes subpainéis dos módulos.',
            'layoutsHelp' => 'Selecionar um <b>esquema a editar</b>.<br/><br/>Para alterar o esquema que contém campos para a entrada de dados, clique em <b>Vista de edição</b>.<br/><br/>Para alterar o esquema que exibe os dados introduzidos nos campos da vista de edição, clique em <b>Vista de detalhe</b>.<br/><br/>Para alterar as colunas que aparecem na lista padrão, clique em <b>Vista de lista</b>.<br/><br/>Para alterar os formulários das pesquisas básica e avançada, clique em <b>Pesquisa</b>.',
            'subpanelHelp' => 'Selecionar o <b>subpainel</b> a editar.',
            'searchHelp' => 'Clicar em <b>Restaurar predefinição</b> para repor a vista para o seu esquema original.<br><br><b>Restaurar predefinição</b> só repõe o posicionamento dos campos no esquema original. Para alterar rótulos dos campos, clique no ícone EDITAR junto a cada um dos campos.',
            'newPackage' => 'Clique em <b>Novo pacote</b> para criar um novo pacote.',
            'mbHelp' => '<b>Bem-vindo ao Construtor de Módulos.</b><br/><br/>Utilize <b>Construtor módulos</b> para criar pacotes contendo módulos personalizados baseados em objetos padrão ou personalizados. <br/><br/>Para começar, clique em <b>Novo pacote</b> para criar um novo pacote, ou selecionar um pacote para editar.<br/><br/> Um <b>pacote</b> funciona como um contentor para módulos personalizados, os quais fazem parte de um projeto. O pacote pode conter um ou mais módulos personalizados que podem ser relacionados uns com os outros ou com módulos do aplicativo.<br/><br/>Exemplos: Pode querer criar um pacote contendo um módulo personalizado que esteja relacionado com o módulo padrão de contas padrão. Ou, você pode querer criar um pacote contendo vários novos módulos que funcionam em conjunto como um projeto e que estão relacionados entre si e com os módulos do aplicativo.',
            'exportBtn' => 'Clique em <b>Exportar personalizações</b> para criar um pacote contendo as personalizações efetuadas no Estúdio para módulos específicos.',
        ),


    ),
//HOME
    'LBL_HOME_EDIT_DROPDOWNS' => 'Listas de seleção — Editor',

//STUDIO2
    'LBL_MODULEBUILDER' => 'Construtor de módulos',
    'LBL_STUDIO' => 'Studio',
    'LBL_DROPDOWNEDITOR' => 'Listas de seleção — Editor',
    'LBL_DEVELOPER_TOOLS' => 'Ferramentas de programador',
    'LBL_SUITEPORTAL' => 'Editor do portal do CRM',
    'LBL_PACKAGE_LIST' => 'Lista de pacotes',
    'LBL_HOME' => 'Entrada',
    'LBL_NONE' => ' será ignorado ',
    'LBL_DEPLOYE_COMPLETE' => 'Implementação concluída',
    'LBL_DEPLOY_FAILED' => 'Ocorreu um erro durante o processo de implementação e o seu pacote pode não ter sido instalado corretamente',
    'LBL_AVAILABLE_SUBPANELS' => 'Subpainéis disponíveis',
    'LBL_ADVANCED' => 'Avançado',
    'LBL_ADVANCED_SEARCH' => 'Filtro avançado',
    'LBL_BASIC' => 'Básica',
    'LBL_BASIC_SEARCH' => 'Filtro rápido',
    'LBL_CURRENT_LAYOUT' => 'Esquema',
    'LBL_CURRENCY' => 'Moeda',
    'LBL_DASHLET' => 'Miniaplicação do CRM',
    'LBL_DASHLETLISTVIEW' => 'Vista de lista das miniaplicações',
    'LBL_POPUP' => 'Vista de popup',
    'LBL_POPUPLISTVIEW' => 'Popup da vista de lista',
    'LBL_POPUPSEARCH' => 'Pesquisa do Popup',
    'LBL_DASHLETSEARCHVIEW' => 'Pesquisar miniaplicações',
    'LBL_DETAILVIEW' => 'Vista de detalhe',
    'LBL_DROP_HERE' => '[Largar aqui]',
    'LBL_EDIT' => 'Editar',
    'LBL_EDIT_LAYOUT' => 'Editar esquema',
    'LBL_EDIT_FIELDS' => 'Editar campos',
    'LBL_EDITVIEW' => 'Vista de edição',
    'LBL_FILLER' => '(preencher)',
    'LBL_FIELDS' => 'Campos',
    'LBL_FAILED_TO_SAVE' => 'Falha ao guardar',
    'LBL_FAILED_PUBLISHED' => 'Falha ao publicar',
    'LBL_HOMEPAGE_PREFIX' => 'Minha',
    'LBL_LAYOUT_PREVIEW' => 'Pré-visualizar esquema',
    'LBL_LAYOUTS' => 'Esquemas',
    'LBL_LISTVIEW' => 'Vista de lista',
    'LBL_MODULES' => 'Módulos',
    'LBL_MODULE_TITLE' => 'Studio',
    'LBL_NEW_PACKAGE' => 'Novo pacote',
    'LBL_NEW_PANEL' => 'Novo painel',
    'LBL_NEW_ROW' => 'Nova linha',
    'LBL_PACKAGE_DELETED' => 'Pacote eliminado',
    'LBL_PUBLISHING' => 'A publicar...',
    'LBL_PUBLISHED' => 'Publicado',
    'LBL_SELECT_FILE' => 'Selecionar ficheiro',
    'LBL_SUBPANELS' => 'Subpainéis',
    'LBL_SUBPANEL' => 'Subpainel',
    'LBL_SUBPANEL_TITLE' => 'Título:',
    'LBL_SEARCH_FORMS' => 'Filtro',
    'LBL_SEARCH' => 'Pesquisar',
    'LBL_SEARCH_BUTTON' => 'Pesquisar',
    'LBL_FILTER' => 'Filtro',
    'LBL_TOOLBOX' => 'Caixa de ferramentas',
    'LBL_QUICKCREATE' => 'Criação rápida',
    'LBL_EDIT_DROPDOWNS' => 'Editar uma lista de seleção global',
    'LBL_ADD_DROPDOWN' => 'Adicionar uma nova lista de seleção global',
    'LBL_BLANK' => '-- vazio --',
    'LBL_TAB_ORDER' => 'Ordem de tabulação',
    'LBL_TABDEF_TYPE' => 'Exibir tipo',
    'LBL_TABDEF_TYPE_HELP' => 'Selecione a forma como esta secção deve ser exibida. Esta opção só tem efeito se tiver ativado as abas nesta vista.',
    'LBL_TABDEF_TYPE_OPTION_TAB' => 'Tabulação',
    'LBL_TABDEF_TYPE_OPTION_PANEL' => 'Painel',
    'LBL_TABDEF_TYPE_OPTION_HELP' => 'Selecione PAINEL para ter este painel exibido na vista do visual. Selecione ABA para ter este painel exibido no visual, dentro de uma aba independente. Quando estiver definido ABA para um painel, os painéis subsequentes serão exibidos na aba. <br/>Uma nova aba será iniciada no próximo painel em que a opção de ABA esteja selecionada. Se a opção ABA estiver selecionada para um painel abaixo do primeiro painel, o primeiro painel será, necessariamente, uma aba.',
    'LBL_TABDEF_COLLAPSE' => 'Contrair',
    'LBL_TABDEF_COLLAPSE_HELP' => 'Selecionar para que o estado padrão deste painel seja o de contraído.',
    'LBL_DROPDOWN_TITLE_NAME' => 'Nome',
    'LBL_DROPDOWN_LANGUAGE' => 'Idioma',
    'LBL_DROPDOWN_ITEMS' => 'Listar itens',
    'LBL_DROPDOWN_ITEM_NAME' => 'Nome do Item',
    'LBL_DROPDOWN_ITEM_LABEL' => 'Exibir rótulo',
    'LBL_SYNC_TO_DETAILVIEW' => 'Sincronizar com vista de detalhes',
    'LBL_SYNC_TO_DETAILVIEW_HELP' => 'Selecionar esta opção para sincronizar este esquema de edição com o visual da vista de detalhe correspondente. Os campos e as suas posições na vista de edição<br>serão sincronizados e guardados automaticamente na vista de detalhe, após clicar em Guardar ou em Guardar e implementar, na vista de edição.<br>As alterações aos esquemas não poderão ser efetuadas na vista de detalhe.',
    'LBL_SYNC_TO_DETAILVIEW_NOTICE' => 'Esta vista de detalhe está sincronizada com a vista de edição correspondente.<br> Os campos e as suas posições nesta vista de detalhe refletem os campos e as suas posições na vista de edição.<br> Alterações à vista de detalhe não poderão ser guardadas ou implementadas nesta página. Deverá efetuar as alterações ou dessincronizar os esquemas na vista de edição. ',
    'LBL_COPY_FROM_EDITVIEW' => 'Copiar da vista de edição',
    'LBL_DROPDOWN_BLANK_WARNING' => 'Os valores são obrigatórios tanto para o Nome do Item como para  o Rótulo de Exibição. Para adicionar um item em branco, clique em Adicionar sem introduzir qualquer valor para o Nome do Item como para o Rótulo de Exibição.',
    'LBL_DROPDOWN_KEY_EXISTS' => 'A chave já existe na lista',
    'LBL_NO_SAVE_ACTION' => 'Não foi possível encontrar a ação guardar para esta vista.',
    'LBL_BADLY_FORMED_DOCUMENT' => 'Studio2:establishLocation: documento mal estruturado',


//RELATIONSHIPS
    'LBL_MODULE' => 'Módulo',
    'LBL_LHS_MODULE' => 'Módulo principal',
    'LBL_CUSTOM_RELATIONSHIPS' => '* relacionamento criado no Estúdio',
    'LBL_RELATIONSHIPS' => 'Relacionamentos',
    'LBL_RELATIONSHIP_EDIT' => 'Editar relacionamento',
    'LBL_REL_NAME' => 'Nome',
    'LBL_REL_LABEL' => 'Rótulo',
    'LBL_REL_TYPE' => 'Tipo',
    'LBL_RHS_MODULE' => 'Módulo relacionado',
    'LBL_NO_RELS' => 'Sem Relacionamentos',
    'LBL_RELATIONSHIP_ROLE_ENTRIES' => 'Condição opcional',
    'LBL_RELATIONSHIP_ROLE_COLUMN' => 'Coluna',
    'LBL_RELATIONSHIP_ROLE_VALUE' => 'Valor',
    'LBL_SUBPANEL_FROM' => 'Subpainel de',
    'LBL_RELATIONSHIP_ONLY' => 'Nenhum elemento visível será criado para este relacionamento, dado que já existe um relacionamento visível pré-existente entre estes dois módulos.',
    'LBL_ONETOONE' => 'Um para Um',
    'LBL_ONETOMANY' => 'Um para Muitos',
    'LBL_MANYTOONE' => 'Muitos para Um',
    'LBL_MANYTOMANY' => 'Muitos para Muitos',


//STUDIO QUESTIONS
    'LBL_QUESTION_EDIT' => 'Selecione um módulo a editar.',
    'LBL_QUESTION_LAYOUT' => 'Selecione um esquema a editar.',
    'LBL_QUESTION_SUBPANEL' => 'Selecione um subpainel a editar.',
    'LBL_QUESTION_SEARCH' => 'Selecione um esquema de filtro a editar.',
    'LBL_QUESTION_MODULE' => 'Selecione um componente de módulo a editar.',
    'LBL_QUESTION_PACKAGE' => 'Selecione um pacote a editar, ou crie um novo pacote.',
    'LBL_QUESTION_EDITOR' => 'Selecione uma ferramenta.',
    'LBL_QUESTION_DASHLET' => 'Selecione um esquema de miniaplicação a editar.',
    'LBL_QUESTION_POPUP' => 'Selecione um esquema de popup a editar.',
//CUSTOM FIELDS
    'LBL_NAME' => 'Nome',
    'LBL_LABELS' => 'Rótulos',
    'LBL_MASS_UPDATE' => 'Atualização em lote',
    'LBL_DEFAULT_VALUE' => 'Valor predefinido',
    'LBL_REQUIRED' => 'Obrigatório',
    'LBL_DATA_TYPE' => 'Tipo',
    'LBL_HCUSTOM' => 'Personalizado',
    'LBL_HDEFAULT' => 'Padrão',
    'LBL_LANGUAGE' => 'Idioma:',
    'LBL_CUSTOM_FIELDS' => '* campo criado no Estúdio',

//SECTION
    'LBL_SECTION_EDLABELS' => 'Editar rótulos',
    'LBL_SECTION_PACKAGES' => 'Pacotes',
    'LBL_SECTION_PACKAGE' => 'Pacote',
    'LBL_SECTION_MODULES' => 'Módulos',
    'LBL_SECTION_DROPDOWNS' => 'Listas de seleção',
    'LBL_SECTION_PROPERTIES' => 'Propriedades',
    'LBL_SECTION_DROPDOWNED' => 'Editar lista de seleção',
    'LBL_SECTION_HELP' => 'Ajuda',
    'LBL_SECTION_MAIN' => 'Principal',
    'LBL_SECTION_FIELDEDITOR' => 'Editar campo',
    'LBL_SECTION_DEPLOY' => 'Implementar',
    'LBL_SECTION_MODULE' => 'Módulo',
//WIZARDS

//LIST VIEW EDITOR
    'LBL_DEFAULT' => 'Predefinido',
    'LBL_HIDDEN' => 'Oculto',
    'LBL_AVAILABLE' => 'Disponível',
    'LBL_LISTVIEW_DESCRIPTION' => 'Existem três colunas disponíveis abaixo. A coluna <b>Padrão</b> contém campos que são exibidos numa visualização de lista por padrão. A coluna <b>Adicional</b> contém campos que um utilizador pode escolher usar para criar uma visualização personalizada. A coluna <b>Disponível</b> exibe campos disponíveis para si como administrador para adicionar às colunas Padrão ou à Adicional para uso dos utilizadores.',
    'LBL_LISTVIEW_EDIT' => 'Editor da vista de lista',

//Manager Backups History
    'LBL_MB_PREVIEW' => 'Pré-visualizar',
    'LBL_MB_RESTORE' => 'Restaurar',
    'LBL_MB_DELETE' => 'Eliminar',
    'LBL_MB_DEFAULT_LAYOUT' => 'Esquema predefinido',

//END WIZARDS

//BUTTONS
    'LBL_BTN_ADD' => 'Adicionar',
    'LBL_BTN_SAVE' => 'Guardar',
    'LBL_BTN_SAVE_CHANGES' => 'Guardar alterações',
    'LBL_BTN_DONT_SAVE' => 'Descartar alterações',
    'LBL_BTN_CANCEL' => 'Cancelar',
    'LBL_BTN_CLOSE' => 'Fechar',
    'LBL_BTN_SAVEPUBLISH' => 'Guardar e implementar',
    'LBL_BTN_CLONE' => 'Clonar',
    'LBL_BTN_ADDROWS' => 'Adicionar linhas',
    'LBL_BTN_ADDFIELD' => 'Adicionar campo',
    'LBL_BTN_ADDDROPDOWN' => 'Adicionar lista de seleção',
    'LBL_BTN_SORT_ASCENDING' => 'Ordenação ascendente',
    'LBL_BTN_SORT_DESCENDING' => 'Ordenação descendente',
    'LBL_BTN_EDLABELS' => 'Editar rótulos',
    'LBL_BTN_UNDO' => 'Desfazer',
    'LBL_BTN_REDO' => 'Refazer',
    'LBL_BTN_ADDCUSTOMFIELD' => 'Adicionar campo personalizado',
    'LBL_BTN_EXPORT' => 'Exportar personalizações',
    'LBL_BTN_DUPLICATE' => 'Duplicado',
    'LBL_BTN_PUBLISH' => 'Publicar',
    'LBL_BTN_DEPLOY' => 'Implementar',
    'LBL_BTN_EXP' => 'Exportar',
    'LBL_BTN_DELETE' => 'Eliminar',
    'LBL_BTN_VIEW_LAYOUTS' => 'Ver esquemas',
    'LBL_BTN_VIEW_FIELDS' => 'Ver campos',
    'LBL_BTN_VIEW_RELATIONSHIPS' => 'Ver relacionamentos',
    'LBL_BTN_ADD_RELATIONSHIP' => 'Adicionar relacionamento',
    'LBL_BTN_RENAME_MODULE' => 'Alterar o nome do módulo',
//TABS


//ERRORS
    'ERROR_ALREADY_EXISTS' => 'Erro: Campo Já Existente',
    'ERROR_INVALID_KEY_VALUE' => "Erro: Valor de chave inválido: [']",
    'ERROR_NO_HISTORY' => 'Nenhum ficheiro de histórico encontrado',
    'ERROR_MINIMUM_FIELDS' => 'Este esquema deve conter pelo menos um campo',
    'ERROR_GENERIC_TITLE' => 'Ocorreu um erro',
    'ERROR_REQUIRED_FIELDS' => 'Tem certeza de que pretende continuar? Os seguintes campos obrigatórios estão em falta no esquema:  ',


//PACKAGE AND MODULE BUILDER
    'LBL_PACKAGE_NAME' => 'Nome do pacote:',
    'LBL_MODULE_NAME' => 'Nome do Módulo:',
    'LBL_AUTHOR' => 'Autor:',
    'LBL_DESCRIPTION' => 'Descrição:',
    'LBL_KEY' => 'Chave:',
    'LBL_ADD_README' => ' Leia-me',
    'LBL_LAST_MODIFIED' => 'Última alteração:',
    'LBL_NEW_MODULE' => 'Novo Módulo',
    'LBL_LABEL' => 'Rótulo:',
    'LBL_LABEL_TITLE' => 'Rótulo',
    'LBL_WIDTH' => 'Largura',
    'LBL_PACKAGE' => 'Pacote:',
    'LBL_TYPE' => 'Tipo:',
    'LBL_NAV_TAB' => 'Aba de navegação',
    'LBL_CREATE' => 'Criar',
    'LBL_LIST' => 'Lista',
    'LBL_VIEW' => 'Ver',
    'LBL_HISTORY' => 'Ver histórico',
    'LBL_RESTORE_DEFAULT' => 'Restaurar predefinição',
    'LBL_ACTIVITIES' => 'Atividades',
    'LBL_NEW' => 'Novo',
    'LBL_TYPE_BASIC' => 'básico',
    'LBL_TYPE_COMPANY' => 'empresa',
    'LBL_TYPE_PERSON' => 'pessoa',
    'LBL_TYPE_ISSUE' => 'problema',
    'LBL_TYPE_SALE' => 'venda',
    'LBL_TYPE_FILE' => 'ficheiro',
    'LBL_RSUB' => 'Este é o subpainel que será exibido no seu módulo',
    'LBL_MSUB' => 'Este é o subpainel que o seu módulo fornece, para exibição, ao módulo relacionado',
    'LBL_MB_IMPORTABLE' => 'Importando',

// VISIBILITY EDITOR
    'LBL_PACKAGE_WAS_DELETED' => '[[package]] foi eliminado',

//EXPORT CUSTOMS
    'LBL_EC_TITLE' => 'Exportar personalizações',
    'LBL_EC_NAME' => 'Nome do pacote:',
    'LBL_EC_AUTHOR' => 'Autor:',
    'LBL_EC_DESCRIPTION' => 'Descrição:',
    'LBL_EC_CHECKERROR' => 'Por favor, selecione um módulo.',
    'LBL_EC_CUSTOMFIELD' => 'campo(s) personalizado(s)',
    'LBL_EC_CUSTOMLAYOUT' => 'esquemas personalizados',
    'LBL_EC_NOCUSTOM' => 'Não existem módulos personalizados.',
    'LBL_EC_EMPTYCUSTOM' => 'tem personalizações vazias.',
    'LBL_EC_EXPORTBTN' => 'Exportar',
    'LBL_MODULE_DEPLOYED' => 'Módulo foi implementado.',
    'LBL_UNDEFINED' => 'não definido',
    'LBL_EC_VIEWS' => 'vistas personalizadas',
    'LBL_EC_SUITEFEEDS' => 'sinais personalizados',
    'LBL_EC_DASHLETS' => 'aplicações personalizadas',
    'LBL_EC_CSS' => 'ficheiros CSS personalizados',
    'LBL_EC_TPLS' => 'ficheiros TPS personalizados',
    'LBL_EC_IMAGES' => 'ficheiros de imagens personalizados',
    'LBL_EC_JS' => 'ficheiros JS personalizados',
    'LBL_EC_QTIP' => 'ficheiros QTIP personalizados',

//AJAX STATUS
    'LBL_AJAX_FAILED_DATA' => 'Falha ao obter dados',
    'LBL_AJAX_LOADING' => 'A carregar...',
    'LBL_AJAX_DELETING' => 'A eliminar...',
    'LBL_AJAX_BUILDPROGRESS' => 'Construção em curso...',
    'LBL_AJAX_DEPLOYPROGRESS' => 'Implementação em curso...',

    'LBL_AJAX_RESPONSE_TITLE' => 'Resultados',
    'LBL_AJAX_RESPONSE_MESSAGE' => 'Esta operação foi concluída com êxito',
    'LBL_AJAX_LOADING_TITLE' => 'Em curso...',
    'LBL_AJAX_LOADING_MESSAGE' => 'A carregar, por favor, aguarde...',

//JS
    'LBL_JS_REMOVE_PACKAGE' => 'Tem a certeza de que pretende remover este pacote? Isto irá eliminar permanentemente todos os ficheiros associados a este pacote.',
    'LBL_JS_REMOVE_MODULE' => 'Tem a certeza de que pretende remover este módulo? Isto irá eliminar permanentemente todos os ficheiros associados a este módulo.',
    'LBL_JS_DEPLOY_PACKAGE' => 'Todas as personalizações que tenha feito no Estúdio serão apagadas quando este módulo for reimplementado. Tem certeza de que pretende continuar?',

    'LBL_DEPLOY_IN_PROGRESS' => 'A implementar pacote',
    'LBL_JS_VALIDATE_NAME' => 'Nome — Deve ser alfanumérico, sem espaços e começando por uma letra.',
    'LBL_JS_VALIDATE_PACKAGE_NAME' => 'O nome do pacote já existe',
    'LBL_JS_VALIDATE_KEY' => 'Chave — Deve ser alfanumérica, sem espaços e começar por uma letra.',
    'LBL_JS_VALIDATE_LABEL' => 'Por favor, introduza um rótulo que será utilizado como Nome de Exibição para este módulo',
    'LBL_JS_VALIDATE_TYPE' => 'Por favor, selecione na lista acima o tipo de módulo que pretende construir',
    'LBL_JS_VALIDATE_REL_LABEL' => 'Rótulo — Por favor, adicione um rótulo que será exibido acima do subpainel',

//CONFIRM
    'LBL_CONFIRM_FIELD_DELETE' => 'Ao eliminar um campo personalizado irá eliminar da base de dados todos os campos e conteúdos relacionados com o campo personalizado. O campo deixará de aparecer em qualquer esquema de módulo. \\n\\nPretende mesmo continuar?',

    'LBL_CONFIRM_RELATIONSHIP_DELETE' => 'Tem a certeza de que pretende eliminar este relacionamento?',
    'LBL_CONFIRM_DONT_SAVE' => 'Foram efetuadas alterações desde a última gravação, pretende guardar agora?',
    'LBL_CONFIRM_DONT_SAVE_TITLE' => 'Guardar alterações?',
    'LBL_CONFIRM_LOWER_LENGTH' => 'Há dados que podem ser eliminados, e isso não pode ser desfeito. Tem a certeza de que pretende continuar?',

//POPUP HELP
    'LBL_POPHELP_FIELD_DATA_TYPE' => 'Selecione o tipo de base de dados apropriado baseado no tipo de dados que será introduzido no campo.',
    'LBL_POPHELP_IMPORTABLE' => '<b>Sim</b>: O campo será incluído numa operação de importação.<br><b>Não</b>: O campo não será incluído numa importação.<br><b>Obrigatório</b>: Um valor para o campo deve ser fornecido em qualquer importação.',
    'LBL_POPHELP_IMAGE_WIDTH' => 'Indique um número para a largura, dada em pixeis.<br> A imagem carregada vai ser dimensionada para esta largura.',
    'LBL_POPHELP_IMAGE_HEIGHT' => 'Indique um número para a altura, dada em pixeis.<br> A imagem carregada vai ser dimensionada para esta altura.',
    'LBL_POPHELP_DUPLICATE_MERGE' => '<b>Ativo</b>: O campo irá aparecer na funcionalidade Fundir duplicados, mas não ficará disponível nas condições de filtro da funcionalidade Procurar duplicados.<br><b>Inativo</b>: O campo não irá aparecer na funcionalidade Fundir duplicados e não ficará disponível nas condições de filtro da funcionalidade Procurar duplicados.<br><b>Filtro</b>: o campo aparecerá na funcionalidade Fundir duplicados e estará disponível para uso nas condições de filtro da funcionalidade Localizar duplicados.<br><b>Filtro padrão selecionado</b>: O campo aparecerá na funcionalidade Fundir duplicados e será usado, por padrão, nas condições de filtro da funcionalidade Procurar duplicados.<br><b>Apenas filtro</b>: o campo não aparecerá na funcionalidade Fundir duplicados, mas estará disponível para uso nas condições de filtro da funcionalidade Procurar duplicados.',

//Revert Module labels
    'LBL_RESET' => 'Repor',
    'LBL_RESET_MODULE' => 'Repor módulo',
    'LBL_REMOVE_CUSTOM' => 'Remover personalizações',
    'LBL_CLEAR_RELATIONSHIPS' => 'Limpar relacionamentos',
    'LBL_RESET_LABELS' => 'Repor rótulos',
    'LBL_RESET_LAYOUTS' => 'Repor esquemas',
    'LBL_REMOVE_FIELDS' => 'Remover campos personalizados',
    'LBL_CLEAR_EXTENSIONS' => 'Limpar extensões',
    'LBL_HISTORY_TIMESTAMP' => 'Carimbo temporal',
    'LBL_HISTORY_TITLE' => ' histórico',

    'fieldTypes' => array(
        'varchar' => 'Campo de Texto',
        'int' => 'Número Inteiro',
        'float' => 'Decimal',
        'bool' => 'Caixa de verificação',
        'enum' => 'Lista de seleção',
        'dynamicenum' => 'Lista de seleção dinâmica',
        'multienum' => 'Multisseleção',
        'date' => 'Data',
        'phone' => 'Telefone',
        'currency' => 'Moeda',
        'html' => 'ReadOnly HTML (obsoleto, use TextBlock)',
        'radioenum' => 'Rádio',
        'relate' => 'Relacionar',
        'address' => 'Endereço',
        'text' => 'Área de texto',
        'textblock' => 'TextBlock',
        'url' => 'URL:',
        'iframe' => 'IFrame',
        'datetimecombo' => 'Data/Hora',
        'decimal' => 'Decimal',
        'image' => 'Imagem',
        'wysiwyg' => 'WYSIWYG',
    ),
    'labelTypes' => array(
        "frequently_used" => "Etiquetas utilizadas frequentemente",
        "all" => "Todos os rótulos",
    ),

    'parent' => 'Relação flexível',

    'LBL_CONFIRM_SAVE_DROPDOWN' => "Selecionou este item para o remover da lista de seleção. Todos os campos de seleção que utilizem esta lista, com este item como valor, vão deixar de o exibir e o valor vai deixar de ser selecionável nos campos de seleção. Tem a certeza de que pretende continuar?",

    'LBL_ALL_MODULES' => 'Todos os módulos',
    'LBL_RELATED_FIELD_ID_NAME_LABEL' => '{0} (relacionado ao ID {1})',
);
