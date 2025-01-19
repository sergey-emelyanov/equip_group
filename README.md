# Equip Group

Проект **Equip Group** — это веб-приложение, которое должно отражать витрину интернет магазина. Он построен с использованием фреймворка Laravel.

## Структура проекта

- **Frontend**: HTML, Bootstrap.
- **Backend**: Laravel (PHP).

---

## Требования

Перед запуском проекта на вашем локальном компьютере убедитесь, что у вас установлены следующие компоненты:

- **PHP** (минимум версии 7.4)
- **Composer** (для управления зависимостями PHP)
- **Node.js** и **npm** (для работы с фронтенд-зависимостями)
- **MySQL** 
---

## Установка и запуск проекта

### 1. Клонирование репозитория

Клонируйте проект на свой локальный компьютер с помощью Git:

```bash
git clone https://github.com/sergey-emelyanov/equip_group.git
cd equip_group
```

### 2. Установка зависимостей

Установите все необходимые зависимости PHP с помощью Composer:

```bash
composer install
```

Затем установите фронтенд-зависимости с помощью npm:

```bash
npm install
```

### 3. Настройка окружения 

Скопируйте файл .env.example в новый файл .env:

```bash
cp .env.example .env
```

#### 4. Настройка базы данных

Откройте файл .env и настройте параметры подключения к вашей базе данных:
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=название_базы_данных
DB_USERNAME=пользователь_бд
DB_PASSWORD=пароль_бд
```

Дамп базы со скриптами лежит в файле test.sql запустите эти скрипты выполните миграции базы данных

```bash
php artisan migrate
```


#### 5. Сборка и запуск фронтенда

Соберите ресурсы фронтенда:

```bash
npm run build
```

#### 5. Запуск приложения

Для запуска сервера используйте команду:

```bash
php artisan serve
```
Приложение будет доступно по адресу: http://127.0.0.1:8000.



---

#### Что удалось реализовать 

1. Вывод всех групп товаров по адресу /main 
2. Вывод все товаров списком по адресу /products (там же реализована пагинаций и сортировка по цене и по алфавиту)
3. Вывод информации о конкретном товаре по адресу /products/{product}


Я пытался пойти путем однометодных контроллеров, так как посчитал, что так код становится более предсказуемым, когда каждый контроллер отвечает за своем действие это же перекликается с принципом единственной ответственности. 

Скорее всего в ProductController логику сортировки имело место вынести куда-то в другое место, но я не смог понять как павильно, поэтому логика обработки осталась в контроллере. 

Так же в этом месте я не смог найти какого-то элегантного метода как сортировать поле из связанной таблицы(price). Пришлось пойти путем joinа таблицы и подзапроса.

Спасибо за уделенное время и возможность погрузиться в мир PHP и Laravel! 