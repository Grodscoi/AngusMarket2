<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AngusMarkets - Проекты</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .cart-panel {
            position: fixed;
            top: 50%;
            right: 20px;
            transform: translateY(-50%);
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            width: 300px; /* Ширина боковой панели */
            display: none; /* Скрываем по умолчанию */
        }

        .cart-panel.show {
            display: block; /* Показываем при добавлении класса */
        }

        .cart-panel h3 {
            margin-top: 0;
        }

        .cart-item {
            border-bottom: 1px solid #eee;
            padding: 10px 0;
        }

        .cart-button {
            display: block;
            margin: 20px auto;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .cart-button:hover {
            background-color: #45a049;
        }

        .cart-close {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
        }

        .cart-close:hover {
            color: red;
        }

        /* Стили для кнопки открытия корзины */
        .open-cart-button {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 50%; /* Делаем кнопку круглой */
            width: 50px;
            height: 50px;
            font-size: 24px;
            cursor: pointer; /* Добавляем плавный переход для фона */
            z-index: 100; /* Делаем кнопку поверх других элементов */
        }

        .open-cart-button:hover {
            background-color: #45a049; /* Изменяем цвет фона при наведении */
        }

        body.dark {
            background-color: #333;
            color: #fff;
        }

        header.dark {
            background-color: #222;
        }

        nav ul.dark {
            background-color: #444;
        }

        nav ul li a.dark {
            color: #fff;
        }

        .search-container input[type="text"].dark {
            border: 1px solid #666;
        }

        .search-container input[type="button"].dark {
            background-color: #2196F3;
        }

        .project.dark {
            background-color: #222;
        }

        .project form input[type="submit"].dark {
            background-color: #2196F3;
        }

        .cart-panel.dark {
            background-color: #222;
        }

        .cart-button.dark {
            background-color: #2196F3;
        }
    </style>
</head>
<body>
    <header>
        <h1>AngusMarkets</h1>
        <div class="search-container">
            <input type="text" id="search-input" placeholder="Поиск проектов...">
            <input type="button" value="Поиск" onclick="searchProjects()">
        </div>
        <!-- <button class="change-theme-button" onclick="changeTheme()">Сменить тему</button> -->
    </header>

    <nav>
        <ul>
            <li><a href="index.php">Главная</a></li>
            <li><a href="contact.php">Контакты</a></li>
        </ul>
    </nav>

    <main>
        <section class="orders">
            <div class="rasp">
                <input type="range" id="distrib-input" min="100" max="200" step="10 value="150" oninput="updatePriceValue(this.value)"">
                <span id="price-value">150</span> 
                <input type="button" value="мин. Стоимость" onclick="filterProjects()">
            </div>
            <h2>Купить проекты:</h2>
            <div class="projects-container" id="projects-container">
                <div class="project" data-title="SOOQA" data-price="160">
                    <h3>SOOQA | Angus(rovd)</h3>
                    <form method="GET" action="project1.php">
                        <input type="hidden" name="one" value="SOOQA"> 
                        Подробнее о проекте : <input type="submit">
                    </form>
                </div>
                <div class="project" data-title="2Hollis" data-price="150">
                    <h3>2Hollis | Angus(rovd)</h3>
                    <form method="GET" action="project1.php">
                        <input type="hidden" name="two" value="2hollis"> 
                        Подробнее о проекте : <input type="submit">
                    </form>
                </div>
                <div class="project" data-title="Mista Play" data-price="150">
                    <h3>Mista Play | Angus(rovd)</h3>
                    <form method="GET" action="project1.php">
                        <input type="hidden" name="three" value="Mista Play"> 
                        Подробнее о проекте : <input type="submit">
                    </form>
                </div>
                <div class="project" data-price="0">
                    <h3>По поводу покупки других проектов:</h3>
                    <a href="https://t.me/V1ctory14">Tg: V1ktory</a>
                </div>
            </div>
            <div class="show-more-container">
                <div class="show-more" id="show-more">Продолжить список</div>
            </div>
            <div id="full-list" style="display:none;">
                <h3>В процессе</h3>
                <!-- <h4><a href="https://t.me/V1ctory14">"Выложить свой проект на сайт"</a></h4> -->
            </div>

        <div class="cart-panel" id="cart-panel">
            <span class="cart-close" onclick="closeCart()">&times;</span>
            <h3>Корзина</h3>
            <div id="cart-items">
            </div>
            <form action="help.php" method="GET">
                <input type="hidden" name="one" value=""> 
                <input type="submit"> - Перейти в корзину
            </form>
        </div>

        <button class="open-cart-button" onclick="toggleCart()">🛒</button>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 AngusMarkets </p>
    </footer>

    <script>
        const addToCartButtons = document.querySelectorAll(".project button[type='submit']");
        const cartPanel = document.getElementById("cart-panel");
        const cartItems = document.getElementById("cart-items");

        function updatePriceValue(value) {
            document.getElementById("price-value").textContent = value; // Обновляем текст элемента span
        }

        function filterProjects() {
            var maxPrice = document.getElementById("distrib-input").value;
            alert("Фильтрация проектов с максимальной ценой: " + maxPrice);
        }

        function loadCart() {
            const cart = JSON.parse(localStorage.getItem('cart')) || [];
            cart.forEach(item => {
                addCartItem(item.name, item.price);
            });
        }

        function saveCart() {
            const cart = [];
            document.querySelectorAll('.cart-item').forEach(item => {
                const name = item.querySelector('strong').innerText;
                const price = item.querySelector('p').innerText.replace('Цена: ', '');
                cart.push({ name, price });
            });
            localStorage.setItem('cart', JSON.stringify(cart));
        }

        addToCartButtons.forEach(button => {
            button.addEventListener("click", () => {
                const project = button.closest('.project');
                const contentName = project.querySelector('h2').innerText;
                const contentBuy = 'Цена: 1000'; 

                addCartItem(contentName, contentBuy);
                saveCart(); 
                cartPanel.classList.add("show"); 
            });
        });

        function addCartItem(name, price) {
            const cartItem = document.createElement("div");
            cartItem.classList.add("cart-item");
            cartItem.innerHTML = `
                <p><strong>${name}</strong></p>
                <p>${price}</p>
            `;
            cartItems.appendChild(cartItem);
        }

        function closeCart() {
            cartPanel.classList.remove("show");
        }

        function toggleCart() {
            cartPanel.classList.toggle("show");
        }

        function distribution() {
            const input = document.getElementById('distrib-input');
            const projects = document.querySelectorAll('.project');

            projects.forEach(project => {
                if (value.includes(input)) {
                    project.style.display = 'block';
                } else {
                    project.style.display = 'none';
                }
            });
        }
        
        function searchProjects() {
            const input = document.getElementById('search-input').value.toLowerCase();
            const projects = document.querySelectorAll('.project');
            
            projects.forEach(project => {
                const title = project.getAttribute('data-title').toLowerCase();
                if (title.includes(input)) {
                    project.style.display = 'block';
                } else {
                    project.style.display = 'none';
                }
            });
        }

        document.getElementById('show-more').onclick = function() {
            const fullList = document.getElementById('full-list');
            if (fullList.style.display === "none" || fullList.style.display === "") {
                fullList.style.display = "block"; 
                this.style.display = "none"; 
            }
        };
        function changeTheme() {
            document.body.classList.toggle('dark');
            document.querySelector('header').classList.toggle('dark');
            document.querySelector('nav ul').classList.toggle('dark');
            document.querySelectorAll('.search-container input').forEach(input => input.classList.toggle('dark'));
            document.querySelectorAll('.project').forEach(project => project.classList.toggle('dark'));
            document.querySelector('.cart-panel').classList.toggle('dark');
            document.querySelector('.cart-button').classList.toggle('dark');
            document.querySelector('.open-cart-button').classList.toggle('dark');
        }

        function filterProjects() {
            const maxPrice = parseInt(document.getElementById('distrib-input').value);
            const projects = document.querySelectorAll('.project');

            projects.forEach(project => {
                const price = parseInt(project.dataset.price);
                if (price => maxPrice) {
                    project.style.display = 'block';
                } else {
                    project.style.display = 'none';
                }
            });
        }

        function filterProjects() {
            const maxPrice = parseInt(document.getElementById('distrib-input').value);
            const projects = document.querySelectorAll('.project');

            projects.forEach(project => {
                const price = parseInt(project.dataset.price);
                if (price <= maxPrice) {
                    project.style.display = 'block';
                } else {
                    project.style.display = 'none';
                }
            });
        }

        loadCart();
    </script>
</body>
</html>