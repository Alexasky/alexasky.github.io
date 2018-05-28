<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;


Container::make( 'post_meta', 'Фото работ' )
  ->show_on_category( 'painting' )
	->show_on_category( 'porcelain' )
  ->add_fields( array(
		Field::make( 'text', 'title_work', 'Заголовок' )->set_width( 50 ),
    Field::make( 'image', 'photo_work', 'Фото' )->set_value_type( 'url' )->set_width( 50 )
  ));
Container::make( 'post_meta', 'Информация о художнике' )
	  ->show_on_category( 'painting' )
		->show_on_category( 'porcelain' )
	  ->add_fields( array(
			Field::make( 'text', 'name', 'Имя художника' ),
			Field::make( 'text', 'years', 'Годы и место жизни' )->set_width( 50 ),
	    Field::make( 'image', 'photo_painter', 'Фото художника' )->set_value_type( 'url' )->set_width( 50 )
	  ));
Container::make( 'post_meta', 'Фотографии для раздела "Фото"' )
		->show_on_category( 'photo' )
		->add_fields( array(
			Field::make( 'text', 'name_curator', 'Имя руководителя' ),
			Field::make( 'text', 'position_curator', 'Должность руководителя' )->set_width( 50 ),
			Field::make( 'image', 'photo_curator', 'Фото руководителя' )->set_value_type( 'url' )->set_width( 50 )
		))
		->add_tab( 'Список фотографий', array(
			 Field::make( 'complex', 'list_photo', 'Список от 1 до 18 фото' )
				  ->add_fields( array(
					  Field::make( 'text', 'title_photo', 'Заголовок' )->set_width( 50 ),
					  Field::make( 'image', 'img_photo', 'Фото' )->set_value_type( 'url' )->set_width( 50 )
				  ) )
		) )
		->add_tab( 'Список фотографий блок 2', array(
			 Field::make( 'complex', 'second_block', 'Список от 19 до 36 фото' )
				  ->add_fields( array(
					  Field::make( 'text', 'title_second_block', 'Заголовок' )->set_width( 50 ),
					  Field::make( 'image', 'img_second_block', 'Фото' )->set_value_type( 'url' )->set_width( 50 )
				  ) )

		 ) );
Container::make( 'post_meta', 'Заголовок страницы' )
	->show_on_post_type('page')
	->add_fields( array(
		Field::make( 'text', 'title_page', 'Заголовок страницы' ),
  ));

Container::make( 'post_meta', 'Баннер' )
	->show_on_page('home-page')
	->add_fields( array(
		Field::make( 'text', 'text_bannera', 'Текст баннера' ),
  ));


Container::make( 'post_meta', 'Файлы для скачивания' )
    ->show_on_page('petrov_vodkin_circle')
    ->add_tab( 'Файлы для скачивания', array(
	  	Field::make( 'file', 'file', 'Файл' )->set_value_type( 'url' )->set_width( 25 ),
	  	Field::make( 'text', 'file_title', 'Название файла на сайте' )->set_width( 55 ),
	  	Field::make( 'select', 'file_type', 'Тип файла' )->set_width( 20 )
	  	->add_options( array(
	  		'pdf' => 'pdf',
	  		'exel' => 'exel',
	  		'doc' => 'doc',
	  		)),
	  		));
Container::make( 'post_meta', 'Загрузочное фото' )
	->show_on_page('news-press')
	->add_fields( array(
	 	Field::make( 'image', 'photo_load', 'Фото' )->set_value_type( 'url' )->set_width( 50 )
  ));

Container::make( 'post_meta', 'Новости' )
    ->show_on_page('news-press')
    ->add_tab( 'Файлы для скачивания', array(
    Field::make( 'complex', 'list_files_press', 'Список' )
				  ->add_fields( array(
						Field::make( 'file', 'file_press', 'Файл' )->set_value_type( 'url' )->set_width( 25 ),
						Field::make( 'text', 'file_title_press', 'Название файла на сайте' )->set_width( 55 ),
						Field::make( 'image', 'img_press', 'Фото' )->set_value_type( 'url' )->set_width( 50 ),
						Field::make( 'select', 'file_type', 'Тип файла' )->set_width( 20 )
						->add_options( array(
							'pdf' => 'pdf',
							'exel' => 'exel',
							'doc' => 'doc',
							)),
				  ))
				  ));
Container::make( 'post_meta', 'Публикации' )
		->show_on_page('news-press')
		->add_tab( 'Файлы для скачивания', array(
			Field::make( 'complex', 'list_files_news', 'Список' )
			->add_fields( array(
				Field::make( 'file', 'file_news', 'Файл' )->set_value_type( 'url' )->set_width( 25 ),
				Field::make( 'text', 'file_title_news', 'Название файла на сайте' )->set_width( 55 ),
				Field::make( 'image', 'img_news', 'Фото' )->set_value_type( 'url' )->set_width( 50 ),
				Field::make( 'select', 'file_type', 'Тип файла' )->set_width( 20 )
				->add_options( array(
					'pdf' => 'pdf',
					'exel' => 'exel',
					'doc' => 'doc',
					)),
			))
			));

Container::make( 'post_meta', 'Панорамы выставки' )
			 ->show_on_page('panorama')
			 ->add_tab( 'Фото панорам выставки', array(
			  Field::make( 'complex', 'list_panorama', 'Фото список' )
					->add_fields( array(
						Field::make( 'image', 'img_panorama', 'Фото' )->set_value_type( 'url' )->set_width( 50 )
			))
			));






Container::make( 'post_meta', 'Списки услуг' )
		 ->show_on_category( 'workshop' )
		 ->add_tab( 'Первая колонка', array(
			 Field::make( 'complex', 'list_services_right', 'Список' )
				  ->add_fields( array(
					  Field::make( 'text', 'title', 'Заголовок' )->set_width( 30 ),
					  Field::make( 'rich_text', 'list', 'Список' )->set_width( 70 )
				  ) )
		 ) )
		 ->add_tab( 'Вторая колонка', array(
			 Field::make( 'complex', 'list_services_left', 'Список' )
				  ->add_fields( array(
					  Field::make( 'text', 'title_left', 'Заголовок' )->set_width( 30 ),
					  Field::make( 'rich_text', 'list_left', 'Список' )->set_width( 70 )
				  ) )
		 ) );
Container::make( 'post_meta', 'Фото для раздела "Прокат"' )
		 ->add_tab( 'Первая колонка', array(
			 Field::make( 'complex', 'list_photo_right', 'Список' )
				  ->add_fields( array(
					  Field::make( 'text', 'title_photo', 'Заголовок' )->set_width( 50 ),
					  Field::make( 'image', 'img_photo', 'Фото' )->set_value_type( 'url' )->set_width( 50 )
				  ) )
		 ) )
		 ->add_tab( 'Вторая колонка', array(
			 Field::make( 'complex', 'list_photo_left', 'Список' )
				  ->add_fields( array(
					  Field::make( 'text', 'title_photo_left', 'Заголовок' )->set_width( 50 ),
					  Field::make( 'image', 'img_photo_left', 'Фото' )->set_value_type( 'url' )->set_width( 50 )
				  ) )
		 ) );


Container::make( 'post_meta', 'Фото работ' )
  ->show_on_category( 'reports' )
  ->add_fields( array(
  Field::make( 'complex', 'list_works', 'Список' )
  ->add_fields( array(
		Field::make( 'text', 'title_work', 'Заголовок' )->set_width( 50 ),
    Field::make( 'image', 'photo_work', 'Фото' )->set_value_type( 'url' )->set_width( 50 )
  ))
));
Container::make( 'post_meta', 'Фото работ' )
  ->show_on_category( 'features' )
  ->add_fields( array(
  Field::make( 'complex', 'list_works', 'Список' )
  ->add_fields( array(
		Field::make( 'text', 'title_work', 'Заголовок' )->set_width( 50 ),
    Field::make( 'image', 'photo_work', 'Фото' )->set_value_type( 'url' )->set_width( 50 )
  ))
));
Container::make( 'post_meta', 'Фото работ' )
  ->show_on_category( 'zozh' )
  ->add_fields( array(
  Field::make( 'complex', 'list_works', 'Список' )
  ->add_fields( array(
		Field::make( 'text', 'title_work', 'Заголовок' )->set_width( 50 ),
    Field::make( 'image', 'photo_work', 'Фото' )->set_value_type( 'url' )->set_width( 50 )
  ))
));
Container::make( 'post_meta', 'Фото работ' )
  ->show_on_category( 'team' )
  ->add_fields( array(
  Field::make( 'complex', 'list_works', 'Список' )
  ->add_fields( array(
		Field::make( 'text', 'title_work', 'Заголовок' )->set_width( 50 ),
    Field::make( 'image', 'photo_work', 'Фото' )->set_value_type( 'url' )->set_width( 50 )
  ))
));
Container::make( 'post_meta', 'Фото работ' )
  ->show_on_category( 'partners' )
  ->add_fields( array(
  Field::make( 'complex', 'list_works', 'Список' )
  ->add_fields( array(
		Field::make( 'text', 'title_work', 'Заголовок' )->set_width( 50 ),
    Field::make( 'image', 'photo_work', 'Фото' )->set_value_type( 'url' )->set_width( 50 )
  ))
));


Container::make( 'post_meta', 'Баннер для раздела "Прокат"' )
  ->add_fields( array(
		Field::make( 'rich_text', 'banner', 'Текст для баннера' ),
));

Container::make( 'post_meta', 'Заголовок для раздела "Прокат"' )
  ->add_fields( array(
		Field::make( 'text', 'title-rent', 'Текст для заголовка страницы' ),
));
Container::make( 'post_meta', 'Краткая информация о товаре' )
  ->add_fields( array(
		Field::make( 'text', 'price', 'Стоимость в рублях' )->set_width( 30 ),
    Field::make( 'text', 'desc', 'Описание товара в одну строку' )->set_width( 70 )
));


Container::make( 'post_meta', 'Поля для раздела контакты' )
  ->show_on_category( 'link' )
  ->add_fields( array(
		Field::make( 'text', 'map', 'Карта проезда' ),
		Field::make( 'text', 'work_time_contact', 'Время работы' ),
		Field::make( 'text', 'telegram', 'Ссылка Telegram' ),
		Field::make( 'text', 'email', 'Ссылка email' ),
		Field::make( 'text', 'km', 'Ссылка - километрами мериться тут' )
));
Container::make( 'post_meta', 'Ссылки на социальные сети где можно оставить отзыв' )
  ->show_on_category( 'reviews' )
  ->add_fields( array(
		Field::make( 'text', 'vk_link_review', 'Ссылка Вконтакте' ),
		Field::make( 'text', 'google_link_review', 'Ссылка Google' ),
		Field::make( 'text', 'yandex_link_review', 'Ссылка Yandex' )
));
Container::make( 'post_meta', 'Отзывы' )
  ->show_on_category( 'reviews' )
  ->add_fields( array(
  Field::make( 'complex', 'list_reviews', 'Список отзывов' )
  ->add_fields( array(
		Field::make( 'text', 'name', 'Имя' )->set_width( 50 ),
    Field::make( 'image', 'photo', 'Фото' )->set_value_type( 'url' )->set_width( 50 ),
    Field::make( 'rich_text', 'review', 'Отзыв' )->set_width( 100 )
  ))
));
Container::make( 'post_meta', 'Иконка в меню' )
  ->add_fields( array(
		Field::make( 'image', 'icon', 'Иконка в меню' )->set_value_type( 'url' )->set_width( 50 )
));
