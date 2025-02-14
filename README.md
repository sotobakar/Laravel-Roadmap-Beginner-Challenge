# Task Complete

Project Look *all dummy data :
![Homepage](public/images/ui_homepage.png "Homepage UI")
![Article](public/images/ui_article.png "Article UI")
![Admin Articles](public/images/ui_admin_articles.png "Admin Articles")
![Admin Create Article](public/images/ui_admin_create_article.png "Admin Create Article")
![Admin Create Tag](public/images/ui_admin_create_tag.png "Admin Create Tag")
![Admin Edit Tag](public/images/ui_admin_edit_tag.png "Admin Edit Tag")
## The Task: Simple Personal Blog

You need to create a personal blog with just three pages:

- Homepage: List of articles
- Article page
- Some static text page like "About me"


Also, there should be a Login mechanism (but no Register) for the author to write articles:

- Manage (meaning, create/update/delete) categories
- Manage tags
- Manage articles 
- For Auth Starter Kit, use [Laravel Breeze](https://github.com/laravel/breeze) (Tailwind) or [Laravel UI](https://github.com/laravel/ui) (Bootstrap) - that starter kit will have some design, which is enough: the design is irrelevant for accomplishing the task


**DB Structure:**

- Article has title (required), full text (required) and image to upload (optional)
- Article may have only one category, but may have multiple tags


-----

## Features to implement

Here's the [list of Roadmap features](https://github.com/LaravelDaily/Laravel-Roadmap-Learning-Path#beginner-level) you need to try to implement in your code:

**Routing and Controllers: Basics**	

- Callback Functions and Route::view()
- Routing to a Single Controller Method	
- Route Parameters
- Route Naming	
- Route Groups	


**Blade Basics**

- Displaying Variables in Blade
- Blade If-Else and Loop Structures
- Blade Loops
- Layout: @include, @extends, @section, @yield
- Blade Components


**Auth Basics**	

- Default Auth Model and Access its Fields from Anywhere
- Check Auth in Controller / Blade
- Auth Middleware


**Database Basics**	

- Database Migrations
- Basic Eloquent Model and MVC: Controller -> Model -> View
- Eloquent Relationships: belongsTo / hasMany / belongsToMany
- Eager Loading and N+1 Query Problem


**Full Simple CRUD**	

- Route Resource and Resourceful Controllers
- Forms, Validation and Form Requests
- File Uploads and Storage Folder Basics
- Table Pagination


----- 

## Example Solutions

If you need help, or you want to compare your version with our simple version, here are two public repositories with the solution:

- [Laravel Roadmap Beginner: Breeze](https://github.com/LaravelDaily/Laravel-Roadmap-Beginner-Roadmap-Breeze)
- [Laravel Roadmap Beginner: UI](https://github.com/LaravelDaily/Laravel-Roadmap-Beginner-Blog-UI)


**Notice**: please look at those repositories only AFTER you've accomplished the task yourself, or if you're confident about your Laravel beginner skills and you think you don't need to practice this task.
