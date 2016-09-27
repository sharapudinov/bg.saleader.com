<div id="footerTabsCaption">
	<div class="wrapper">
		<div class="items">
			<?$APPLICATION->ShowViewContent("sale_viewed_product_view_content_tab");?>
			<?$APPLICATION->ShowViewContent("catalog_top_view_content_tab");?>
		</div>
	</div>
</div>
<div id="footerTabs">
	<div class="wrapper">
		<div class="items">
			<?$APPLICATION->IncludeComponent("bitrix:sale.viewed.product", ".default", Array(
				"VIEWED_COUNT" => "12",	// Количество элементов
					"VIEWED_NAME" => "Y",	// Показывать наименование
					"VIEWED_IMAGE" => "Y",	// Показывать изображение
					"VIEWED_PRICE" => "Y",	// Показывать цену
					"VIEWED_CANBUY" => "N",	// Показать "Купить"
					"VIEWED_CANBUSKET" => "N",
					"VIEWED_IMG_HEIGHT" => "340",	// Высота изображения
					"VIEWED_IMG_WIDTH" => "290",	// Ширина изображения
					"BASKET_URL" => "/personal/cart/",	// URL, ведущий на страницу с корзиной покупателя
					"ACTION_VARIABLE" => "action",	// Название переменной, в которой передается действие
					"PRODUCT_ID_VARIABLE" => "id",	// Название переменной, в которой передается код товара для покупки
					"VIEWED_CURRENCY" => "RUB",	// Валюта
					"VIEWED_CANBASKET" => "N",	// Показать "В корзину"
					"SET_TITLE" => "N",	// Устанавливать заголовок страницы
				),
				false
			);?>
			<?$APPLICATION->IncludeComponent("bitrix:catalog.top", ".default", Array(
				"COMPONENT_TEMPLATE" => ".default",
					"IBLOCK_TYPE" => "catalog",	// Тип инфоблока
					"IBLOCK_ID" => "23",	// Инфоблок
					"ELEMENT_SORT_FIELD" => "shows",
					"ELEMENT_SORT_ORDER" => "desc",
					"ELEMENT_SORT_FIELD2" => "id",	// Поле для второй сортировки элементов
					"ELEMENT_SORT_ORDER2" => "desc",	// Порядок второй сортировки элементов
					"FILTER_NAME" => "",	// Имя массива со значениями фильтра для фильтрации элементов
					"HIDE_NOT_AVAILABLE" => "N",	// Не отображать товары, которых нет на складах
					"ELEMENT_COUNT" => "12",	// Количество выводимых элементов
					"LINE_ELEMENT_COUNT" => "1",	// Количество элементов выводимых в одной строке таблицы
					"PROPERTY_CODE" => array(	// Свойства
						0 => "",
						1 => "",
					),
					"OFFERS_FIELD_CODE" => array(	// Поля предложений
						0 => "",
						1 => "",
					),
					"OFFERS_PROPERTY_CODE" => array(	// Свойства предложений
						0 => "",
						1 => "",
					),
					"OFFERS_SORT_FIELD" => "sort",	// По какому полю сортируем предложения товара
					"OFFERS_SORT_ORDER" => "asc",	// Порядок сортировки предложений товара
					"OFFERS_SORT_FIELD2" => "id",	// Поле для второй сортировки предложений товара
					"OFFERS_SORT_ORDER2" => "desc",	// Порядок второй сортировки предложений товара
					"OFFERS_LIMIT" => "5",	// Максимальное количество предложений для показа (0 - все)
					"VIEW_MODE" => "SECTION",	// Показ элементов
					"TEMPLATE_THEME" => "blue",	// Цветовая тема
					"PRODUCT_DISPLAY_MODE" => "N",	// Схема отображения
					"ADD_PICT_PROP" => "-",	// Дополнительная картинка основного товара
					"LABEL_PROP" => "-",	// Свойство меток товара
					"SHOW_DISCOUNT_PERCENT" => "N",	// Показывать процент скидки
					"SHOW_OLD_PRICE" => "N",	// Показывать старую цену
					"SHOW_CLOSE_POPUP" => "N",	// Показывать кнопку продолжения покупок во всплывающих окнах
					"MESS_BTN_BUY" => "Купить",	// Текст кнопки "Купить"
					"MESS_BTN_ADD_TO_BASKET" => "В корзину",	// Текст кнопки "Добавить в корзину"
					"MESS_BTN_COMPARE" => "Сравнить",	// Текст кнопки "Сравнить"
					"MESS_BTN_DETAIL" => "Подробнее",	// Текст кнопки "Подробнее"
					"MESS_NOT_AVAILABLE" => "Нет в наличии",	// Сообщение об отсутствии товара
					"SECTION_URL" => "",	// URL, ведущий на страницу с содержимым раздела
					"DETAIL_URL" => "",	// URL, ведущий на страницу с содержимым элемента раздела
					"SECTION_ID_VARIABLE" => "SECTION_ID",	// Название переменной, в которой передается код группы
					"PRODUCT_QUANTITY_VARIABLE" => "",	// Название переменной, в которой передается количество товара
					"SEF_MODE" => "N",	// Включить поддержку ЧПУ
					"SEF_RULE" => "",	// Правило для обработки
					"CACHE_TYPE" => "A",	// Тип кеширования
					"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
					"CACHE_GROUPS" => "Y",	// Учитывать права доступа
					"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
					"ACTION_VARIABLE" => "action",	// Название переменной, в которой передается действие
					"PRODUCT_ID_VARIABLE" => "id",	// Название переменной, в которой передается код товара для покупки
					"PRICE_CODE" => array(	// Тип цены
						0 => "BASE",
					),
					"USE_PRICE_COUNT" => "N",	// Использовать вывод цен с диапазонами
					"SHOW_PRICE_COUNT" => "1",	// Выводить цены для количества
					"PRICE_VAT_INCLUDE" => "Y",	// Включать НДС в цену
					"CONVERT_CURRENCY" => "N",	// Показывать цены в одной валюте
					"BASKET_URL" => "/personal/basket.php",	// URL, ведущий на страницу с корзиной покупателя
					"USE_PRODUCT_QUANTITY" => "N",	// Разрешить указание количества товара
					"ADD_PROPERTIES_TO_BASKET" => "Y",	// Добавлять в корзину свойства товаров и предложений
					"PRODUCT_PROPS_VARIABLE" => "prop",	// Название переменной, в которой передаются характеристики товара
					"PARTIAL_PRODUCT_PROPERTIES" => "N",	// Разрешить добавлять в корзину товары, у которых заполнены не все характеристики
					"PRODUCT_PROPERTIES" => "",	// Характеристики товара
					"OFFERS_CART_PROPERTIES" => "",	// Свойства предложений, добавляемые в корзину
					"ADD_TO_BASKET_ACTION" => "ADD",	// Показывать кнопку добавления в корзину или покупки
					"DISPLAY_COMPARE" => "N",	// Разрешить сравнение товаров
					"ROTATE_TIMER" => "30"
				),
				false
			);?>
		</div>
	</div>
</div>