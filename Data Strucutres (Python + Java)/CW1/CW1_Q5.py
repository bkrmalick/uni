def not_smallest(A):
    if(A[0]>A[1]):
        return A[0]
    else:
        return A[1]

A=[1,2,3,4]

print(not_smallest(A))
