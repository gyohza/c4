<!-- About me links -->
[linkedin]: https://www.linkedin.com/in/daninagaoka/
[stack overflow]: https://stackoverflow.com/users/12015105/gyohza
[hackerrank]: https://www.hackerrank.com/gyohza

<!-- References -->
[tmdb]: https://www.themoviedb.org/
[tmdb.requestkey]: https://www.themoviedb.org/settings/api/request
[lumen]: https://lumen.laravel.com/
[swagger]: https://swagger.io/
[swagger-lume]: https://packagist.org/packages/darkaonline/swagger-lume
[composer]: https://getcomposer.org/
[gitkraken]: https://www.gitkraken.com/
[xampp]: https://www.apachefriends.org/index.html

<!-- Page sections -->
[aboutme]: #about-the-applicant

# C4 Skill Assessment

This project aims to implement a simple GET API to consume and retrieve information from [The Movie Database][tmdb].

To check the **skill requirements checklist** and my remarks to each item, [**click here**][aboutme].

## Installation guide

This application is powered by the [Lumen microframework][lumen] by Laravel.

Its API docs are powered by [Swagger] (and huge props to [Swagger-Lume], too).

### Requirements

* [Composer]
* PHP >= 7.3
* OpenSSL PHP Extension
* PDO PHP Extension
* Mbstring PHP Extension

**Note:** Some of the above are already included by default in bundles such as [XAMPP].

### Installation steps

#### 1. Clone the repository locally:

```bash
git clone https://github.com/gyohza/c4.git
```

#### 2. Install necessary packages with Composer:

```bash
cd c4 && composer install
```

#### 3. Copy the `.env.example` file and rename the copy to `.env`;

#### 4. Inside the `.env` file, provide a valid [TMDB API key][tmdb.requestkey] to `TMDB_API_KEY`. It should look like so:

```bash
TMDB_API_KEY=a354bd666f1cddab30adb312546d7687
```

#### 5. Serve the instance locally by running:

```bash
php -S localhost:8000 -t public
```

#### 6. You can now access the [**API docs**](http://localhost:8000/api/documentation) for this application for reference and testing.

**Note:** whenever serving this application by dumping the repository into the Apache hosting folders (such as `/var/www/html` or `C:/xampp/htdocs`), you need to redirect all traffic to the `/public` directory.

## About the applicant

> ### Daniel Nagaoka
> #### [`LinkedIn`][linkedin] ▪ [`Stack Overflow`][stack overflow] ▪ [`HackerRank`][hackerrank]

- [X] Git
    * Perform all common operations with ease. More obscure commands (such as `update-index`) only by looking up reference;
    * Try to follow consistent branching and flow according to each project's definition;
    * Mainly operate with the aid of [GitKraken][gitkraken], but can deal with bash commands just fine;
    * Also a bunch other day-to-day issues such as conflict resolving, setting up PAT in a remote environment, webhooks, among others. 
- [X] React/Vue/Angular
    * Angular 2+ - good deal of experience (also my go-to frontend framework when starting a random project);
        * Includes Angular Material and Sass.
    * React - have had contact with it, but not anywhere near an expert. 
- [ ] Agile
    * Worked with Scrum for a period, but not solid enough to declare it "mastered".
- [X] Clean Code
    * I'd like to believe that it's one of my competences. Sure I don't master all the standards and design patterns, but when I do, I become an evangelist for it, even if some of it doesn't make sense to me. A standard is a standard, right?
    * Refactoring bad code makes me roll my eyes and perform numerous mental facepalms, but it's a rewarding job;
    * Whenever I get too deep into a project, I spend quite some time (unless explicitly told not to) in housekeeping and try to keep an eye for antipatterns.
- [X] Linux
    * I usually code from a Windows environment, but I can bash my way in a Linux environment just fine. Most of my Tux experience comes from handling AWS EC2s from PuTTY and VS Code (I set it up with either SSH FS or Remote - SSH extensions).
- [X] MySQL/PostgreSQL
    * About MySQL: YESSSSSSS, and especially 8.0. Regex replaces and row numbering were long overdue;
    * PostgreSQL: worked with it once. Not my favorite, but no biggie;
    * SQL Server: also have worked with it, but it's honestly my least favorite thing 😂. Try querying `SELECT (1 = 1) = (1 = 1)` and you'll see what I mean!
- [X] PHP
    * Somewhat a little more verbose than JS, some inelegant procedural stuff, but those can't tone down my fanboyishness towards PHP;
    * Done many things the hard way: reinventing the wheel. Good for learning, foolish for productivity. Nowadays I'm more "Packagist and Composer to the rescue";
    * PHP is my go-to backend language. I code with VSCode + Intellephense Premium.
- [ ] Python/Bash Script
    - [ ] Python
    - [X] Bash
        * All common operations (such as navigation and permissions) covered;
        * At one point I was pretty used to scripting in a daily basis (`.sh` files). I think I can still handle them well;
        * I try creating scripts in Windows through Git Bash to avoid syntax problems when registering them into the apps.
- [X] Object Oriented
    * All things inheritance, abstraction, visibility, static/constants covered;
    * Also composition... I'm a trait avoider, but use it sometimes;
    * I wish PHP had generics 😥.
- [X] Frameworks (Zend Framework 2, Laravel, Silex or alike)
    * Been working on Yii for half a year;
    * Been trying to create a few side projects in Lumen to get into the Laravel world (this very application is one such attempt).
- [X] API
    * REST, mainly;
    * Meaning to learn GraphQL, but haven't had the opportunity to focus on it, yet.
- [ ] Unit Tests
    * Know the concept, what it's for and roughly a bit of its scope and naming conventions, but never implemented it.
- [ ] Docker
    * It's in my list of things that I should definitely learn. 
- [X] DevOps
    * Mainly Azure DevOps.
- [X] Self-learn
    * I have self-taught written all over me. Started coding that way (I'll save the story for later);
    * Google, StackOverflow and YouTube are great workmates.
- [X] Cloud Computing (AWS)
    * Not an AWS whiz, but I've been working with it for a while, now:
        * Creating/maintaining EC2 instances, ElasticIPs and connections;
        * Creating/maintaining S3 buckets and feeding data into them;
        * Creating/maintaining RDS databases;
        * Consuming services such as Textract or SES inside applications.
- [X] Critical Thinking
    * I must be modest to state that I try. At a corporate/professional level, at a personal, social and political level;
    * The first shot at critical thinking one should make is that they don't know everything. That said, that which you _do_ know, can and should be harnessed to predict possible outcomes. Projects crumble because of overlooking variables;
    * The other and most valuable insight for me is that everything is part of a complex system, especially so since it involves humans and their own personalities and aspirations. It's important to understand that this does *not* give us a better understanding of outcomes and facts, but a better understanding of the magnitude of the domain things that we do _not_ understand, have no control of and hardly ever have a say in. In a more personal level, I have had trouble in accepting defeat and admitting to my mistakes for most of my past life. I believe adulthood, critical thinking and enlightenment are at their finest when we realize it's not wrong to err, but not to learn and evolve from it.

## Test guidelines

<details>
   <summary>
       Guidelines and constraints of this test, as established by C4. (No one was blown up in the making of this app.)
   </summary>
    
### DESCRIPTION
You have been tasked with creating an API module that will connect to another API.
The purpose of the module is to list the movies of this API in a personalized way.
The first release of the API will be very limited in scope, but will serve as the foundation for
future releases.
**You will only do the backend application**

### FUNCTIONAL REQUIREMENTS

It's expected that user will be able to:

- Endpoint to get a list of upcoming movies.
- The same endpoint should return the list of the next 20 movies as page param is given.
- Endpoint to get a list of top rated movies.
- The same endpoint should return the list of the next 20 movies as page param is given.
- Endpoint to get a specific single movie.
- The same endpoint should return all movie related videos with a single request.
- Endpoint to get a list of genres.
- The same endpoint should return a single genre by id.

### TECHNICAL REQUIREMENTS

You should see this project as an opportunity to create an app following modern development
best practices, but also feel free to use your own app architecture preferences (coding
standards, code organization, third-party libraries, etc).

A TMDb API key is already available so you don't need to request your own: _`<<<suppressed>>>`_

The API documentation and examples of use can be found here:

https://developers.themoviedb.org/3

- You can use any combination of backend technology
- You should create your own backend API layer, which will be responsible to send
requests to the TMDb API
- Feel free to use any package/dependency managers if you see fit
- Need to use a public version control system

### Evaluation Criteria

Endpoint validation will be done using CURL for each one.
Key aspects that will be validated:

- Clean Code;
- Version Control;
- Chosen Architecture;
- Features running correctly;
</details>

## Lumen PHP Framework

<details>
    <summary>
        Original auto-generated Lumen <code>README.md</code> file.
    </summary>
    
[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://poser.pugx.org/laravel/lumen-framework/d/total.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/lumen-framework/v/stable.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://poser.pugx.org/laravel/lumen-framework/license.svg)](https://packagist.org/packages/laravel/lumen-framework)

Laravel Lumen is a stunningly fast PHP micro-framework for building web applications with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Lumen attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as routing, database abstraction, queueing, and caching.

### Official Documentation

Documentation for the framework can be found on the [Lumen website](https://lumen.laravel.com/docs).

### Contributing

Thank you for considering contributing to Lumen! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

### Security Vulnerabilities

If you discover a security vulnerability within Lumen, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

### License

The Lumen framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
</details>
