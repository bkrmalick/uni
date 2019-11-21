def GreatestIndex(A,i):
    if(i==0):
        return 0
    else:
        if(A[GreatestIndex(A,i-1)]>A[i]):
            return GreatestIndex(A,i-1)
        else:
            return i

def swap(A,i,j):
    tmp=A[i]
    A[i]=A[j]
    A[j]=tmp

def selectionSort(A):
    n=len(A)

    for i in range(n-1,-1,-1):
        swap(A,i,GreatestIndex(A,i))



def selectionSortR(A,n):

    if(n<=1):
        return True
    else:
        swap(A,n-1,GreatestIndex(A,n-1))
        selectionSortR(A,n-1)



A=[3,2,1,5]


selectionSortR(A,len(A))

for n in A:
    print(n,end=',')



