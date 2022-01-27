<p align="center"><a href="http://ariel.harbourspace.site" target="_blank"><img src="public/img/HS-blog-logo.png" width="400"></a></p>

# HS Blog

It's a simple blog to use inside the Harbour.Space University

## Description

the repository responds to the course project related to the subject [Modern Web Application II](https://harbour.space/computer-science/courses/modern-web-application-2-431) course at [Harbour.Space University](https://harbour.space) in January 2022.

## Getting Started

This is a standard Laravel project. All dependencies are listed in <code>composer.json</code>.

### Installing

The standard way of installing a Laravel application suffices

Clone the repository

```
git clone https://github.com/ArielxX/Modern-web-application-2
```

Go into the app directory & install composer dependencies

```
composer install
```

Copy <code>.env.example</code> to <code>.env</code> and make sure to set the application name, application url and database parameters.

Set the application key

```
php artisan key:generate
```

Migrate so the tables are created

```
php artisan migrate
```

If wanted, you can seed the app with some test data

```
php artisan db:seed
```

Install npm dependencies and compile assets

```
npm install && npm run dev
```

### Executing the program

There are three levels of access:

-   **Browsing** the site: go to the main domain of the site and start browsing.
-   **User functions**: create an account and/or login to get access to the user functions. Now it is possible to register for posts.
-   **Admin functions**: set the "is_admin" property of a user to 1. Once you have an admin, you can make other users admin as well through the website interface

## Authors

Ariel Cruz

-   [ArielxX](https://github.com/ArielxX)

## Version History

No formal versioning is used in this project.

## License

This project is [copyleft](https://en.wikipedia.org/wiki/Copyleft) protected.

## Acknowledgments

-   Thank you to [Harbour.Space University](https://harbour.space) for organising the Modern Web Application II course.
-   And thank you very much to Nico ([ndeblauw](https://github.com/ndeblauw)) for this amazing course.
