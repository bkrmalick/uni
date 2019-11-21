A=[1,0,0]

def PlusOne(A):

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



print(PlusOne(A))
