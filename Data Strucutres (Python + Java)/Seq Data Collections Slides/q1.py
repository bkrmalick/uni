A=[1,2,3,4]

x=5

i=len(A)
A.append(50)

while(A[i]>x):
    A[i]=A[i-1]

    i=i-1

A[i+1]=x

print(A)

