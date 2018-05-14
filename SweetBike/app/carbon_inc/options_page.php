<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make( 'theme_options', 'Пульт' )
		 ->add_tab( 'Наша команда', array(
			 Field::make( 'complex', 'crb_places', 'Список' )
				  ->add_fields( array(
					  Field::make( 'image', 'photo', 'Фото' )->set_value_type( 'url' )->set_width( 33 ),
					  Field::make( 'text', 'job', 'Должность' )->set_width( 33 ),
					  Field::make( 'text', 'fio', 'Фамилия, имя и отчество' )->set_width( 33 )
				  ) )
		 ) )
		 ->add_tab( 'Шапка сайта', array(
			 Field::make( 'text', 'head_phone_1', 'Телефон 1' ),
			 Field::make( 'text', 'head_phone_2', 'Телефон 2' ),
			 Field::make( 'textarea', 'banner_header', 'Баннер в шапке' )
		 ) )
		 ->add_tab( 'Информация', array(
			 Field::make( 'textarea', 'infobox', 'Информационный блок времени обработки заявки' ),
			 Field::make( 'text', 'infobox_btn', 'Текст кнопки информационный блока заявки' )
		 ) )
		 ->add_tab( 'Контакты', array(
			 Field::make( 'text', 'con_adres_1', 'Страна, Город' ),
			 Field::make( 'textarea', 'con_adres_2', 'Контактные данные' ),
			 Field::make( 'textarea', 'con_tel_1', 'Телефоны' ),
			 Field::make( 'text', 'copyright', 'Копирайт внизу справа' )
		 ) )
		 ->add_tab( 'Всплывающие окна', array(
			 Field::make( 'text', 'form_send_ok_content', 'Тект успешной отправки заявки' ),
			 Field::make( 'text', 'description-lp', 'Description лендинга' ),
		 ) )
		 ->add_tab( 'СЕО', array(
			 Field::make( "header_scripts", "header_google_analytics", 'Код счётчика Гугл Аналитикс' ),
			 Field::make( "header_scripts", "header_script_yandex_metrika", 'Код счётчика Яндекс Метрики' ),
		 ) );

Container::make( 'theme_options', 'Галерея' )
		 ->add_tab( 'Галлерея Изображений', array(
			 Field::make( 'complex', 'crb_gallery', 'Список' )
				  ->add_fields( array(
					  Field::make( 'image', 'photo', 'Изображенией' )->set_value_type( 'url' )->set_width( 33 ),
					  Field::make( 'text', 'job', 'Название' )->set_width( 33 ),
					  Field::make( 'text', 'fio', 'Фамилия, имя и отчество' )->set_width( 33 )
				  ) )
		 ) );