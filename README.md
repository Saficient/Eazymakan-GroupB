# INFO 3305 Web Application Development Group Project 

Group: __B__
 
Group Members: 
1. __Nurul Adlina binti Roslan__  __(2219814)__
2. __Haziqah binti Sairin__ __(2218818)__
3. __Ahmad Lutfi Bin Ruhaimi__  __(2228329)__
4. __Safi Abrar Ishaat__  __(2127075)__
5. __Muhammad Ghazi Bin Khairi__  __(2229607)__

# Project Title: __Mahallah Food Order System__

### Introduction
In today’s fast-paced university environment, convenience plays a crucial role in daily activities, including meal planning. Our project focuses on developing a web application tailored specifically for the International Islamic University Malaysia (IIUM) community, enabling students, staff, and nearby individuals to browse menus and place food orders from Mahallah Cafes. This initiative aims to modernize the dining experience by streamlining the process of accessing menus, ordering meals, and managing orders through a single, efficient platform.

The proposed web application will utilize Laravel, a robust PHP framework, to create a user-friendly and fully functional system. The platform which will be named EazyMakan, will feature three distinct user portals: one for students and staff to browse menus and place orders, another for Mahallah Cafes to receive and manage these orders, and an admin portal to oversee and manage the entire system. By incorporating real-time order management, dynamic menu displays, and special offers, this application will bridge the gap between Mahallah Cafes and their patrons, ensuring a seamless and enhanced dining experience.

### Objective
1. Enhance Accessibility and Convenience:<br />
   Provide a centralized platform for IIUM students, staff, and nearby individuals to browse Mahallah Cafes' menus and place food orders seamlessly.

2. Improve Operational Efficiency:<br />
   Empower Mahallah Cafes with a dedicated portal to manage menus, receive orders, and update order statuses effectively, reducing manual efforts.

3. Promote Offers and Discounts:<br />
   Provide an easy-to-use interface for cafes to showcase special offers and promotions, increasing visibility and engagement.

4. Foster Digital Transformation:<br />
   Introduce a modern, technology-driven solution to enhance the dining experience within the IIUM community while encouraging the adoption of digital systems.

5. Streamline Order Management:<br />
   Facilitate efficient communication between users and Mahallah Cafes by enabling real-time order placement and management through the web application.

### Features and Functionalities
1. User Registration and Authentication<br />
   Secure user registration and login system for three distinct roles:
      - Students/Staff: Place food orders.
      - Cafes: Manage menus and process orders.
      - Admin: Oversee and manage the system.<br />
   Role-based access control to ensure each user type can only access their respective features.

2. Menu Management<br />
   Dynamic menu display for each Mahallah Cafe, including:
      - Food items with descriptions, prices, and availability.
      - Categories for easier browsing (e.g., breakfast, lunch, dinner).<br />
   Admin and Cafe users can add, edit, or remove menu items.

3. Order Placement and Management<br />
   Students/Staff:
      - Place orders directly through the website.
      - View real-time order status (e.g., pending, in preparation, ready for pickup).<br />
   Cafes:
      - Receive and manage orders via their portal.
      - Update order statuses for tracking purposes.

4. Admin Panel<br />
   Manage all users (Students/Staff, Cafes, Admins):
      - Add, edit, or remove accounts.<br />
      - Oversee menu items across all Mahallah Cafes.<br />
      - View and analyze order statistics to monitor performance.

5. Responsive and User-Friendly Design
   - Fully responsive interface for optimal usability on desktops, tablets, and mobile devices.
   - Intuitive navigation for all user roles.

6. Secure Payment Integration
   - Option to integrate secure online payment methods for seamless transactions.

### Entity Relationship Diagram (ERD)
![ERD WebApp drawio](https://github.com/user-attachments/assets/24a3c4ca-dcf4-4b7b-b5ee-c99bb33ca60a)

### Sequence Diagram
![mahallahOrderSeq drawio-2](https://github.com/user-attachments/assets/1a0c5f88-1c53-4744-9c58-81461c1c21e9)

### Project System Screenshot
1. Sign up Page<br />
Name: A text input field for the user's full name.
Email: A text input for the user's email address.
Password and Confirm Password: Two fields to ensure the user enters their password correctly. The page features a minimalist design with a "Register" button and a link for users who are already registered.
![photo_2025-01-16_01-15-37](https://github.com/user-attachments/assets/56870d42-32e5-4d98-8d8f-1a42e06c19ed)

3. Login Page<br />
Login form on the right, offering:
Google and Facebook login options.
Traditional login with email and password fields.
A "Sign Up" link for users without an account. The design effectively combines visual appeal with functionality.
![photo_2025-01-16_01-15-39](https://github.com/user-attachments/assets/87a630e3-02b0-44b4-805c-2799681f3d37)

4. Homepage
![photo_2025-01-16_01-15-42](https://github.com/user-attachments/assets/905ce3c6-2583-4dd4-9582-0e1682fc18d7)

5. Mahallah Page
![photo_2025-01-16_01-16-46](https://github.com/user-attachments/assets/146a5fd1-b932-4e45-92b1-efac64aaf590)

6. Menu Page
![photo_2025-01-16_01-15-40](https://github.com/user-attachments/assets/87f2787b-7f5a-4744-9d68-46d4374760a3)

7. Cart Page
![photo_2025-01-16_01-15-44](https://github.com/user-attachments/assets/134d1866-f24e-4a2d-a998-210ff3690565)
 <br/>Shows the items in the cart and the total to be paid during checkout

8. Order Details Page
![photo_2025-01-16_01-15-51](https://github.com/user-attachments/assets/be4fb804-73c4-49dc-b502-61b2d6ad6f98)
 <br/>Shows the details of the meals ordered and the pickup status

10. Transaction Page

11. User Profile Page<br />
Basic Details: Name, email, and user ID.
Additional Fields: Phone number, address, and password input fields.
An Edit button allows users to update their information. Navigation options for Menu, Cart, Order Updates, and Logout are present in the header, emphasizing user accessibility.
![photo_2025-01-16_01-15-53](https://github.com/user-attachments/assets/044cfa5f-dfdb-4362-8c53-f652b7d74cfa)

12. Contact Page
![photo_2025-01-16_01-15-32](https://github.com/user-attachments/assets/de2e44d0-01c7-4289-a4e2-031b8a74b1ba)
![photo_2025-01-16_01-15-34](https://github.com/user-attachments/assets/c41f55a8-7160-4daf-8186-8531c4924dae)







### Challenges faced while developing the web application

1. Synchronising with each teammate to get the same output on each device.
2. For the login functionality to work with the database and on the profile when the user makes any changes and saving the changes and updating the database.
3. ⁠Facing unexpected errors at the last minute.
4. Had a long time troubleshooting the error to run the project.
5. ⁠Managing and maintaining a growing codebase especially in layout of website.



### References
1. IIUM Mahallah. (2022, September 17). IIUM mahallah. IIUM Mahallah |. https://mahallah.iium.edu.my/
