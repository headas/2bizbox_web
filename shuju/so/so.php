<?php require_once('../../../Connections/c32_19aq_com.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

mysql_select_db($database_c32_19aq_com, $c32_19aq_com);
$query_Recordset1 = "select salesorder0_.so as so1004_7_, salesorder0_.LCHNG as LCHNG1004_7_, salesorder0_.id as id1004_7_, salesorder0_.shipto as shipto1004_7_, salesorder0_.billto as billto1004_7_, salesorder0_.LUSER as LUSER1004_7_, salesorder0_.LDATE as LDATE1004_7_, salesorder0_.ADATE as ADATE1004_7_, salesorder0_.ORIGIN as ORIGIN1004_7_, salesorder0_.ar_net_set as ar10_1004_7_, salesorder0_.ar_tax_set as ar11_1004_7_, salesorder0_.ar_sub as ar12_1004_7_, salesorder0_.ar_disc as ar13_1004_7_, salesorder0_.ar_net as ar14_1004_7_, salesorder0_.ar_ship as ar15_1004_7_, salesorder0_.ar_open as ar16_1004_7_, salesorder0_.ar_tax as ar17_1004_7_, salesorder0_.ar_freight as ar18_1004_7_, salesorder0_.ar_total as ar19_1004_7_, salesorder0_.ar_cost_total as ar20_1004_7_, salesorder0_.ar_std_cost_total as ar21_1004_7_, salesorder0_.ar_margin as ar22_1004_7_, salesorder0_.ar_margin_pct as ar23_1004_7_, salesorder0_.ar_margin_std as ar24_1004_7_, salesorder0_.ar_margin_pct_std as ar25_1004_7_, salesorder0_.ar_paid_inv as ar26_1004_7_, salesorder0_.ar_paid_gl as ar27_1004_7_, salesorder0_.arp_number as arp28_1004_7_, salesorder0_.ar_prepay as ar29_1004_7_, salesorder0_.ar_prepay_due as ar30_1004_7_, salesorder0_.ar_prepay_gl as ar31_1004_7_, salesorder0_.ar_prepay_apply as ar32_1004_7_, salesorder0_.ar_gl1_recorded as ar33_1004_7_, salesorder0_.ar_gl2_paid as ar34_1004_7_, salesorder0_.change_order as change35_1004_7_, salesorder0_.co_comments as co36_1004_7_, salesorder0_.po as po1004_7_, salesorder0_.customer_email as customer38_1004_7_, salesorder0_.contact as contact1004_7_, salesorder0_.status as status1004_7_, salesorder0_.shipping_status as shipping41_1004_7_, salesorder0_.reviewed as reviewed1004_7_, salesorder0_.reviewed_by as reviewed43_1004_7_, salesorder0_.delivery as delivery1004_7_, salesorder0_.desired as desired1004_7_, salesorder0_.delay as delay1004_7_, salesorder0_.priority as priority1004_7_, salesorder0_.original as original1004_7_, salesorder0_.actual as actual1004_7_, salesorder0_.shipvia as shipvia1004_7_, salesorder0_.carrier as carrier1004_7_, salesorder0_.carrier_acct as carrier52_1004_7_, salesorder0_.incoterm as incoterm1004_7_, salesorder0_.incoterm_place_port as incoterm54_1004_7_, salesorder0_.ship_acct as ship55_1004_7_, salesorder0_.locate as locate1004_7_, salesorder0_.language as language1004_7_, salesorder0_.currency as currency1004_7_, salesorder0_.exchange as exchange1004_7_, salesorder0_.terms as terms1004_7_, salesorder0_.entered as entered1004_7_, salesorder0_.salesman as salesman1004_7_, salesorder0_.salesman_id as salesman63_1004_7_, salesorder0_.sales_code_id as sales64_1004_7_, salesorder0_.qt as qt1004_7_, salesorder0_.sg_so as sg66_1004_7_, salesorder0_.requestor as requestor1004_7_, salesorder0_.project as project1004_7_, salesorder0_.reldoc as reldoc1004_7_, salesorder0_.cacct1 as cacct70_1004_7_, salesorder0_.bp as bp1004_7_, salesorder0_.so_bplate as so72_1004_7_, salesorder0_.comments as comments1004_7_, salesorder0_.notes as notes1004_7_, salesorder0_.co_unit_id as co75_1004_7_, salesorder0_.hold as hold1004_7_, salesorder0_.opinion as opinion1004_7_, salesorder0_.by_pos as by78_1004_7_, salesorder0_.receipt as receipt1004_7_, salesorder0_.acc_freight as acc80_1004_7_, salesorder0_.acc_tax as acc81_1004_7_, salesorder1_.so as so9_, salesorder1_.si as si9_, salesorder1_.so as so1064_0_, salesorder1_.si as si1064_0_, salesorder1_.ar_sub as ar3_1064_0_, salesorder1_.ar_disc as ar4_1064_0_, salesorder1_.ar_net as ar5_1064_0_, salesorder1_.ar_ship as ar6_1064_0_, salesorder1_.ar_open as ar7_1064_0_, salesorder1_.ar_tax as ar8_1064_0_, salesorder1_.ar_total as ar9_1064_0_, salesorder1_.ar_margin as ar45_1064_0_, salesorder1_.ar_margin_pct as ar46_1064_0_, salesorder1_.ar_margin_std as ar47_1064_0_, salesorder1_.ar_margin_pct_std as ar48_1064_0_, salesorder1_.ref_doc1 as ref10_1064_0_, salesorder1_.ref_doc2 as ref11_1064_0_, salesorder1_.change_order as change12_1064_0_, salesorder1_.qr as qr1064_0_, salesorder1_.status as status1064_0_, salesorder1_.shipping_status as shipping15_1064_0_, salesorder1_.delivery as delivery1064_0_, salesorder1_.desired as desired1064_0_, salesorder1_.delay as delay1064_0_, salesorder1_.arrive_date as arrive49_1064_0_, salesorder1_.priority as priority1064_0_, salesorder1_.original as original1064_0_, salesorder1_.actual as actual1064_0_, salesorder1_.locate as locate1064_0_, salesorder1_.shipvia as shipvia1064_0_, salesorder1_.pn as pn1064_0_, salesorder1_.pa as pa1064_0_, salesorder1_.pn_from as pn26_1064_0_, salesorder1_.mn as mn1064_0_, salesorder1_.rv as rv1064_0_, salesorder1_.dwg as dwg1064_0_, salesorder1_.bom as bom1064_0_, salesorder1_.qty as qty1064_0_, salesorder1_.sip as sip1064_0_, salesorder1_.ship as ship1064_0_, salesorder1_.hqa as hqa1064_0_, salesorder1_.cost as cost1064_0_, salesorder1_.std_cost as std51_1064_0_, salesorder1_.unit as unit1064_0_, salesorder1_.list as list1064_0_, salesorder1_.sales_unit as sales52_1064_0_, salesorder1_.sales_price as sales53_1064_0_, salesorder1_.sales_qty as sales54_1064_0_, salesorder1_.dcode as dcode1064_0_, salesorder1_.discount as discount1064_0_, salesorder1_.taxr as taxr1064_0_, salesorder1_.description as descrip40_1064_0_, salesorder1_.mfg as mfg1064_0_, salesorder1_.mpn as mpn1064_0_, salesorder1_.comments as comments1064_0_, salesorder1_.notes as notes1064_0_, salesorder1_.traceable as traceable1064_0_, salesorder1_.trace_level as trace56_1064_0_, salesorder1_.product_code as product57_1064_0_, salesorder1_.commodity_code as commodity58_1064_0_, salesorder1_.ar as ar1064_0_, salesorder1_.tax_cost as tax60_1064_0_, salesorder1_.use_tax_price as use61_1064_0_, salesorder1_.weight_per_unit as weight62_1064_0_, salesorder1_.price_per_weight as price63_1064_0_, salesorder1_.price_per_weight_withtax as price64_1064_0_, salesorder1_.all_weight as all65_1064_0_, salesorder1_.weight_uom as weight66_1064_0_, boilerplat2_.order_no as order1_10_, boilerplat2_.ii as ii10_, boilerplat2_.order_no as order1_1076_1_, boilerplat2_.ii as ii1076_1_, boilerplat2_.LDATE as LDATE1076_1_, boilerplat2_.id as id1076_1_, boilerplat2_.bp as bp1076_1_, cidescribe3_.order_no as order1_11_, cidescribe3_.ii as ii11_, cidescribe3_.order_no as order1_913_2_, cidescribe3_.ii as ii913_2_, cidescribe3_.LDATE as LDATE913_2_, cidescribe3_.instructid as instructid913_2_, cidescribe3_.ciDescribes as ciDescri5_913_2_, salesorder4_.so as so12_, salesorder4_.ii as ii12_, salesorder4_.ii as ii1251_3_, salesorder4_.so as so1251_3_, salesorder4_.doc_desc as doc3_1251_3_, salesorder4_.dr as dr1251_3_, salesorder4_.comments as comments1251_3_, salesorder4_.LUSER as LUSER1251_3_, salesorder4_.LDATE as LDATE1251_3_, salesorder4_.ext as ext1251_3_, salesorder4_.doc_name as doc9_1251_3_, salesorder4_.doc_length as doc10_1251_3_, customerve5_.id as id1042_4_, customerve5_.LDATE as LDATE1042_4_, customerve5_.ADATE as ADATE1042_4_, customerve5_.remit_id as remit3_1042_4_, customerve5_.LUSER as LUSER1042_4_, customerve5_.ORIGIN as ORIGIN1042_4_, customerve5_.LCHNG as LCHNG1042_4_, customerve5_.name as name1042_4_, customerve5_.addr1 as addr9_1042_4_, customerve5_.addr2 as addr10_1042_4_, customerve5_.taxr as taxr1042_4_, customerve5_.vtaxr as vtaxr1042_4_, customerve5_.city as city1042_4_, customerve5_.state as state1042_4_, customerve5_.zip as zip1042_4_, customerve5_.country as country1042_4_, customerve5_.territory as territory1042_4_, customerve5_.language as language1042_4_, customerve5_.wtu as wtu1042_4_, customerve5_.currency as currency1042_4_, customerve5_.country_code as country18_1042_4_, customerve5_.phone as phone1042_4_, customerve5_.fax as fax1042_4_, customerve5_.phone2 as phone21_1042_4_, customerve5_.email as email1042_4_, customerve5_.taxid as taxid1042_4_, customerve5_.comments as comments1042_4_, customerve5_.dlrydays as dlrydays1042_4_, customerve5_.c as c1042_4_, customerve5_.v as v1042_4_, customerve5_.vdlrydays as vdlrydays1042_4_, customerve5_.v_type as v48_1042_4_, customerve5_.critical_level as critical49_1042_4_, customerve5_.v_lock as v50_1042_4_, customerve5_.v_special as v47_1042_4_, customerve5_.region as region1042_4_, customerve5_.isdeleted as isdeleted1042_4_, customerve5_.c_hold as c64_1042_4_, customerve5_.addr_type as addr65_1042_4_, customerve5_.sales_code_id as sales85_1042_4_, customerve5_.duty_free as duty71_1042_4_, customerve5_.valid_date as valid72_1042_4_, customerve5_.tax_number as tax73_1042_4_, customerve5_.bill_to as bill74_1042_4_, customerve5_.ship_to as ship75_1042_4_, customerve5_.print_invoice as print76_1042_4_, customerve5_.parent as parent1042_4_, customerve5_.vendor_deposit_bank as vendor68_1042_4_, customerve5_.department_deposit_bank as department69_1042_4_, customerve5_.vid as vid1042_4_, customerve5_.department_account as department33_1042_4_, customerve5_.tax_type as tax78_1042_4_, customerve5_.tax_payer_id_code as tax79_1042_4_, customerve5_.use_backflush as use80_1042_4_, customerve5_.default_account as default81_1042_4_, customerve5_.by_invoice as by82_1042_4_, customerve5_.terms as terms1042_4_, customerve5_.isSalesAddr as isSales84_1042_4_, customerve6_.id as id1042_5_, customerve6_.LDATE as LDATE1042_5_, customerve6_.ADATE as ADATE1042_5_, customerve6_.remit_id as remit3_1042_5_, customerve6_.LUSER as LUSER1042_5_, customerve6_.ORIGIN as ORIGIN1042_5_, customerve6_.LCHNG as LCHNG1042_5_, customerve6_.name as name1042_5_, customerve6_.addr1 as addr9_1042_5_, customerve6_.addr2 as addr10_1042_5_, customerve6_.taxr as taxr1042_5_, customerve6_.vtaxr as vtaxr1042_5_, customerve6_.city as city1042_5_, customerve6_.state as state1042_5_, customerve6_.zip as zip1042_5_, customerve6_.country as country1042_5_, customerve6_.territory as territory1042_5_, customerve6_.language as language1042_5_, customerve6_.wtu as wtu1042_5_, customerve6_.currency as currency1042_5_, customerve6_.country_code as country18_1042_5_, customerve6_.phone as phone1042_5_, customerve6_.fax as fax1042_5_, customerve6_.phone2 as phone21_1042_5_, customerve6_.email as email1042_5_, customerve6_.taxid as taxid1042_5_, customerve6_.comments as comments1042_5_, customerve6_.dlrydays as dlrydays1042_5_, customerve6_.c as c1042_5_, customerve6_.v as v1042_5_, customerve6_.vdlrydays as vdlrydays1042_5_, customerve6_.v_type as v48_1042_5_, customerve6_.critical_level as critical49_1042_5_, customerve6_.v_lock as v50_1042_5_, customerve6_.v_special as v47_1042_5_, customerve6_.region as region1042_5_, customerve6_.isdeleted as isdeleted1042_5_, customerve6_.c_hold as c64_1042_5_, customerve6_.addr_type as addr65_1042_5_, customerve6_.sales_code_id as sales85_1042_5_, customerve6_.duty_free as duty71_1042_5_, customerve6_.valid_date as valid72_1042_5_, customerve6_.tax_number as tax73_1042_5_, customerve6_.bill_to as bill74_1042_5_, customerve6_.ship_to as ship75_1042_5_, customerve6_.print_invoice as print76_1042_5_, customerve6_.parent as parent1042_5_, customerve6_.vendor_deposit_bank as vendor68_1042_5_, customerve6_.department_deposit_bank as department69_1042_5_, customerve6_.vid as vid1042_5_, customerve6_.department_account as department33_1042_5_, customerve6_.tax_type as tax78_1042_5_, customerve6_.tax_payer_id_code as tax79_1042_5_, customerve6_.use_backflush as use80_1042_5_, customerve6_.default_account as default81_1042_5_, customerve6_.by_invoice as by82_1042_5_, customerve6_.terms as terms1042_5_, customerve6_.isSalesAddr as isSales84_1042_5_, customerve7_.id as id1042_6_, customerve7_.LDATE as LDATE1042_6_, customerve7_.ADATE as ADATE1042_6_, customerve7_.remit_id as remit3_1042_6_, customerve7_.LUSER as LUSER1042_6_, customerve7_.ORIGIN as ORIGIN1042_6_, customerve7_.LCHNG as LCHNG1042_6_, customerve7_.name as name1042_6_, customerve7_.addr1 as addr9_1042_6_, customerve7_.addr2 as addr10_1042_6_, customerve7_.taxr as taxr1042_6_, customerve7_.vtaxr as vtaxr1042_6_, customerve7_.city as city1042_6_, customerve7_.state as state1042_6_, customerve7_.zip as zip1042_6_, customerve7_.country as country1042_6_, customerve7_.territory as territory1042_6_, customerve7_.language as language1042_6_, customerve7_.wtu as wtu1042_6_, customerve7_.currency as currency1042_6_, customerve7_.country_code as country18_1042_6_, customerve7_.phone as phone1042_6_, customerve7_.fax as fax1042_6_, customerve7_.phone2 as phone21_1042_6_, customerve7_.email as email1042_6_, customerve7_.taxid as taxid1042_6_, customerve7_.comments as comments1042_6_, customerve7_.dlrydays as dlrydays1042_6_, customerve7_.c as c1042_6_, customerve7_.v as v1042_6_, customerve7_.vdlrydays as vdlrydays1042_6_, customerve7_.v_type as v48_1042_6_, customerve7_.critical_level as critical49_1042_6_, customerve7_.v_lock as v50_1042_6_, customerve7_.v_special as v47_1042_6_, customerve7_.region as region1042_6_, customerve7_.isdeleted as isdeleted1042_6_, customerve7_.c_hold as c64_1042_6_, customerve7_.addr_type as addr65_1042_6_, customerve7_.sales_code_id as sales85_1042_6_, customerve7_.duty_free as duty71_1042_6_, customerve7_.valid_date as valid72_1042_6_, customerve7_.tax_number as tax73_1042_6_, customerve7_.bill_to as bill74_1042_6_, customerve7_.ship_to as ship75_1042_6_, customerve7_.print_invoice as print76_1042_6_, customerve7_.parent as parent1042_6_, customerve7_.vendor_deposit_bank as vendor68_1042_6_, customerve7_.department_deposit_bank as department69_1042_6_, customerve7_.vid as vid1042_6_, customerve7_.department_account as department33_1042_6_, customerve7_.tax_type as tax78_1042_6_, customerve7_.tax_payer_id_code as tax79_1042_6_, customerve7_.use_backflush as use80_1042_6_, customerve7_.default_account as default81_1042_6_, customerve7_.by_invoice as by82_1042_6_, customerve7_.terms as terms1042_6_, customerve7_.isSalesAddr as isSales84_1042_6_ from so salesorder0_ left outer join soi salesorder1_ on salesorder0_.so=salesorder1_.so left outer join order_bp boilerplat2_ on salesorder0_.so=boilerplat2_.order_no left outer join order_ci cidescribe3_ on salesorder0_.so=cidescribe3_.order_no left outer join so_pdf salesorder4_ on salesorder0_.so=salesorder4_.so left outer join ab customerve5_ on salesorder0_.id=customerve5_.id left outer join ab customerve6_ on salesorder0_.shipto=customerve6_.id left outer join ab customerve7_ on salesorder0_.billto=customerve7_.id where salesorder0_.so='S1700793' order by salesorder1_.si asc";
$Recordset1 = mysql_query($query_Recordset1, $c32_19aq_com) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = "-1";
if (isset($_GET['so'])) {
  $totalRows_Recordset1 = $_GET['so'];
}
$colname_Recordset1 = "-1";
if (isset($_GET['so'])) {
  $colname_Recordset1 = $_GET['so'];
}
mysql_select_db($database_c32_19aq_com, $c32_19aq_com);
$query_Recordset1 = sprintf("SELECT salesorder0_.so as so1004_7_, salesorder0_.LCHNG as LCHNG1004_7_, salesorder0_.id as id1004_7_, salesorder0_.shipto as shipto1004_7_, salesorder0_.billto as billto1004_7_, salesorder0_.LUSER as LUSER1004_7_, salesorder0_.LDATE as LDATE1004_7_, salesorder0_.ADATE as ADATE1004_7_, salesorder0_.ORIGIN as ORIGIN1004_7_, salesorder0_.ar_net_set as ar10_1004_7_, salesorder0_.ar_tax_set as ar11_1004_7_, salesorder0_.ar_sub as ar12_1004_7_, salesorder0_.ar_disc as ar13_1004_7_, salesorder0_.ar_net as ar14_1004_7_, salesorder0_.ar_ship as ar15_1004_7_, salesorder0_.ar_open as ar16_1004_7_, salesorder0_.ar_tax as ar17_1004_7_, salesorder0_.ar_freight as ar18_1004_7_, salesorder0_.ar_total as ar19_1004_7_, salesorder0_.ar_cost_total as ar20_1004_7_, salesorder0_.ar_std_cost_total as ar21_1004_7_, salesorder0_.ar_margin as ar22_1004_7_, salesorder0_.ar_margin_pct as ar23_1004_7_, salesorder0_.ar_margin_std as ar24_1004_7_, salesorder0_.ar_margin_pct_std as ar25_1004_7_, salesorder0_.ar_paid_inv as ar26_1004_7_, salesorder0_.ar_paid_gl as ar27_1004_7_, salesorder0_.arp_number as arp28_1004_7_, salesorder0_.ar_prepay as ar29_1004_7_, salesorder0_.ar_prepay_due as ar30_1004_7_, salesorder0_.ar_prepay_gl as ar31_1004_7_, salesorder0_.ar_prepay_apply as ar32_1004_7_, salesorder0_.ar_gl1_recorded as ar33_1004_7_, salesorder0_.ar_gl2_paid as ar34_1004_7_, salesorder0_.change_order as change35_1004_7_, salesorder0_.co_comments as co36_1004_7_, salesorder0_.po as po1004_7_, salesorder0_.customer_email as customer38_1004_7_, salesorder0_.contact as contact1004_7_, salesorder0_.status as status1004_7_, salesorder0_.shipping_status as shipping41_1004_7_, salesorder0_.reviewed as reviewed1004_7_, salesorder0_.reviewed_by as reviewed43_1004_7_, salesorder0_.delivery as delivery1004_7_, salesorder0_.desired as desired1004_7_, salesorder0_.delay as delay1004_7_, salesorder0_.priority as priority1004_7_, salesorder0_.original as original1004_7_, salesorder0_.actual as actual1004_7_, salesorder0_.shipvia as shipvia1004_7_, salesorder0_.carrier as carrier1004_7_, salesorder0_.carrier_acct as carrier52_1004_7_, salesorder0_.incoterm as incoterm1004_7_, salesorder0_.incoterm_place_port as incoterm54_1004_7_, salesorder0_.ship_acct as ship55_1004_7_, salesorder0_.locate as locate1004_7_, salesorder0_.language as language1004_7_, salesorder0_.currency as currency1004_7_, salesorder0_.exchange as exchange1004_7_, salesorder0_.terms as terms1004_7_, salesorder0_.entered as entered1004_7_, salesorder0_.salesman as salesman1004_7_, salesorder0_.salesman_id as salesman63_1004_7_, salesorder0_.sales_code_id as sales64_1004_7_, salesorder0_.qt as qt1004_7_, salesorder0_.sg_so as sg66_1004_7_, salesorder0_.requestor as requestor1004_7_, salesorder0_.project as project1004_7_, salesorder0_.reldoc as reldoc1004_7_, salesorder0_.cacct1 as cacct70_1004_7_, salesorder0_.bp as bp1004_7_, salesorder0_.so_bplate as so72_1004_7_, salesorder0_.comments as comments1004_7_, salesorder0_.notes as notes1004_7_, salesorder0_.co_unit_id as co75_1004_7_, salesorder0_.hold as hold1004_7_, salesorder0_.opinion as opinion1004_7_, salesorder0_.by_pos as by78_1004_7_, salesorder0_.receipt as receipt1004_7_, salesorder0_.acc_freight as acc80_1004_7_, salesorder0_.acc_tax as acc81_1004_7_, salesorder1_.so as so9_, salesorder1_.si as si9_, salesorder1_.so as so1064_0_, salesorder1_.si as si1064_0_, salesorder1_.ar_sub as ar3_1064_0_, salesorder1_.ar_disc as ar4_1064_0_, salesorder1_.ar_net as ar5_1064_0_, salesorder1_.ar_ship as ar6_1064_0_, salesorder1_.ar_open as ar7_1064_0_, salesorder1_.ar_tax as ar8_1064_0_, salesorder1_.ar_total as ar9_1064_0_, salesorder1_.ar_margin as ar45_1064_0_, salesorder1_.ar_margin_pct as ar46_1064_0_, salesorder1_.ar_margin_std as ar47_1064_0_, salesorder1_.ar_margin_pct_std as ar48_1064_0_, salesorder1_.ref_doc1 as ref10_1064_0_, salesorder1_.ref_doc2 as ref11_1064_0_, salesorder1_.change_order as change12_1064_0_, salesorder1_.qr as qr1064_0_, salesorder1_.status as status1064_0_, salesorder1_.shipping_status as shipping15_1064_0_, salesorder1_.delivery as delivery1064_0_, salesorder1_.desired as desired1064_0_, salesorder1_.delay as delay1064_0_, salesorder1_.arrive_date as arrive49_1064_0_, salesorder1_.priority as priority1064_0_, salesorder1_.original as original1064_0_, salesorder1_.actual as actual1064_0_, salesorder1_.locate as locate1064_0_, salesorder1_.shipvia as shipvia1064_0_, salesorder1_.pn as pn1064_0_, salesorder1_.pa as pa1064_0_, salesorder1_.pn_from as pn26_1064_0_, salesorder1_.mn as mn1064_0_, salesorder1_.rv as rv1064_0_, salesorder1_.dwg as dwg1064_0_, salesorder1_.bom as bom1064_0_, salesorder1_.qty as qty1064_0_, salesorder1_.sip as sip1064_0_, salesorder1_.ship as ship1064_0_, salesorder1_.hqa as hqa1064_0_, salesorder1_.cost as cost1064_0_, salesorder1_.std_cost as std51_1064_0_, salesorder1_.unit as unit1064_0_, salesorder1_.list as list1064_0_, salesorder1_.sales_unit as sales52_1064_0_, salesorder1_.sales_price as sales53_1064_0_, salesorder1_.sales_qty as sales54_1064_0_, salesorder1_.dcode as dcode1064_0_, salesorder1_.discount as discount1064_0_, salesorder1_.taxr as taxr1064_0_, salesorder1_.description as descrip40_1064_0_, salesorder1_.mfg as mfg1064_0_, salesorder1_.mpn as mpn1064_0_, salesorder1_.comments as comments1064_0_, salesorder1_.notes as notes1064_0_, salesorder1_.traceable as traceable1064_0_, salesorder1_.trace_level as trace56_1064_0_, salesorder1_.product_code as product57_1064_0_, salesorder1_.commodity_code as commodity58_1064_0_, salesorder1_.ar as ar1064_0_, salesorder1_.tax_cost as tax60_1064_0_, salesorder1_.use_tax_price as use61_1064_0_, salesorder1_.weight_per_unit as weight62_1064_0_, salesorder1_.price_per_weight as price63_1064_0_, salesorder1_.price_per_weight_withtax as price64_1064_0_, salesorder1_.all_weight as all65_1064_0_, salesorder1_.weight_uom as weight66_1064_0_, boilerplat2_.order_no as order1_10_, boilerplat2_.ii as ii10_, boilerplat2_.order_no as order1_1076_1_, boilerplat2_.ii as ii1076_1_, boilerplat2_.LDATE as LDATE1076_1_, boilerplat2_.id as id1076_1_, boilerplat2_.bp as bp1076_1_, cidescribe3_.order_no as order1_11_, cidescribe3_.ii as ii11_, cidescribe3_.order_no as order1_913_2_, cidescribe3_.ii as ii913_2_, cidescribe3_.LDATE as LDATE913_2_, cidescribe3_.instructid as instructid913_2_, cidescribe3_.ciDescribes as ciDescri5_913_2_, salesorder4_.so as so12_, salesorder4_.ii as ii12_, salesorder4_.ii as ii1251_3_, salesorder4_.so as so1251_3_, salesorder4_.doc_desc as doc3_1251_3_, salesorder4_.dr as dr1251_3_, salesorder4_.comments as comments1251_3_, salesorder4_.LUSER as LUSER1251_3_, salesorder4_.LDATE as LDATE1251_3_, salesorder4_.ext as ext1251_3_, salesorder4_.doc_name as doc9_1251_3_, salesorder4_.doc_length as doc10_1251_3_, customerve5_.id as id1042_4_, customerve5_.LDATE as LDATE1042_4_, customerve5_.ADATE as ADATE1042_4_, customerve5_.remit_id as remit3_1042_4_, customerve5_.LUSER as LUSER1042_4_, customerve5_.ORIGIN as ORIGIN1042_4_, customerve5_.LCHNG as LCHNG1042_4_, customerve5_.name as name1042_4_, customerve5_.addr1 as addr9_1042_4_, customerve5_.addr2 as addr10_1042_4_, customerve5_.taxr as taxr1042_4_, customerve5_.vtaxr as vtaxr1042_4_, customerve5_.city as city1042_4_, customerve5_.state as state1042_4_, customerve5_.zip as zip1042_4_, customerve5_.country as country1042_4_, customerve5_.territory as territory1042_4_, customerve5_.language as language1042_4_, customerve5_.wtu as wtu1042_4_, customerve5_.currency as currency1042_4_, customerve5_.country_code as country18_1042_4_, customerve5_.phone as phone1042_4_, customerve5_.fax as fax1042_4_, customerve5_.phone2 as phone21_1042_4_, customerve5_.email as email1042_4_, customerve5_.taxid as taxid1042_4_, customerve5_.comments as comments1042_4_, customerve5_.dlrydays as dlrydays1042_4_, customerve5_.c as c1042_4_, customerve5_.v as v1042_4_, customerve5_.vdlrydays as vdlrydays1042_4_, customerve5_.v_type as v48_1042_4_, customerve5_.critical_level as critical49_1042_4_, customerve5_.v_lock as v50_1042_4_, customerve5_.v_special as v47_1042_4_, customerve5_.region as region1042_4_, customerve5_.isdeleted as isdeleted1042_4_, customerve5_.c_hold as c64_1042_4_, customerve5_.addr_type as addr65_1042_4_, customerve5_.sales_code_id as sales85_1042_4_, customerve5_.duty_free as duty71_1042_4_, customerve5_.valid_date as valid72_1042_4_, customerve5_.tax_number as tax73_1042_4_, customerve5_.bill_to as bill74_1042_4_, customerve5_.ship_to as ship75_1042_4_, customerve5_.print_invoice as print76_1042_4_, customerve5_.parent as parent1042_4_, customerve5_.vendor_deposit_bank as vendor68_1042_4_, customerve5_.department_deposit_bank as department69_1042_4_, customerve5_.vid as vid1042_4_, customerve5_.department_account as department33_1042_4_, customerve5_.tax_type as tax78_1042_4_, customerve5_.tax_payer_id_code as tax79_1042_4_, customerve5_.use_backflush as use80_1042_4_, customerve5_.default_account as default81_1042_4_, customerve5_.by_invoice as by82_1042_4_, customerve5_.terms as terms1042_4_, customerve5_.isSalesAddr as isSales84_1042_4_, customerve6_.id as id1042_5_, customerve6_.LDATE as LDATE1042_5_, customerve6_.ADATE as ADATE1042_5_, customerve6_.remit_id as remit3_1042_5_, customerve6_.LUSER as LUSER1042_5_, customerve6_.ORIGIN as ORIGIN1042_5_, customerve6_.LCHNG as LCHNG1042_5_, customerve6_.name as name1042_5_, customerve6_.addr1 as addr9_1042_5_, customerve6_.addr2 as addr10_1042_5_, customerve6_.taxr as taxr1042_5_, customerve6_.vtaxr as vtaxr1042_5_, customerve6_.city as city1042_5_, customerve6_.state as state1042_5_, customerve6_.zip as zip1042_5_, customerve6_.country as country1042_5_, customerve6_.territory as territory1042_5_, customerve6_.language as language1042_5_, customerve6_.wtu as wtu1042_5_, customerve6_.currency as currency1042_5_, customerve6_.country_code as country18_1042_5_, customerve6_.phone as phone1042_5_, customerve6_.fax as fax1042_5_, customerve6_.phone2 as phone21_1042_5_, customerve6_.email as email1042_5_, customerve6_.taxid as taxid1042_5_, customerve6_.comments as comments1042_5_, customerve6_.dlrydays as dlrydays1042_5_, customerve6_.c as c1042_5_, customerve6_.v as v1042_5_, customerve6_.vdlrydays as vdlrydays1042_5_, customerve6_.v_type as v48_1042_5_, customerve6_.critical_level as critical49_1042_5_, customerve6_.v_lock as v50_1042_5_, customerve6_.v_special as v47_1042_5_, customerve6_.region as region1042_5_, customerve6_.isdeleted as isdeleted1042_5_, customerve6_.c_hold as c64_1042_5_, customerve6_.addr_type as addr65_1042_5_, customerve6_.sales_code_id as sales85_1042_5_, customerve6_.duty_free as duty71_1042_5_, customerve6_.valid_date as valid72_1042_5_, customerve6_.tax_number as tax73_1042_5_, customerve6_.bill_to as bill74_1042_5_, customerve6_.ship_to as ship75_1042_5_, customerve6_.print_invoice as print76_1042_5_, customerve6_.parent as parent1042_5_, customerve6_.vendor_deposit_bank as vendor68_1042_5_, customerve6_.department_deposit_bank as department69_1042_5_, customerve6_.vid as vid1042_5_, customerve6_.department_account as department33_1042_5_, customerve6_.tax_type as tax78_1042_5_, customerve6_.tax_payer_id_code as tax79_1042_5_, customerve6_.use_backflush as use80_1042_5_, customerve6_.default_account as default81_1042_5_, customerve6_.by_invoice as by82_1042_5_, customerve6_.terms as terms1042_5_, customerve6_.isSalesAddr as isSales84_1042_5_, customerve7_.id as id1042_6_, customerve7_.LDATE as LDATE1042_6_, customerve7_.ADATE as ADATE1042_6_, customerve7_.remit_id as remit3_1042_6_, customerve7_.LUSER as LUSER1042_6_, customerve7_.ORIGIN as ORIGIN1042_6_, customerve7_.LCHNG as LCHNG1042_6_, customerve7_.name as name1042_6_, customerve7_.addr1 as addr9_1042_6_, customerve7_.addr2 as addr10_1042_6_, customerve7_.taxr as taxr1042_6_, customerve7_.vtaxr as vtaxr1042_6_, customerve7_.city as city1042_6_, customerve7_.state as state1042_6_, customerve7_.zip as zip1042_6_, customerve7_.country as country1042_6_, customerve7_.territory as territory1042_6_, customerve7_.language as language1042_6_, customerve7_.wtu as wtu1042_6_, customerve7_.currency as currency1042_6_, customerve7_.country_code as country18_1042_6_, customerve7_.phone as phone1042_6_, customerve7_.fax as fax1042_6_, customerve7_.phone2 as phone21_1042_6_, customerve7_.email as email1042_6_, customerve7_.taxid as taxid1042_6_, customerve7_.comments as comments1042_6_, customerve7_.dlrydays as dlrydays1042_6_, customerve7_.c as c1042_6_, customerve7_.v as v1042_6_, customerve7_.vdlrydays as vdlrydays1042_6_, customerve7_.v_type as v48_1042_6_, customerve7_.critical_level as critical49_1042_6_, customerve7_.v_lock as v50_1042_6_, customerve7_.v_special as v47_1042_6_, customerve7_.region as region1042_6_, customerve7_.isdeleted as isdeleted1042_6_, customerve7_.c_hold as c64_1042_6_, customerve7_.addr_type as addr65_1042_6_, customerve7_.sales_code_id as sales85_1042_6_, customerve7_.duty_free as duty71_1042_6_, customerve7_.valid_date as valid72_1042_6_, customerve7_.tax_number as tax73_1042_6_, customerve7_.bill_to as bill74_1042_6_, customerve7_.ship_to as ship75_1042_6_, customerve7_.print_invoice as print76_1042_6_, customerve7_.parent as parent1042_6_, customerve7_.vendor_deposit_bank as vendor68_1042_6_, customerve7_.department_deposit_bank as department69_1042_6_, customerve7_.vid as vid1042_6_, customerve7_.department_account as department33_1042_6_, customerve7_.tax_type as tax78_1042_6_, customerve7_.tax_payer_id_code as tax79_1042_6_, customerve7_.use_backflush as use80_1042_6_, customerve7_.default_account as default81_1042_6_, customerve7_.by_invoice as by82_1042_6_, customerve7_.terms as terms1042_6_, customerve7_.isSalesAddr as isSales84_1042_6_ FROM so salesorder0_ left outer join soi salesorder1_ on salesorder0_.so=salesorder1_.so left outer join order_bp boilerplat2_ on salesorder0_.so=boilerplat2_.order_no left outer join order_ci cidescribe3_ on salesorder0_.so=cidescribe3_.order_no left outer join so_pdf salesorder4_ on salesorder0_.so=salesorder4_.so left outer join ab customerve5_ on salesorder0_.id=customerve5_.id left outer join ab customerve6_ on salesorder0_.shipto=customerve6_.id left outer join ab customerve7_ on salesorder0_.billto=customerve7_.id WHERE salesorder0_.so= %s ORDER BY salesorder1_.si asc", GetSQLValueString($colname_Recordset1, "text"));
$Recordset1 = mysql_query($query_Recordset1, $c32_19aq_com) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);

  if ($row_Recordset1['status1004_7_']=="NOT REVIEWED"){
	$shenhe="未审核";
	$bgcolor="#FF0000";
	}elseif($row_Recordset1['status1004_7_']=="OPEN"){
	$shenhe="打开";
	$bgcolor="#FFFFFF";
		}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>销售单详情</title>
</head>

<body>

<p>&nbsp;</p>
<table border="1" cellpadding="1" cellspacing="0">
  <tr>
    <th scope="col">基本信息</th>
    <th scope="col">&nbsp;</th>
    <th scope="col">&nbsp;</th>
    <th scope="col">&nbsp;</th>
    <th scope="col">&nbsp;</th>
    <th scope="col">&nbsp;</th>
    <th scope="col">&nbsp;</th>
    <th scope="col">&nbsp;</th>
    <th scope="col">&nbsp;</th>
    <th scope="col">&nbsp;</th>
    <th scope="col">&nbsp;</th>
    <th scope="col">&nbsp;</th>
    <th scope="col">&nbsp;</th>
    <th scope="col">&nbsp;</th>
    <th scope="col">&nbsp;</th>
    <th scope="col">&nbsp;</th>
    <th scope="col">&nbsp;</th>
    <th scope="col">&nbsp;</th>
    <th scope="col">&nbsp;</th>
  </tr>
  <tr>
    <th scope="col">销售单号</th>
    <th scope="col"><?php echo $row_Recordset1['so1004_7_']; ?></th>
    <th scope="col">项目</th>
    <th scope="col">&nbsp;</th>
    <th scope="col">客户采购单号</th>
    <th scope="col">&nbsp;</th>
    <th scope="col">状态</th>
    <th bgcolor=<?php echo $bgcolor; ?>><?php echo $shenhe; ?></th>
    <th scope="col">&nbsp;</th>
    <th scope="col">&nbsp;</th>
    <th scope="col">&nbsp;</th>
    <th scope="col">&nbsp;</th>
    <th scope="col">&nbsp;</th>
    <th scope="col">&nbsp;</th>
    <th scope="col">&nbsp;</th>
    <th scope="col">&nbsp;</th>
    <th scope="col">&nbsp;</th>
    <th scope="col">&nbsp;</th>
    <th scope="col">&nbsp;</th>
  </tr>
  <tr>
    <td>销售单日期</td>
    <td><?php echo $row_Recordset1['original1064_0_']; ?></td>
    <td>交易方式</td>
    <td>&nbsp;</td>
    <td>销售员</td>
    <td>&nbsp;</td>
    <td>锁定</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>参考销售单</td>
    <td>&nbsp;</td>
    <td>目的地</td>
    <td>&nbsp;</td>
    <td>销售代码</td>
    <td>&nbsp;</td>
    <td>语言</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>版本号</td>
    <td>&nbsp;</td>
    <td>承运人</td>
    <td>&nbsp;</td>
    <td>申请人</td>
    <td>&nbsp;</td>
    <td>币种</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>预收款额</td>
    <td>&nbsp;</td>
    <td>承运人账户</td>
    <td>&nbsp;</td>
    <td>审批人</td>
    <td>&nbsp;</td>
    <td>会计科目</td>
    <td><?php echo $row_Recordset1['cacct70_1004_7_']; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>预收款</td>
    <td>&nbsp;</td>
    <td>相关文档</td>
    <td>&nbsp;</td>
    <td>审批日期</td>
    <td>&nbsp;</td>
    <td>付款周期</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>预收款抵消账款</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>联系人</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>客户</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>付款方</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>收货方</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>编号</td>
    <td><?php echo $row_Recordset1['id1004_7_']; ?></td>
    <td>名称</td>
    <td>&nbsp;</td>
    <td>编号</td>
    <td><?php echo $row_Recordset1['shipto1004_7_']; ?></td>
    <td>名称</td>
    <td>&nbsp;</td>
    <td>编号</td>
    <td><?php echo $row_Recordset1['billto1004_7_']; ?></td>
    <td>名称</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>地址一</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>地址二</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>城市</td>
    <td>&nbsp;</td>
    <td>省份</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>邮编</td>
    <td>&nbsp;</td>
    <td>国家</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>销售单项</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>项号</td>
    <td>料号</td>
    <td>类型</td>
    <td>描述</td>
    <td>&nbsp;</td>
    <td>发票号</td>
    <td>版本</td>
    <td>订购数量</td>
    <td>待发</td>
    <td>发货数量</td>
    <td>单位</td>
    <td>单价</td>
    <td>折扣率</td>
    <td>小计</td>
    <td>发货日期</td>
    <td>到达日期</td>
    <td>状态</td>
    <td>平均价</td>
    <td>标准价</td>
  </tr>
  <?php do { ?>
  <tr>
    <td><?php echo $row_Recordset1['si9_']; ?></td>
    <td><?php echo $row_Recordset1['pn1064_0_']; ?></td>
    <td><?php echo $row_Recordset1['pa1064_0_']; ?></td>
    <td width="50px"><?php echo $row_Recordset1['descrip40_1064_0_']; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><?php echo $row_Recordset1['rv1064_0_']; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><?php echo $row_Recordset1['ar3_1064_0_']; ?></td>
    <td><?php echo $row_Recordset1['desired1064_0_']; ?>+<?php echo $row_Recordset1['delay1064_0_']; ?>天</td>
    <td><?php echo $row_Recordset1['arrive49_1064_0_']; ?></td>
    <td><?php echo $row_Recordset1['status1064_0_']; ?></td>
    <td><?php echo $row_Recordset1['ar45_1064_0_']; ?></td>
    <td>&nbsp;</td>
  </tr>
  <?php } while ($row_Recordset1 = mysql_fetch_assoc($Recordset1)); ?>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>小计</td>
    <td>&nbsp;</td>
    <td>税</td>
    <td>&nbsp;</td>
    <td>运费</td>
    <td>&nbsp;</td>
    <td>总计</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>平均成本利润</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>标准成本利润</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>创建日期</td>
    <td><?php echo $row_Recordset1['ADATE1004_7_']; ?></td>
    <td>创建人</td>
    <td><?php echo $row_Recordset1['ORIGIN1004_7_']; ?></td>
    <td>最后修改日期</td>
    <td><?php echo $row_Recordset1['LDATE1004_7_']; ?></td>
    <td>最后修改人</td>
    <td><?php echo $row_Recordset1['LUSER1004_7_']; ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>

<form action="" method="get" name="so_update">
<input name="LCHNG" type="text" value="333" />
<input name="status" type="text" value="OPEN" />
<input name="reviewed" type="text" value="2017-01-01" />
<input name="reviewed_by" type="text" value="web审核" />
<input name="so" type="text" value="<?php echo $row_Recordset1['so1004_7_']; ?>" />
<input name="ondemand" type="text" value="123123" />
<!--ondemand增加物料在系统内订单数-->
<input name="pn" type="text" value="" />
</form>


</body>
</html>
<?php
mysql_free_result($Recordset1);
?>
