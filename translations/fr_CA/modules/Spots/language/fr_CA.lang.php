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
    'LBL_ASSIGNED_TO_ID' => 'Id Utilisateur Assigné',
    'LBL_ASSIGNED_TO_NAME' => 'Assigné à',
    'LBL_SECURITYGROUPS' => 'Groupe de Sécurité',
    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'Groupe de Sécurité',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Date Création',
    'LBL_DATE_MODIFIED' => 'Date Modification',
    'LBL_MODIFIED' => 'Modifié Par',
    'LBL_MODIFIED_NAME' => 'Modifié Par Nom',
    'LBL_CREATED' => 'Créé Par',
    'LBL_DESCRIPTION' => 'Description',
    'LBL_DELETED' => 'Supprimé',
    'LBL_NAME' => 'Nom',
    'LBL_CREATED_USER' => 'Créé par Utilisateur',
    'LBL_MODIFIED_USER' => 'Modifié par l\'utilisateur',
    'LBL_LIST_NAME' => 'Nom',
    'LBL_EDIT_BUTTON' => 'Modifier',
    'LBL_REMOVE' => 'Retirer',
    'LBL_LIST_FORM_TITLE' => 'Liste Pivot',
    'LBL_MODULE_NAME' => 'Pivot',
    'LBL_MODULE_TITLE' => 'Pivot',
    'LBL_HOMEPAGE_TITLE' => 'Mon Pivot',
    'LNK_NEW_RECORD' => 'Créer Pivot',
    'LNK_LIST' => 'Voir Pivot',
    'LBL_SEARCH_FORM_TITLE' => 'Rechercher Pivot',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Voir Historique',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activités',
    'LBL_NEW_FORM_TITLE' => 'Nouveau Pivot',
    'LBL_CONFIG' => 'Config',
    'LBL_TYPE' => 'Zone Analyse',
    'LNK_SPOT_LIST' => 'Afficher TCD',
    'LNK_SPOT_CREATE' => 'Créer TCD',

    //Analytics
    'LBL_AN_CONFIGURATION' => 'Configuration',

    'LBL_AN_UNSUPPORTED_DB' => 'Désolé, Module TCD (Tableau Croisé Dynamique) est actuellement configurée pour MySQL et MS SQL uniquement',

    //Analytics labels for accounts pivot
    'LBL_AN_ACCOUNTS_ACCOUNT_NAME' => 'Nom',
    'LBL_AN_ACCOUNTS_ACCOUNT_TYPE' => 'Account Type',
    'LBL_AN_ACCOUNTS_ACCOUNT_INDUSTRY' => 'Industrie',
    'LBL_AN_ACCOUNTS_ACCOUNT_BILLING_COUNTRY' => 'Pays Facturation',

    //Analytics labels for leads pivot
    'LBL_AN_LEADS_ASSIGNED_USER' => 'Utilisateur Assigné',
    'LBL_AN_LEADS_STATUS' => 'Statut',
    'LBL_AN_LEADS_LEAD_SOURCE' => 'Source Prospect',
    'LBL_AN_LEADS_CAMPAIGN_NAME' => 'Nom Campagne',
    'LBL_AN_LEADS_YEAR' => 'Année',
    'LBL_AN_LEADS_QUARTER' => 'Trimestre',
    'LBL_AN_LEADS_MONTH' => 'Mois',
    'LBL_AN_LEADS_WEEK' => 'Semaine',
    'LBL_AN_LEADS_DAY' => 'Jour',

    //Analytics labels for sales pivot
    'LBL_AN_SALES_ACCOUNT_NAME' => 'Nom de compte',
    'LBL_AN_SALES_OPPORTUNITY_NAME' => 'Nom Opportunité',
    'LBL_AN_SALES_ASSIGNED_USER' => 'Utilisateur Assigné',
    'LBL_AN_SALES_OPPORTUNITY_TYPE' => 'TypeOpportunité',
    'LBL_AN_SALES_LEAD_SOURCE' => 'Source Prospect',
    'LBL_AN_SALES_AMOUNT' => 'Montant',
    'LBL_AN_SALES_STAGE' => 'Phase Ventes',
    'LBL_AN_SALES_PROBABILITY' => 'Probabilité',
    'LBL_AN_SALES_DATE' => 'Date Vente',
    'LBL_AN_SALES_QUARTER' => 'Trimestre Vente',
    'LBL_AN_SALES_MONTH' => 'Mois Ventes',
    'LBL_AN_SALES_WEEK' => 'Semaine Ventes',
    'LBL_AN_SALES_DAY' => 'Jour Ventes',
    'LBL_AN_SALES_YEAR' => 'Année Vente',
    'LBL_AN_SALES_CAMPAIGN' => 'Campagne',

    //Analytics labels for service pivot
    'LBL_AN_SERVICE_ACCOUNT_NAME' => 'Nom de compte',
    'LBL_AN_SERVICE_STATE' => 'Province',
    'LBL_AN_SERVICE_STATUS' => 'Statut',
    'LBL_AN_SERVICE_PRIORITY' => 'Priorité',
    'LBL_AN_SERVICE_CREATED_DAY' => 'Jour Création',
    'LBL_AN_SERVICE_CREATED_WEEK' => 'Semaine Création',
    'LBL_AN_SERVICE_CREATED_MONTH' => 'Mois Création',
    'LBL_AN_SERVICE_CREATED_QUARTER' => 'Trimestre Création',
    'LBL_AN_SERVICE_CREATED_YEAR' => 'Année Création',
    'LBL_AN_SERVICE_CONTACT_NAME' => 'Nom Contact',
    'LBL_AN_SERVICE_ASSIGNED_TO' => 'Utilisateur Assigné',

    //Analytics labels for the activities pivot
    'LBL_AN_ACTIVITIES_TYPE' => 'Type',
    'LBL_AN_ACTIVITIES_NAME' => 'Nom',
    'LBL_AN_ACTIVITIES_STATUS' => 'Statut',
    'LBL_AN_ACTIVITIES_ASSIGNED_TO' => 'Utilisateur Assigné',

    //Analytics labels for the marketing pivot
    'LBL_AN_MARKETING_STATUS' => 'Statut',
    'LBL_AN_MARKETING_TYPE' => 'Type',
    'LBL_AN_MARKETING_BUDGET' => 'Budget',
    'LBL_AN_MARKETING_EXPECTED_COST' => 'Coût Prévu',
    'LBL_AN_MARKETING_EXPECTED_REVENUE' => 'Revenu Prévu',
    'LBL_AN_MARKETING_OPPORTUNITY_NAME' => 'Nom Opportunité',
    'LBL_AN_MARKETING_OPPORTUNITY_AMOUNT' => 'Montant Opportunité',
    'LBL_AN_MARKETING_OPPORTUNITY_SALES_STAGE' => 'Opportunité par Étape de Vente',
    'LBL_AN_MARKETING_OPPORTUNITY_ASSIGNED_TO' => 'Opportunité Assignée À',
    'LBL_AN_MARKETING_ACCOUNT_NAME' => 'Nom de compte',

    //Analytics labels for the marketing activities pivot
    'LBL_AN_MARKETINGACTIVITY_CAMPAIGN_NAME' => 'Nom Campagne',
    'LBL_AN_MARKETINGACTIVITY_ACTIVITY_DATE' => 'Date Activité',
    'LBL_AN_MARKETINGACTIVITY_ACTIVITY_TYPE' => 'Type Activité',
    'LBL_AN_MARKETINGACTIVITY_RELATED_TYPE' => 'Type Associé',
    'LBL_AN_MARKETINGACTIVITY_RELATED_ID' => 'ID Associé',

    //Analytics labels for the quotes pivot
    'LBL_AN_QUOTES_OPPORTUNITY_NAME' => 'Nom Opportunité',
    'LBL_AN_QUOTES_OPPORTUNITY_TYPE' => 'Type Opportunité',
    'LBL_AN_QUOTES_OPPORTUNITY_LEAD_SOURCE' => 'Source Prospect Opportunité',
    'LBL_AN_QUOTES_OPPORTUNITY_SALES_STAGE' => 'Opportunité par Étape de Vente',
    'LBL_AN_QUOTES_ACCOUNT_NAME' => 'Nom de compte',
    'LBL_AN_QUOTES_CONTACT_NAME' => 'Nom Contact',
    'LBL_AN_QUOTES_ITEM_NAME' => 'Clé',
    'LBL_AN_QUOTES_ITEM_TYPE' => 'Type Article',
    'LBL_AN_QUOTES_ITEM_CATEGORY' => 'Catégorie Article',
    'LBL_AN_QUOTES_ITEM_QTY' => 'Quantité Article',
    'LBL_AN_QUOTES_ITEM_LIST_PRICE' => 'Prix Listé Article',
    'LBL_AN_QUOTES_ITEM_SALE_PRICE' => 'Prix de Vente Article',
    'LBL_AN_QUOTES_ITEM_COST_PRICE' => 'Prix de Revient Article',
    'LBL_AN_QUOTES_ITEM_DISCOUNT_PRICE' => 'Prix aprés Rabais Article',
    'LBL_AN_QUOTES_ITEM_DISCOUNT_AMOUNT' => 'Montant Remise',
    'LBL_AN_QUOTES_ITEM_TOTAL' => 'Total Article',
    'LBL_AN_QUOTES_GRAND_TOTAL' => 'Grand Total',
    'LBL_AN_QUOTES_ASSIGNED_TO' => 'Utilisateur Assigné',
    'LBL_AN_QUOTES_DATE_CREATED' => 'Date Création',
    'LBL_AN_QUOTES_DAY_CREATED' => 'Jour Création',
    'LBL_AN_QUOTES_WEEK_CREATED' => 'Semaine Création',
    'LBL_AN_QUOTES_MONTH_CREATED' => 'Mois Création',
    'LBL_AN_QUOTES_QUARTER_CREATED' => 'Trimestre Création',
    'LBL_AN_QUOTES_YEAR_CREATED' => 'Année Création',

    //Error message when there are multiple values for the label
    'LBL_AN_DUPLICATE_LABEL_FOR_SUBAREA' => 'Erreur lors de la détermination de l\'étiquette pour la sous-zone pivot',
);
