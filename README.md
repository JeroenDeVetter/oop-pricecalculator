# Title: OOP Pricecalculator challenge Jeroen De Vetter

## Learning objectives
- Apply basic OOP principles
- Learn to use an MVC
- Import data using json

## The Mission
Make a price calculator with the following entities:
- Customer (Email)
- A customer group (Name)
- A product (product name, description, price)

In this directory you can find 3 JSON files, you can import the data from here.

A customer belongs to a customer group, which can also belong to another group (infinite).
You don't need to worry for infinite loops in this exercise.

Both a customer and a group can have a discount, which can be a percentage or a fixed amount. 

To calculate the price:
- For the customer group: In case of variable discounts look for highest discount of all the groups the user has.
- If some groups have fixed discounts, count them all up.
- Look which discount (fixed or variable) will give the customer the most value.
- Now look at the discount of the customer.
- First subtract fixed amounts, then percentages!
- A price can never be negative.

## Must-have features
- A dropdown where you can select a Product and a Customer and you get the basic information of the product + the price.
- A category page
- Use a [MVC pattern](https://en.wikipedia.org/wiki/Model%E2%80%93view%E2%80%93controller)
- Use separate objects for importing the entities with JSON, and for managing the entities.

## Nice to have features
- An actual login page for a customer
- A table where you can see in detail how the price is calculated
- The possibility to have different prices for different quantities (eg: 1 EUR per item for 1, 0.9 EUR per item for 100, ...)

### Discussion for friday
- Do you prefer procedural code or object oriented one? Why?
- What is the use of an MVC? Do you prefer another way of structuring your code?
