<h2>To start project run:</h2>

<li>docker-compose build</li>
<li>docker-compose up</li>

Api will be accessible at: http://127.0.0.1:8000/api/v1/

<h2>Examples:</h2>

GET http://127.0.0.1:8000/api/v1/books/?category=Linux&author=Robin Nixon

GET http://127.0.0.1:8000/api/v1/categories/

POST http://127.0.0.1:8000/api/v1/books

{
    "isbn": "978-1491905012",
    "title": "Modern PHP: New Features and Good Practices",
    "author": "Josh Lockhart",
    "categories": ["1"],
    "price": "18.99"
}

You might find useful Postman collection file in main directory.


