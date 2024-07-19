# Laravel External API Integration for Product Management

## Overview

This Laravel application integrates with an external API to manage product data. It performs CRUD (Create, Read, Update, Delete) operations using Laravel and the external API. The application provides a user-friendly interface for managing products, including fetching data, creating new products, updating existing ones, and deleting products. The interface uses Bootstrap for styling and includes breadcrumb navigation for easy navigation.

## Screenshots

![1](https://github.com/user-attachments/assets/640cadfd-10c9-468e-ac84-a8568eed38ed)
![2](https://github.com/user-attachments/assets/752dbc5e-c9b6-426d-ac4b-64e786e59add)
![3](https://github.com/user-attachments/assets/4459d373-5186-4c40-9c31-458398692c78)
![api](https://github.com/user-attachments/assets/f820359d-1c04-4943-8805-6fee82742052)
![edit](https://github.com/user-attachments/assets/e5461fac-a4f3-4b7d-9191-fa42a8e45ba0)

## Key Features

- **Fetching Data**: Retrieve a list of products from an external API and display it in a view (`api-data.index`).
- **Create Product**: Display a form for creating a new product and send a POST request to the API to add it.
- **Edit Product**: Retrieve a single product by ID from the API and display it in an edit form (`api-data.edit`). Send a PUT request to update the product details.
- **Delete Product**: Handle deletion of products via AJAX requests, providing feedback on the success or failure of the operation.
- **User Interface**: Responsive design using Bootstrap with views for listing, creating, and editing products.
- **Error Handling**: Display error messages if API calls fail, ensuring a smooth user experience.

## Technologies Used

- **Laravel**: PHP framework for building web applications and handling backend logic.
- **Bootstrap**: Framework for responsive design and styling.
- **AJAX**: For handling product deletions and providing real-time feedback.
- **External API**: Used for performing CRUD operations on product data.

## Setup and Usage

### Installation

1. **Clone the Repository**
    ```bash
    git clone https://github.com/yourusername/laravel-external-api-product-management.git
    ```

2. **Install Dependencies**
    ```bash
    composer install
    npm install
    ```

3. **Configure Environment**
   - Rename `.env.example` to `.env` and configure your API settings and other environment variables.

4. **Run Migrations and Seeders**
   - Apply any database migrations if needed:
     ```bash
     php artisan migrate
     ```

5. **Start Laravel Server**
    ```bash
    php artisan serve
    ```

### Usage

- **Fetch Data**: Navigate to the products listing page to fetch and display product data from the external API.
- **Create Product**: Use the create form to submit a new product via POST request to the API.
- **Edit Product**: Access the edit form to update product details. The changes are sent via PUT request to the API.
- **Delete Product**: Remove products using AJAX requests, which handle feedback and redirect as necessary.

## Testing with Postman

- **Postman Collection**: Import the provided Postman collection to test API endpoints for CRUD operations and ensure correct integration.

## Contact Information

For any inquiries or assistance regarding the project, please contact Mohamed Insath at [insath1997.mi@gmail.com](mailto:insath1997.mi@gmail.com).
---
**Developed by Mohamed Insath**
