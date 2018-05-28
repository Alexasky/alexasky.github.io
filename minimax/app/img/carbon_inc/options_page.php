<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make( 'theme_options', 'Пульт' )

		 ->add_tab( 'Шапка сайта', array(
			 Field::make( 'text', 'city', 'Город' ),
			 Field::make( 'text', 'metro', 'Метро' ),
			 Field::make( 'text', 'vk', 'Ссылка Вконтакте' ),
			 Field::make( 'text', 'whatsapp', 'Ссылка WhatsApp' ),
			 Field::make( 'text', 'instagram', 'Ссылка Instagram' )
		 ) )
		 ->add_tab( 'Подвал сайта', array(
			 Field::make( 'textarea', 'direction', 'Как добраться' ),
			 Field::make( 'text', 'phone', 'Телефон' ),
			 Field::make( 'text', 'work_time', 'Время работы' ),
			 Field::make( 'textarea', 'map_footer', 'Карта проезда' )
		 ) )

		 ->add_tab( 'СЕО', array(
			 Field::make( "header_scripts", "header_google_analytics", 'Код счётчика Гугл Аналитикс' ),
			 Field::make( "header_scripts", "header_script_yandex_metrika", 'Код счётчика Яндекс Метрики' ),
		 ) );
