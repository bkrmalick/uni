#prompts the user to input an integer
#  @param prompt, the prompt thats shown on screen before input
#  @return returns an integer 
#  @author Abu Bakar Naseer
#


def readInteger(prompt):
    return int(input(prompt))

#prints two lines with n asteriks seperated by a space
#  @param n, the number of asteriks in each line
#  @return nothing 
#  @author Abu Bakar Naseer
#

def printBoundary(n):
    print(n*'*', n*'*')
#prints out the line formed by a string of n asterisks followed by space, an asterisk, n-2 spaces and a final asterisk
#  @param n, the number of asteriks in first line
#  @return nothing 
#  @author Abu Bakar Naseer
#

def printInterior(n):
    print(n*'*'+' *'+(n-2)*' '+'*')


def squares():
    n=readInteger('Please enter an integer greater than or equal to 2:')
    
    printBoundary(n)
    for i in range(n-2):
        printInterior(n)


    printBoundary(n)

    
squares()
