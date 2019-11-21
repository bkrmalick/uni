A=[3,4,1,3,-1,5]

def smallest1(n):
    if(n==0):
        return A[0]
    else:
        return min(A[n], smallest(n-1))

def smallest(i,j):
    if(i==j):
        return A[i]
    elif(j-i==1):
        return min(A[i],A[j])
    else:
        k=int((i+j)/2)
        return min(smallest(i,k-1), smallest(k,j))




print(smallest(0,len(A)-1))
