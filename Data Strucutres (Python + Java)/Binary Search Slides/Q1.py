def fmna(A,n,a):
    start=0
    end=n-2

    while(end-start)>=1:
        middle=int((start+end)/2)

        if(A[middle]==a+middle):
            start=middle+1
        else:
            end=middle

    if(start==n-2 and A[start]!=a+n-1):
        return (a+n-1)
    else:
        return (start+a)



a1=5
n1=5
A1=[5,6,8,9]

print(fmna(A1,n1,a1))
