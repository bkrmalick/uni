def twoEq(n):
    if(n<2):
        return False
    else:
        if(twoEq(n-1)):
            return True
        else:
            return findEq(n-1,A[n-1])

def findEq(n,x):
    if(n==0):
        return False
    else:
        if(findEq(n-1,x)):
            return True
        else:
            return x==A[n-1]

def prod2(n):
    if(n<2):
        return False
    else:
        if(prod2(n-1)):
            return True
        else:
            return findProd(n-1,A[n-1])

def findProd(n,x):
    if(n==0):
        return False
    else:
        if(findProd(n-1,x)):
            return True
        else:
            return (x*2==A[n-1] or x/2==A[n-1])


A=[1,1,3,4]

print(twoEq(len(A)))
print(prod2(len(A)))
