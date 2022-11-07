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

Хореография

![Рис. 1 - Хореография](https://github.com/ideahold/SimpleRegistrationSystemPHP/blob/main/%D0%A5%D0%BE%D1%80%D0%B5%D0%BE%D0%B3%D1%80%D0%B0%D1%84%D0%B8%D1%8F.png)

База данных

![Рис. 2 - База Данных](https://github.com/ideahold/SimpleRegistrationSystemPHP/blob/main/%D0%B1%D0%B4.png)

В проекте содержится 7 файлов: auth.php, registration.php, index.php, exit.php, sign-in.php, success.php, style.css (просто стили).

- auth.php используется для проверки наличия пользователя в БД.
- registration.php добавления пользователя в БД, при верном формате пароля и логина.
- index.php файл с формой регистрации.
- sign-in.php файл с формой входа.
- exit.php код, который удаляет куки (завершает сессию пользователя)
- success.php код, который срабатывает при успешной регистрации или авторизации.

В самом начале пользователь попадает на index.php, если у пользователя есть аккаунт то можно перейти на страницу с формой входа и ввести свои логин и пароль (проверяется в registration.php).
Если аккаунта не существует, то необходимо ввести свое имя, логин, пароль и нажать кнопку "зарегестрероваться", после чего все будет внесено в базу данных (MySQL). Пароль будет хеширован с солью, соль будет записана в отдельный столбец для будущего сравнения. Для каждого юзера соль создается уникальная.

Поля имя и логин проверяются на длину, если условия не выполняются, то выводится соответсвующая ошибка.

Если все введено верно, то пользователи редеректит на страницы с формой входа (sign-in.php).

Далее необходимо ввести свои данные. Если данного логина не существует(проверяется в auth.php), то выводится соответсвующая ошибка.

Если логин и пароль введены верно, то срабатывает скрипт success.php и ползователь попадает на свою страницу с именем и кнопкой выйти. Устанавливается cookie на час времени, так что если пользователь закроет сайт и снова откроет в течении этого времени, то останется залогининым. Спустя час времени пользователю придется снова вводить свои данные.

По нажатию на кнопку выйти (сработает скрипт exit.php) куки пользователя будут удалены и пользователь будет перенаправлен на страницу с регистрацией.


## Вывод
Спроектировали и разработали систему авторизации пользователей на протоколе HTTP




