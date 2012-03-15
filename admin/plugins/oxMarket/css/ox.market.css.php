<?php 
// Require the initialisation file
require_once '../../../../../init.php';
require_once MAX_PATH . '/lib/OA/Admin/TemplatePlugin.php';
require_once '../oxMarket.class.php';

phpAds_SessionDataFetch();
$oMarketComponent = OX_Component::factory('admin', 'oxMarket');

header("Content-type: text/css"); 
    
?>/*
+---------------------------------------------------------------------------+
| Openads v${RELEASE_MAJOR_MINOR}                                           |
| ============                                                              |
|                                                                           |
| Copyright (c) 2003-2007 Openads Limited                                   |
| For contact details, see: http://www.openads.org/                         |
|                                                                           |
| Copyright (c) 2000-2003 the phpAdsNew developers                          |
| For contact details, see: http://www.phpadsnew.com/                       |
|                                                                           |
| This program is free software; you can redistribute it and/or modify      |
| it under the terms of the GNU General Public License as published by      |
| the Free Software Foundation; either version 2 of the License, or         |
| (at your option) any later version.                                       |
|                                                                           |
| This program is distributed in the hope that it will be useful,           |
| but WITHOUT ANY WARRANTY; without even the implied warranty of            |
| MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the             |
| GNU General Public License for more details.                              |
|                                                                           |
| You should have received a copy of the GNU General Public License         |
| along with this program; if not, write to the Free Software               |
| Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA |
+---------------------------------------------------------------------------+
$Id$
*/
/* mplace icon */
.iconMarketLarge {
  background-image: url("../images/icon-marketplace-large.png");
}

/** hack the message to look better on market screens **/
/*div.messagePlaceholder {
  height: auto;
  float: left;
}*/

div.messagePlaceholderStatic .body {
  margin:0;
  padding:5px 5px 4px 28px;
  line-height: 150%;  
}

div.message div.panel  .body p {
  padding: 0;
}


div.localMessage div.panel {
  width: 600px;
  margin-bottom: 5px;
}

/**/
p.wide {
  line-height:150%;
  margin-bottom: 2em;
}

.pointer {
  cursor: pointer;
}

/* quasi form */
ul.form {
    margin: 0px;
    padding: 0px;
    list-style: none;
}

ul.form li.line {
    clear: both;
    padding-bottom: 15px;
    overflow: hidden;
}

ul.form li.line p {
  margin: 0px 0px 6px 0px;
}

ul.form ctrl-buttons {
    margin-top: 20px;
}

/** campaignform **/
#campaignform .market-invite {
  padding-left: 30px;
  width:530px;
  line-height: 150%;
}

#campaignform .market-invite p {
    margin-top: 10px;
}

/** signup screen **/
#market-signup-form .section-header {
  font-size:14px;
  font-weight:bold;
}
#market-signup-form .type-name {
  margin-right: 20px;
}

#market-signup-form .pick-account input {
  margin-bottom: 15px;
}

#market-signup-form .header {
  margin: 10px 0px 0px 30px;
  font-weight: bold;
}

#market-signup-form #captcha-image {
  margin-top: 15px;
}

#market-signup-form .type-name em{
  font-style: italic;
}
  

/* creative types and attributes */
.checkbox-list {
    float: left;
}

#creative-attrs {
    margin-left: 30px;
}


.checkbox-list h4 {
    color: #444444; 
    font-weight: bold;
    margin: 0px 0px 10px 0px;
}

ul.column {
    margin: 0px;
    padding: 0px;
    list-style: none;
    width: 155px;
    float: left;
}

ul.column li {
    margin: 0px 1px 1px 0px;
    clear: both;
}

ul.column label {
    line-height: 1.5em;
}

ul.column li input {
    margin-right: 7px;
    vertical-align: middle;
    float: left;    
}

ul.column li.accepted {
    background-color: #d0eadd;
}

ul.column li.rejected {
    background-color: #fe9797;
}


.market-campaign-settings h2 {
  margin-top: 6px;
}

.market-campaign-settings .section {
  margin-bottom: 1em;
}

.market-campaign-settings small {
  font-size: 10px;
  color: #808080;
}


.market-campaign-settings input.cpm  {
  width: 4em;
}

.market-campaign-settings label.error {
  display: block;
  clear: both;
  padding: 0;
  padding-top: 2px;
  font-size: 10px;
}

.market-campaign-settings #submit {
  vertical-align: middle;
  margin-right: 3px;
} 

.market-campaign-settings label.search {
  margin-left: 12px;
  *position: relative;
  *top: -2px;
}

.market-campaign-settings label.search input{
  width: 95px;
  padding: 2px;
  *position: relative;
  *top: 2px;
}


.market-campaign-settings .market-opted-in {
  font-weight: bold;
  color:green;
}
.market-campaign-settings .market-not-opted {
  font-weight: bold;
  color:red;
}

/** table modifications **/
.market-campaign-settings .tableWrapper table {
  table-layout: fixed;
}

.market-campaign-settings .tableWrapper td {
  vertical-align: middle;
}

.market-campaign-settings .tableWrapper td.toggleSelection {
  padding-top: 1px;
}

.market-campaign-settings .tableWrapper td label {
  position: relative;
  top: 2px;
}

.market-campaign-settings .tableWrapper table th {
  line-height: normal;
  padding-top: 8px;
  padding-bottom: 8px;
  background: none;
  vertical-align: middle;
}

.market-campaign-settings .tableWrapper table td small {
  font-size: 11px;
  padding-left: 1.5em;
}

/** Top pager */
.market-campaign-settings .pager-top {
  position: absolute;
  z-index: 1;
  top: 10px; 
  right: 0;
}

.market-campaign-settings .pager-top .summary {
  margin-right: 10px;
}

.tableWrapper .pager-top .controls .page {
  padding-left: 0;
}

/**tag **/
.campaign-type-tag {
    float:left;
}

.tag {
  margin-right: 5px;
  display: block;
}

.tag .t-b {
  overflow:visible;
}

.t-b {
  border-width:1px 0;
  margin: 0 1px;
  padding:0;
}

.l-r {
  border-width:0 1px;
  margin:0 -1px;
  padding:1px 0;
}

.val {
    padding:0 5px 1px 5px;
    color: white;
  display: block;
}

.t-b, .l-r {
  display: block;
  border-style:solid;
  font-weight:normal;
  font-size: 10px;
}

.tag-remnant .t-b {
    background-color: #727272; 
}
.tag-remnant .t-b, .tag-remnant .l-r {
  border-color: #727272;
}

.tag-contract .t-b {
    background-color: #f58615; 
}
.tag-contract .t-b, .tag-contract .l-r {
  border-color: #f58615;
}

/** tag end **/
.market-campaign-settings .tableWrapper th.toggleAll {
  width: 23px;
}

.market-campaign-settings .tableWrapper th.mkt-status {
  width: 15em;
}

.market-campaign-settings .tableWrapper th.cpm {
  width: 14em;
}

.market-campaign-settings .tableWrapper .tableFooter .tableActions {
  padding: 0px;
}

/** submit buttons **/
.market-campaign-settings button {
  vertical-align:middle;
  line-height:16px;
  margin:0 6px 0 0;
  padding: 2px 3px 2px 3px;
  *line-height: 12px;
  
  /** Fix extra button padding in IE7 */
  *width: auto;
  *overflow: visible;
}

.market-campaign-settings button.green-dot span {
  background-image:url(../images/button-dot-green.gif);
}

.market-campaign-settings button.red-dot span {
  background-image:url(../images/button-dot-red.gif);
}

.market-campaign-settings button.left span {
  background-repeat: no-repeat;
  line-height:13px;
  padding-left:13px;    
  position:relative;
  top: 0px;
  left: -1px;
  *left: 1px;
  
  -background-repeat: repeat-x;
  -background-position: -10px 1px;
  -padding-left:11px;    
}

/** AJAX loading **/
#loading-indicator {
  position: absolute;
  top: 8px;
  left: 7px;
  padding-left: 33px;
  background-position: 2px 0;
  background-color: white;
}

/** Select all */
#selectAllContainer td {
  text-align: center;
  background-color: #fef2bc;
  color: #222;
}

#selectAllContainer td em {
  font-weight: bold;
  font-style: normal;
}

.tableWrapper table tbody tr.selected {
  background-color: #D1E6F6;
}

/** info box **/
.market-campaign-settings .info-box img {
  float: left; 
  padding: 3px 5px 5px 5px; 
  margin-right: 10px; 
}

.market-campaign-settings .info-box .panel {
  background: none;
  width: 217px;
  margin: 0px;
}

.market-campaign-settings .info-box p {
  line-height: normal;
  margin-bottom: 5px;
}

.market-campaign-settings .info-box p.faq-link {
  margin: 5px 0px 0px 0px;
  
}


.market-campaign-settings .info-box em {
  font-weight: bold;
}

.market-campaign-settings .info-box h3 {
  font-size: 11px;
  font-weight: bold;
  margin: 0px 0px 5px 0px;
}

/** custom market screens **/
table tr.systemAdvertiser td span {
  font-weight: bold;
}


#market-advertiser-index {
    margin-top: 8px;
    margin-left: 20px;
}

#market-advertiser-index p {
  clear: left;
  margin-bottom: 5px;
}

#three-ways-link {
  margin-left: 8px;
}

#market-advertiser-index span {
  font-weight: normal;
}

#market-advertiser-index  .popup-help {
  position: static;
  max-width: 700px;
}

#market-advertiser-index  .popup-help .close {
  float: right;
}

#market-advertiser-index  .popup-help h3,
#market-advertiser-index  .popup-help h4 {
  margin-bottom: 8px;
}

#market-advertiser-index  .popup-help h3 {
  font-size: 14px;
}

#market-advertiser-index  .popup-help h4 {
  font-size: 12px;
}
    
    
#market-advertiser-index p.market-advertisers {
  line-height: 44px;
  margin-bottom: 8px;
  
}

#market-advertiser-index p.market-advertisers img {
  float: left;
}


#market-advertiser-index .three-ways-container {
  width: 650px;
  overflow: auto;
  margin: 12px 0px 8px 0px;
}

#market-advertiser-index .three-ways-container ul li {
  width: 201px;
  margin-right: 10px;
  float: left;
  position: relative;
}

a.expand {
    padding: 2px 0 2px 15px;
    background-position: left center;
    background-repeat: no-repeat;
    background-image:url(../../../assets/images/icon-minus.png);
}

a.collapse {
    padding: 2px 0 2px 15px;
    background-position: left center;
    background-repeat: no-repeat;
    background-image:url(../../../assets/images/icon-plus.png);
}

/** market campaign edit **/
.market-campaign-edit, .market-campaign-acl {
   width: 780px;
}

.market-campaign-edit form, .market-campaign-edit .messagePlaceholderForm {
    width: 565px;  
}

.market-campaign-edit-top {
  margin-bottom: 5px;
}

.market-campaign-edit h3 {
  font-weight: bold;
  font-size: 14px;
  margin-bottom: 12px; 
}


.market-campaign-edit form, .market-campaign-edit form .section {
  clear: left;
}

.market-campaign-edit div.localMessage div.panel {
  margin-bottom:5px;
  width:auto;
}


.market-campaign-edit .info-box {
  width: 150px;
  margin-left: 10px;
  float:right;
  
  padding: 10px;
  *padding: 5px;
  -moz-border-radius: 5px;
  -webkit-border-radius: 5px;
  border-radius: 5px; /*CSS3*/
  border: 1px solid #cfcfcf;
}

.market-campaign-edit .info-box img {
  margin-bottom: 10px;
}

.market-campaign-edit .info-box h3, .market-campaign-edit .info-box h4 {
  font-weight: bold;
  margin-bottom: 8px;
}

.market-campaign-edit .info-box h3 {
  font-size: 13px;
}

.market-campaign-edit .info-box h4 {
  font-size: 12px;
}

.market-campaign-edit .info-box em {
  font-style: italic;
}



/** advertiser campaigns snippet **/
.market-advertiser-campaigns, .market-campaigns-zone {
  width: 780px;
}

.market-advertiser-campaigns div.localMessage div.panel {
  width: 100%;
}

.market-advertiser-campaigns-top h3 {
  font-weight: bold;
  font-size: 14px;
  margin-bottom: 5px;
}

#help-market-campaigns h4 {
  font-size: 12px;
  margin-bottom: 5px;
}

.market-advertiser-campaigns-top .imageContainer {
  overflow: auto;
  margin-bottom: 12px;
}

.market-advertiser-campaigns-top .imageContainer .left {
  margin-bottom: 12px;
}

.market-advertiser-campaigns-top .imageContainer .right h4 {
  font-size: 12px;
}



/** market campaign-delivery limitations page **/
.market-campaign-acl .note {
  margin-top: 12px;
}
   
div.messagePlaceholderStatic div.new .body {
  padding-left: 40px;
}     

div.message div.new div.icon {
  background-position: center center;
  background-image:url(../images/icon-new.png);
  width: 32px;
}

/* Branded icons */
.iconAdvertiserSystem {
    background-image: url("<?php echo $oMarketComponent->aBranding['assetPath']; ?>/icon-advertiser-openx.png");
}

.iconCampaignSystem {
    background-image: url("<?php echo $oMarketComponent->aBranding['assetPath']; ?>/icon-campaign-openx.png");
}

.iconCampaignSystemLarge {
    background-image: url("<?php echo $oMarketComponent->aBranding['assetPath']; ?>/icon-campaign-openx-large.png");
}

.iconCampaignSystemAdd {
    background-image: url("<?php echo $oMarketComponent->aBranding['assetPath']; ?>/icon-campaign-openx-add.png");
}

.iconCampaignSystemAddLarge {
    background-image: url("<?php echo $oMarketComponent->aBranding['assetPath']; ?>/icon-campaign-openx-add-large.png");
}

.iconCampaignsSystem {
    background-image: url("<?php echo $oMarketComponent->aBranding['assetPath']; ?>/icon-campaigns-openx.png");
}

.iconCampaignsSystemLarge {
    background-image: url("<?php echo $oMarketComponent->aBranding['assetPath']; ?>/icon-campaigns-openx-large.png");
}