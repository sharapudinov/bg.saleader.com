<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Новинки");?><h1>Новинки</h1><?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"personal", 
	array(
		"COMPONENT_TEMPLATE" => "personal",
		"ROOT_MENU_TYPE" => "left2",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_TIME" => "3600000",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MAX_LEVEL" => "1",
		"CHILD_MENU_TYPE" => "",
		"USE_EXT" => "N",
		"DELAY" => "N",
		"ALLOW_MULTI_SELECT" => "N"
	),
	false
);?><?$APPLICATION->IncludeComponent(
	"dresscode:simple.offers", 
	".default", 
	array(
		"COMPONENT_TEMPLATE" => ".default",
		"IBLOCK_TYPE" => "catalog",
		"IBLOCK_ID" => "9",
		"PRICE_CODE" => array(
			0 => "BASE",
			1 => "RITAIL",
		),
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600000",
		"PROP_NAME" => "OFFERS",
		"PROP_VALUE" => "7",
		"CONVERT_CURRENCY" => "Y",
		"PROPERTY_CODE" => array(
			0 => "VIDEO",
			1 => "ATT_BRAND",
			2 => "CML2_ARTICLE",
			3 => "OPERATING_SYSTEMS",
			4 => "CAMERA_TYPE",
			5 => "MEGAPIXELS",
			6 => "WIFI",
			7 => "ONVIF_SUPPORT",
			8 => "SKU_COLOR",
			9 => "SIZE",
			10 => "INDOOR_OUTDOOR",
			11 => "FORM_FACTOR",
			12 => "TEMPERATURA",
			13 => "IP_CLASS",
			14 => "MATRIX_TYPE",
			15 => "LIGHT_SENSITIVITY",
			16 => "MATRIX_FORMAT",
			17 => "LENS",
			18 => "FOCUS",
			19 => "LENS_UNGLE",
			20 => "DAY_NIGHT",
			21 => "IR_LUZE",
			22 => "IR_DISTANCE",
			23 => "MEC_IR_FILTER",
			24 => "VIDEO_STREAM_COUNT",
			25 => "RES_25FPS",
			26 => "RES_FPS",
			27 => "COMPR_FORMAT",
			28 => "COLORITY",
			29 => "BUILD_IN_AUDIO",
			30 => "PoE",
			31 => "POWER",
			32 => "POE_SUPPORT",
			33 => "NET_PROTOCOLS",
			34 => "NETWORK_INTERFACE",
			35 => "SOTBIT_YM_ID",
			36 => "FLASH_CARD_SUPPORT",
			37 => "ALARM_IO",
			38 => "WARRANTY",
			39 => "MORE_INFO",
			40 => "COMPLECT",
			41 => "GPS",
			42 => "WI_FI",
			43 => "AVTOPILOT",
			44 => "AKKUMULYATOR",
			45 => "VES",
			46 => "VES_KVADROKOPTERA",
			47 => "VID_OT_PERVOGO_LITSA_FPV",
			48 => "VIDEOVYKHOD_NA_PULTE_UPRAVLENIYA",
			49 => "VOZVRASHCHENIE_V_TOCHKU_VZLETA",
			50 => "VSTROENNYE_DATCHIKI",
			51 => "GABARITY_DKHSHKHV",
			52 => "DALNOST_TRANSLYATSII_VIDEO_ILI_FOTO",
			53 => "DALNOST_UPRAVLENIYA",
			54 => "DIAMETR_VINTA",
			55 => "DISTANTSIONNOE_UPRAVLENIE_POLOZHENIEM_KAMERY",
			56 => "DOPOLNITELNAYA_INFORMATSIYA",
			57 => "KAMERA",
			58 => "KOLICHESTVO_VINTOV",
			59 => "KOMPLEKTATSIYA",
			60 => "MAKSIMALNAYA_VYSOTA_POLETA",
			61 => "MAKSIMALNAYA_SKOROST_NABORA_VYSOTY",
			62 => "MAKSIMALNAYA_SKOROST_POLETA",
			63 => "MAKSIMALNAYA_SKOROST_SNIZHENIYA",
			64 => "MAKSIMALNOE_VREMYA_POLETA",
			65 => "MAKSIMALNYY_PODEMNYY_VES",
			66 => "PODDERZHKA_MOBILNYKH_OS",
			67 => "RESOLUTION_HDTV",
			68 => "RAZRESHENIE_VIDEOSEMKI",
			69 => "RAZRESHENIE_MATRITSY",
			70 => "RAZRESHENIE_FOTOSEMKI",
			71 => "SLEDOVANIE_ZA_OPERATOROM",
			72 => "SOVMESTIMYE_FOTOKAMERY",
			73 => "TIP_MULTIKOPTERA",
			74 => "TIP_PITANIYA_PULTA_UPRAVLENIYA",
			75 => "TIP_UPRAVLENIYA",
			76 => "UGOL_OBZORA_KAMERY",
			77 => "URL_YM",
			78 => "COLLECTION",
			79 => "TOTAL_OUTPUT_POWER",
			80 => "DELIVERY",
			81 => "PICKUP",
			82 => "",
			83 => "",
			84 => "",
			85 => "",
			86 => "",
			87 => "",
		),
		"CURRENCY_ID" => "RUB",
		"HIDE_MEASURES" => "Y"
	),
	false,
	array(
		"ACTIVE_COMPONENT" => "Y"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>