def CheckSub(m,n):
    if(m==0): #null Set is subset of all sets
        return True
    else:
        if(CheckSub(m-1,n) and Exists(B[m-1], n)):
            return True
        else:
            return False
        
        

def Exists(el, n):
    if(n==0):
        return False
    elif(A[n-1]==el):
        return True
    else:
        return Exists(el, n-1)
        

A=[4,2,1,3,5]
B=[4,3,5,1]

print(CheckSub(len(B), len(A)))



