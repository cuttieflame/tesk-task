create table "news" (
"id" bigserial primary key not null,
"created_at" timestamp(0) without time zone null,
"updated_at" timestamp(0) without time zone null,
"deleted_at" timestamp(0) without time zone null
)
create table "news_information" (
"id" bigserial primary key not null,
"name" varchar(255) not null default '',
"text" text not null default '',
"created_at" timestamp(0) without time zone null,
"updated_at" timestamp(0) without time zone null
)

/*
    Заполнение происходит при помощи Factory
    файлы(factory):
    database/factories/NewsFactory
    database/factories/NewsInformation

    database/seeders/DatabaseSeeder

    php artisan db:seed
    наполняет базу данных 20 записью
*/