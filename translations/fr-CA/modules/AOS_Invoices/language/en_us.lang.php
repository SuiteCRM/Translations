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
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Date Création',
    'LBL_DATE_MODIFIED' => 'Date Modification',
    'LBL_MODIFIED' => 'Modifié Par',
    'LBL_MODIFIED_NAME' => 'Modifié Par Nom',
    'LBL_CREATED' => 'Créé Par',
    'LBL_DESCRIPTION' => 'Description',
    'LBL_DELETED' => 'Supprimé',
    'LBL_NAME' => 'Titre',
    'LBL_CREATED_USER' => 'Créé par Utilisateur',
    'LBL_MODIFIED_USER' => 'Modifié par l\'utilisateur',
    'ERR_DELETE_RECORD' => 'Un identifiant d\'enregistrement doit être spécifié pour supprimer le compte.',
    'LBL_ACCOUNT_NAME' => 'Titre',
    'LBL_ACCOUNT' => 'Compagnie:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activités',
    'LBL_ADDRESS_INFORMATION' => 'Information Adresse',
    'LBL_ANNUAL_REVENUE' => 'Revenu annuel:',
    'LBL_ANY_ADDRESS' => 'Toutes les Adresse:',
    'LBL_ANY_EMAIL' => 'Tous les Emails:',
    'LBL_ANY_PHONE' => 'Tous les Téléphone:',
    'LBL_RATING' => 'Évaluation',
    'LBL_ASSIGNED_USER' => 'Utilisateur',
    'LBL_BILLING_ADDRESS_CITY' => 'Ville de facturation :',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Pays de facturation :',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Code Postal de facturation :',
    'LBL_BILLING_ADDRESS_STATE' => 'Province de la facturation :',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Rue de facturation 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Rue de facturation 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Facturation, rue 4',
    'LBL_BILLING_ADDRESS_STREET' => 'Rue de la facturation :',
    'LBL_BILLING_ADDRESS' => 'Adresse de facturation :',
    'LBL_ACCOUNT_INFORMATION' => 'Vue Globale',
    'LBL_CITY' => 'Ville :',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
    'LBL_COUNTRY' => 'Pays :',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Comptes',
    'LBL_DUPLICATE' => 'Doublon possible avec le(s) Compte(s)',
    'LBL_EMAIL' => 'Email:',
    'LBL_EMPLOYEES' => 'Employés :',
    'LBL_FAX' => 'Fax:',
    'LBL_INDUSTRY' => 'Industrie :',
    'LBL_LIST_ACCOUNT_NAME' => 'Nom de compte',
    'LBL_LIST_CITY' => 'Ville',
    'LBL_LIST_EMAIL_ADDRESS' => 'Adresse Email',
    'LBL_LIST_PHONE' => 'Téléphone',
    'LBL_LIST_STATE' => 'Province',
    'LBL_MEMBER_OF' => 'Membre de :',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Organisations membres',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Autre Email:',
    'LBL_OTHER_PHONE' => 'Autre téléphone:',
    'LBL_OWNERSHIP' => 'Propriété:',
    'LBL_PARENT_ACCOUNT_ID' => 'Identifiant du Compte parent',
    'LBL_PHONE_ALT' => 'Numéro de téléphone alternatif:',
    'LBL_PHONE_FAX' => 'Fax:',
    'LBL_PHONE_OFFICE' => 'Téléphone:',
    'LBL_PHONE' => 'Téléphone:',
    'LBL_POSTAL_CODE' => 'Code postal :',
    'LBL_SAVE_ACCOUNT' => 'Sauvegarder Compte',
    'LBL_SHIPPING_ADDRESS_CITY' => 'Ville:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Pays:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Code Postal:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'Province:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'Adresse 2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'Adresse 3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'Adresse 4',
    'LBL_SHIPPING_ADDRESS_STREET' => 'Adresse :',
    'LBL_SHIPPING_ADDRESS' => 'Adresse Expédition:',
    'LBL_STATE' => 'Province ou Région:',
    'LBL_TICKER_SYMBOL' => 'Symbole Boursier:',
    'LBL_TYPE' => 'Type :',
    'LBL_WEBSITE' => 'SiteWeb:',
    'LNK_ACCOUNT_LIST' => 'Comptes',
    'LNK_NEW_ACCOUNT' => 'Créer un Compte',
    'MSG_DUPLICATE' => 'Ce compte peut potentiellement créer un compte dupliqué. Vous pouvez sélectionner un compte dans la liste ci-dessous ou vous pouvez cliquer sur Enregistrer pour continuer à créer un nouveau compte avec les données précédemment saisies.',
    'MSG_SHOW_DUPLICATES' => 'Ce compte peut potentiellement créer un compte dupliqué. Vous pouvez soit cliquer sur Enregistrer pour continuer la création de ce nouveau compte avec les données précédemment saisies ou vous pouvez cliquer sur Annuler.',
    'NTC_DELETE_CONFIRMATION' => 'Etes-vous sûr(e) sur de vouloir supprimer cet enregistrement ?',
    'LBL_LIST_FORM_TITLE' => 'Liste Factures',
    'LBL_MODULE_NAME' => 'Factures',
    'LBL_MODULE_TITLE' => 'Factures: Accueil',
    'LBL_HOMEPAGE_TITLE' => 'Mes Factures',
    'LNK_NEW_RECORD' => 'Créer Facture',
    'LNK_LIST' => 'Voir Factures',
    'LBL_SEARCH_FORM_TITLE' => 'Recherche Factures',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Voir Historique',
    'LBL_NEW_FORM_TITLE' => 'Nouvelle Facture',
    'LBL_TERMS_C' => 'Conditions',
    'LBL_APPROVAL_ISSUE' => 'Problèmes Validation',
    'LBL_APPROVAL_STATUS' => 'Statut Validation',
    'LBL_BILLING_ACCOUNT' => 'Compte',
    'LBL_BILLING_CONTACT' => 'Contact',
    'LBL_EXPIRATION' => 'Valable Jusqu’au',
    'LBL_INVOICE_NUMBER' => 'Numéro Facture',
    'LBL_OPPORTUNITY' => 'Nom Opportunité',
    'LBL_TEMPLATE_DDOWN_C' => 'Modèles Factures',
    'LBL_STAGE' => 'Étape Devis',
    'LBL_TERM' => 'Conditions de paiement',
    'LBL_SUBTOTAL_AMOUNT' => 'Sous-total',
    'LBL_DISCOUNT_AMOUNT' => 'Remise',
    'LBL_TAX_AMOUNT' => 'Taxe',
    'LBL_SHIPPING_AMOUNT' => 'Expédition',
    'LBL_TOTAL_AMT' => 'Total',
    'VALUE' => 'Titre',
    'LBL_EMAIL_ADDRESSES' => 'Adresses Email',
    'LBL_LINE_ITEMS' => 'Ligne Produits',
    'LBL_GRAND_TOTAL' => 'Grand Total',
    'LBL_QUOTE_NUMBER' => 'Numéro Devis',
    'LBL_QUOTE_DATE' => 'Date Devis',
    'LBL_INVOICE_DATE' => 'Date Facture',
    'LBL_DUE_DATE' => 'Date Échéance',
    'LBL_STATUS' => 'Statut',
    'LBL_INVOICE_STATUS' => 'Statut Facture',
    'LBL_PRODUCT_QUANITY' => 'Quantité',
    'LBL_PRODUCT_NAME' => 'Produit',
    'LBL_PART_NUMBER' => 'Numéro de Pièce',
    'LBL_PRODUCT_NOTE' => 'Notes',
    'LBL_PRODUCT_DESCRIPTION' => 'Description',
    'LBL_LIST_PRICE' => 'Liste',
    'LBL_DISCOUNT_AMT' => 'Remise',
    'LBL_UNIT_PRICE' => 'Prix Vente',
    'LBL_TOTAL_PRICE' => 'Total',
    'LBL_VAT' => 'Taxe', //VAT
    'LBL_VAT_AMT' => 'Montant Taxe', //VAT
    'LBL_ADD_PRODUCT_LINE' => 'Ajouter Ligne Produit',
    'LBL_SERVICE_NAME' => 'Service',
    'LBL_SERVICE_LIST_PRICE' => 'Liste',
    'LBL_SERVICE_PRICE' => 'Prix Vente',
    'LBL_SERVICE_DISCOUNT' => 'Remise',
    'LBL_ADD_SERVICE_LINE' => 'Ajouter Ligne Service ',
    'LBL_REMOVE_PRODUCT_LINE' => 'Retirer',
    'LBL_PRINT_AS_PDF' => 'Imprimer PDF',
    'LBL_EMAIL_INVOICE' => 'Email Facture',
    'LBL_LIST_NUM' => 'Num',
    'LBL_PDF_NAME' => 'Facture',
    'LBL_EMAIL_NAME' => 'Facture pour',
    'LBL_NO_TEMPLATE' => 'ERREUR\nAucun Modèle Facture trouvé. Si vous n\'avez pas encore créé de Modèle, créez un dans le Module "Modèles PDF".',
    'LBL_SUBTOTAL_TAX_AMOUNT' => 'Sous-total + Taxes',//pre shipping
    'LBL_EMAIL_PDF' => 'Email PDF',
    'LBL_ADD_GROUP' => 'Ajouter Groupe',
    'LBL_DELETE_GROUP' => 'Effacer Groupe',
    'LBL_GROUP_NAME' => 'Nom Groupe',
    'LBL_GROUP_TOTAL' => 'Total Groupe',
    'LBL_SHIPPING_TAX' => 'Taxes Transport',
    'LBL_SHIPPING_TAX_AMT' => 'Taxes Transport',
    'LBL_IMPORT_LINE_ITEMS' => 'Importer Ligne Produits',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'Sous-total (devise par défaut)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'Remise (devise par défaut)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'Taxes (devise par défaut)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'Transport (devise par défaut)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'Total (devise par défaut)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'Taxes Transport (devise par défaut)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'Grand Total (devise par défaut)',
    'LBL_INVOICE_TO' => 'Facturer À',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'Groupes Ligne produit',
    'LBL_AOS_PRODUCT_QUOTES' => 'Devis Produit',
    'LBL_AOS_QUOTES_AOS_INVOICES' => 'Devis: Factures',
);
