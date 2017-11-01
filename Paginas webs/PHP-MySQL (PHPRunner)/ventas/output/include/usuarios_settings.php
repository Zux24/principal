<?php
require_once(getabspath("classes/cipherer.php"));




$tdatausuarios = array();
	$tdatausuarios[".truncateText"] = true;
	$tdatausuarios[".NumberOfChars"] = 80;
	$tdatausuarios[".ShortName"] = "usuarios";
	$tdatausuarios[".OwnerID"] = "";
	$tdatausuarios[".OriginalTable"] = "usuarios";

//	field labels
$fieldLabelsusuarios = array();
$fieldToolTipsusuarios = array();
$pageTitlesusuarios = array();
$placeHoldersusuarios = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsusuarios["Spanish"] = array();
	$fieldToolTipsusuarios["Spanish"] = array();
	$placeHoldersusuarios["Spanish"] = array();
	$pageTitlesusuarios["Spanish"] = array();
	$fieldLabelsusuarios["Spanish"]["usuario"] = "Usuario";
	$fieldToolTipsusuarios["Spanish"]["usuario"] = "";
	$placeHoldersusuarios["Spanish"]["usuario"] = "";
	$fieldLabelsusuarios["Spanish"]["password"] = "Password";
	$fieldToolTipsusuarios["Spanish"]["password"] = "";
	$placeHoldersusuarios["Spanish"]["password"] = "";
	$fieldLabelsusuarios["Spanish"]["tipo"] = "Tipo";
	$fieldToolTipsusuarios["Spanish"]["tipo"] = "";
	$placeHoldersusuarios["Spanish"]["tipo"] = "";
	if (count($fieldToolTipsusuarios["Spanish"]))
		$tdatausuarios[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsusuarios[""] = array();
	$fieldToolTipsusuarios[""] = array();
	$placeHoldersusuarios[""] = array();
	$pageTitlesusuarios[""] = array();
	$fieldLabelsusuarios[""]["tipo"] = "Tipo";
	$fieldToolTipsusuarios[""]["tipo"] = "";
	$placeHoldersusuarios[""]["tipo"] = "";
	if (count($fieldToolTipsusuarios[""]))
		$tdatausuarios[".isUseToolTips"] = true;
}


	$tdatausuarios[".NCSearch"] = true;



$tdatausuarios[".shortTableName"] = "usuarios";
$tdatausuarios[".nSecOptions"] = 0;
$tdatausuarios[".recsPerRowPrint"] = 1;
$tdatausuarios[".mainTableOwnerID"] = "";
$tdatausuarios[".moveNext"] = 1;
$tdatausuarios[".entityType"] = 0;

$tdatausuarios[".strOriginalTableName"] = "usuarios";

	



$tdatausuarios[".showAddInPopup"] = false;

$tdatausuarios[".showEditInPopup"] = false;

$tdatausuarios[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatausuarios[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatausuarios[".fieldsForRegister"] = array();

$tdatausuarios[".listAjax"] = false;

	$tdatausuarios[".audit"] = false;

	$tdatausuarios[".locking"] = false;

$tdatausuarios[".edit"] = true;
$tdatausuarios[".afterEditAction"] = 1;
$tdatausuarios[".closePopupAfterEdit"] = 1;
$tdatausuarios[".afterEditActionDetTable"] = "";

$tdatausuarios[".add"] = true;
$tdatausuarios[".afterAddAction"] = 1;
$tdatausuarios[".closePopupAfterAdd"] = 1;
$tdatausuarios[".afterAddActionDetTable"] = "";

$tdatausuarios[".list"] = true;



$tdatausuarios[".reorderRecordsByHeader"] = true;


$tdatausuarios[".exportFormatting"] = 2;
$tdatausuarios[".exportDelimiter"] = ",";
		
$tdatausuarios[".view"] = true;

$tdatausuarios[".import"] = true;

$tdatausuarios[".exportTo"] = true;

$tdatausuarios[".printFriendly"] = true;

$tdatausuarios[".delete"] = true;

$tdatausuarios[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatausuarios[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatausuarios[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatausuarios[".searchSaving"] = false;
//

$tdatausuarios[".showSearchPanel"] = true;
		$tdatausuarios[".flexibleSearch"] = true;

$tdatausuarios[".isUseAjaxSuggest"] = true;

$tdatausuarios[".rowHighlite"] = true;





$tdatausuarios[".ajaxCodeSnippetAdded"] = false;

$tdatausuarios[".buttonsAdded"] = false;

$tdatausuarios[".addPageEvents"] = false;

// use timepicker for search panel
$tdatausuarios[".isUseTimeForSearch"] = false;



$tdatausuarios[".badgeColor"] = "5F9EA0";


$tdatausuarios[".allSearchFields"] = array();
$tdatausuarios[".filterFields"] = array();
$tdatausuarios[".requiredSearchFields"] = array();

$tdatausuarios[".allSearchFields"][] = "usuario";
	$tdatausuarios[".allSearchFields"][] = "password";
	$tdatausuarios[".allSearchFields"][] = "tipo";
	

$tdatausuarios[".googleLikeFields"] = array();
$tdatausuarios[".googleLikeFields"][] = "usuario";
$tdatausuarios[".googleLikeFields"][] = "password";
$tdatausuarios[".googleLikeFields"][] = "tipo";


$tdatausuarios[".advSearchFields"] = array();
$tdatausuarios[".advSearchFields"][] = "usuario";
$tdatausuarios[".advSearchFields"][] = "password";
$tdatausuarios[".advSearchFields"][] = "tipo";

$tdatausuarios[".tableType"] = "list";

$tdatausuarios[".printerPageOrientation"] = 0;
$tdatausuarios[".nPrinterPageScale"] = 100;

$tdatausuarios[".nPrinterSplitRecords"] = 40;

$tdatausuarios[".nPrinterPDFSplitRecords"] = 40;



$tdatausuarios[".geocodingEnabled"] = false;





$tdatausuarios[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatausuarios[".pageSize"] = 20;

$tdatausuarios[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatausuarios[".strOrderBy"] = $tstrOrderBy;

$tdatausuarios[".orderindexes"] = array();

$tdatausuarios[".sqlHead"] = "SELECT usuario,  password,  tipo";
$tdatausuarios[".sqlFrom"] = "FROM usuarios";
$tdatausuarios[".sqlWhereExpr"] = "";
$tdatausuarios[".sqlTail"] = "";












//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatausuarios[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatausuarios[".arrGroupsPerPage"] = $arrGPP;

$tdatausuarios[".highlightSearchResults"] = true;

$tableKeysusuarios = array();
$tableKeysusuarios[] = "usuario";
$tdatausuarios[".Keys"] = $tableKeysusuarios;

$tdatausuarios[".listFields"] = array();
$tdatausuarios[".listFields"][] = "usuario";
$tdatausuarios[".listFields"][] = "password";
$tdatausuarios[".listFields"][] = "tipo";

$tdatausuarios[".hideMobileList"] = array();


$tdatausuarios[".viewFields"] = array();
$tdatausuarios[".viewFields"][] = "usuario";
$tdatausuarios[".viewFields"][] = "password";
$tdatausuarios[".viewFields"][] = "tipo";

$tdatausuarios[".addFields"] = array();
$tdatausuarios[".addFields"][] = "usuario";
$tdatausuarios[".addFields"][] = "password";
$tdatausuarios[".addFields"][] = "tipo";

$tdatausuarios[".masterListFields"] = array();
$tdatausuarios[".masterListFields"][] = "usuario";
$tdatausuarios[".masterListFields"][] = "password";
$tdatausuarios[".masterListFields"][] = "tipo";

$tdatausuarios[".inlineAddFields"] = array();
$tdatausuarios[".inlineAddFields"][] = "tipo";

$tdatausuarios[".editFields"] = array();
$tdatausuarios[".editFields"][] = "usuario";
$tdatausuarios[".editFields"][] = "password";
$tdatausuarios[".editFields"][] = "tipo";

$tdatausuarios[".inlineEditFields"] = array();
$tdatausuarios[".inlineEditFields"][] = "tipo";

$tdatausuarios[".updateSelectedFields"] = array();
$tdatausuarios[".updateSelectedFields"][] = "usuario";
$tdatausuarios[".updateSelectedFields"][] = "password";
$tdatausuarios[".updateSelectedFields"][] = "tipo";


$tdatausuarios[".exportFields"] = array();
$tdatausuarios[".exportFields"][] = "usuario";
$tdatausuarios[".exportFields"][] = "password";
$tdatausuarios[".exportFields"][] = "tipo";

$tdatausuarios[".importFields"] = array();
$tdatausuarios[".importFields"][] = "usuario";
$tdatausuarios[".importFields"][] = "password";
$tdatausuarios[".importFields"][] = "tipo";

$tdatausuarios[".printFields"] = array();
$tdatausuarios[".printFields"][] = "usuario";
$tdatausuarios[".printFields"][] = "password";
$tdatausuarios[".printFields"][] = "tipo";


//	usuario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "usuario";
	$fdata["GoodName"] = "usuario";
	$fdata["ownerTable"] = "usuarios";
	$fdata["Label"] = GetFieldLabel("usuarios","usuario");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "usuario";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usuario";

	
	
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
			$edata["EditParams"].= " maxlength=10";

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




	$tdatausuarios["usuario"] = $fdata;
//	password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "password";
	$fdata["GoodName"] = "password";
	$fdata["ownerTable"] = "usuarios";
	$fdata["Label"] = GetFieldLabel("usuarios","password");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "password";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "password";

	
	
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
			$edata["EditParams"].= " maxlength=30";

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




	$tdatausuarios["password"] = $fdata;
//	tipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "tipo";
	$fdata["GoodName"] = "tipo";
	$fdata["ownerTable"] = "usuarios";
	$fdata["Label"] = GetFieldLabel("usuarios","tipo");
	$fdata["FieldType"] = 129;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "tipo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tipo";

	
	
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
	$edata["LookupValues"][] = "admin";
	$edata["LookupValues"][] = "cliente";

	
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




	$tdatausuarios["tipo"] = $fdata;


$tables_data["usuarios"]=&$tdatausuarios;
$field_labels["usuarios"] = &$fieldLabelsusuarios;
$fieldToolTips["usuarios"] = &$fieldToolTipsusuarios;
$placeHolders["usuarios"] = &$placeHoldersusuarios;
$page_titles["usuarios"] = &$pageTitlesusuarios;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["usuarios"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["usuarios"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_usuarios()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "usuario,  password,  tipo";
$proto0["m_strFrom"] = "FROM usuarios";
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
	"m_strName" => "usuario",
	"m_strTable" => "usuarios",
	"m_srcTableName" => "usuarios"
));

$proto6["m_sql"] = "usuario";
$proto6["m_srcTableName"] = "usuarios";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "password",
	"m_strTable" => "usuarios",
	"m_srcTableName" => "usuarios"
));

$proto8["m_sql"] = "password";
$proto8["m_srcTableName"] = "usuarios";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo",
	"m_strTable" => "usuarios",
	"m_srcTableName" => "usuarios"
));

$proto10["m_sql"] = "tipo";
$proto10["m_srcTableName"] = "usuarios";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "usuarios";
$proto13["m_srcTableName"] = "usuarios";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "usuario";
$proto13["m_columns"][] = "password";
$proto13["m_columns"][] = "tipo";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "usuarios";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "usuarios";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="usuarios";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_usuarios = createSqlQuery_usuarios();


	
		;

			

$tdatausuarios[".sqlquery"] = $queryData_usuarios;

$tableEvents["usuarios"] = new eventsBase;
$tdatausuarios[".hasEvents"] = false;

?>