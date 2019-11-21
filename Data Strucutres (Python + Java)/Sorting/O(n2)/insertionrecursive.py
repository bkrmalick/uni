

def swap(A,i,j):
    tmp=A[i]
    A[i]=A[j]
    A[j]=tmp

def insertionSortR(A,n):

    if(n<=1):
        return True

    insertionSortR(A,n-1)

    j=n-1

    while(j>0 and A[j]<A[j-1]):
        swap(A,j,j-1)
        j=j-1



A=[3,2,1,5,8,6,9]

#insert(A,2)
insertionSortR(A,len(A))


for n in A:
    print(n,end=',')
