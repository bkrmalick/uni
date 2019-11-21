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
		
		
def insertionSortR(A,n):

    if(n<=1):
        return True

    insertionSortR(A,n-1)

    j=n-1

    while(j>0 and A[j]<A[j-1]):
        swap(A,j,j-1)
        j=j-1
		
		
def GreatestIndex(A,i):
if(i==0):
	return 0
else:
	if(A[GreatestIndex(A,i-1)]>A[i]):
		return GreatestIndex(A,i-1)
	else:
		return i



def selectionSortR(A,n):

    if(n<=1):
        return True
    else:
        swap(A,n-1,GreatestIndex(A,n-1))
        selectionSortR(A,n-1)

	

