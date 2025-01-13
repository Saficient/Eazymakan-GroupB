# UIA Food and Beverage system management
Section: 01

Group: 04

Members:

KEHMESS EL MOCTAR   (2113559)

FARUQ MD OMAR       (2134787)

AHMAD KHALEEL       (1927975)

HASSAN DAMAD         (2128989)

MD TANVIR AHMMED SHOPNO (2219061)



# Introduction
In our fast-paced, technologically advancing world, where time is a valuable commodity, efficiency and convenience are paramount. Recognizing the necessity for improved access to food and beverages within the mahallah canteens and restaurants at the International Islamic University Malaysia (IIUM), we propose the development of a dedicated web platform, UIAfood. This project aims to enhance the user experience for both students and the university's dining facilities by creating a comprehensive and accessible food service solution.
UIAfood will be an integrated website designed to streamline the dining experience at IIUM. This platform will offer students detailed information about the various on-campus dining options, including menus, availability, promotions, and discounts, thereby making dining choices more affordable and convenient. Furthermore, UIAfood will extend its reach beyond campus, allowing users to connect with international restaurants for easy ordering and delivery. This feature ensures that students have diverse and accessible food options, enriching their culinary experience with choices from various cultures.
By consolidating all dining information in one accessible platform, UIAfood will simplify the process of discovering and enjoying a wide array of foods, both within and outside the university. This initiative not only enhances convenience but also fosters a more connected and culturally diverse dining community at IIUM.




# Objectives
Increased food accessibility and connecting the food and beverage stalls and also the mahallah canteens in one site for the students and others.
People can order food from the mahallah canteens and the other UIA food stalls also facilitate delivery systems which will allow them to track their order.
Users may check the availability of the food or shop before making an order from the site.     
Provide a user-friendly platform that is accessible to a wide range of users so that students and other people can give their desired foods from their place.
A low-cost, high-performance food and beverage service that may reduce the unavailability of food in UIA among the students and other people in various situations.
To assist administrators in keeping track of ordering records, locating them in the database, and managing order details as well as canceled orders.


					 				
# Features and functionalities					 							
User Interface and Experience

Intuitive Design:


The website will be designed to work seamlessly on various devices, including desktops, tablets, and smartphones.
Simple and clear menus and search functionalities will help users find what they need quickly.

Restaurant Listings:


Each restaurant will have extensive details available, including location, hours of operation, and contact information.
Menus will be displayed with descriptions, prices, and images of the dishes.

Food Availability Tracking:

Users will be able to see real-time updates on the availability of menu items to avoid ordering disappointments.
Notifications will alert users when popular items are back in stock.

## Ordering and Delivery System

Seamless Ordering Process:

Users can place orders through a straightforward and intuitive process.

Delivery Management:

The system will coordinate with delivery services to ensure timely and efficient food delivery. (remove?)
Users can track their orders in real time from preparation to delivery.

Payment Gateway Integration:

The platform will support various payment methods, including credit/debit cards, online banking, and mobile wallets.
Transactions will be secure, using encryption and fraud detection for safe payment processing.

Promotions and Discounts

Exclusive Deals:

The website will highlight ongoing promotions, discounts, and special deals from participating restaurants.

Reviews and Ratings

User Reviews:

Users can rate their experiences and provide feedback through a rating system.

## Administrative Tools

Order Management:

Restaurant owners will have access to a dashboard to manage orders, update menus, and track sales.
Administrators can view and manage all orders, including their processing, preparation, and delivery statuses.


# Entity-Relationship Diagram (ERD) for the UIAfood system:


## Entities:
![ERD WEB DEV](https://github.com/tanvironb/webdev/assets/170326332/7db17011-9c5c-46b4-b2de-2de0c9f03f91)

**User**: Represents users of the system, including students and potentially staff/faculty.

**Attributes**: User ID (primary key), Name, Email, Phone number
**Restaurant**: Represents restaurants participating in the UIAfood system, including both on-campus canteens and off-campus restaurants.


**Attributes:** Restaurant ID (primary key), Name, Location (text or foreign key to a Location table), Contact Information (phone, website)
**Dish:** Represents individual food items offered by restaurants.


**Attributes:** Dish ID (primary key), Name, Description, Price, Image (URL or file reference)
**Order:** Represents an order placed by a user.


**Attributes:** Order ID (primary key), User ID (foreign key to User table), Restaurant ID (foreign key to Restaurant table), Order Date, Order Time, Status (e.g., Pending, Preparing, Delivered, Cancelled)
**Order_Item:** Connects orders with dishes (many-to-many relationship).


### Attributes (primary key): Order ID (foreign key to Order table), Dish ID (foreign key to Dish table), Quantity
### Relationships:
One user can place many orders (one-to-many between User and Order).
One restaurant can have many dishes (one-to-many between Restaurant and Dish).
One order can include many dishes (many-to-many between Order and Dish, represented by the Order_Item table).

# Sequence Diagram

![WhatsApp Image 2024-05-21 at 10 53 09_796e49db](https://github.com/tanvironb/webdev/assets/170326332/8e0c1807-cbef-4e9a-af55-5e5db810e61e)


# Mock-Up Screenshot

## 1. Main Page
![Screenshot 2024-06-14 014152](https://github.com/TR-OMAR/UiaFoodService/assets/148281918/7bc62c16-b98f-48a0-8ed8-45f640b523cf)


## 2. Register Page
![Screenshot 2024-06-14 014346](https://github.com/TR-OMAR/UiaFoodService/assets/148281918/207e0d94-a524-4808-9dda-238f74992550)

## 3. Login Page
![Screenshot 2024-06-14 014505](https://github.com/TR-OMAR/UiaFoodService/assets/148281918/47247159-2025-4250-b16c-7212253f44de)

## 4. Menu Page
![Screenshot 2024-06-14 014549](https://github.com/TR-OMAR/UiaFoodService/assets/148281918/4895a17f-c3e0-4021-8d88-20f85ac2a43e)

![Screenshot 2024-06-14 014602](https://github.com/TR-OMAR/UiaFoodService/assets/148281918/a7fa862b-d351-46eb-a48f-fc8f1c58970c)

## 5. Restaurant Page
![Screenshot 2024-06-14 014720](https://github.com/TR-OMAR/UiaFoodService/assets/148281918/ad683140-66e3-435c-a212-b397e9f132e1)

## 6. Order Page
![Screenshot 2024-06-14 015022](https://github.com/TR-OMAR/UiaFoodService/assets/148281918/fa15d6e7-28d5-4ada-a62d-96fb5a2c4613)

## 7. OrderHistory Page
![Screenshot 2024-06-14 020644](https://github.com/TR-OMAR/UiaFoodService/assets/148281918/b081d6dd-ca36-4e1b-88b4-327be73df52b)

## 8. Confirmation Page
![WhatsApp Image 2024-06-12 at 20 37 23_ceed6c7e](https://github.com/TR-OMAR/UiaFoodService/assets/148281918/aabe8da9-7b22-473b-b253-49b364f41548)

## 9. Contact Page
![Screenshot 2024-06-14 014809](https://github.com/TR-OMAR/UiaFoodService/assets/148281918/9d126e41-4281-4f03-ae2f-b8b05faa951c)

![Screenshot 2024-06-14 014820](https://github.com/TR-OMAR/UiaFoodService/assets/148281918/0ae9dd38-ef6a-4935-9380-878f5a539ce4)

## 10. Feedback Page
![Screenshot 2024-06-14 014944](https://github.com/TR-OMAR/UiaFoodService/assets/148281918/a04f1488-dce7-42f4-9d09-55c9a44bc8f1)


# Challenges and Difficulties:
A web developing application for a food delivery system shows us several challenges, where each requires thoughtful consideration and strategic solutions. Designing a system that is flexible enough to accommodate various restaurants with their food is essential and connecting with a delivery process was also challenging. 
Some specific key points and explanation to that what we maily faced during the developing phase:
Team Collaboration and Communication

We have faced some issues, one of which is that some of us need help connecting their VS-code to GitHub. So because of that issue, everyone works on his part in his own laptop and after that we have to send it to the one who is connected to the github.

## Technical Debt 
We have faced difficulties refactoring or rewriting code without breaking existing functionality and the configuration because whenever we put our new features on our coding it’s breaking the line. 


## Integration and Interoperability
Integrating with third-party APIs, services, or libraries such as we have used the bleeze for making  the  authentication where it gives us some compatibility issues which need to ensure seamless communication between different components or systems.

## Performance and Optimization
We were having difficulties executing our pages data so we optimised code for performance, scalability, and resource usage which help us to Identify and address bugs, slow queries, or memory leaks.


## Debugging and Testing
The most harder part was the routers and how to connect the pages to each other.

## Error Handling and Exception Management
We have faced so many problems on this issue. Sometimes we even detect the root of the problem because it was very core. It was a challenge handling unexpected errors, exceptions, and edge cases and also implementing error handling mechanisms and logging but Alhamdulillah we managed to do it.


## Deployment and Environment Management
We also faced the problem of setting the environment where other ports and devices connected with the xampp and therefore the initial phase was giving us several difficulties managing the app and deploying the other features and connection.




# References
For website template https://bootstrapmade.com/demo/Yummy/ 
