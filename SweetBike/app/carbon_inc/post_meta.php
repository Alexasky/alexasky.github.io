<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make( 'post_meta', 'Поля для каталога' )
     ->show_on_category('catalog')
		 ->add_tab( 'Файлы для скачивания', array(
				Field::make( 'file', 'file_1', 'Файл' )->set_value_type( 'url' )->set_width( 25 ),
				Field::make( 'text', 'file_1_text', 'Название файла на сайте' )->set_width( 55 ),
				Field::make( 'select', 'file_1_type', 'Тип файла' )->set_width( 20 )
				->add_options( array(
					'pdf' => 'pdf',
					'exel' => 'exel',
					'doc' => 'doc',
					)),
				Field::make( 'file', 'file_2', 'Файл 2' )->set_value_type( 'url' )->set_width( 25 ),
				Field::make( 'text', 'file_2_text', 'Название файла на сайте' )->set_width( 55 ),
				Field::make( 'select', 'file_2_type', 'Тип файла' )->set_width( 20 )
				->add_options( array(
					'pdf' => 'pdf',
					'exel' => 'exel',
					'doc' => 'doc',
					)),
		 ))->add_tab( 'Таблица', array(
		 		Field::make( 'rich_text', 'post_table', 'Таблица после файлов' )->set_width( 100 )
		 ))->add_tab( 'Производители', array(
			 Field::make( 'association', 'crb_association', 'Производители' )
			 ->set_types( array( 
			 		array('type' => 'post', 'post_type' => 'post')
			 	))
		 ));
		 
Container::make( 'post_meta', 'Поля для бренда' )
  ->show_on_category( 'brands' )
  ->add_fields( array(
		Field::make( 'text', 'brand_size', 'Размеры' )->set_width( 30 ),
		Field::make( 'text', 'brand_url', 'Ссылка' )->set_width( 70 )
));

Container::make( 'post_meta', 'Поля для каталога' )
    ->show_on_category('brands')
    ->add_tab( 'Файлы для скачивания', array(
	  	Field::make( 'file', 'file_1', 'Файл' )->set_value_type( 'url' )->set_width( 25 ),
	  	Field::make( 'text', 'file_1_text', 'Название файла на сайте' )->set_width( 55 ),
	  	Field::make( 'select', 'file_1_type', 'Тип файла' )->set_width( 20 )
	  	->add_options( array(
	  		'pdf' => 'pdf',
	  		'exel' => 'exel',
	  		'doc' => 'doc',
	  		)),
	  	Field::make( 'file', 'file_2', 'Файл 2' )->set_value_type( 'url' )->set_width( 25 ),
	  	Field::make( 'text', 'file_2_text', 'Название файла на сайте' )->set_width( 55 ),
	  	Field::make( 'select', 'file_2_type', 'Тип файла' )->set_width( 20 )
	  	->add_options( array(
	  		'pdf' => 'pdf',
	  		'exel' => 'exel',
	  		'doc' => 'doc',
	  		)),
		 ))->add_tab( 'Таблица', array(
		 		Field::make( 'rich_text', 'post_table', 'Таблица после файлов' )->set_width( 100 )
		 ) );

