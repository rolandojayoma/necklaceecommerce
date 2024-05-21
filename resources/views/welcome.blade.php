<!doctype html>
<html lang="en">

<head>
    <title>Necklace</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}">
</head>

<body>
    <header>
        <div class="container">
            <div class="parent">
                <div class="logo">
                    <p>NeCkLaCE.coM</p>
                </div>
                <form class="search-container">
                    <input id="search-bar" placeholder="Search" type="text"> 
                    <a href="#"><img class="search-icon" src="http://www.endlessicons.com/wp-content/uploads/2012/12/search-icon.png" alt="Search"></a>
                </form>
                <div class="column-two">
                    
                    <div class="item button-container">
                        <button><a href="{{url('register')}}">Register</a></button>
                        <button><a href="{{url('login')}}">Login</a></button>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>
        <section class="hero-container">
            <img src="{{asset('assets/images/7.jpeg')}}" alt="Banner Necklaces">
        </section>
        <div class="container">
            <div class="featured-categories">
                <div class="element">
                    <h2>New Arrivals</h2>
                </div>
                <div class="columns">
                    <div class="column">
                        <img src="{{ asset('assets/images/5.jpeg') }}" alt="Silver Necklace">
                        <h2>Silver</h2>
                    </div>
                    <div class="column">
                        <img src="{{ asset('assets/images/4.jpeg') }}" alt="Discount Necklace">
                        <h2>7% Off</h2>
                    </div>
                    <div class="column">
                        <img src="{{ asset('assets/images/3.jpeg') }}" alt="Gold Necklace">
                        <h2>Gold</h2>
                    </div>
                </div>
            </div>
            <div class="featured-categories">
                <h2>Featured Products</h2>
                <div class="columns">
                    <div class="column">
                        <a href="{{ url('cross') }}">
                            <img src="{{ asset('assets/images/2.jpeg') }}" alt="Double Cross Gold Necklace">
                            <h2>Double Cross Gold Necklace</h2>
                        </a>
                    </div>
                    <div class="column">
                        <a href="{{ url('linkup') }}">
                            <img src="{{ asset('assets/images/1.jpeg') }}" alt="LinkUp Silver Necklace">
                            <h2>LinkUp Silver Necklace</h2>
                        </a>
                    </div>
                    <div class="column">
                        <a href="{{ url('gold') }}">
                            <img src="{{ asset('assets/images/6.jpeg') }}" alt="Gold Shining Snake">
                            <h2>Gold Shining Snake</h2>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="footer">
        <div class="container">
            <div class="columns">
                <div class="column copyright">
                    <p>©2024 NeCkLaCE.coM. All Rights Reserved.</p>
                </div>
                <div class="column-bottom">
                    <ul>
                        <li>
                            <a class="anchor" href="#">Terms & Conditions</a>
                        </li>
                        <li>
                            <a class="anchor" href="#">Privacy Policy</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
<style>
    /* Add custom styles here */
body {
    font-family: 'Arial', sans-serif;
    background: #2c62b1;
    margin: 0;
    padding: 0;
    color: #fff;
}

header {
    background-color: #0fdec5;
    color: #fff;
    padding: 10px 0;
}

.container {
    width: 90%;
    margin: 0 auto;
    overflow: hidden;
}

.parent {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.logo p {
    font-size: 26px;
    font-weight: bold;
    margin: 0;
}

.column-two {
    display: flex;
    align-items: center;
}

.item {
    margin: 0 10px;
}

.item img {
    vertical-align: middle;
}

.button-container {
    display: flex;
    align-items: center;
    margin-left: auto;
}

.button-container button {
    background-color: #ffcc00;
    color: #333;
    border: none;
    padding: 10px 20px;
    margin-left: 10px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s;
}

.button-container button a {
    color: inherit;
    text-decoration: none;
}

.button-container button:hover {
    background-color: #e6b800;
}

.search-container {
    display: flex;
    align-items: center;
}

#search-bar {
    padding: 5px;
    font-size: 16px;
    border: none;
    border-radius: 5px;
    margin-right: 10px;
}

.search-icon {
    height: 20px;
    width: 20px;
    cursor: pointer;
}

.nav {
    background-color: #f7f7f7;
    color: #333;
}

.nav ul {
    padding: 0;
    margin: 0;
    list-style: none;
    display: flex;
    justify-content: center;
}

.navItem a {
    display: block;
    padding: 10px 20px;
    color: #333;
    text-decoration: none;
    font-size: 18px;
}

.navItem a:hover {
    background-color: #ffcc00;
    color: #fff;
}

.hero-container img {
    width: 100%;
    height: auto;
}

.featured-categories {
    margin: 20px 0;
}

.featured-categories .element h2 {
    text-align: center;
    font-size: 28px;
    margin-bottom: 20px;
}

.columns {
    display: flex;
    justify-content: space-between;
}

.column {
    flex: 1;
    margin: 0 10px;
    text-align: center;
}

.column img {
    max-width: 100%;
    height: auto;
    border-radius: 10px;
    transition: transform 0.3s;
}

.column img:hover {
    transform: scale(1.05);
}

.column h2 {
    font-size: 22px;
    margin-top: 10px;
}

.footer {
    background-color: #333;
    color: #fff;
    padding: 20px 0;
    text-align: center;
}

.footer .container {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.footer ul {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
}

.footer li {
    margin: 0 10px;
}

.footer a {
    color: #fff;
    text-decoration: none;
}
</style>