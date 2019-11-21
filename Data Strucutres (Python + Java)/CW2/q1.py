
def fastExp(a,n):
    if(n==1):
        return a
    elif(n%2==0):
        return fastExp(a*a,n/2)
    else:
        return a*fastExp(a*a,(n-1)/2)

print(fastExp(3,3))
