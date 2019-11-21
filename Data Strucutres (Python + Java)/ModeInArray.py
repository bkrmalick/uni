

A=[1,1,1,1,2,2,3,3,3,4,5,5]

n=A[0]
count=1
max_count=1
for i in range(len(A)-1):
    
    if(A[i]==A[i+1]):
        count=count+1
    elif(count>max_count):
        max_count=count
        n=A[i]
        count=1


print("MODE: ",n)
print("Number of times appeared: ",max_count)

        
