def sum(i,j,A):
    if(i==j):
        return A[i]
    elif (j-i==1):
        return A[i] + A[j]
        
    else:
        k=int((i+j)/2)
        return (sum(i,k-1,A)+sum(k,j,A))



A=[3,1,2]

print(sum(0,2,A))
