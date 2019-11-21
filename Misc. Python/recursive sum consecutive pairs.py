A=[1,2,3,4,5]


def sumCons1(n):
    if(n==0):
        return A[0]*A[1]
    else:
        return (A[n]*A[n+1]+sumCons1(n-1))

def sumCons(i,j):
    if(i==j):

        return A[i]
    elif(j-i==1):
        return A[i]*A[j]
    else:
        k=int((i+j)/2)
        return(sumCons(i,k-1)+(sumCons(k,j)))



print(sumCons1(len(A)-2))
print(sumCons(0,len(A)-1))
