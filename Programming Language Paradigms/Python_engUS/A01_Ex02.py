# Program 02 - Python Language - Structured Programming
# Author: Juan Pablo - Date: 08/18/2023 - Language: Python
"""
Narrative Description: Create a program that requests the price of a product and the discount percentage.
Display the discount amount and the final price to pay.
"""
def discount_calculator():
    def request_values():

        while True:
            try:
                price = float(input("What is the product's price? "))
                break
            except ValueError:
                print("Error! Please enter a number.")

        while True:
            try:
                discount = float(input("What is the product's discount percentage? "))
                break
            except ValueError:
                print("Error! Please enter a number.")
        return price, discount

    def calculate_discount_amount(price, discount):
        return (price * discount) / 100

    def calculate_payment(price, discount_amount):
        return price - discount_amount
        
    price, discount = request_values()
    discount_amount = calculate_discount_amount(price, discount)
    amount_to_pay = calculate_payment(price, discount_amount)

    print("The product's price is ${:.2f}".format(price))
    print("The discount percentage is {:.2f}%".format(discount))
    print("The discount amount is ${:.2f}".format(discount_amount))
    if discount < 100:
        print("The final amount to pay is ${:.2f}".format(amount_to_pay))
    else:
        print("Oh, It looks like this product is on us :D")


if __name__ == "__main__":
    discount_calculator()

"""
Check to see if the file is being executed directly as a program or not.
When a Python file is executed directly as a program, the value of __name__ is set to "__main__".
On the other hand, if the file is imported as a module in another file, the value of __name__ will be the name of the module.
"""