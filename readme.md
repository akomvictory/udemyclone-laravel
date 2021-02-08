# E-learning platform, udemy/lynda (demo) clone

![Home Screen](/img/cover.jpg)

Githhub Link: https://www.github.com/iamakomvictory

A Simple E-learning App With, Laravel, JavaScript and API integrations with the core functionality as udemy.

This is an e-learning app **core Web Develoment skills**? Build with **Laravel, Bootstrap, API's and JavaScript**? This project, is developed with the basic functionality of a real life e-learning platform, like: user auth, admin access control, API request, etc. **functionlity of e-learning with laravel framework**. Here are some of the implementation in this project!

-   Authentication
-   Admin panel
-   Video uploading
-   Course enrolment
-   Application Programming Interface (API request)


## 1. Start Usage 
After cloning the app to your local machine

Run the following commands
-   [Generate app key] (php artisan key:generate)

-   [Composer install] (composer install) or
-   [Composer update] (composer update) if you already have composer installed

-   [migrate database] (php artisan migrate) to migrate database tables

## 2. Symbolic link to point to stored images
Run the artisan command to create a symlink
-   [Create a symbolic link] (php artisan Storage:link)
this will create a symbolic link to point to images
in the public folder


## 3. Database & Database Seed
Create a database
-   [database name] (jenx)

This will populate your database table with test data to start before you can start adding yours
-   [Seed user table] (php artisan db:seed --class=UsersTableSeeder)
-   [Seed Category table] (php artisan db:seed --class=CategoriesTableSeeder)
-   [Seed Courses table] (php artisan db:seed --class=CoursesTableSeeder)
-   [Seed Creviews table] (php artisan db:seed --class=CreviewsTableSeeder)
-   [Seed Curriculum table] (php artisan db:seed --class=CurriculaTableSeeder)
-   [Seed Iapplicants table] (php artisan db:seed --class=IapplicantsTableSeeder)
-   [Seed Instructors table] (php artisan db:seed --class=InstructorsTableSeeder)
-   [Seed Ireviews table] (php artisan db:seed --class=IreviewsTableSeeder)
-   [Seed Notifications table] (php artisan db:seed --class=NotificationsTableSeeder)
-   [Seed Roles table] (php artisan db:seed --class=RolesTableSeeder)
-   [Seed Videos table] (php artisan db:seed --class=VideosTableSeeder)

After running the above commands migrate the db
-   [database migrate refresh] (php artisan migrate:refresh --seed)

Login with 
-   [username] (test.akom@akom.com)
-   [password] (test.akom@akom.com)

Or create an account with your own data


## 4. Closing
This app is build with two users in mind the admin and the the students

You have to login with above data to be a super admin
As a super admin you have access to the dashboard and you can add new admins manage the platform.

However, if you login with you own info's you can only have access to enroled and take courses on the platform

Admin Access
-   [Admin] (1. Can add and manage other admins (CRUD))
-   [Moderator] (2.Can manage the platform)
-   [Instructor] (3. Can add courses to the platform)
-   [User] (3. Can enrol, pay and take courses)

Thank you so much for going through this. I hope you enjoy using it. Glacias!!!
