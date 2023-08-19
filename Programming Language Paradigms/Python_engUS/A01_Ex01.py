#Program 01 - Python Language - Structured Programming
#Author: Juan Pablo - Date: 08/18/2023 - Language: Python
"""
Narrative Description: Create a program that reads two grades and calculates their average.
Considering that to pass, the student's average must be greater than or equal to 7.
"""

"""
Looping structure where the student's grade numbers will be requested.
If the entered value is not a number or is outside the range of 0 to 10, an error will be given, and the loop will restart
Until a valid value is entered, the loop will be repeated.
"""
def student_grade():
    
    def request_grades():
        # The looping idea is that when the program requests the two grades, we can verify if the grade is between 0 and 10
        # The try-except will ensure that when the user inputs something outside the scope of numbers, the program won't terminate and will continue normally, informing the user about the issue
        while True:
            try:
                grade1 = float(input("What was the student's first grade? "))

                if 0 <= grade1 <= 10: 
                    break
                else: 
                    print("Error! The inserted value must be between 0 and 10. Please enter a value within this range.")

            except ValueError:
                print("Error! The inserted value is not valid. Please enter a number.")
        
        while True:   
            try:
                grade2 = float(input("What was the student's second grade? "))

                if 0 <= grade2 <= 10: 
                    break
                else: 
                    print("Error! The inserted value must be between 0 and 10. Please enter a value within this range.")
            
            except ValueError:
                print("Error! The inserted value is not valid. Please enter a number.")
        
        return grade1, grade2

    # Calculate the average of the grades.
    def calculate_average(grade1, grade2):
        return (grade1 + grade2) / 2

    # If statement to determine whether the student passed or not.
    def verifier(average):
        if average >= 7.0: 
            return "Passed :D"
        else: 
            return "Failed :("

    grade_1, grade_2 = request_grades()
    average = calculate_average(grade_1, grade_2)
    result = verifier(average)
    
    print("The entered grades were {:.2f} and {:.2f}".format(grade_1, grade_2))
    print("The average value was: {:.2f}".format(average))
    print("The student's result is: {}".format(result))

if(__name__ == "__main__"):
    student_grade()
"""
Check to see if the file is being executed directly as a program or not.
When a Python file is executed directly as a program, the value of name is set to "main".
On the other hand, if the file is imported as a module in another file, the value of name will be the name of the module.
"""

    

