# Nishorgo

**Nishorgo** is an innovative e-commerce platform dedicated to plant enthusiasts. It allows users to explore a wide range of plants, apply filters, add items to their shopping cart, and place orders seamlessly. The platform also features a powerful admin panel for monitoring sales and user activities.

---

## Features

### User Features
- **Plant Catalog:** Browse through a diverse selection of plants with high-quality images and detailed descriptions.
- **Search & Filters:** Find plants easily using search functionality and apply filters such as plant type, price range, and availability.
- **Cart Management:** Add or remove items from the cart and view cart totals.
- **Order Placement:** Place orders securely and receive confirmation.

### Admin Panel
- **Dashboard:** Gain insights into total sales, active users, and other key metrics.
- **Order Management:** View, update, or cancel customer orders.
- **Product Management:** Add, edit, or delete plant listings.
- **User Management:** Manage registered users and their roles.

---

## Tech Stack

### Frontend
- **HTML5:** For creating structured and semantic web pages.
- **CSS3:** For styling the website with modern designs and responsiveness.
- **JavaScript:** For interactive and dynamic user experiences.

### Backend
- **PHP:** Handles server-side logic and database interactions.
- **MySQL:** Database for storing user, product, and order data.

### Version Control
- **Git:** For version control and collaboration.

---

## Installation

Follow these steps to set up the Nishorgo project on your local machine:

### Prerequisites
- A web server like **XAMPP** or **WAMP** with PHP and MySQL.
- **Git** installed on your system.

### Steps
1. **Clone the Repository:**
   ```bash
   git clone https://github.com/NafiuRahman77/Term-Project-2-2-Nishorgo.git
   cd Term-Project-2-2-Nishorgo
   ```

2. **Set Up the Database:**
   - Import the `nishorgo.sql` file into your MySQL database.
   - Update the `config.php` file with your database credentials:
     ```php
     define('DB_HOST', 'localhost');
     define('DB_USER', 'root');
     define('DB_PASSWORD', '');
     define('DB_NAME', 'nishorgo');
     ```

3. **Run the Project:**
   - Place the project folder in the `htdocs` directory of your web server.
   - Start your web server and navigate to `http://localhost/nishorgo` in your browser.


---

## Usage

1. **User Interface:**
   - Browse the catalog and use filters for easy selection.
   - Add items to the cart and proceed to checkout.
   - Log in or register for order placement.

2. **Admin Interface:**
   - Access the admin panel by navigating to `http://localhost/nishorgo/admin`.
   - Use provided credentials to log in and manage the platform.



---

## License

This project is licensed under the MIT License. See the `LICENSE` file for more details.

---

## Contact

For any queries or suggestions, please contact:

- **Email:** support@nishorgo.com
- **GitHub:** [Your GitHub Profile](https://github.com/NafiuRahman77)
