A=[1,2,3,4]

x=1

i=len(A)-1


while(A[i]!=x and i>0):
    i=i-1

while(i<len(A)-1):
    A[i]=A[i+1]
    i=i+1

A.pop()
print(A)

