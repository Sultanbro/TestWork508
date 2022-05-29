# TestWork508
В проекте есть actors таблица его колонки id,name,timestamps и films таблица его колонки id,name,timestamps их связывает actor_film pivot.
Там есть фильтрация 
по названию фильма под переменной film_name {val имя фильма из базы}
даты создания с перва последние под переменной old {val true}
 id создания с перва последние под переменной old_id {val true}
 id фильма под переменной film_id {val id фильма из базы}
 фильма по имени актера под переменной film_actor_name {val имя актера из базы}
 фильма по id актера под переменной actor_id {val actor_id из pivot actor_film}
composer update
php artisan migrate
php artisan db:seed
