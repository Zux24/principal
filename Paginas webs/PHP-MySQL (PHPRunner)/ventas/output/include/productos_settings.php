<?php
require_once(getabspath("classes/cipherer.php"));




$tdataproductos = array();
	$tdataproductos[".truncateText"] = true;
	$tdataproductos[".NumberOfChars"] = 80;
	$tdataproductos[".ShortName"] = "productos";
	$tdataproductos[".OwnerID"] = "";
	$tdataproductos[".OriginalTable"] = "productos";

//	field labels
$fieldLabelsproductos = array();
$fieldToolTipsproductos = array();
$pageTitlesproductos = array();
$placeHoldersproductos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsproductos["Spanish"] = array();
	$fieldToolTipsproductos["Spanish"] = array();
	$placeHoldersproductos["Spanish"] = array();
	$pageTitlesproductos["Spanish"] = array();
	$fieldLabelsproductos["Spanish"]["Nombre"] = "Nombre";
	$fieldToolTipsproductos["Spanish"]["Nombre"] = "";
	$placeHoldersproductos["Spanish"]["Nombre"] = "";
	$fieldLabelsproductos["Spanish"]["Precios"] = "Precios";
	$fieldToolTipsproductos["Spanish"]["Precios"] = "";
	$placeHoldersproductos["Spanish"]["Precios"] = "";
	$fieldLabelsproductos["Spanish"]["Caracteristicas"] = "Caracteristicas";
	$fieldToolTipsproductos["Spanish"]["Caracteristicas"] = "";
	$placeHoldersproductos["Spanish"]["Caracteristicas"] = "";
	$fieldLabelsproductos["Spanish"]["id_producto"] = "Id Producto";
	$fieldToolTipsproductos["Spanish"]["id_producto"] = "";
	$placeHoldersproductos["Spanish"]["id_producto"] = "";
	if (count($fieldToolTipsproductos["Spanish"]))
		$tdataproductos[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsproductos[""] = array();
	$fieldToolTipsproductos[""] = array();
	$placeHoldersproductos[""] = array();
	$pageTitlesproductos[""] = array();
	$fieldLabelsproductos[""]["id_producto"] = "Id Producto";
	$fieldToolTipsproductos[""]["id_producto"] = "";
	$placeHoldersproductos[""]["id_producto"] = "";
	if (count($fieldToolTipsproductos[""]))
		$tdataproductos[".isUseToolTips"] = true;
}


	$tdataproductos[".NCSearch"] = true;



$tdataproductos[".shortTableName"] = "productos";
$tdataproductos[".nSecOptions"] = 0;
$tdataproductos[".recsPerRowPrint"] = 1;
$tdataproductos[".mainTableOwnerID"] = "";
$tdataproductos[".moveNext"] = 1;
$tdataproductos[".entityType"] = 0;

$tdataproductos[".strOriginalTableName"] = "productos";

	



$tdataproductos[".showAddInPopup"] = false;

$tdataproductos[".showEditInPopup"] = false;

$tdataproductos[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataproductos[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataproductos[".fieldsForRegister"] = array();

$tdataproductos[".listAjax"] = false;

	$tdataproductos[".audit"] = false;

	$tdataproductos[".locking"] = false;


$tdataproductos[".add"] = true;
$tdataproductos[".afterAddAction"] = 1;
$tdataproductos[".closePopupAfterAdd"] = 1;
$tdataproductos[".afterAddActionDetTable"] = "";

$tdataproductos[".list"] = true;



$tdataproductos[".reorderRecordsByHeader"] = true;


$tdataproductos[".exportFormatting"] = 2;
$tdataproductos[".exportDelimiter"] = ",";
		

$tdataproductos[".import"] = true;

$tdataproductos[".exportTo"] = true;

$tdataproductos[".printFriendly"] = true;


$tdataproductos[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataproductos[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataproductos[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataproductos[".searchSaving"] = false;
//

$tdataproductos[".showSearchPanel"] = true;
		$tdataproductos[".flexibleSearch"] = true;

$tdataproductos[".isUseAjaxSuggest"] = true;

$tdataproductos[".rowHighlite"] = true;





$tdataproductos[".ajaxCodeSnippetAdded"] = false;

$tdataproductos[".buttonsAdded"] = false;

$tdataproductos[".addPageEvents"] = false;

// use timepicker for search panel
$tdataproductos[".isUseTimeForSearch"] = false;



$tdataproductos[".badgeColor"] = "DC143C";


$tdataproductos[".allSearchFields"] = array();
$tdataproductos[".filterFields"] = array();
$tdataproductos[".requiredSearchFields"] = array();

$tdataproductos[".allSearchFields"][] = "id_producto";
	$tdataproductos[".allSearchFields"][] = "Nombre";
	$tdataproductos[".allSearchFields"][] = "Precios";
	$tdataproductos[".allSearchFields"][] = "Caracteristicas";
	

$tdataproductos[".googleLikeFields"] = array();
$tdataproductos[".googleLikeFields"][] = "Nombre";
$tdataproductos[".googleLikeFields"][] = "Precios";
$tdataproductos[".googleLikeFields"][] = "Caracteristicas";
$tdataproductos[".googleLikeFields"][] = "id_producto";


$tdataproductos[".advSearchFields"] = array();
$tdataproductos[".advSearchFields"][] = "id_producto";
$tdataproductos[".advSearchFields"][] = "Nombre";
$tdataproductos[".advSearchFields"][] = "Precios";
$tdataproductos[".advSearchFields"][] = "Caracteristicas";

$tdataproductos[".tableType"] = "list";

$tdataproductos[".printerPageOrientation"] = 0;
$tdataproductos[".nPrinterPageScale"] = 100;

$tdataproductos[".nPrinterSplitRecords"] = 40;

$tdataproductos[".nPrinterPDFSplitRecords"] = 40;



$tdataproductos[".geocodingEnabled"] = false;





$tdataproductos[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataproductos[".pageSize"] = 20;

$tdataproductos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataproductos[".strOrderBy"] = $tstrOrderBy;

$tdataproductos[".orderindexes"] = array();

$tdataproductos[".sqlHead"] = "SELECT Nombre,  Precios,  Caracteristicas,  id_producto";
$tdataproductos[".sqlFrom"] = "FROM productos";
$tdataproductos[".sqlWhereExpr"] = "";
$tdataproductos[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "",
	'nameType' => 'Text',
	'where' => "",	
	'showRowCount' => 0,
	'hideEmpty' => 0,	
);				  
$tdataproductos[".arrGridTabs"] = $arrGridTabs;











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataproductos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataproductos[".arrGroupsPerPage"] = $arrGPP;

$tdataproductos[".highlightSearchResults"] = true;

$tableKeysproductos = array();
$tdataproductos[".Keys"] = $tableKeysproductos;

$tdataproductos[".listFields"] = array();
$tdataproductos[".listFields"][] = "id_producto";
$tdataproductos[".listFields"][] = "Nombre";
$tdataproductos[".listFields"][] = "Precios";
$tdataproductos[".listFields"][] = "Caracteristicas";

$tdataproductos[".hideMobileList"] = array();


$tdataproductos[".viewFields"] = array();
$tdataproductos[".viewFields"][] = "id_producto";

$tdataproductos[".addFields"] = array();
$tdataproductos[".addFields"][] = "Nombre";
$tdataproductos[".addFields"][] = "Precios";
$tdataproductos[".addFields"][] = "Caracteristicas";

$tdataproductos[".masterListFields"] = array();
$tdataproductos[".masterListFields"][] = "Nombre";
$tdataproductos[".masterListFields"][] = "Precios";
$tdataproductos[".masterListFields"][] = "Caracteristicas";
$tdataproductos[".masterListFields"][] = "id_producto";

$tdataproductos[".inlineAddFields"] = array();

$tdataproductos[".editFields"] = array();

$tdataproductos[".inlineEditFields"] = array();

$tdataproductos[".updateSelectedFields"] = array();


$tdataproductos[".exportFields"] = array();
$tdataproductos[".exportFields"][] = "id_producto";
$tdataproductos[".exportFields"][] = "Nombre";
$tdataproductos[".exportFields"][] = "Precios";
$tdataproductos[".exportFields"][] = "Caracteristicas";

$tdataproductos[".importFields"] = array();
$tdataproductos[".importFields"][] = "Nombre";
$tdataproductos[".importFields"][] = "Precios";
$tdataproductos[".importFields"][] = "Caracteristicas";
$tdataproductos[".importFields"][] = "id_producto";

$tdataproductos[".printFields"] = array();
$tdataproductos[".printFields"][] = "Nombre";
$tdataproductos[".printFields"][] = "Precios";
$tdataproductos[".printFields"][] = "Caracteristicas";
$tdataproductos[".printFields"][] = "id_producto";


//	Nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Nombre";
	$fdata["GoodName"] = "Nombre";
	$fdata["ownerTable"] = "productos";
	$fdata["Label"] = GetFieldLabel("productos","Nombre");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Nombre";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Nombre";

	
	
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

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=60";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataproductos["Nombre"] = $fdata;
//	Precios
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Precios";
	$fdata["GoodName"] = "Precios";
	$fdata["ownerTable"] = "productos";
	$fdata["Label"] = GetFieldLabel("productos","Precios");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Precios";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Precios";

	
	
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




	$tdataproductos["Precios"] = $fdata;
//	Caracteristicas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Caracteristicas";
	$fdata["GoodName"] = "Caracteristicas";
	$fdata["ownerTable"] = "productos";
	$fdata["Label"] = GetFieldLabel("productos","Caracteristicas");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Caracteristicas";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Caracteristicas";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
	
		
	


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataproductos["Caracteristicas"] = $fdata;
//	id_producto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "id_producto";
	$fdata["GoodName"] = "id_producto";
	$fdata["ownerTable"] = "productos";
	$fdata["Label"] = GetFieldLabel("productos","id_producto");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

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




	$tdataproductos["id_producto"] = $fdata;


$tables_data["productos"]=&$tdataproductos;
$field_labels["productos"] = &$fieldLabelsproductos;
$fieldToolTips["productos"] = &$fieldToolTipsproductos;
$placeHolders["productos"] = &$placeHoldersproductos;
$page_titles["productos"] = &$pageTitlesproductos;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["productos"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["productos"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_productos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Nombre,  Precios,  Caracteristicas,  id_producto";
$proto0["m_strFrom"] = "FROM productos";
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
	"m_strName" => "Nombre",
	"m_strTable" => "productos",
	"m_srcTableName" => "productos"
));

$proto6["m_sql"] = "Nombre";
$proto6["m_srcTableName"] = "productos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Precios",
	"m_strTable" => "productos",
	"m_srcTableName" => "productos"
));

$proto8["m_sql"] = "Precios";
$proto8["m_srcTableName"] = "productos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Caracteristicas",
	"m_strTable" => "productos",
	"m_srcTableName" => "productos"
));

$proto10["m_sql"] = "Caracteristicas";
$proto10["m_srcTableName"] = "productos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "id_producto",
	"m_strTable" => "productos",
	"m_srcTableName" => "productos"
));

$proto12["m_sql"] = "id_producto";
$proto12["m_srcTableName"] = "productos";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "productos";
$proto15["m_srcTableName"] = "productos";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "id_producto";
$proto15["m_columns"][] = "Nombre";
$proto15["m_columns"][] = "Precios";
$proto15["m_columns"][] = "Caracteristicas";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "productos";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "productos";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="productos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_productos = createSqlQuery_productos();


	
		;

				

$tdataproductos[".sqlquery"] = $queryData_productos;

$tableEvents["productos"] = new eventsBase;
$tdataproductos[".hasEvents"] = false;

?>