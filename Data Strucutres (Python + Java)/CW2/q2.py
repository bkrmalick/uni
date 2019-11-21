def fmn(A, n):
    start=0
    end=n-2

    while((end-start)>=1):
        middle=int((start+end)/2)

        if(A[middle]==1+middle):
            start=middle+1
        else:
            end=middle
            

    if(start==n-2 and A[start]!=n):
        return n
    else:
        return (start+1)





n=5
A=[2,3,4,5]

print(fmn(A,n))

