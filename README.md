# Parting-Pages
 An application allowing users to browse, buy, and sell previously used books.


# Setup
 Start containers  
 `docker-compose up -d`  
 starts nginx, backend, database, and frontend  
 
 Install backend dependencies  
 `docker-compose exec backend bash init.sh`  
 
 Install frontend dependencies (just incase compose didn't)  
 `docker-compose exec frontend npm install`  
 
 Migrate and Seed database  
 `docker-compose exec backend php artisan migrate:refresh --seed`  
 
 Build tailwindcss  
 `docker-compose exec frontend npm run build:css`  
 
 Start application  
 `docker-compose exec frontend npm run serve`  
 
## View Application  
 localhost:8888  
 
## Endpoints  
 localhost:8088
 
## Icons  
 http://www.zondicons.com/
 
### Todo
 Middleware validation on book creation  
 Watchers for Booklist being updated (create and delete)  
 Resources
