# Program 03 - Python Language - Structured Programming
# Author: Juan Pablo - Date: 08/18/2023 - Language: Python
"""
Narrative Description: Write a program to calculate the reduction in a smoker's lifespan.
Ask for the number of cigarettes smoked per day and how many years they have been smoking.
Assume that a smoker loses 10 minutes of life for every cigarette, and calculate how many days of life a smoker will lose.
Display the total in days.
"""
def cigarette_counter():

    def request_data():
        while True:
            try: 
                cigarettes_per_day = int(input("How many cigarettes do you smoke per day? "))
                break
            except ValueError:
                print("Error! Please enter a number.")
                
        while True:
            try: 
                years_smoking = int(input("For how many years have you been smoking? "))
                break
            except ValueError:
                print("Error! Please enter a number.")
        return cigarettes_per_day, years_smoking

    def minutes_reduction(cigarettes_per_day, years_smoking):
        return (cigarettes_per_day * 10) * (years_smoking * 365)
    
    def days_reduction(minutes_reduction):
        return minutes_reduction / (24 * 60)
    
    def years_reduction(days_reduction):
        return days_reduction / 365


    cigarettes_per_day, years_smoking = request_data()
    time_reduction_minutes = minutes_reduction(cigarettes_per_day, years_smoking)
    time_reduction_days = days_reduction(time_reduction_minutes)
    time_reduction_years = years_reduction(time_reduction_days)

    print("Reduced time in days: {:.2f} days" .format(time_reduction_days))
    print("Reduced time in years: {:.2f} years" .format(time_reduction_years))

if __name__ == "__main__":
    cigarette_counter()

"""
Check to see if the file is being executed directly as a program or not.
When a Python file is executed directly as a program, the value of __name__ is set to "__main__".
On the other hand, if the file is imported as a module in another file, the value of __name__ will be the name of the module.
"""