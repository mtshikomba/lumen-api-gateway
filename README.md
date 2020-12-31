# API Gateway
- This gateway allows us to communicate with two other services namely books and authors.

# Adding a service
- There are few things you need to do to integrate a new micro service into the API gateway.
1. Create a new lumen app and implement your service there. You can get a layout/template from our Authors Service [https://github.com/dev-mtshikomba/lumen-authors-api].
2. Add a new service file in App\Services that will communicate to your external micro-service.
3. Add the url to your microservice including the port number in the .env file.
> e.g `BOOKS_SERVICE_BASE_URL=localhost:8001`
4. Also add a corresponding controller and implement it accordingly.
5. Don't forget to update the `handler.php` file in your micro-service. You may copy the exact code from the Authors Microservice [https://github.com/dev-mtshikomba/lumen-authors-api] and update accordingly.
6. Add the secret to the .env file
