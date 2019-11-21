def numOf(A,n,x):
    s=0
    e=n-1
    c=0
    
    while((e-s)>0):
        m=int((s+e)/2)

        if(A[m]==x ):
            break
        elif(A[m]>x):
            e=m-1
        else:
            s=m+1

    l=m
    while(l+1<=n-1 and A[l+1]==x):
        l=l+1

    s=m
    while(s-1>=0 and A[s-1]==x):
        s=s-1

    return l-s+1
    

    



A1=[1,1,1,1,1,1,2,3,4]
n1=len(A1)

print(numOf(A1,n1,1))
