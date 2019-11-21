A=[1,0,1]

def PlusOne(A):

    if A[len(A)-1]==0:
        A[len(A)-1]==1
        return

    val=0
    for i in range(len(A)):

        val=val+A[i]*(2**(len(A)-i-1))

    B=[]
    val=val+1

    for i in range(len(A)):
        if(2**(len(A)-i-1)<=val):
            val=val-(2**(len(A)-i-1))
            
            B.append(1)
        else:
            B.append(0)

    return B


PlusOne(A)
print(PlusOne(A))
