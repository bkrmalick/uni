def sumCons(A,n):
    if(n==1):
        return 0
    else:
        return A[n-1]+A[n-2]+sumCons(A,n-1)

def sumConsR(A,s,e):
    if(e-s==0):
        return A[e]
    elif(e-s==1):
        return A[e]+A[s]
    else:
        m=int((s+e)/2)

        return sumConsR(A,s,m) + sumConsR(A,m,e) 

A=[3,4,5,6]

print(sumConsR(A,0,len(A)-1))
