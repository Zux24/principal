<?php
require_once(getabspath("classes/cipherer.php"));




$tdatacategorias = array();
	$tdatacategorias[".truncateText"] = true;
	$tdatacategorias[".NumberOfChars"] = 80;
	$tdatacategorias[".ShortName"] = "categorias";
	$tdatacategorias[".OwnerID"] = "";
	$tdatacategorias[".OriginalTable"] = "categorias";

//	field labels
$fieldLabelscategorias = array();
$fieldToolTipscategorias = array();
$pageTitlescategorias = array();
$placeHolderscategorias = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscategorias["Spanish"] = array();
	$fieldToolTipscategorias["Spanish"] = array();
	$placeHolderscategorias["Spanish"] = array();
	$pageTitlescategorias["Spanish"] = array();
	$fieldLabelscategorias["Spanish"]["Categoria"] = "Categoria";
	$fieldToolTipscategorias["Spanish"]["Categoria"] = "";
	$placeHolderscategorias["Spanish"]["Categoria"] = "";
	$fieldLabelscategorias["Spanish"]["id_producto"] = "Id Producto";
	$fieldToolTipscategorias["Spanish"]["id_producto"] = "";
	$placeHolderscategorias["Spanish"]["id_producto"] = "";
	if (count($fieldToolTipscategorias["Spanish"]))
		$tdatacategorias[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelscategorias[""] = array();
	$fieldToolTipscategorias[""] = array();
	$placeHolderscategorias[""] = array();
	$pageTitlescategorias[""] = array();
	$fieldLabelscategorias[""]["id_producto"] = "Id Producto";
	$fieldToolTipscategorias[""]["id_producto"] = "";
	$placeHolderscategorias[""]["id_producto"] = "";
	if (count($fieldToolTipscategorias[""]))
		$tdatacategorias[".isUseToolTips"] = true;
}


	$tdatacategorias[".NCSearch"] = true;



$tdatacategorias[".shortTableName"] = "categorias";
$tdatacategorias[".nSecOptions"] = 0;
$tdatacategorias[".recsPerRowPrint"] = 1;
$tdatacategorias[".mainTableOwnerID"] = "";
$tdatacategorias[".moveNext"] = 1;
$tdatacategorias[".entityType"] = 0;

$tdatacategorias[".strOriginalTableName"] = "categorias";

	



$tdatacategorias[".showAddInPopup"] = false;

$tdatacategorias[".showEditInPopup"] = false;

$tdatacategorias[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacategorias[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacategorias[".fieldsForRegister"] = array();

$tdatacategorias[".listAjax"] = false;

	$tdatacategorias[".audit"] = false;

	$tdatacategorias[".locking"] = false;


$tdatacategorias[".add"] = true;
$tdatacategorias[".afterAddAction"] = 1;
$tdatacategorias[".closePopupAfterAdd"] = 1;
$tdatacategorias[".afterAddActionDetTable"] = "";

$tdatacategorias[".list"] = true;



$tdatacategorias[".reorderRecordsByHeader"] = true;


$tdatacategorias[".exportFormatting"] = 2;
$tdatacategorias[".exportDelimiter"] = ",";
		

$tdatacategorias[".import"] = true;

$tdatacategorias[".exportTo"] = true;

$tdatacategorias[".printFriendly"] = true;


$tdatacategorias[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatacategorias[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatacategorias[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatacategorias[".searchSaving"] = false;
//

$tdatacategorias[".showSearchPanel"] = true;
		$tdatacategorias[".flexibleSearch"] = true;

$tdatacategorias[".isUseAjaxSuggest"] = true;

$tdatacategorias[".rowHighlite"] = true;





$tdatacategorias[".ajaxCodeSnippetAdded"] = false;

$tdatacategorias[".buttonsAdded"] = false;

$tdatacategorias[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacategorias[".isUseTimeForSearch"] = false;



$tdatacategorias[".badgeColor"] = "6B8E23";


$tdatacategorias[".allSearchFields"] = array();
$tdatacategorias[".filterFields"] = array();
$tdatacategorias[".requiredSearchFields"] = array();

$tdatacategorias[".allSearchFields"][] = "Categoria";
	$tdatacategorias[".allSearchFields"][] = "id_producto";
	

$tdatacategorias[".googleLikeFields"] = array();
$tdatacategorias[".googleLikeFields"][] = "Categoria";
$tdatacategorias[".googleLikeFields"][] = "id_producto";


$tdatacategorias[".advSearchFields"] = array();
$tdatacategorias[".advSearchFields"][] = "Categoria";
$tdatacategorias[".advSearchFields"][] = "id_producto";

$tdatacategorias[".tableType"] = "list";

$tdatacategorias[".printerPageOrientation"] = 0;
$tdatacategorias[".nPrinterPageScale"] = 100;

$tdatacategorias[".nPrinterSplitRecords"] = 40;

$tdatacategorias[".nPrinterPDFSplitRecords"] = 40;



$tdatacategorias[".geocodingEnabled"] = false;





$tdatacategorias[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatacategorias[".pageSize"] = 20;

$tdatacategorias[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacategorias[".strOrderBy"] = $tstrOrderBy;

$tdatacategorias[".orderindexes"] = array();

$tdatacategorias[".sqlHead"] = "SELECT Categoria,  id_producto";
$tdatacategorias[".sqlFrom"] = "FROM categorias";
$tdatacategorias[".sqlWhereExpr"] = "";
$tdatacategorias[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "",	
	'showRowCount' => 0,
	'hideEmpty' => 0,	
);				  
$tdatacategorias[".arrGridTabs"] = $arrGridTabs;











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacategorias[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacategorias[".arrGroupsPerPage"] = $arrGPP;

$tdatacategorias[".highlightSearchResults"] = true;

$tableKeyscategorias = array();
$tdatacategorias[".Keys"] = $tableKeyscategorias;

$tdatacategorias[".listFields"] = array();
$tdatacategorias[".listFields"][] = "id_producto";
$tdatacategorias[".listFields"][] = "Categoria";

$tdatacategorias[".hideMobileList"] = array();


$tdatacategorias[".viewFields"] = array();

$tdatacategorias[".addFields"] = array();
$tdatacategorias[".addFields"][] = "Categoria";
$tdatacategorias[".addFields"][] = "id_producto";

$tdatacategorias[".masterListFields"] = array();
$tdatacategorias[".masterListFields"][] = "Categoria";
$tdatacategorias[".masterListFields"][] = "id_producto";

$tdatacategorias[".inlineAddFields"] = array();

$tdatacategorias[".editFields"] = array();

$tdatacategorias[".inlineEditFields"] = array();

$tdatacategorias[".updateSelectedFields"] = array();


$tdatacategorias[".exportFields"] = array();
$tdatacategorias[".exportFields"][] = "Categoria";
$tdatacategorias[".exportFields"][] = "id_producto";

$tdatacategorias[".importFields"] = array();
$tdatacategorias[".importFields"][] = "Categoria";
$tdatacategorias[".importFields"][] = "id_producto";

$tdatacategorias[".printFields"] = array();
$tdatacategorias[".printFields"][] = "Categoria";
$tdatacategorias[".printFields"][] = "id_producto";


//	Categoria
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Categoria";
	$fdata["GoodName"] = "Categoria";
	$fdata["ownerTable"] = "categorias";
	$fdata["Label"] = GetFieldLabel("categorias","Categoria");
	$fdata["FieldType"] = 129;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Categoria";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Categoria";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	
		
	
// Begin Lookup settings
		$edata["LookupType"] = 0;
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Tecnologia";
	$edata["LookupValues"][] = "Comida";
	$edata["LookupValues"][] = "Deportes";
	$edata["LookupValues"][] = "Vestimenta";
	$edata["LookupValues"][] = "Muebles";
	$edata["LookupValues"][] = "Moda";
	$edata["LookupValues"][] = "Video Juegos";
	$edata["LookupValues"][] = "Libros";
	$edata["LookupValues"][] = "Mascotas";
	$edata["LookupValues"][] = "Vehiculos";
	$edata["LookupValues"][] = "Arte";
	$edata["LookupValues"][] = "Electrodomesticos";
	$edata["LookupValues"][] = "Instrumentos Musicales";
	$edata["LookupValues"][] = "Salud y Belleza";
	$edata["LookupValues"][] = "Industria y oficinas";
	$edata["LookupValues"][] = "Inmuebles";

	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacategorias["Categoria"] = $fdata;
//	id_producto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_producto";
	$fdata["GoodName"] = "id_producto";
	$fdata["ownerTable"] = "categorias";
	$fdata["Label"] = GetFieldLabel("categorias","id_producto");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "id_producto";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_producto";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

		
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	
		
	


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatacategorias["id_producto"] = $fdata;


$tables_data["categorias"]=&$tdatacategorias;
$field_labels["categorias"] = &$fieldLabelscategorias;
$fieldToolTips["categorias"] = &$fieldToolTipscategorias;
$placeHolders["categorias"] = &$placeHolderscategorias;
$page_titles["categorias"] = &$pageTitlescategorias;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["categorias"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["categorias"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_categorias()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Categoria,  id_producto";
$proto0["m_strFrom"] = "FROM categorias";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "Categoria",
	"m_strTable" => "categorias",
	"m_srcTableName" => "categorias"
));

$proto6["m_sql"] = "Categoria";
$proto6["m_srcTableName"] = "categorias";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id_producto",
	"m_strTable" => "categorias",
	"m_srcTableName" => "categorias"
));

$proto8["m_sql"] = "id_producto";
$proto8["m_srcTableName"] = "categorias";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "categorias";
$proto11["m_srcTableName"] = "categorias";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id_producto";
$proto11["m_columns"][] = "Categoria";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "categorias";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "categorias";
$proto12=array();
$proto12["m_sql"] = "";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

$proto10["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto10);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="categorias";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_categorias = createSqlQuery_categorias();


	
		;

		

$tdatacategorias[".sqlquery"] = $queryData_categorias;

$tableEvents["categorias"] = new eventsBase;
$tdatacategorias[".hasEvents"] = false;

?>