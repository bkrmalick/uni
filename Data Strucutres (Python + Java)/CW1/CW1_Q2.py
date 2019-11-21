
A=[1,2,3,4]
n=len(A)+1
count=0

for i in range(1,n+1):
    flag=False
    
    for j in range(0,n-1):
        count=count+1
        if(A[j]==i):
            flag=1
            break
        

    

print("total inner loop iterations:",count)
