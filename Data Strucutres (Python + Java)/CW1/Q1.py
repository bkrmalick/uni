n=10
A= [1,2,3,4, 5, 6, 7, 9, 10]
count=0

for x in range(1,n+1):
    count=0
    for i in range(n-1):
        count=count+1
        if(x==A[i]):
            break
        elif(6==A[i]):
            print("Inner loop count:",count)
            print()
            
        elif(i==n-2):
            print("Inner loop count:",count)
            print("outer loop count:",x)
            print("Not Found:",x)
            print()
            
        

