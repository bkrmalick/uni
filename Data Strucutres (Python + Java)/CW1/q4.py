

def PlusOne(A):

    carry=1
    count= len(A)-1

    while(count>=0):        #Running the loop backwards, as binary numbers work from right to left
        if(A[count]!=carry): #XORing the carry and digit should give us result
            A[count]=1
            carry=0
        else:               #When both the carry and digit is one
            A[count]=0
            carry=1

        count=count-1

    return A




A=[1,1,1,1]

print(PlusOne(A))

        
        
    
