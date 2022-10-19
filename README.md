# SimpleRegistrationSystemPHP
Simple registration system in PHP.

## Цель работы
Спроектировать и разработать систему авторизации пользователей на протоколе HTTP.

В данном проекте реализованы следующие пункты
- Формы регистрации/входа
- Ограничение время сессии
- Хранения хэша пароля с солью (соль для каждого пользователя уникальна)

## Ход работы

Реализовал интерфес с формой регистрации и входа, для хранения данных используется БД MySQL.

Сценарии

https://www.figma.com/file/PWQlw6QhS6PibV8sktH75C/registration?node-id=0%3A1

В проекте содержится 7 файлов: auth.php, registration.php, index.php, exit.php, sign-in.php, success.php, style.css (просто стили).

- auth.php используется для проверки наличия пользователя в БД.
- registration.php добавления пользователя в БД, при верном формате пароля и логина.
- index.php файл с формой регистрации.
- sign-in.php файл с формой входа.
- exit.php код, который удаляет куки (завершает сессию пользователя)
- success.php код, который срабатывает при успешной регистрации или авторизации.


