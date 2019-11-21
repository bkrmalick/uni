A=[1,2,2,3,3,3,3,4,4,4]

count=1
max_count=1
mode=A[0]
 


for i in range(len(A)-1):
    if(A[i]==A[i+1] ):
        count=count+1

    if(count>=max_count):
        mode=A[i]
        max_count=count
    
    if(A[i]!=A[i+1]):
        count=1
    			
print(mode ,"is the mode. ")
		
		
			
