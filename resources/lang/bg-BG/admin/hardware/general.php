<?php

return [
    'about_assets_title'           => 'Относно активи',
    'about_assets_text'            => 'Активите са елементи, проследен от сериен номер или етикет. По-често, те са елементи с висока стойност, където идентифицирането на специфичен елемент е от значение.',
    'archived'  				=> 'Архивиран',
    'asset'  					=> 'Актив',
    'bulk_checkout'             => 'Изписване на активи',
    'bulk_checkin'              => 'Връщане на актив',
    'checkin'  					=> 'Връщане на актив',
    'checkout'  				=> 'Изписване на актив',
    'clone'  					=> 'Копиране на актив',
    'deployable'  				=> 'Може да бъде предоставен',
    'deleted'  					=> 'Този актив беше изтрит.',
    'delete_confirm'            => 'Сигурни ли сте, че желаете изтриване на актива?',
    'edit'  					=> 'Редакция на актив',
    'model_deleted'  			=> 'Този Модел на актив беше изтрит. Вие трябва да възстановите този модел преди да можете да възстановите актива.',
    'model_invalid'             => 'This model for this asset is invalid.',
    'model_invalid_fix'         => 'The asset must be updated use a valid asset model before attempting to check it in or out, or to audit it.',
    'requestable'               => 'Може да бъде изискван',
    'requested'				    => 'Изискан',
    'not_requestable'           => 'Не може да бъде изискан',
    'requestable_status_warning' => 'Да не се сменя статуса за изискване',
    'restore'  					=> 'Възстановяване на актив',
    'pending'  					=> 'Предстоящ',
    'undeployable'  			=> 'Не може да бъде предоставян',
    'undeployable_tooltip'  	=> 'Този актив е забранен за изписване и не може да се изпише в момента.',
    'view'  					=> 'Преглед на актив',
    'csv_error' => 'Имате грешка във вашият CSV файл:',
    'import_text' => '<p>Качи CSV файл, който съдържа историята на активите. Активите и потребителите ТРЯБВА да ги има създадени в системата в противен слуай няма да се импортират. При импортиране на историята на активите, съвпадението се прави по техния инвентарен номер. Ще се опитаме да намерим потребителя на база неговото потребителско име и критерия който сте избрали по-долу. Ще се опита да намери съвпадение по формата на потребителско име избран в <code>Admin &gt; General Settings</code>.</p><p>Полетата включени в CSV файла, трябва да съвпадат с <strong>Инвентарен номер, Име, Дата на изписване, Дата на вписване</strong>. Всякакви допълнителни полета ще бъдат игнорирани. </p><p> Празна дата на вписване или дата в бъдещето ще изпише актива към асоцийрания потребител. Ако не се включи колона с дата на вписване, същата ще бъде създадена със текущата дата.</p>    ',
    'csv_import_match_f-l' => 'Опитай да намериш съвпадение на потребителите по <strong>Име.Фамилия</strong> (<code>Иван.Иванов</code>)',
    'csv_import_match_initial_last' => 'Опитай да намериш съвпадение на потребителите по <strong>Първа буква, Фамилия</strong> (<code>ииванов</code>)',
    'csv_import_match_first' => 'Опитай да намериш съвпадение на потребителите по <strong>Име</strong> (<code>Иван</code>)',
    'csv_import_match_email' => 'Опитай да намериш съвпадение на потребителите по <strong>email</strong>, като потребителско име',
    'csv_import_match_username' => 'Опитай да намериш съвпадение на потребителите по <strong>потребителско име</strong>',
    'error_messages' => 'Съобщение за грешка:',
    'success_messages' => 'Успешно:',
    'alert_details' => 'Детайли.',
    'custom_export' => 'Персонализиран експорт',
    'mfg_warranty_lookup' => ':manufacturer статус гаранция',
    'user_department' => 'Отдел',
];
