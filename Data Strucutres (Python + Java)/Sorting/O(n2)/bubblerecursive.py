

def swap(A,i,j):
    tmp=A[i]
    A[i]=A[j]
    A[j]=tmp

def bubblesortR(A,n):

    if(n<=1):
        return True

    for i in range(0,n-1):
        if(A[i+1]<A[i]):
            swap(A,i,i+1)

    if(n>1):
        bubblesortR(A,n-1)
            

    


A=[3,2,1,5,8,6,9]

#insert(A,2)
bubblesortR(A,len(A))


for n in A:
    print(n,end=',')
