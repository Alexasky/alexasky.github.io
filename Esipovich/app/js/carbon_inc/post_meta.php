<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;


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
