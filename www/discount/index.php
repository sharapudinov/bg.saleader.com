<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Новинки");?><h1>Уцененные товары</h1><?$APPLICATION->IncludeComponent(
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
		"PROP_VALUE" => "10",
		"CONVERT_CURRENCY" => "Y",
		"PROPERTY_CODE" => array(
			0 => "VIDEO",
			1 => "ATT_BRAND",
			2 => "CML2_ARTICLE",
			3 => "WIFI",
			4 => "SKU_COLOR",
			5 => "POWER",
			6 => "WARRANTY",
			7 => "GPS",
			8 => "COLLECTION",
			9 => "TOTAL_OUTPUT_POWER",
			10 => "DELIVERY",
			11 => "PICKUP",
			12 => "OFFERS",
			13 => "USER_ID",
			14 => "BLOG_POST_ID",
			15 => "BLOG_COMMENTS_CNT",
			16 => "VOTE_COUNT",
			17 => "BULK",
			18 => "SHOW_MENU",
			19 => "SIMILAR_PRODUCT",
			20 => "RATING",
			21 => "RELATED_PRODUCT",
			22 => "VOTE_SUM",
			23 => "COLOR",
			24 => "COUNTRY_BRAND",
			25 => "ZOOM2",
			26 => "BATTERY_LIFE",
			27 => "SWITCH",
			28 => "GRAF_PROC",
			29 => "LENGTH_OF_CORD",
			30 => "DISPLAY",
			31 => "LOADING_LAUNDRY",
			32 => "FULL_HD_VIDEO_RECORD",
			33 => "INTERFACE",
			34 => "COMPRESSORS",
			35 => "Number_of_Outlets",
			36 => "MAX_RESOLUTION_VIDEO",
			37 => "MAX_BUS_FREQUENCY",
			38 => "MAX_RESOLUTION",
			39 => "FREEZER",
			40 => "POWER_SUB",
			41 => "HARD_DRIVE_SPACE",
			42 => "MEMORY",
			43 => "OS",
			44 => "ZOOM",
			45 => "PAPER_FEED",
			46 => "SUPPORTED_STANDARTS",
			47 => "VIDEO_FORMAT",
			48 => "SUPPORT_2SIM",
			49 => "MP3",
			50 => "ETHERNET_PORTS",
			51 => "MATRIX",
			52 => "CAMERA",
			53 => "PHOTOSENSITIVITY",
			54 => "DEFROST",
			55 => "SPEED_WIFI",
			56 => "SPIN_SPEED",
			57 => "PRINT_SPEED",
			58 => "SOCKET",
			59 => "IMAGE_STABILIZER",
			60 => "GSM",
			61 => "SIM",
			62 => "TYPE",
			63 => "MEMORY_CARD",
			64 => "TYPE_BODY",
			65 => "TYPE_MOUSE",
			66 => "TYPE_PRINT",
			67 => "CONNECTION",
			68 => "TYPE_OF_CONTROL",
			69 => "TYPE_DISPLAY",
			70 => "TYPE2",
			71 => "REFRESH_RATE",
			72 => "RANGE",
			73 => "AMOUNT_MEMORY",
			74 => "MEMORY_CAPACITY",
			75 => "VIDEO_BRAND",
			76 => "DIAGONAL",
			77 => "RESOLUTION",
			78 => "TOUCH",
			79 => "CORES",
			80 => "LINE_PROC",
			81 => "PROCESSOR",
			82 => "CLOCK_SPEED",
			83 => "TYPE_PROCESSOR",
			84 => "PROCESSOR_SPEED",
			85 => "HARD_DRIVE",
			86 => "HARD_DRIVE_TYPE",
			87 => "Number_of_memory_slots",
			88 => "MAXIMUM_MEMORY_FREQUENCY",
			89 => "TYPE_MEMORY",
			90 => "BLUETOOTH",
			91 => "FM",
			92 => "HDMI",
			93 => "SMART_TV",
			94 => "USB",
			95 => "FLASH",
			96 => "ROTARY_DISPLAY",
			97 => "SUPPORT_3D",
			98 => "SUPPORT_3G",
			99 => "WITH_COOLER",
			100 => "FINGERPRINT",
			101 => "HTML",
			102 => "VID_ZASTECHKI",
			103 => "VID_SUMKI",
			104 => "PROFILE",
			105 => "VYSOTA_RUCHEK",
			106 => "GAS_CONTROL",
			107 => "GRILL",
			108 => "MORE_PROPERTIES",
			109 => "GENRE",
			110 => "OTSEKOV",
			111 => "CONVECTION",
			112 => "INTAKE_POWER",
			113 => "NAZNAZHENIE",
			114 => "PODKLADKA",
			115 => "SURFACE_COATING",
			116 => "brand_tyres",
			117 => "SEASON",
			118 => "SEASONOST",
			119 => "DUST_COLLECTION",
			120 => "REF",
			121 => "DRYING",
			122 => "REMOVABLE_TOP_COVER",
			123 => "CONTROL",
			124 => "FINE_FILTER",
			125 => "FORM_FAKTOR",
			126 => "MARKER_PHOTO",
			127 => "NEW",
			128 => "DELIVERY_DESC",
			129 => "SALE",
			130 => "MARKER",
			131 => "POPULAR",
			132 => "WEIGHT",
			133 => "HEIGHT",
			134 => "DEPTH",
			135 => "WIDTH",
			136 => "",
		),
		"CURRENCY_ID" => "RUB",
		"HIDE_MEASURES" => "N"
	),
	false,
	array(
		"ACTIVE_COMPONENT" => "Y"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>